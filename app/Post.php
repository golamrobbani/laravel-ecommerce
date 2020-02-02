<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;

class Post extends Model
{
    
    public static function home_posts()
    {
       return $posts = Post::where('status', 'PUBLISHED')->take(5)->get();
    }
 
    
}
