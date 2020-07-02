@extends('layouts.header')
@section('content')
	<div class="row">
		@if(session()->has('success'))
	        <div class="alert alert-success" id="hideAlert">
	            {{ session()->get('success') }}
	        </div>
	    @endif
	    @if(session()->has('error'))
	        <div class="alert alert-danger" id="hideAlert">
	            {{ session()->get('error') }}
	        </div>
	    @endif
		<div class="col-sm-6">
			<img src="{{ asset('img/login.png') }}" style="width:100%;height: auto;margin-top: 50px;margin-bottom: 50px;">
		</div>
		<div class="col-sm-6">
			<form method="post" action="{{ url('user/login') }}" enctype="multipart/form-data">
				@csrf
				<div class="panel panel-primary" style="margin-top: 50px;margin-bottom: 50px;">
					<div class="panel-heading">
						Login
					</div>
					<div class="form-group" style="padding:10px 10px 10px 10px;">
						<label>Enter Email :</label>
						<input class="form-control" type="text" name="email" placeholder="Enter your registered email" required="">
						@if($errors->has('email'))
				            <span class="" style="color: red;">{{ $errors->first('email') }}</span>
				        @endif
					</div>
					<div class="form-group" style="padding:0px 10px 10px 10px;">
						<label>Enter Password :</label>
						<input class="form-control" type="password" name="password" placeholder="Enter your Password" required="">
						@if($errors->has('password'))
				            <span class="" style="color: red;">{{ $errors->first('password') }}</span>
				        @endif
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