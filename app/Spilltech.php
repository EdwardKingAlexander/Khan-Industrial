<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spilltech extends Model
{

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];


    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'spilltechs';


    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'vendor_id' => 2
    ];

}
