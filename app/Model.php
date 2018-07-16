<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
    	
	//protected $fillable = ['title', 'body'];

	protected $guarded = [];

	//$fillable specifies the field i want to allow
	//$guarded specifies the field we don't want

}
