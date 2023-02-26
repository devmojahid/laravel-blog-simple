<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function allPost()
    {
        $posts = Post::paginate(10);
        return view('blogs',compact('posts'));
    }

    public function singlePost($slug)
    {
        $post = Post::where('slug',$slug)->first();
        $ourlettestblog = Post::orderBy('id','desc')->limit(3)->get();
        return view('single-blog',compact(['post','ourlettestblog']));
    }


}
