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

Route::Get('u21defenders',  [
	'as' => 'u21defenders',
	'uses' => 'U21DefenderController@showU21Defenders'
	]
);

// little validation test
Route::post('cake', function () {
	$values = Input::only('time', 'temp', 'ingredients', 'user_id');

	$validator = Validator::make($values, [
		'time' => 'required|integer|between:2,4000',
		'temp' => 'required|integer',
		// check for integer and that user_id exists in DB table users column id
		'user_id' => 'integer|exists:users,id'
	]);

	/* 
	return $validator->fails()
		? 'Failed'
		: 'Passed';
	*/
	
	if ($validator->fails()) {
		return Response::json($validator->messages(), 400);
	} else {
		// create model, pass through vales who meet guarded variable
		Cake::create($values);
	}
});

Route::resource('players', 'PlayerController');

Route::post('players/{id}/rate', [
	'as' => 'players.rate',
	'uses' => 'PlayerController@rate'
]);
















 