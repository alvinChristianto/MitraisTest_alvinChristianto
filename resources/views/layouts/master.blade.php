<!doctype html>
<html lang="en">
    <head>		
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <meta name="description" content="">
	    <meta name="author" content="">

	    <!-- CSRF Token -->
	     <meta name="csrf-token" content="{{ csrf_token() }}"> 

        <title>Mitrais - @yield('title')</title>

	    
	    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

	    <!-- Custom styles for this template -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	   

	    <!-- Scripts -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	    <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
		<script src="{{ asset('js/date.format.js') }}"></script>
		<script src="{{ asset('js/jquery-dropdate.js') }}"></script>
	    <!-- Fonts -->
	    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

	    <!-- Styles -->
	    <!--   <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

	    <script>
		$(document).ready(function(){
		    $('#dropdate').dropdate({
		        dateFormat:'mm/dd/yyyy'
		    });
		});

		</script>

    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>