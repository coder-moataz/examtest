<!DOCTYPE html>   
<html>
<head>
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/css/test.css') }}" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
     <title>Quiz app</title> 
</head>
<body bgcolor="green">
	<form action="{{ route('sub') }}" method="post">
		@csrf 
		<div class="container mb-3">
			@if(Session::has('exam_submitted'))
  				<div class="alert alert-success">
    				{{ Session::get('exam_submitted') }}
  				</div>
  			@endif
			<div class="form-outline">
				<label class="form-label" for="form3Example1">First name</label>
				<input type="text" id="form3Example1" class="form-control" name="first_name"/>
				@error('first_name')
				<span class="text-danger">{{ $message }}</span>
				@enderror
			  </div>	
			  <div class="form-outline">
				<label class="form-label" for="form3Example1">SEC NAME</label>
				<input type="text" id="form3Example1" class="form-control" name="sec_name"/>
				@error('sec_name')
				<span class="text-danger">{{ $message }}</span>
				@enderror
			  </div>	
			  <div class="form-outline">
				<label class="form-label" for="form3Example1">EMAIL</label>
				<input type="text" id="form3Example1" class="form-control" name="email"/>
				@error('email')
				<span class="text-danger">{{ $message }}</span>
				@enderror
			  </div>	
			  <div class="form-outline">
				<label class="form-label" for="form3Example1">PASSWORD</label>
				<input type="password" id="form3Example1" class="form-control" name="password"/>
				@error('password')
				<span class="text-danger">{{ $message }}</span>
				@enderror
			  </div>
			  <h1 class="color-grey">test</h1>
			  <hr style="width: 30%; font-weight: 700; height:3px; background-color:black;">
			  <div class="form-outline">
				<label class="form-label" for="form3Example1">24x90</label>
				<input type="text" id="form3Example1" class="form-control" name="question1"/>
				@error('question1')
				<span class="text-danger">{{ $message }}</span>
				@enderror
			  </div>
			  <div class="form-outline">
				<label class="form-label" for="form3Example1">45x80</label>
				<input type="text" id="form3Example1" class="form-control" name="question2" />
				@error('question2')
				<span class="text-danger">{{ $message }}</span>
				@enderror
			</div>
			  <div class="form-outline">
				<label class="form-label" for="form3Example1">100x10</label>
				<input type="text" id="form3Example1" class="form-control" name="question3"/>
				@error('question3')
				<span class="text-danger">{{ $message }}</span>
				@enderror
			</div>
			  <div class="form-outline">
				<label class="form-label" for="form3Example1">10x10</label>
				<input type="text" id="form3Example1" class="form-control" name="question4"/>
				@error('question4')
				<span class="text-danger">{{ $message }}</span>
				@enderror
			</div>
			  <br>
			  <button class="btn btn-outline-primary btn-block btn-lg">Submit test</button>
		</div>
	</form>
       


       <div class="btn"></div>
	   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
	   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

</body>
</html>