<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest', ['except' =>'destroy']);
    }

    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        //pokusacemo da identifikujemo usera

        //ako ne uspemo da ga identifikujemo vracamo ga nazad

        //ako uspemo ulogovacemo ga

        if ( !auth()->attempt(request(['email', 'password'])) ) {

            return back()->withErrors([

                'message' => 'Please check your credentials and try again.'

            ]);

        }

        return redirect()->home();


        //redirektovacemo ga na login stranu
    }

    public function destroy()
    {

        auth()->logout();

        return redirect()->home();

    }
}
