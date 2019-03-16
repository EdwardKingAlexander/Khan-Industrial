<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class CartController extends Controller
{

    public function viewCart()
    {
        // load all data from database, based on user ID
        // return the view with the data passed in

    }
    public function addToCart(Request $request)
    {
        // sanitize data to ensure no tomfoolery
        // lookup product in the database using the vendor id, then the product id
        // store the request data in the cart table
        // return the cart view with the data passed in

        return view('store.cart');
    }


    public function removeFromCart(Request $request)
    {
        // using ajax
        // pass the data
        // sanitize the data
        // perform database query to delete row if quantity is less than 1

    }



    public function updateCart()
    {
        // using ajax
        // pass the data
        // sanitize the data
        // perform database query to update or delete row if quantity is less than 1
    }

    public function saveCartAsTemplate()
    {
        // pass the data
        // sanitize  the data
        // store the data in the database
    }

    public function loadCartTemplate()
    {
        // lookup the id in the database
        // load  the data
        // return the cart view with the data passed
    }

    public function guestRedirect()
    {
        return view('store.guestRedirect');
    }
}
