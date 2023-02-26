<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
class PostController extends Controller
{
    function index(){
        $posts = Post::orderBy("id","desc")->get();
        $categories = Category::orderBy("id","desc")->get();
        return view("backend.post.index",compact(["posts","categories"]));
    }

    function create(){
        $categories = Category::orderBy("id","desc")->get();
        return view("backend.post.create",compact("categories"));
    }

    function store(Request $request){
        try{
            $image_path = null;
            if($request->hasFile('image')){
                $image_path = $request->file('image')->store('images/post','public');
            }

            Post::create([
                "title"=>$request->title,
                "slug"=>str_replace(" ","-",$request->title),
                "content"=>$request->content,
                "status"=>$request->status,
                "image"=>$image_path,
                "category_id"=>$request->category_id,
                'is_featured'=>$request->is_featured,
                "user_id"=>"1",
                "created_at"=>now(),
                "updated_at"=>now()
            ]);

        }catch(\Exception $e){
             return redirect()->back()->with("error",$e->getMessage());
        }

        return redirect()->route("post.index")->with("success","post Created Successfully");
    }

    function edit($slug){
        $post = Post::where("slug",$slug)->first();
        $categories = Category::orderBy("id","desc")->get();
        return view("backend.post.edit",compact(["post","categories"]));
    }

    function update(Request $request,$slug){
        try{
            $validated = $request->validate([
                'title' => 'required'
            ]);

            $image_path = null;
            if($request->hasFile('image')){
                $image_path = $request->file('image')->store('images/post','public');
            }

            Post::where("slug",$slug)->update([
                "title"=>$request->title,
                "slug"=>str_replace(" ","-",$request->title),
                "content"=>$request->content,
                "status"=>$request->status,
                "image"=>$image_path,
                "category_id"=>$request->category_id,
                'is_featured'=>$request->is_featured,
                "user_id"=>"1",
                "created_at"=>now(),
                "updated_at"=>now()
            ]);


        }catch(\Exception $e){
            return redirect()->back()->with("error",$e->getMessage());
        }

        return redirect()->route("post.index")->with("success","post Updated Successfully");
    }

    function delete($slug){
        try{
            Post::where("slug",$slug)->delete();
        }catch(\Exception $e){
            return redirect()->back()->with("error",$e->getMessage());
        }

        return redirect()->route("post.index")->with("success","post Deleted Successfully");
    }
}
