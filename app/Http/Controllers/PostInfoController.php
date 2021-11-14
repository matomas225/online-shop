<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostInfoController extends Controller
{
    function index(Post $post)
    {
        return view('postinfo', ['post' => $post]);
    }
}
