<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserInfoController extends Controller
{
    public function update_shipping_address(Request $request, $id)
    {
        $validation = $request->validate([
            'ship_to_name' => 'required|string',
            'business_name' => 'string',
            'ship_to_street' => 'required|string',
            'ship_to_street_2' => 'string',
            'bulding_apt' => 'string',
            'ship_to_city'  => 'required|string',
            'ship_to_state'  => 'required|string',
            'ship_to_zip'  => 'required|integer',
            'phone'  => 'required|integer',
            'fax'  => 'integer',
            'cell_phone'  => 'integer'
        ]);

        if($validation)
        {
            $ship_to = UserInfo::where('user_id' ,$id)->get();
            $ship_to->ship_to_name = $request->get('ship_to_name');
            $ship_to->business_name = $request->get('business_name');
            $ship_to->ship_to_street = $request->get('ship_to_street');
            $ship_to->ship_to_street_2 = $request->get('ship_to_street_2');
            $ship_to->bulding_apt = $request->get('bulding_apt');
            $ship_to->ship_to_city = $request->get('ship_to_city');
            $ship_to->ship_to_state = $request->get('ship_to_state');
            $ship_to->ship_to_zip = $request->get('ship_to_zip');
            $ship_to->phone = $request->get('phone');
            $ship_to->fax = $request->get('fax');
            $ship_to->cell_phone = $request->get('cell_phone');
            $ship_to->save();
    
            return redirect('/');
        }
       

    }

    public function update_billing_address(Request $request, $id)
    {
        $request->validate([
            'bill_to_name'  => 'required',
            'bill_to_street'  => 'required',
            'bill_to_city' => 'required',
            'bill_to_state'  => 'required',
            'bill_to_zip'  => 'required',
            'phone'  => 'required',
            'fax'  => 'integer',
            'cell_phone'  => 'required'
        ]);

    }

    public function change_billing()
    {
        return view('users.change_billing');
    }

}
