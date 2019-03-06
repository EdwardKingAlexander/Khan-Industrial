<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart()
    {
       // $products = Product::all();

        return view('store.cart');//->with('products', $products);
    }

    public function guestRedirect()
    {
        return view('store.guestRedirect');
    }
}
