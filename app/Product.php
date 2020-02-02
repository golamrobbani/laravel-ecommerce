<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
Use App\ProductCategory;
Use App\Review;

class Product extends Model
{


    public function categoryId()
    {
        return $this->belongsTo('App\ProductCategory');
    }


     /**
     * Get the transactions for the orders.
     */
    public function reviews_list()
    {
        return $this->hasMany(Review::class);
    }


    public static function single_product($request)
    {
        $slug = $request->route('slug');
        $product = Product::where('slug', $slug)->where('is_enabled', 'yes')->first();
        $product['reviews'] = Review::where('product_id', $product->id)->where('is_enabled', 'yes')->get();

        return $product;

    }

    public static function search_product($request)
    {
        $search = $request->q;
        return Product::where('name', 'LIKE', "%{$search}%")->where('is_enabled', 'yes')->paginate(15);
    }

    public static function hot_deals()
    {
       return $products = Product::where('is_hot', 'yes')->where('is_enabled', 'yes')->take(5)->get();
    }
    
    public static function special_offer()
    {
       return $products = Product::where('is_special', 'yes')->where('is_enabled', 'yes')->take(5)->get();
    }
    
    public static function special_deals()
    {
       return $products = Product::where('is_special_deal', 'yes')->where('is_enabled', 'yes')->take(5)->get();
    }
    
    public static function new_products()
    {
       return $products = Product::where('is_new', 'yes')->where('is_enabled', 'yes')->take(10)->get();
    }
    
    public static function home_sticks()
    {
        $home_stick_categorys = ProductCategory::where('stick_home', 'yes')->orderBy('menu_order', 'asc')->take(2)->get();

        foreach ($home_stick_categorys as $key=>$category) {
             $products = Product::where('category_id', $category->id)->where('is_home', 'yes')->where('is_enabled', 'yes')->orderBy('product_order', 'asc')->take(10)->get();
             $home_stick_categorys[$key]['products'] = $products;

             $submenu = ProductCategory::where('product_category_id', $category->id)->where('has_parent', 'yes')->orderBy('menu_order', 'asc')->get();
             $home_stick_categorys[$key]['subcat'] = $submenu;
         }
 
       return $home_stick_categorys;
    }
    
    public static function home_products()
    {
        $home_categorys = ProductCategory::where('is_home', 'yes')->orderBy('menu_order', 'asc')->get();

        foreach ($home_categorys as $key=>$category) {
             $products = Product::where('category_id', $category->id)->where('is_home', 'yes')->where('is_enabled', 'yes')->orderBy('product_order', 'asc')->take(10)->get();
             $home_categorys[$key]['products'] = $products;
         }
 
       return $home_categorys;
    }
    
    public static function category_product($request)
    {
        $slug = $request->route('slug');
        $brand = '';
        $order = '';
        $range = '';
        $page = 1;
        if ($request->has('brand')) {
             $brand = $request->input('brand');
        }
        if ($request->has('order')) {
             $order = $request->input('order');
        }
        if ($request->has('range')) {
             $range = $request->input('range');
        }
       
        $category = ProductCategory::where('slug', $slug)->first();
        if($category){
            if($brand != ''){
                $category['products'] = Product::where('category_id', $category->id)->where('is_enabled', 'yes')->where('brand', $brand)->orderBy('product_order', 'asc')->paginate(15);
            }elseif($order != ''){
                if($order == 'lowprice'){
                    $category['products'] = Product::where('category_id', $category->id)->where('is_enabled', 'yes')->orderBy('price', 'asc')->paginate(15);
                }elseif($order == 'highprice'){
                    $category['products'] = Product::where('category_id', $category->id)->where('is_enabled', 'yes')->orderBy('price', 'desc')->paginate(15);
                }else{
                    $category['products'] = Product::where('category_id', $category->id)->where('is_enabled', 'yes')->orderBy('product_order', 'asc')->paginate(15);
                }

            }elseif($range != ''){
                $range = explode(",", $range);
                $min = $range[0];
                $max = $range[1];

                $category['products'] = Product::where('category_id', $category->id)->where('is_enabled', 'yes')->whereBetween('price', [$min, $max])->orderBy('product_order', 'asc')->paginate(15);

            }else{
                $category['products'] = Product::where('category_id', $category->id)->where('is_enabled', 'yes')->orderBy('product_order', 'asc')->paginate(15);
            }
        }else{
            $category['products'] = [];
        }
        // if no category found
        return $category;
 
    }


    public static function realeated_products($id)
    {
        $products = Product::where('category_id', $id)->where('is_enabled', 'yes')->orderBy('product_order', 'asc')->take(5)->get();
       return $products;
    }
    
    
    public static function brands()
    {
       return  Product::select('brand')->distinct()->get();
    }
    
}
