<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
		<meta name="keywords" content="">
		<meta name="description" content="">
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width = device-width, initial-scale = 1">

		<title><?php echo $title ?></title>		

		<link rel="stylesheet" href="{{asset('css/style.css')}}" />
		<link rel="stylesheet" href="{{asset('css/app.css')}}" />
		<link rel="Stylesheet" href="https://fonts.googleapis.com/css?family=Do Hyeon" />
		@yield('additionalStyles')	

	    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="{{asset('js/app.css')}}"></script>	  
		@yield('additionalScripts')	
</head>
<body>
	<div class="container">	 	
		
		@include('inc.nav')
		
		@yield('content')	

	<br />
	<div class="container-fluid">
	<div class="row botty">      
		<div class="col-12 bottyCol">
			The Scrubbery Zone 2018 &copy;
		</div>
	</div>
	</div>
	<br />
</div>
		
			
</body>
</html>

