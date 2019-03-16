<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{


    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'carts';


    /***
    * 

    Relationships
    */

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
