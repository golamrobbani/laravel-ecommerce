<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Menu extends Model
{


    public static function site_menu()
    {
       
        $top_menus = ProductCategory::where('is_mainmenu', 'yes')->orderBy('menu_order', 'asc')->get();

        foreach ($top_menus as $key=>$menu) {

            if($menu->display_item == 'yes'){

                $submenu = Product::select('name','slug')->where('category_id', $menu->id)->where('is_enabled', 'yes')->orderBy('product_order', 'asc')->take(10)->get();

            }else{
                $submenu = ProductCategory::where('product_category_id', $menu->id)->where('has_parent', 'yes')->orderBy('menu_order', 'asc')->get();
            }

            $top_menus[$key]['submenus'] = $submenu;
        }

        $side_menus = ProductCategory::where('is_sidemenu', 'yes')->orderBy('menu_order', 'asc')->get();

        foreach ($side_menus as $key=>$menu) {
             if($menu->display_item == 'yes'){

                 $submenu = Product::select('name','slug')->where('category_id', $menu->id)->where('is_enabled', 'yes')->orderBy('product_order', 'asc')->take(10)->get();

             }else{

                 $submenu = ProductCategory::where('product_category_id', $menu->id)->where('has_parent', 'yes')->orderBy('menu_order', 'asc')->get();

             }
             $side_menus[$key]['submenus'] = $submenu;
        }

        $menus = array();

        $menus['main_menus'] = $top_menus;
        $menus['side_menus'] = $side_menus;

        return $menus;
    }
    
}
