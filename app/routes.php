<?php

// Home page

Route::get('/', function() {
	return View::make('index');		
});

// Random Text Generator form page

Route::get('/randtext', function() {
	return View::make('randtextform');	
});

// Handle Text Generator submission

Route::post('/textsubmission', function() {
	return View::make('textsubmission');
});

// Random User Generator form page

Route::get('/randuser', function() {
	return View::make('randuserform');		
});

// Handle User Generator submission

Route::post('/usersubmission', function()
{
    return View::make('usersubmission');

});

