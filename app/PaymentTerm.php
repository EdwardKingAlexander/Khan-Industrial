<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentTerm extends Model
{

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['terms'];



    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'payment_terms';


    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'terms' => "credit card",
    ];

}
