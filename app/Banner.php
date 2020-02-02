<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Banner;

class Banner extends Model
{
    
    public static function home_banner_top()
    {
       return $banner = Banner::where('position', 'top')->where('status', 'yes')->take(3)->get();
    }
     
    public static function home_banner_middle()
    {
       return $banner = Banner::where('position', 'middle')->where('status', 'yes')->take(2)->get();
    }
    
    public static function sidebar_banner()
    {
       return $banner = Banner::where('position', 'sidebar')->where('status', 'yes')->take(2)->get();
    }
    
}
