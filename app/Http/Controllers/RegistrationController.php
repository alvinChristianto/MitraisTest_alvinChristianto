<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
	public function showFormRegister()
	{	
		//dd("do here");
		return view('register.register');
	}

	public function postRegister(Request $request)
	{        
		$this->validate($request, [
    		'MobileNo' => 'required|numeric',
    		'FirstName' => 'required',
    		'LastName' => 'required',
    		'dropdate' => 'required',
    		'emailAddr' => 'required'
    	]);
	
      //return \Redirect::route('ApiController@createStudent');    
	  //return redirect()->action('ApiController@createStudent', [$request]);
	}

}
