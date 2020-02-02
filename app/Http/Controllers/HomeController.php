<?php

namespace App\Http\Controllers;

use App\Mail\ContactSubmit;
use App\Subscriber;
use App\Review;
use App\User;
use Illuminate\Http\Request;
Use App\Configuration;
Use App\ProductCategory;
Use App\Menu;
Use App\Slider;
Use App\Brand;
Use App\Product;
Use App\Banner;
Use App\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index(){ 
        $shop = Configuration::find(1);
        $categories = ProductCategory::orderBy('menu_order', 'asc')->get();
        $menus = Menu::site_menu();
        $sliders = Slider::where('is_enabled', 'yes')->get();
        $brands = Brand::all();
        $hot_deals = Product::hot_deals();
        $special_offers = Product::special_offer();
        $special_deals = Product::special_deals();
        $new_products = Product::new_products();
        $home_products = Product::home_products();
        $home_sticks = Product::home_sticks();
        $posts = Post::home_posts();
        $home_top_banners = Banner::home_banner_top();
        $home_middle_banners = Banner::home_banner_middle();

        return view("pages.home", [ 'shop'=>$shop, 'posts'=>$posts, 'home_products'=>$home_products, 'home_sticks'=>$home_sticks, 'home_middle_banners'=>$home_middle_banners, 'home_top_banners'=>$home_top_banners, 'new_products'=>$new_products, 'special_deals'=>$special_deals,  'special_offers'=>$special_offers,  'hot_deals'=>$hot_deals, 'brands'=>$brands, 'sliders'=>$sliders, 'categories'=>$categories, 'menus'=>$menus]);
    }
    
        public function cart(){ 
             return view("pages.cart");
        }
        
        public function wishlist(){ 
             return view("pages.wishlist");
        }
        
        public function checkout(){ 
             return view("pages.checkout");
        }

    public function submit_contact(Request $request){

        $data = [
            'msg_name'  => $request->msg_name,
            'email' => $request->email,
            'msg_title' => $request->msg_title,
            'comments' => $request->comments,
        ];

        $valid =  Validator::make($data, [
            'msg_name' => 'required|string',
            'email' => 'required|string',
            'comments' => 'required|string',
            'msg_title' => 'required|string',
        ]);

        if($valid){
            $shop = Configuration::find(1);
            Mail::to($shop->shop_email)->send(new ContactSubmit($data));
            return redirect('/contact')->withErrors(['Your message submitted successfully']);
        }else{
            return redirect('/contact')->withErrors(['Message submission failed! Please try again.']);
        }


    }

    public function subscribe(Request $request){

        $data = [
            'email' => $request->email,
        ];

        $valid =  Validator::make($data, [
            'email' => 'required|string|email'
        ]);

        if($valid){
            $find = Subscriber::where('sub_email', $request->email)->first();
            if($find){
                return response()->json(['status' => 'success' ,'msg' => 'Congratulations! You already subscribed to us.'], 200);
            }else{
                $sub = new Subscriber;
                $sub->sub_email = $request->email;
                $sub->save();

                return response()->json(['status' => 'success' ,'msg' => 'Congratulations! Your subscribe is completed.'], 200);
            }

        }else{
            return response()->json(['status' => 'error', 'msg' => 'Enter valid email address to subscribe!'], 200);
        }


    }



    public function review(Request $request){

        $data = [
            'name' => $request->name,
            'price' => $request->price,
            'quality' => $request->quality,
            'value' => $request->value,
            'review' => $request->review,
            'summery' => $request->summery,
            'product_id' => $request->product_id,
        ];

        $valid =  Validator::make($data, [
            'name' => 'required|string',
            'price' => 'required|string',
            'quality' => 'required|string',
            'value' => 'required|string',
            'review' => 'required|string',
            'summery' => 'required|string',
            'product_id' => 'required|string',
        ]);

        if($valid){
            
                $review = new Review;
                $review->name = $request->name;
                $review->price = $request->price;
                $review->quality = $request->quality;
                $review->value = $request->value;
                $review->review_text = $request->review;
                $review->summery = $request->summery;
                $review->product_id = $request->product_id;
                $review->is_enabled = 'no';
                $review->save();

                return response()->json(['status' => 'success' ,'msg' => 'Thanks for submit your review.'], 200);

        }else{
            return response()->json(['status' => 'error', 'msg' => 'Enter valid data to submit review'], 200);
        }


    }



}
