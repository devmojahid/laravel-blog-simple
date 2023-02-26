<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class HomeController extends Controller
{
    public function index(){
        $postcarosalarea = Post::orderBy('id', 'DESC')->get();
        $sliderposts = Post::orderBy('id', 'DESC')->get();
        $featured = Post::where('is_featured',1)->orderBy('id', 'DESC')->get();
        $categories = Category::orderBy('id', 'DESC')->take(10)->get();
        $lettestposts = Post::orderBy('id', 'DESC')->take(10)->get();
        return view("home",compact(['postcarosalarea','sliderposts','featured','categories','lettestposts']));
    }

    public function post(){
        return view("blogs");
    }

    public function singlePost(){
        return view("single-blog");
    }

    public function singleCategory(){
        return view("single-category");
    }
}
