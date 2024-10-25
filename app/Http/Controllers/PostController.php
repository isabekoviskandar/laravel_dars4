<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index' , ['posts' => $posts]);
    }
    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request ->validate([
            'category_id' =>'required|max:10',
            'title' =>'required|max:255',
            'body' => 'required|max:255',
        ]);

        $posts = new Post();
        $posts->category_id = $request->category_id;
        $posts ->title = $request->title;
        $posts ->body = $request->body;
        $posts ->save();
        return redirect('/posts');
    }
    
}
