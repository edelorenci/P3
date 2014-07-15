@extends('_master')


@section('title')
	Random User Generator
@stop
<a href='/randuser'>Random User Generator</a> |
<a href='/'>Home</a>
<hr>   
@section('content')
   
    	<?php $data = Input::all(); ?>
    	<?php $faker = Faker\Factory::create(); ?>
    	<?php for ($i=0; $i < $data['num_user']; $i++) { ?>

	   <address>
  		<strong> {{ $faker->name; }} </strong>
		<br>
		{{ $faker->address }} 
		<br>
		{{ $faker->country }} 
		<br>
		<a href="mailto:#">{{ $faker->email }}</a>
		<br>
	   </address>
    	
	<?php }?>
   
  
<br>
<hr>
<a href='/randuser'>Random User Generator</a> |
<a href='/'>Home</a>

@stop