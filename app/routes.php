<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
    $meta_descripton = "";
    $meta_keywords="";
    $meta_author="Redefined Ind.";
    $sitename = "UfGuidance";
	return View::make('home/home')
        ->with('meta_descripton', $meta_descripton)
        ->with('meta_keywords',$meta_keywords)
        ->with('meta_author', $meta_author)
        ->with('sitename', $sitename );
});



