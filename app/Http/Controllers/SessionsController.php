<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{


    public function __construct(){

        $this->middleware('guest', ['except' => 'destroy']);//other users can acces the logout method except logged i user

    }
    public function create(){


    	return view('sessions.create');


    }


    public function store(){

    	//Attempt to authenticate the user

    	if(! auth()->attempt(request(['email', 'password']))){

    		return back()->withErrors([

                'message' => 'please check your credentials and try again'

            ]);
    	}

    	return redirect('/');

    	//If not, redirect back

    	//If so, sign them in

    	//Redirect to the home page


    }


    public function destroy(){

    	auth()->logout();

    	return redirect('/');


    }
}
