@extends('_master')


@section('title')
	Random User Generator
@stop

@section('content')

	<h2> Random User Generator</h2>
	<a href='/'>Home</a> 
	<hr>
		<form class="form-horizontal" role="form" action="{{ url('/usersubmission') }}" method="POST">
  		  <div class="form-group">
    			<label for="num_user" class="col-lg-2 control-label">Number of users</label>
    			<div class="col-lg-10">
      				<input type="text" name="num_user" size="2" placeholder="#">
    			</div>
  		  </div>
		  
    		  <div class="form-group">
    			<div class="col-lg-offset-2 col-lg-10">
      				<button type="submit" class="btn btn-primary">Generate Users</button>
    			</div>
  		  </div>
		</form>
		
@stop

