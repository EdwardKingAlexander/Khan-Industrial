<?php

namespace App\Http\Controllers;

use App\OrsNasco;
use App\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function singleProduct($id)
    {
        $products = OrsNasco::where('ors_products_id', $id)->get();
        


        return view('product.singleProduct')->with('products', $products);
    }

    public function search()
    {
        return view('product.product_search');
    }

}
