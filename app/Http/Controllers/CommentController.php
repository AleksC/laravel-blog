<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Mail\CommentReceived;
use Illuminate\Support\Facades\Mail;
use App\Post;

class CommentController extends Controller
{
    public function store(Post $post)
    {
        $this->validate(request(), ['author' => 'required', 'text' => 'required']);

        $comment = Comment::create([
            'author' => request('author'),
            'text' => request('text'),
            'post_id' => $post->id
        ]);

        Mail::to($post->user)->send(new CommentReceived($post, $comment));

        return redirect('/posts/' . $post->id);
    }
}
