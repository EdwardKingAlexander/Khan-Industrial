<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function __construct()
    {
        // if the user is not logged in, they have no access to these routes
        return $this->middleware('auth');
    }

    public function my_account(Request $request)
    {
        // If the user id is the authenticated user's id, then allow them to see the
        // dashboard 
        if(Auth::user()->id == $request->id){
            $user = Auth::user()->where('id', $request->id);
            return view('users.dashboard')->with('user', $user);
        }else{
            // if the user id does not match the authenticated user id, then
            // they will be redirected home
            return redirect('/');
        }

        
    }

    public function current_orders(Request $request)
    {
        if(Auth::user()->id == $request->id){
            return view('users.current_orders');
        }else{
            // if the user id does not match the authenticated user id, then
            // they will be redirected home
            return redirect('/');
        }

    }

    public function past_orders(Request $request)
    {
        if(Auth::user()->id == $request->id){
            return view('users.past_orders');
        }else{
            // if the user id does not match the authenticated user id, then
            // they will be redirected home
            return redirect('/');
        }
    }

    public function shipping_info(Request $request)
    {
        if(Auth::user()->id == $request->id){
            return view('users.shipping_info');
        }else{
            // if the user id does not match the authenticated user id, then
            // they will be redirected home
            return redirect('/');
        }
    }

    public function billing_info(Request $request)
    {
        if(Auth::user()->id == $request->id){
            return view('users.billing_info');
        }else{
            // if the user id does not match the authenticated user id, then
            // they will be redirected home
            return redirect('/');
        }
    }

    public function invoices(Request $request)
    {
        if(Auth::user()->id == $request->id){
            return view('users.invoices');
        }else{
            // if the user id does not match the authenticated user id, then
            // they will be redirected home
            return redirect('/');
        }   
    }

    public function change_login(Request $request)
    {
        if(Auth::user()->id == $request->id){
            return view('users.change_login');
        }else{
            // if the user id does not match the authenticated user id, then
            // they will be redirected home
            return redirect('/');
        } 
    }
}
