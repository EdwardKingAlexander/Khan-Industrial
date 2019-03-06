<?php

namespace App\Http\Controllers;

use App\Category;
use App\SubCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{

    // When the categoroes method is called from this controller, the category name is passed
    // into the method. 
    public function categories(Request $request, $category_name)
    {
        // We then create a new variable to hold the matching category name that was passed into
        // the method
        $subcategory = Category::where('category_name', $category_name)->first();

        // We then grab all subcategories using the category_id 
        $sub = SubCategory::all()->where('category_id', $subcategory->category_id);

        // We then pass all subcategories and the corresponding category into the view
        return view('categories.productCategories')->with('subcategory', $subcategory)->with('sub', $sub);
    }


    // When the products method is called, we pass through the subcategory_name into the method
    public function products(Request $request, $subcategory_name)
{

    // We then determine what subcategory we will pull products from
     $subcat = SubCategory::where('subcategory_name', $subcategory_name);


    // We then create a collection of all vendors and search through each vendor
    // and pull out all products that correspond to the subcategory_id
    $products = OrsNaco::all()->where('subcategories_id', $subcat->subcategories_id);

    return view('product.product_list')->with('products', $products);

}

}
