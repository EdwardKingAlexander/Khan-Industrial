<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;
use App\OrsNasco;

class BrandController extends Controller
{
    public function all_brands()
    {
        return view('brands.brands')->with('brands', Brand::all());
    }

    public function brand($id)
    {
        return view('brands.brand')
        ->with('brand', Brand::find($id));
    }
}
