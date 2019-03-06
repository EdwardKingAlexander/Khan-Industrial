<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VendorContact extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'phone',
        'email',
        'fax',
        'ship_to_street_address',
        'ship_to_city',
        'ship_to_state',
        'ship_to_zip',
        'bill_to_address',
        'bill_to_city',
        'bill_to_state',
        'bill_to_zip',
    ];

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'terms_id' => 1,
    ];


    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;


    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'vendor_contacts';




    /****
     * 
     * 
     * 
     * 
     * defining the relationships
     * contacts have one vendor_id
     */

    public function vendor()
    {
        return $this->belongsTo(Vendor::class);

    }


}
