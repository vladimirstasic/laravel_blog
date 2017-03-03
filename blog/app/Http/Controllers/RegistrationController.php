<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class RegistrationController extends Controller
{
    public function create(){
        return view('registration.create');
    }

    public function store(){

        //Znaci sta moramo da uradimo, prvo moramo da validiramo formu

        $this->validate(request(),[
            'name' => 'required',
            'email'=> 'required|email',
            'password' => 'required|confirmed'// ovo znaci da mora da se radi i potvrda sa poljem sa nazivom password_confirmation koje smo ubacili
        ]);

        //Da napravimo i sacuvamo usera

        $user = User::create(request(['name','email','password']));


        // Kad smo vec  napravili uzera moracemo i da ga ulogujemo

        auth()->login($user);


        // Da na kraju redirektujemo ka home strani ili nekoj drugoj

        return redirect()->home();

    }
}
