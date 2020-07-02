@extends('layouts.header')
@section('content')
	<div class="row">
		<div class="col-sm-6">
			<img src="{{ asset('img/login.png') }}" style="width:100%;height: auto;margin-top: 50px;margin-bottom: 50px;">
		</div>
		<div class="col-sm-6">
			<form method="post" action="" enctype="multipart/form-data">
			<div class="panel panel-primary" style="margin-top: 50px;margin-bottom: 50px;">
				<div class="panel-heading">
					Login
				</div>
				<div class="form-group" style="padding:10px 10px 10px 10px;">
					<label>Enter Email :</label>
					<input class="form-control" type="text" name="email" placeholder="Enter your registered email" required="">
				</div>
				<div class="form-group" style="padding:0px 10px 10px 10px;">
					<label>Enter Password :</label>
					<input class="form-control" type="password" name="Psword" placeholder="Enter your Password" required="">
				</div>
				<center>
					<input type="submit" class="btn btn-danger" value="Submit">
				</center>
				<br>
			</div>
			</form>
		</div>
	</div>
@endsection