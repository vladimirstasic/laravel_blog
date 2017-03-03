<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){

//    	$posts = Post::latest()
//    	->filter(request(['month','year']))
//    	->get();

        return view('posts.index');
    }

    public function show(){
        return view('posts.show');
    }

}
