@extends('layouts.master')

@section('title', 'Register')

@section('content')

	<div class="container">
		 @if ($message = Session::get('success'))
      	<div class="alert alert-success alert-block">
        	<button type="button" class="close" data-dismiss="alert">×</button> 
          		<strong>{{ $message }}</strong>
      	</div>
    	@endif
		<form class="form-signin" action="{{ url(action('ApiController@createuser')) }}" method="post">
 		
			{{ csrf_field() }}
			@if ($message = Session::get('error'))
			<div class="alert alert-success alert-block">
				<button type="button" class="close" data-dismiss="alert">×</button> 
				<strong>{{ $message }}</strong>
			</div>
			@endif
			@if ($errors->any())
			<div class="alert alert-danger">
   				@foreach ($errors->all() as $error)
	            	<strong>{{ $error }}</strong>
	            @endforeach
  			</div>
			@endif
			<h2 class="h1 font-weight-normal">Registration</h2>
			
			<input type="text" id="mobilephone" name="mobilephone" class="form-control mb-1" placeholder="Mobile Number" value ="{{ old('mobilephone') }}" onblur=""  required autofocus>

			<input type="text" id="firstname" name="firstname" class="form-control mb-1" placeholder="First Name" value ="{{ old('firstname') }}" required autofocus>

			<input type="text" id="lastname" name="lastname" class="form-control mb-1" placeholder="Last Name" value ="{{ old('lastname') }}" required autofocus>

			<label for="inputNama" class="">Date of birth</label>
			<div class="dropdown">
				<input type="button" name="birthday" id="dropdate" value="">
			</div>


			<div>
				<div class="form-check form-check-inline">
					<div class="custom-control custom-radio custom-control-inline">
					  <input type="radio" id="customRadioInline1" name="gender" class="custom-control-input" value="Male">
					  <label class="custom-control-label" for="customRadioInline1">Male</label>
					</div>
					
					<div class="custom-control custom-radio custom-control-inline">
					  <input type="radio" id="customRadioInline2" name="gender" class="custom-control-input" value="Female"> 
					  <label class="custom-control-label" for="customRadioInline2">Female</label>
					</div> 
				</div>
			</div>

			<input type="email" id="emailAddr" name="email" class="form-control mb-1" placeholder="Email address" value ="{{ old('email') }}" required autofocus>

			<button class="btn btn-lg mt-3 btn-info btn-block" type="submit" id="formsubmit">Register</button>
			                 
				       
		</form> 

	</div>

	<button class="btn btn-lg mt-3 btn-info btn-block" onclick="location.href='{{ url('login') }}'">Login</button>
		

@stop