<?php

use App\VendorContact;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */



/////////////////////////Visitor routes//////////////////////////////////////p/////

/*
Visitor routes

 */

Route::get('/', 'HomeController@index');

// Route::get('/', function(){
//     return view('home');
// });




Route::get('/contact', function () {
    return view('contact');
});
Route::get('/careers', function () {
    return view('careers.index');
});
Route::get('/industries', function () {
    return view('industries');
});
Route::get('/returns', function () {
    return view('return_policy');
});
Route::get('/termsofaccess', function () {
    return view('terms_of_access');
});
Route::get('/termsofsale', function () {
    return view('terms_of_sale');
});
Route::get('/privacypolicy', function () {
    return view('privacy_policy');
});



////////////////////////end of visitor routes///////////////////////////////////////









///////////////////////////////////////start of cart routes ///////////////////////////////////



/*
Cart routes

 */
Route::get('/cart', function () {
    return view('store.cart');
});
Route::get('/checkout', function () {
    return view('store.checkout');
});

Route::post('/add-to-cart/{vendor_id}/{id}', 'CartController@addToCart');
Route::get('/guest-redirect', 'CartController@guestRedirect');



/////////////////////////////////end of cart routes///////////////////////////////////










/////////////////////////start of user routes//////////////////////////////////////////////////////

/*
User routes

 */
Route::get('/users', function () {
    return view('users.dashboard');
});

Route::get('/users/reports', function () {
    return view('users.invoices_reports');
});

Route::get('/users/profile', function () {
    return view('users.profile');
});

Route::get('/users/settings', function () {
    return view('users.settings');
});



/////////////////////////////////end of user routes ///////////////////////////////////////////////////////



////////////////////////////////Start of authorized routes ///////////////////////////////////////////////


/*
Authorizatized routes

 */
Auth::routes(['verify' => true]);

Route::get('/my_account/{id}', 'UserController@my_account');
Route::get('/my_account/{id}/current-orders', 'UserController@current_orders');
Route::get('/my_account/{id}/past-orders', 'UserController@past_orders');

Route::get('profile', function () {
    // Only verified users may enter...

})->middleware('verified');


/////////////////////////////////end of authorized routes///////////////////////////////////////////////////////



/////////////////////////////////////////////////Start of Admin routes ////////////////////////////////////
/*

Admin Routes

 */
Route::get('/admin', 'AdminController@index');

//Admin Login
Route::get('/admin/login', 'AdminController@index');
Route::post('/admin/login', 'AdminController@login');

//Admin Settings
Route::get('admin/settings', "AdminController@settings");

//Admin Product Categories

Route::match(['get', 'post'], 'admin/roles-managerment', 'AdminController@roles');
Route::match(['get', 'post'], '/admin/add-category', 'AdminController@add_category');
Route::match(['get', 'post'], '/admin/add-sub-category', 'AdminController@add_sub_category');

// Admin CSV Vendor Products Upload
Route::match(['get', 'post'], '/admin/add-product', 'AdminController@add_product');

//Admin Vendor Control
Route::match(['get', 'post'], '/admin/add-vendor', 'VendorController@addVendor');
Route::get('admin/vendors', 'VendorController@showAll');
Route::match(['get', 'post'], '/admin/add-vendor-contact', 'VendorController@addVendorContact');



//Admin Dashboard
Route::get('/admin/dashboard', [
    'middleware' => 'admin', function () {
        return view('admin.dashboard');
    }
]);

// Admin logout
Route::get('/logout', 'AdminController@logout')->middleware('admin');



/////////////////////////////////////End of Admin Routes///////////////////////////////////////////////////////////////////


///////////////////////////////Start of vendor routes ///////////////////////////////////////////////////////////
/*
Vendor routes

 */
Route::get('/vendors', function () {
    return view('vendors.landing');
});

Route::get('/vendors/register', function () {
    return view('vendors.register');
});

Route::get('/vendors/login', function () {
    return view('vendors.login');
});

Route::get('/vendors/dashboard', function () {
    return view('vendors.dashboard');
});
Route::get('/vendors/settings', function () {
    return view('vendors.settings');
});

/////////////////////////end of vendor routes ////////////////////////////////////////////////////////




/////////////////////////////////start of store routes /////////////////////////////////////
/*
store routes

 */

Route::get('products/{id}', 'ProductController@singleProduct');


Route::get('/services', function () {
    return view('services.main');
});

// Store Category Routes
Route::get('/category/{category_name}', 'ProductCategoryController@categories');
Route::get('/category/{category_name}/{subcategory_name}', 'ProductCategoryController@products');
Route::get('/product-search', 'ProductController@search');


/////////////////////////////////end of store routes /////////////////////////////////////










/////////////////////////////////start of community routes /////////////////////////////////////

/*
Community routes

 */
Route::get('/community', function () {
    return view('community.index');
});

/////////////////////////////////end of community routes /////////////////////////////////////








/////////////////////////////////start of services routes /////////////////////////////////////

/*
Services routes

 */

Route::get('/services', function () {
    return view('services.main');
});

/////////////////////////////////end of services routes /////////////////////////////////////







Route::get('/test', function () {


    // $contacts = App\Vendor::find(5)->hasManyVendorContacts;
    // passes the vendor_id into the find variable, returning the vendor from the 
    // Vendor model
    //  $vendors = App\VendorContact::find(5)->vendorContactHasOneVendorId;




    return view('test'); //->with('vendors', $vendors)->with('contacts', $contacts);
});
