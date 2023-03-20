<?php

namespace App\Http\Controllers;

use App\Models\comments;
use Illuminate\Http\Request;

class CommentsController extends Controller
{

    

    public function index()
    {
        $comments = comments::all();

        return view('backend.comments.all_comments' , compact('comments'));
    }


    public function store(Request $request)
    {
        $name    = $request->name;
        $email   = $request->email;
        $comment = $request->comment;
        $post_id = $request->post_id;
        $date    = date('Y-m-d');

        $posts = comments::create([
            'name' =>$name,
            'email' =>$email,
            'comment' =>$comment,
            'post_id' =>$post_id,
            'date' =>$date,
        ]);

        $posts->save();

        return redirect()->back();
    }


    public function edit($id)
    {
        $comments = comments::find($id);
        return view('backend.comments.edit_comment' , compact('comments'));
    }


    public function update(Request $request, $id)
    {
        $comments = comments::find($id);
        
        
        $validated = $request->validate([
            'comment' => 'required',
        ]);
        
        $comment = $request->comment;
        $comments->update([
            'comment' =>  $comment,
        ]);

        // $comments->save();

        return redirect()->route('comments.all_comments');
    }
    
    
    public function destroy($id)
    {
        $comments = comments::find($id);
        $comments->delete();

        return redirect()->route('comments.all_comments');
    }
}
