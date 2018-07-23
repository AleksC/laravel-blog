<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['show', 'index']]);
    }

    public function index() 
    {
        $posts = Post::paginate(10);

        return view('posts.index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::with('comments')->findOrFail($id);
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $this->validate(request(), ['title' => 'required', 'body' => 'required']);

        Post::create([
            'title' => request('title'),
            'body' => request('body'),
            'published' => request('published'),
            'user_id' => auth()->user()->id
        ]);

        return redirect('/');
    }
}


