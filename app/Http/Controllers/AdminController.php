<?php


namespace App\Http\Controllers;

use App\OrsNasco;
use App\Category;
use App\SubCategory;
use CheckAdmin;
use Session;
use Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {
        // $this->middleware('admin');
    }


    public function index()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {

        //if the request is a post method 

        if ($request->isMethod('post')) {

            //then the data from the request is set as the $data variable
            $data = $request->input();

            //Then we run an authorization check to make sure the email and password given,
            //matches the email and password stored in the database
            if (Auth::attempt([
                'email' => $data['email'],
                'password' => $data['password'],
                'role_id' => '3'
            ])) {




                //if there is a match, we redirect to the main admin dashboard page

                //After we start an AdminSession
                //  Session::put('adminSession', $data['email']); 
                return redirect('/admin/dashboard');
            } else {
                //If it does NOT match, they are redirected back to the login page with a flash message
                return redirect('/admin/login')->with('flash_message_error', 'Admins ONLY');
            }
        }

        return view('admin.login');
    }

    public function settings()
    {
        return view('admin.settings');
    }







    public function logout()
    {
        Session::flush();
        return redirect('/admin/login')->with('flash_message_success', 'See Ya Later Aligator');
    }

    public function role()
    { }



    public function add_category(Request $request)
    {


        // checking to see if the data has been posted
        if ($request->isMethod('post')) {

            // if the data has been posted, the data will validate to ensure
            // category name and description are required
            $validated_data = $request->validate([
                'category_name' => 'required|min:3|max:255',
                'description' => 'required|min:3|max:255'
            ]);

            // Once validated, all POST data is saved to the data variable
            $data = $request->all();
            // We then instantiate a new category to reference in the database
            $category = new Category;
            // We then designate what data should be assigned to the columns in the database
            $category->category_name = $data['category_name'];
            $category->description = $data['description'];
            // We then save the data to the database
            $category->save();
        }

        // This collects all categories in the database
        $categories = Category::all();
        // This collects all subcategories in the database
        $subcategories = SubCategory::all();

        // if there are no subcategories, then we will load the page with only categories
        if ($subcategories == null) {
            return view('admin.categories.add_category')->with('categories', $categories);
        } else {

            // if there are subcategories, we will load the page with all categories and subcategories
            return view('admin.categories.add_category')->with('categories', $categories)->with('subcategories', $subcategories);
        }
    }


    public function add_sub_category(Request $request)
    {


        if ($request->isMethod('post')) {

            $request->validate([
                'subcategory_name' => 'required|min:3|max:255',
                'description' => 'required|min:3|max:255',
                'category_id' => 'required|integer',
            ]);

            $data = $request->all();
            $subcategory = new SubCategory;
            $subcategory->subcategory_name = $data['subcategory_name'];
            $subcategory->description = $data['description'];
            $subcategory->category_id = $data['category_id'];
            $subcategory->save();
        }

        $subcategories = SubCategory::all();
        $categories = Category::all();




        return view('admin.categories.add_subCategory')->with('subcategories', $subcategories)->with('categories', $categories);
    }


    public function add_product(Request $request)
    {




        // If the form has been submitted via the post method aka clicking the submit button
        if ($request->isMethod('post')) {

            switch ($request->vendor_id) {
                    // If the vendor is ORS Nasco
                case 1:
                    // First, we load the csv file and store it to a variable
                    $init_file = file('test_import.csv');
                    // We then, count the number of rows in the csv file and store it in a variable
                    $csv_rows = count($init_file);
                    // Open the CSV file with fopen(), read it with fgetcsv() and pass in the 
                    // variable declaring the number of rows from the CSV file
                    if (($handle = fopen(public_path() . 'test_import.csv', 'r')) !== false) {
                        // we then loop through the csv file and grab the data, row by row
                        while (($data = fgetcsv($handle, $csv_rows, ',')) !== false) {
                            // we then create a new OrsNasco object and assign the data to the row
                            // by using the array positioning format       
                            $ors_nasco = new OrsNasco;
                            $ors_nasco->ors_products_id = $data[0];
                            $ors_nasco->vendor_id = $data[1];
                            $ors_nasco->category_id = $data[2];
                            $ors_nasco->subcategories_id = $data[3];
                            $ors_nasco->brands_id = $data[4];
                            $ors_nasco->part_number = $data[5];
                            $ors_nasco->prefix = $data[6];
                            $ors_nasco->item_description = $data[7];
                            $ors_nasco->minimum_order_quantity = $data[8];
                            $ors_nasco->minimum_selling_quantity = $data[9];
                            $ors_nasco->standard_unit_measure = $data[10];
                            $ors_nasco->std_package_quantity = $data[11];
                            $ors_nasco->price_unit = $data[12];
                            $ors_nasco->list_price = $data[13];
                            $ors_nasco->your_ors_nasco_cost = $data[14];
                            $ors_nasco->your_promo_cost = $data[15];
                            $ors_nasco->promo_start_date = $data[16];
                            $ors_nasco->promo_end_date = $data[17];
                            $ors_nasco->item_weight = $data[18];
                            $ors_nasco->item_height = $data[19];
                            $ors_nasco->item_width = $data[20];
                            $ors_nasco->item_length = $data[21];
                            $ors_nasco->item_cube = $data[22];
                            $ors_nasco->upc_code = $data[23];
                            $ors_nasco->unspsc_code = $data[24];
                            $ors_nasco->hazmat_Item = $data[25];
                            $ors_nasco->orm_item = $data[26];
                            $ors_nasco->ansi_stock_uom_code = $data[27];
                            $ors_nasco->ansi_pricing_or_selling_uom_code = $data[28];
                            $ors_nasco->ansi_std_pkg_uom_code = $data[29];
                            $ors_nasco->country_of_origin = $data[30];
                            $ors_nasco->Stocked_Birmingham_AL = $data[31];
                            $ors_nasco->Stocked_Chicago_IL = $data[32];
                            $ors_nasco->Stocked_Charlotte_NC = $data[33];
                            $ors_nasco->Stocked_Cincinnati_OH = $data[34];
                            $ors_nasco->Stocked_Dallas_TX = $data[35];
                            $ors_nasco->Stocked_Denver_CO = $data[36];
                            $ors_nasco->Stocked_Harrisburg_PA = $data[37];
                            $ors_nasco->Stocked_Houston_TX = $data[38];
                            $ors_nasco->Stocked_St_Paul_MN = $data[39];
                            $ors_nasco->Stocked_Muskogee_OK = $data[40];
                            $ors_nasco->Stocked_Orlando_FL = $data[41];
                            $ors_nasco->Stocked_Portland_OR = $data[42];
                            $ors_nasco->Stocked_Bakersfield_CA = $data[43];
                            $ors_nasco->image_url = $data[44];

                            // We then validate/modify the datatypes to match the database

                            $validated_data = $request->validate([
                                'vendor_id' => 'required|integer|min:1',
                                'category_id' => 'required|integer',
                                'subcategories_id' => 'required|integer|min:1',
                                'brands_id' => 'required|integer|min:1',
                                'part_number' => 'required|min:1',
                                'prefix' => 'required|min:1|max:3',
                                'item_description' => 'required|min:3|max:255',
                                'minimum_order_quantity' => 'required|integer|min:1',
                                'minimum_selling_quantity' => 'required|integer|min:1',
                                'standard_unit_measure' => 'required|min:1',
                                'std_package_quantity' => 'required|integer',
                                'price_unit' => 'required|string',
                                'list_price' => 'required|numeric',
                                'your_ors_nasco_cost' => 'required|numeric',
                                'your_promo_cost' => 'nullable|numeric',
                                'promo_start_date' => 'nullable|date',
                                'promo_end_date' => 'nullable|date',
                                'item_weight' => 'required|numeric',
                                'item_height' => 'required|numeric',
                                'item_width' => 'required|numeric',
                                'item_length' => 'required|numeric',
                                'item_cube' => 'nullable|numeric',
                                'upc_code' => 'required|integer',
                                'unspsc_code' => 'required|',
                                'hazmat_Item' => 'nullable',
                                'orm_item' => 'required|',
                                'ansi_stock_uom_code' => 'required|',
                                'ansi_pricing_or_selling_uom_code' => 'required|',
                                'ansi_std_pkg_uom_code' => 'required|',
                                'country_of_origin' => 'nullable|string',
                                'Stocked_Birmingham_AL' => 'required|string|max:1',
                                'Stocked_Chicago_IL' => 'required|string|max:1',
                                'Stocked_Charlotte_NC' => 'required|string|max:1',
                                'Stocked_Cincinnati_OH' => 'required|string|max:1',
                                'Stocked_Dallas_TX' => 'required|string|max:1',
                                'Stocked_Denver_CO' => 'required|string|max:1',
                                'Stocked_Harrisburg_PA' => 'required|string|max:1',
                                'Stocked_Houston_TX' => 'required|string|max:1',
                                'Stocked_St_Paul_MN' => 'required|string|max:1',
                                'Stocked_Muskogee_OK' => 'required|string|max:1',
                                'Stocked_Orlando_FL' => 'required|string|max:1',
                                'Stocked_Portland_OR' => 'required|string|max:1',
                                'Stocked_Bakersfield_CA' => 'required|string|max:1',
                                'image_url' => 'required|string'
                            ]);





                            // we then save the record/row
                            $ors_nasco->save();
                        }
                        fclose($handle);
                    }
            }
        }

        return view('admin.add-product');
    }
}
