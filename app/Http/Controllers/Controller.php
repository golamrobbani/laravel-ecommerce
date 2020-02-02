<?php

namespace App\Http\Controllers;

use View;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
Use App\Configuration;
Use App\ProductCategory;
Use App\Menu;
Use App\Brand;
Use App\Page;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function __construct() {

        $shop = Configuration::find(1);
        $categories = ProductCategory::orderBy('menu_order', 'asc')->get();
        $menus = Menu::site_menu();
        $brands = Brand::all();
        $customerPages = Page::where('status','ACTIVE')->where('position','Customer_Service')->orderBy('page_order', 'asc')->get();
        $corporationPages = Page::where('status','ACTIVE')->where('position','Corporation')->orderBy('page_order', 'asc')->get();
        $whychoosePages = Page::where('status','ACTIVE')->where('position','Why_Choose_Us')->orderBy('page_order', 'asc')->get();

        View::share ( 'shop', $shop );
        View::share ( 'categories', $categories );
        View::share ( 'brands', $brands );
        View::share ( 'menus', $menus );
        View::share ( 'customerPages', $customerPages );
        View::share ( 'corporationPages', $corporationPages );
        View::share ( 'whychoosePages', $whychoosePages );


      }

}
