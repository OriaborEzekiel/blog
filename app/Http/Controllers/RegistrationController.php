<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Mail\Welcome;
use  Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    
    public function create(){

    	
    	return view('registration.create');


    }

    public function store(){

    	//Validate the form

    	$this->validate(request(),[

    		'name' => 'required',
    		'email' => 'required|email',
    		'password' => 'required|confirmed'



    	]);

    	//Create and save the user

    	

    	

    	$user = User::create([

    		'name' => request('name'),
    		'email' => request('email'),
    		'password' => bcrypt(request('password'))


    	]);

    	//Sign them in(once the user is created, signed them in)

    	auth()->login($user);
    	
    	//send email to the user

    	\Mail::to($user)->send(new Welcome($user));

    	//Redirect to the home page

    	return redirect('/');


    }
}
