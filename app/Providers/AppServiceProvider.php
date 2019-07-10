<?php

namespace App\Providers;


use App\Category;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use View;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
      
        view()->composer(['partials.modules.product_category_section','categories.productCategories'], function($view){
           
            $category = Category::all();
            
               // $subcat = Category::find(1)->subcategories;
             
           
            $view->with('category', $category);//->with('subcat', $subcat);
        });




    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
