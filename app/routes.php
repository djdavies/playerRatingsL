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

Route::get('/', 
	[
		'as' => 'home',
		'uses' => 'HomeController@showWelcome'
	]
);


Route::resource('players', 'PlayerController');

// should be the action for a form that will submit the rating
// - it will be the job of the target action to store the rating
/*
*/
Route::post('players/{id}/rate', [
	'as' => 'players.rate',
	'uses' => 'PlayerController@rate'
]); 

Route::get('players/{id}/rateme', [
	'as' => 'players.rateme',
	'uses' => 'PlayerController@showRateMe'
]);

Route::post('login', [
	'as' => 'login',
	'uses' => 'LoginController@login'
	]);

Route::post('logout', [
	'as' => 'logout',
	'uses' => 'LoginController@logout'
	]);	