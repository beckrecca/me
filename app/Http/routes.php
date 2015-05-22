<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function()
{
	return view('main');
});

Route::get('/about', function()
{
	return view('about');
});

Route::get('/resume', function()
{
	return view('resume');
});

Route::get('download-resume', function()
{
    $file = public_path('img') . '/' . 'resume.pdf';
    return response()->download($file);
});