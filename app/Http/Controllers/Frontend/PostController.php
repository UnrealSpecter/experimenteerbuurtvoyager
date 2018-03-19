<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

Use App\Models\Post;
Use DB;

class PostController extends Controller
{
    public function index()
    {
        // $posts = Post::all();
        $posts = DB::table('posts')->orderBy('post_date')->get();

        return view('frontend.posts.index', compact('posts'));
    }
}
