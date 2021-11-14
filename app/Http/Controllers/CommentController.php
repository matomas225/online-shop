<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class CommentController extends Controller
{
    public function index()
    {
    }
    public function store(Request $request, Post $post)
    {
        $request->validate([
            "comment" => ["required", "max:255"],
        ]);

        Comment::create([
            "comment" => $request->comment,
            "user_id" => Auth::id(),
            "post_id" => $post->id,
        ]);
        return Redirect::route('home');
    }
}
