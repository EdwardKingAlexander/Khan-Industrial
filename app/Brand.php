<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{



    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'brand_name', 'prefix', 'vendor_id'
    ];



    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'brands';




    /****
     * 
     * Defining the relationships 
     * brands have many products
     */

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function vendors()
    {
        return $this->hasMany(Vendor::class);
    }



}
