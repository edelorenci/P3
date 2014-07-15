@extends('_master')


@section('title')
	Lorem Ipsum Generator
@stop

@section('content')

	<h2> Lorem Ipsum Generator</h2>
	<a href='/'>Home</a> 
	<hr>

		<form class="form-horizontal" role="form" action="{{ url('/textsubmission') }}" method="POST">
  		  <div class="form-group">
    			<label for="num_par" class="col-lg-2 control-label">Number of paragraphs</label>
    			<div class="col-lg-10">
      				<input type="text" name="num_par" maxlength="2" size="2" placeholder="#">
    			</div>
  		  </div>
		  
    		  <div class="form-group">
    			<div class="col-lg-offset-2 col-lg-10">
      				<button type="submit" class="btn btn-primary">Generate Text</button>
    			</div>
  		  </div>
		</form>
			
@stop

