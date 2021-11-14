<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostListController extends Controller
{
    public function index()
    {
        $posts = User::find(Auth::id())->posts()->paginate(10);
        return view('postlist', ['posts' => $posts]);
    }
}
