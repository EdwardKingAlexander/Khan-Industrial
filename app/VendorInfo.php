<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VendorInfo extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'company_name',
        'fax_for_ordering',
        'fax_for_ordering',
        'fax_for_accounts_payable',
        'fax_for_accounts_recievables',
        'phone_for_ordering',
        'phone_for_accounts_payable',
        'phone_for_accounts_recievables',
        'email_for_ordering',
        'email_for_accounts_payable',
        'email_for_accounts_receivables',
        'bill_to_name',
        'bill_to_street',
        'bill_to_city',
        'bill_to_state',
        'bill_to_zip',

    ];


    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'vendor_info';


    /****
     * 
     * 
     * 
     * 
     * defining the relationships
     * contacts have one vendor_id
     */

    public function vendor_info()
    {
        return $this->belongsTo(Vendor::class);

    }







}
