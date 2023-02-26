<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    function index(){
        $categories = Category::orderBy("id","desc")->get();
        return view("backend.category.index",compact("categories"));
    }

    function create(){
        return view("backend.category.create");
    }

    function store(Request $request){
            try{
                $validated = $request->validate([
                    'title' => 'required'
                ]);

                $image_path = null;
                if($request->hasFile('image')){
                    $image_path = $request->file('image')->store('images/products','public');
                }

                Category::create([
                    "title"=>$request->title,
                    "slug"=>str_replace(" ","-",$request->title),
                    "description"=>$request->description,
                    "status"=>$request->status,
                    "image"=>$image_path,
                    "created_at"=>now(),
                    "updated_at"=>now()
                ]);

            }catch(\Exception $e){
                return redirect()->back()->with("error",$e->getMessage());
            }

        return redirect()->route("category.index")->with("success","Category Created Successfully");
    }

    function edit($slug){
        $category = Category::where("slug",$slug)->first();
        return view("backend.category.edit",compact("category"));
    }

    function update(Request $request,$slug){
        try{
            $validated = $request->validate([
                'title' => 'required'
            ]);

            $image_path = null;
            if($request->hasFile('image')){
                $image_path = $request->file('image')->store('images/products','public');
            }

            Category::where("slug",$slug)->update([
                "title"=>$request->title,
                "slug"=>str_replace(" ","-",$request->title),
                "description"=>$request->description,
                "status"=>$request->status,
                "image"=>$image_path,
                "updated_at"=>now()
            ]);

        }catch(\Exception $e){
            return redirect()->back()->with("error",$e->getMessage());
        }

        return redirect()->route("category.index")->with("success","Category Updated Successfully");
    }

    function delete($slug){
        try{
            Category::where("slug",$slug)->delete();
        }catch(\Exception $e){
            return redirect()->back()->with("error",$e->getMessage());
        }

        return redirect()->route("category.index")->with("success","Category Deleted Successfully");
    }
}
