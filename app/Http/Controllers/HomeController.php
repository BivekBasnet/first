<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class HomeController extends Controller
{
    public function homepage(){
        $post = Post::all();
        return view('home.home', compact('post'));
    }
}
