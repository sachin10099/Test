<!DOCTYPE html>
<html>
<head>
	<title>Test Project</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<style type="text/css">
		.text-color {
			color: white;
		}
	</style>
</head>
<body>
	<div class="container-fluid">
		<nav class="navbar navbar" style="background-color: brown;">
			<div class="container-fluid">
				<div class="navbar-header">
				  <a class="navbar-brand text-color" href="#">Company Logo</a>
				</div>
				<ul class="nav navbar-nav navbar-right">
				  <li><a href="{{ url('user/signup') }}" class="text-color"><span class="glyphicon glyphicon-user text-color"></span> Sign Up</a></li>
				  <li><a href="{{ url('/') }}" class="text-color"><span class="glyphicon glyphicon-log-in text-color"></span> Login</a></li>
				</ul>
			</div>
		</nav>
		<div>
			@yield('content')
		</div>
		<div class="row" style="background-color: brown;">
			<div class="col-sm-4 text-color">
				<h3><span style="border-bottom-style: ridge;">Company Logo</span></h3>
				<p>
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.
				</p>
			</div>
			<div class="col-sm-4 text-color">
				<h3><span style="border-bottom-style: ridge;">Quick Links</span></h3>
				<ol>
					<a href="#"><li class="text-color">Link 1</li></a>
					<a href="#"><li class="text-color">Link 2</li></a>
					<a href="#"><li class="text-color">Link 3</li></a>
					<a href="#"><li class="text-color">Link 4</li></a>
				</ol>
				
			</div>
			<div class="col-sm-4 text-color">
				<h3><span style="border-bottom-style: ridge;">Contact Details</span></h3>
				<p>Contact Numbers : +91-0123456789 | +91-555555555</p>
				<p>Email : support@gmail.com | abcd@gmail.com</p>
				<p>Address : Near Charbagh station, Lucknow</p>
			</div>
		</div>
	
	</div>
</body>
</html>