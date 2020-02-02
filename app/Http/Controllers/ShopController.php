<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Configuration;
Use App\ProductCategory;
Use App\Page;


class ShopController extends Controller
{
    public static function index(){
        $shop = Configuration::find(1);
        return response()->json($shop, 200);
    }

    public static function menu(){

        $top_menus = ProductCategory::where('is_mainmenu', 'yes')->orderBy('menu_order', 'asc')->get();

        foreach ($top_menus as $key=>$menu) {
           $submenu = ProductCategory::where('product_category_id', $menu->id)->where('has_parent', 'yes')->orderBy('menu_order', 'asc')->get();
            $top_menus[$key]['submenus'] = $submenu;
        }

        $side_menus = ProductCategory::where('is_sidemenu', 'yes')->orderBy('menu_order', 'asc')->get();

        foreach ($side_menus as $key=>$menu) {
             $submenu = ProductCategory::where('product_category_id', $menu->id)->where('has_parent', 'yes')->orderBy('menu_order', 'asc')->get();
            $side_menus[$key]['submenus'] = $submenu;
        }

        $menus = array();

        $menus['main_menus'] = $top_menus;
        $menus['side_menus'] = $side_menus;

        return response()->json($menus, 200);
    }

    public function page(Request $request){
       
        $page = Page::where('slug', $request->slug)->first(); 
        return view("pages.page", [ 'page'=>$page ]);

    }
    
    public function contact(){
       
        return view("pages.contact");

    }


    public function gr(){
        echo "golam robbani";
    }
    

}
