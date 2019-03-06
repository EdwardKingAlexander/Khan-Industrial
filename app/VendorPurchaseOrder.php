<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VendorPurchaseOrder extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [''];


    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'vendor_purchase_orders';



    public function hasOneVendor()
    {
        return $this->belongsTo(VendorPurchaseOrder::class);
    }

}
