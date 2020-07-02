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
						@if($errors->has('name'))
				            <span class="" style="color: red;">{{ $errors->first('name') }}</span>
				        @endif
					</div>
					<div class="form-group" style="padding:0px 10px 10px 10px;">
						<label>Enter Email :</label>
						<input class="form-control" type="email" name="email" required="">
						@if($errors->has('email'))
				            <span class="" style="color: red;">{{ $errors->first('email') }}</span>
				        @endif
					</div>
					<div class="form-group" style="padding:0px 10px 10px 10px;">
						<label>Enter Mobile Number :</label>
						<input class="form-control" type="text" name="contact_number" required="">
						@if($errors->has('contact_number'))
				            <span class="" style="color: red;">{{ $errors->first('contact_number') }}</span>
				        @endif
					</div>
					<div class="form-group" style="padding:0px 10px 10px 10px;">
						<label>Select State:</label>
						<select class="form-control" name="state">
							@if(count($data['states']) == 0)
								<option value="">No data(s) found.</option>
							@else
								@foreach($data['states'] as $state)
									<option value="{{ $state['id'] }}">{{ $state['name'] }}</option>
								@endforeach
							@endif
						</select>
						@if($errors->has('state'))
				            <span class="" style="color: red;">{{ $errors->first('state') }}</span>
				        @endif
					</div>
					<div class="form-group" style="padding:0px 10px 10px 10px;">
						<label>Select City:</label>
						<select class="form-control" name="city">
							@if(count($data['cities']) == 0)
								<option value="">No data(s) found.</option>
							@else
								@foreach($data['cities'] as $city)
									<option value="{{ $city['id'] }}">{{ $city['name'] }}</option>
								@endforeach
							@endif
						</select>
						@if($errors->has('city'))
				            <span class="" style="color: red;">{{ $errors->first('city') }}</span>
				        @endif
					</div>
					<div class="form-group" style="padding:0px 10px 10px 10px;">
						<label>Choose Image:</label>
						<input type="file" name="image">
						@if($errors->has('image'))
				            <span class="" style="color: red;">{{ $errors->first('image') }}</span>
				        @endif
					</div>
					<div class="form-group" style="padding:0px 10px 10px 10px;">
						<label>Enter Password:</label>
						<input class="form-control" type="password" name="password" required="">
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