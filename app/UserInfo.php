<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'ship_to_name',
        'ship_to_street',
        'ship_to_city',
        'ship_to_state',
        'ship_to_zip',
        'bill_to_name',
        'bill_to_street',
        'bill_to_city',
        'bill_to_state',
        'bill_to_zip',
        'phone',
        'fax',
        'cell_phone',

    ];



    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user_info';




    /****
     * 
     * 
     * 
     * 
     * defining the relationships
     * contacts have one vendor_id
     */

    public function userInfo()
    {
        return $this->belongsTo(User::class);

    }


}
