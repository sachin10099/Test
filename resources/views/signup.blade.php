@extends('layouts.header')
@section('content')

<div class="row">
		<div class="col-sm-6">
			<img src="{{ asset('img/signup.png') }}" style="width:100%;height: auto;margin-top: 50px;margin-bottom: 50px;">
		</div>
		<div class="col-sm-6">
			<form method="post" action="{{ url('user/signup') }}" enctype="multipart/form-data">
				@csrf
				<div class="panel panel-primary" style="margin-top: 50px;margin-bottom: 50px;">
					<div class="panel-heading">
						Sign Up
					</div>
					<div class="form-group" style="padding:10px 10px 10px 10px;">
						<label>Enter Name :</label>
						<input class="form-control" type="text" name="name" required="">
					</div>
					<div class="form-group" style="padding:0px 10px 10px 10px;">
						<label>Enter Email :</label>
						<input class="form-control" type="email" name="email" required="">
					</div>
					<div class="form-group" style="padding:0px 10px 10px 10px;">
						<label>Enter Mobile Number :</label>
						<input class="form-control" type="text" name="mobile_number" required="">
					</div>
					<div class="form-group" style="padding:0px 10px 10px 10px;">
						<label>Select State:</label>
						<select class="form-control" name="state">
							<option value="">Choose State</option>
							<option value="1">U.P</option>
							<option value="2">M.P</option>
						</select>
					</div>
					<div class="form-group" style="padding:0px 10px 10px 10px;">
						<label>Select City:</label>
						<select class="form-control" name="city">
							<option value="">Choose City</option>
							<option value="1">Lucknow</option>
							<option value="2">Sitapur</option>
						</select>
					</div>
					<div class="form-group" style="padding:0px 10px 10px 10px;">
						<label>Choose Image:</label>
						<input type="file" name="image">
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