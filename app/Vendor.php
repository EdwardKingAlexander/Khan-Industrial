<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{



    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'vendor_name'
    ];



    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'vendors';


    /***
     * 
     * Defining the relationships
     * 
     * the vendor has many products
     */


    public function ors()
    {
        return $this->hasMany(OrsNasco::class);
    }

    public function spilltech()
    {
        return $this->hasMany(Spilltech::class);
    }

    /***
    Vendor has many brands
     ****/

    public function brands()
    {
        return $this->hasMany(Brand::class);
    }


    /*****
     * 
     *the vendor has one contact info 
     * 
     */
    public function vendor_info()
    {
        return $this->hasOne(VendorInfo::class);
    }



    /***
     * 
     * The vendor has many vendor_contacts
     */

     // this will link to a look up list, allowing vendors to have more than one contact
    public function contacts()
    {
        return $this->hasMany(VendorContact::class);

    }



    /*****
     * 
     * 
     * vendor has many VendorPurchaseOrders
     */

    public function purchaseOrders()
    {
        return $this->hasMany(VendorPurchaseOrder::class);

    }

    /****
     * 
     * 
     * vendor has many vendor returns aka RMAs
     */

    public function vendorReturns()
    {
        return $this->hasMany(VendorReturn::class);
    }


    /****
     * 
     * 
     * 
     * vendor has many invoices
     */

    public function vendorInvoices()
    {
        return $this->hasMany(VendorInvoice::class);
    }

    /*******
     * 
     * 
     * vendor has many vendor reports
     */

    public function vendorReports()
    {
        return $this->hasMany(VendorReport::class);
    }


}
