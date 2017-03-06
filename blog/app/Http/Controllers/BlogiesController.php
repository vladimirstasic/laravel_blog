<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;


class BlogiesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);//Znaci provera odmah da li je neko ulogovan i salje ga na login menu OSIM ako je u pitanju index strana i show strana. Za sve ostalo moras da si ulogovan.
    }

    public function index()
    {

        $posts = Post::latest()
            ->filter(request(['month', 'year']))
            ->get();


        return view('blogy.index', compact('posts'));

    }

    public function show(Post $post)
    {

        return view('blogy.show', compact('post'));
    }

    public function create()
    {
        return view('blogy.create');
    }

    public function store()
    {

        $this->validate(request(), [
            'title' => 'required', //rezervisana rec required
            'body' => 'required'
        ]);

        auth()-> user()-> publish(
            new Post(request(['title', 'body']))
        );

        Post::create(request([
            'title' => request('title'), //ubacuje title
            'body' => request('body'),   //ubacuje body
            'user_id' => auth()->id()   //vraca ID od trenutnog usera.
        ])); //ovo je metoda ubacivanja u post tabelu koja se poziva iz kontrolera ne znam zasto, mislio sam da se to radi u Modelu

//        return redirect('/blogy');
        return redirect()->home();

    }
}
