<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

use App\Http\Requests;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
       $post = Post::all();
       return view('welcome', compact('post'));
    }
}

