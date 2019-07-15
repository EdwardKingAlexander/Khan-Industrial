<?php

namespace App\Http\Controllers;

use App\Category;
use App\SubCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

  

    // When the categoroes method is called from this controller, the category name is passed
    // into the method. 
    public function categories($category_name)
    {
        // We then create a new variable to hold the matching category name that was passed into
        $categories = Category::where('category_name', $category_name)->firstOrFail();
        // return view('test')->with('categories' ,$categories);

        if($categories->subcategories != null)
        {
            $subcategories = $categories->subcategories;
           
            return view('categories.productCategories')
            ->with('categories', $categories)
            ->with('subcategories', $subcategories);
        }else{
            return view('categories.productCategories')
            ->with('categories', $categories);

        }
       
        
        
        // the method
        
        
        // We then pass all subcategories and the corresponding category into the view
       
    }


    // When the products method is called, we pass through the subcategory_name into the method
    public function products($category_name, $subcategory_name)
{

    // We then determine what subcategory we will pull products from
   $subcategory = SubCategory::where('subcategory_name', $subcategory_name)->firstOrFail();
    $orsproducts = $subcategory->ors;

    return view('product.product_list')->with('subcategory', $subcategory)
    ->with('orsproducts', $orsproducts);

}
}
