<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Product;
Use App\Banner;

class ProductController extends Controller
{

    public function index(Request $request){
       
        $product = Product::single_product($request);
        $hot_deals = Product::hot_deals();
        $realateds = Product::realeated_products($product->category_id);
        $sidebar_banners = Banner::sidebar_banner();
        return view("pages.product", [ 'product'=>$product,  'realateds'=>$realateds, 'sidebar_banners'=>$sidebar_banners, 'hot_deals'=>$hot_deals ]);

    }

    public function search(Request $request){
        $products = Product::search_product($request);
        $brands = Product::brands();
        return view("pages.search", [ 'products'=>$products, 'brands'=>$brands ]);
    }

}
