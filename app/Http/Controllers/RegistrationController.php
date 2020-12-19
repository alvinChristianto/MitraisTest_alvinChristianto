<?php

namespace App\Http\Controllers;

use App\Userregist;
use DB;
use Session;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
	public function showFormRegister()
	{	
		//dd("do here");
		return view('register.register');
	}
	public function getLogin()
	{	
		//dd("do here");
		return view('login.login');
	}
	
	public function postLogin(Request $request)
	{

    	$this->validate($request, [
       	 'email' => 'required|email'
      	]);
	    $emailAdd = $request->email;
                    
        #get role_id of user
        $user = DB::table('user_registration')
                    ->where('email','=', $emailAdd)
                    ->get();

        if(count($user) > 0 ){
            #dd($listpost);

			Session::flash('success','user exist : '.$emailAdd);
            return redirect('login');
        }else{

			Session::flash('fail','user not exist : '.$emailAdd);
            return redirect('login');
        }
	}
	/*
	public function postRegister(Request $request)
	{        
		$this->validate($request, [
    		'MobileNo' => 'required|numeric',
    		'FirstName' => 'required',
    		'LastName' => 'required',
    		'dropdate' => 'required',
    		'emailAddr' => 'required'
    	]);
	
    }*/

}
