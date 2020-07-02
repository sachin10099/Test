<!DOCTYPE html>
<html>
<head>
	<title>Welcome On Dashboard</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<!-- Modal -->
	<div id="myModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Add Products</h4>
	      </div>
	      <div class="modal-body">
	        <form method="post" action="{{ url('product/upload') }}" enctype="multipart/form-data">
				@csrf
				<div class="form-group" style="padding:10px 10px 10px 10px;">
					<label>Enter Product Name :</label>
					<input class="form-control" type="text" name="name" required="">
					@if($errors->has('p_name'))
			            <span class="" style="color: red;">{{ $errors->first('p_name') }}</span>
			        @endif
				</div>
				<div class="form-group" style="padding:0px 10px 10px 10px;">
					<label>Choose Product Image:</label>
					<input type="file" name="image">
					@if($errors->has('image'))
			            <span class="" style="color: red;">{{ $errors->first('image') }}</span>
			        @endif
				</div>
			</form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>
	    </div>

	  </div>
	</div>
	<div class="container">
		@if(session()->has('success'))
	        <div class="alert alert-success" id="hideAlert">
	            {{ session()->get('success') }}
	        </div>
	    @endif
		<div class="row" style="margin-top:50px;">
			<div class="panel panel-default">
				<div class="panel-heading">Welcome Back: {{ \Auth::user()->name }}</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-sm-6">
							<center><h3>User Id: {{ \Auth::user()->unique_id }}</h3></center>
							<p>Email : {{ \Auth::user()->email }}</p>
							<p>Contact Number : {{ \Auth::user()->contact_number }}</p>
						</div>
						<div class="col-sm-6">
							@if(\Auth::user()->image)
								<img src="{{ \Auth::user()->image }}" alt="Profile Pic" style="width:60%;height: auto;">
							@else
								<center><p style="color: red;">Profile Pic Not Found</p></center>
							@endif
						</div>
					</div>
				</div>
			</div>
			<center>
				<button class="btn btn-info" data-toggle="modal" data-target="#myModal">Add Products</button>
			</center>
		</div>
	</div>
</body>
</html>