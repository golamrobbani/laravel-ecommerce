<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Post;
Use App\Banner;
Use App\Page;

class BlogController extends Controller
{

    public function index(){
        
        $blogs = Post::where('status', 'PUBLISHED')->paginate(10);
        $banners = Banner::sidebar_banner();
        $populars = Post::where('status', 'PUBLISHED')->orderBy('visit_count', 'desc')->take(5)->get();
        $latests = Post::where('status', 'PUBLISHED')->orderBy('created_at', 'asc')->take(5)->get();
        return view("pages.blog", [ 'blogs'=>$blogs, 'banners'=>$banners , 'populars'=>$populars , 'latests'=>$latests ]);

    }
    
    public function details(Request $request){
        
        $blog = Post::where('status', 'PUBLISHED')->where('slug',$request->slug)->first();
        $banners = Banner::sidebar_banner();
        $populars = Post::where('status', 'PUBLISHED')->orderBy('visit_count', 'desc')->take(5)->get();
        $latests = Post::where('status', 'PUBLISHED')->orderBy('created_at', 'asc')->take(5)->get();

        return view("pages.blogDetails", [ 'blog'=>$blog, 'banners'=>$banners , 'populars'=>$populars , 'latests'=>$latests  ]);

    }
    
}
