<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Userregist;
use Redirect;


use Illuminate\Support\Facades\Session;

class ApiController extends Controller
{

    public function createuser(Request $request) {
      $this->validate($request, [
        'mobilephone' => 'bail|required|numeric',
        'firstname' => 'required',
        'lastname' => 'required',
        'email' => 'required|email',
      ]);

      $student = new Userregist;
    	$student->firstname = $request->firstname;
    	$student->lastname = $request->lastname;
    	$student->mobilephone = $request->mobilephone;
    	$student->dateofbirth = $request->birthday;
    	$student->gender = $request->gender;
    	$student->email = $request->email;
    	$student->save();
     

      Session::flash('success','user '.$request->email.' registered successfully');
      return redirect('/');
      

  		
  	
    }

    
}