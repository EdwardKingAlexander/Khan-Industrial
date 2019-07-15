<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\SubCategory;

class Category extends Model
{

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;



    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['category_name', 'description'];



    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'categories';


    /**
     * 
     * Redefining route key
     * 
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'category_name';
    }




    /**
     * Stating the categories table has a one to many relationship
     * with the subcategories table by referencing the model
     *
     * @var bool
     */


    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function subcategories()
    {
        return $this->hasMany(SubCategory::class);
    }
    public function ors()
    {
        return $this->hasMany(OrsNasco::class);
    }
}
