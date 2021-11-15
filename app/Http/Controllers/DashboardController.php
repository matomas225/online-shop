<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class DashboardController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(10);
        $users = User::paginate(10);
        return view('dashboard', ['posts' => $posts, 'users' => $users]);
    }

    function makeAdmin(User $user)
    {
        if (Auth::user()->role == "admin") {
            $user->role = "admin";
            $user->save();
            return Redirect::route('dashboard');
        } else {
            return abort(403);
        }
    }
    function delete(User $user)
    {
        if (Auth::user()->role == "admin") {
            $user->delete();
            return Redirect::route('dashboard');
        } else {
            return abort(403);
        }
    }
}
