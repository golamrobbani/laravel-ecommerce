<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Product;

class CategoryController extends Controller
{

    public function index(Request $request){
       
        $category = Product::category_product($request);
        $brands = Product::brands();
        return view("pages.category", [ 'category_items'=>$category, 'brands'=>$brands ]);

    }
    
}
