<?php

namespace App\Http\Controllers;

use App\Models\comments;
use App\Models\Posts;
use App\Models\SubSubCategory;
use Illuminate\Http\Request;

class PostsController extends Controller
{


    
    public function index()
    {
        $subSubCategory = SubSubCategory::all();
        $posts = Posts::all();

        return view('frontend.news' , compact('subSubCategory' , 'posts'));
    }

    public function singlepost($id)
    {
        $posts = Posts::find($id);
        $subSubCategory = SubSubCategory::all();
        $postss = Posts::all();
        $comments = comments::where('post_id' , $id)->get();

        return view('frontend.singlepost' , compact('posts' , 'subSubCategory' , 'postss' , 'comments'));
    }

    public function category($id)
    {
        $posts = Posts::where('category_id' , $id)->get();
        $subSubCategory = SubSubCategory::all();

        return view('frontend.news' , compact('posts' , 'subSubCategory'));
    }

    public function search(Request $request){

        $search = $request->search;
        $posts = Posts::where('title' , 'LIKE' , '%'. $search .'%')->get();
        $subSubCategory = SubSubCategory::all();

        return view('frontend.news' , compact('posts' , 'subSubCategory'));
    }

    public function all_posts()
    {
        $posts = Posts::all();
        return view('backend.posts.all_posts' , compact('posts'));
    }


    public function create()
    {
        return view('backend.posts.add_post');
        
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'          => 'required',
            'image'          => 'required|image',
            'user_id'        => 'required',
            'category_id'    => 'required',
            'date'           => 'required',
            'description'    => 'required',
        ]);

        $title            = $request->title;
        $user_id          = $request->user_id;
        $category_id      = $request->category_id;
        $date             = $request->date;
        $description      = $request->description;

        $post_image = $request->file('image');

        $name_gen = hexdec(uniqid()); 
        $img_ext = strtolower($post_image->getClientOriginalExtension()); 
        $img_name = $name_gen . '.' . $img_ext; 
         
        $upload_location = 'frontend/assets/img/blog/'; 
        $image = $img_name; 
        $post_image->move($upload_location,$img_name); 

        $posts = Posts::create([
            'title'            =>$title,
            'user_id'          =>$user_id,
            'category_id'      =>$category_id,
            'date'             =>$date,
            'description'      =>$description,
            'image'            =>$image,
        ]);
        $posts->save();

        return redirect()->route('dashboard.all_posts');
    }


    public function edit($id)
    {
        $posts = Posts::find($id);
        return view('backend.posts.edit_post' , compact('posts'));
    }

    public function update(Request $request,$id)
    {
        $posts = Posts::find($id);

        $validated = $request->validate([
            'title'          => 'required',
            'image'          => 'required|image',
            'user_id'        => 'required',
            'category_id'    => 'required',
            'date'           => 'required',
            'description'    => 'required',
        ]);

        $title            = $request->title;
        $user_id          = $request->user_id;
        $category_id      = $request->category_id;
        $date             = $request->date;
        $description      = $request->description;

        $post_image = $request->file('image');

        $name_gen = hexdec(uniqid()); 
        $img_ext = strtolower($post_image->getClientOriginalExtension()); 
        $img_name = $name_gen . '.' . $img_ext; 
         
        $upload_location = 'frontend/assets/img/blog/'; 
        $image = $img_name; 
        $post_image->move($upload_location,$img_name); 

        $posts->update([
            'title'            =>$title,
            'user_id'          =>$user_id,
            'category_id'      =>$category_id,
            'date'             =>$date,
            'description'      =>$description,
            'image'            =>$image,
        ]);
        $posts->save();

        return redirect()->route('dashboard.all_posts');
    }

    public function destroy($id)
    {
        $posts = Posts::find($id);
        $posts->delete();
        return redirect()->route('dashboard.all_posts');
        
    }
}
