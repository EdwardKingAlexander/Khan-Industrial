<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function __construct()
    {
        // if the user is not logged in, they have no access to these routes
        return $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // the index will show the current orders page
        // If the user id is the authenticated user's id, then allow them to see the
        // dashboard 
        if(Auth::user()->id == $request->id){
            $user = Auth::user()->where('id', $request->id);
            return view('users.current_orders')->with('user', $user);
        }else{
            // if the user id does not match the authenticated user id, then
            // they will be redirected home
            return redirect('/');
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        if(Auth::user()->id == $request->id){
            return view('users.current_orders');
        }else{
            // if the user id does not match the authenticated user id, then
            // they will be redirected home
            return redirect('/');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
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
}
