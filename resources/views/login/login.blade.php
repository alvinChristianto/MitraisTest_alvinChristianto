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
		@if ($message = Session::get('fail'))
			<div class="alert alert-danger alert-block">
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

		<form class="form-signin" action="{{ url(action('RegistrationController@postLogin')) }}" method="post">
 		
			{{ csrf_field() }}
		
			<h2 class="h1 font-weight-normal">Login</h2>
			

			<input type="email" id="emailAddr" name="email" class="form-control mb-1" placeholder="Email address" value ="{{ old('email') }}" required autofocus>

			<button class="btn btn-lg mt-3 btn-info btn-block" type="submit" id="formsubmit">Login</button>
			                 
				       
		</form> 

	</div>
	<button class="btn btn-lg mt-3 btn-info btn-block" onclick="location.href='{{ url('/') }}'">Register</button>
	
@stop