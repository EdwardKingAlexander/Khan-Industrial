<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VendorInvoice extends Model
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
    protected $table = 'vendor_invoices';




    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }

    public function vendorPO()
    {
        return $this->belongsTo(VendorPurchaseOrder::class);
    }
}
