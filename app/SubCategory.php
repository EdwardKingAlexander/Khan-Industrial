<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
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
    protected $fillable = ['subcategory_name', 'description'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'subcategories';

     /**
     * 
     * Redefining route key
     * 
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'subcategory_name';
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function ors()
    {
        return $this->hasMany(OrsNasco::class,'subcategory_id');
    }


}
