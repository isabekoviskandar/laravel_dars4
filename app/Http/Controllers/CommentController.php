<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(){
        $comments = Comment::all();
        return view('comments.index' , ['comments'=>$comments ]);
    }
    public function create()
    {
        return view('comments.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'post_id' => 'required|max:10',
            'body'=>'required|max:300',
        ]);
        $comments = new Comment();
        $comments->post_id = $request->post_id;
        $comments->body = $request->body;
        $comments->save();
        return redirect('/comments')->with('success' , 'comment created successfully');
    }
}
