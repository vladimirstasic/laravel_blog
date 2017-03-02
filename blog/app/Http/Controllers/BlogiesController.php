<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class BlogiesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);//Znaci provera odmah da li je neko ulogovan i salje ga na login menu OSIM ako je u pitanju index strana i show strana. Za sve ostalo moras da si ulogovan.
    }

    public function index(){

        $posts = Post::latest()->get();

        return view('blogy.index', compact('posts'));
    }

    public function show(Post $post){

        return view('blogy.show', compact('post'));
    }

    public function create(){
        return view('blogy.create');
    }

    public function store(){

        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);

        Post::create(request([
            'title' => request('title'),
            'body' => request('body'),
            'user_id' => auth()->id()
        ]));

        return redirect('/');
    }
}
