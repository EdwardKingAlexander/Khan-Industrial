<?php

namespace App\Http\Controllers;

use App\VendorContact;
use Illuminate\Http\Request;
use App\Vendor;

class VendorController extends Controller
{

    public function addVendor(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $vendor = new Vendor;
            $vendor->name = $data['name'];
            $vendor->save();
        }


        // this returns the view
        return view('admin.vendors.add_vendor');
    }


    public function showAll()
    {

       // $vendors = Vendor::all();
        //return view('admin.vendors.index')->with('vendors', $vendors);
    }

    public function addVendorContact()
    {
       

        // this returns the view
        return view('admin.vendors.add_vendor_contact');

    }

    public function vendorContacts(VendorContact $vendorContact){

    return $this->hasMany(VendorContact::class, 'vendor_id', 'vendor_contact_id');

    }
}
