<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrsNasco extends Model
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
    protected $table = 'ors_products';


    /**
     * 
     * Disabling the timestamps
     */
    public $timestamps = false;



    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }


    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function brands()
    {
        return $this->belongsTo(Brands::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class);
    }




}
