<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostInfoController extends Controller
{
    function index(Post $post)
    {
        $comments = $post->comments()->get();
        return view('postinfo', ['post' => $post, "comments" => $comments]);
    }
}
