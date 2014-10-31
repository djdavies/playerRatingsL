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

Route::get('searchPlayer/{q}', [
	'as' => 'searchPlayer',
	'uses' => 'SearchPlayerController@searchForPlayer'
]);

<<<<<<< HEAD
=======
/*
Route::get('players/{id}/{position}/u21Defenders', [
	'as' => 'u21Defenders',
	'uses' => 'U21DefendersController@showU21Defenders'
	]);
*/
>>>>>>> 70345e6dedc51ec0ba02a5d351afde71816e8a0e

// little validation test
/*
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
	
/*	
	if ($validator->fails()) {
		return Response::json($validator->messages(), 400);
	} else {
		// create model, pass through vales who meet guarded variable
		Cake::create($values);
	}
});
*/


// Routes to tinker with AJAX - this is not part of the website
// and may be deleted safely

/*
Route::get('api/v1/players', [
    'as' => 'api.players',
    function () {
    	if (rand(0,1))
        return Player::all();
    else
    	return Response::json(['messages' => ['nope']], 400);
    }
]);

Route::get('ajax', function () {
	return View::make('hello');
});

Route::post('api/v1/make', [
	'as' => 'api.make', function () {
		return Response::make('',200); 
	}
]);
*/
