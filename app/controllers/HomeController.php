<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		session_start();
		$defenders = Player::wherePosition('defender')
			->orderBy('points', 'desc')
			->take(4)
			->get();

		$midfielders = Player::wherePosition('midfielder')
			->orderBy('points', 'desc')
			->take(4)
			->get();

		$strikers = Player::wherePosition('striker')
			->orderBy('points', 'desc')
			->take(2)
			->get();	

		return View::make('TeamOfTheWeek', compact('defenders', 'midfielders', 'strikers'));
	}

	public function showLeagueTable()
	{
		$u21table = teamsleagueu21::all()
				->orderBy('points', 'desc')
				->get(['name']);
	}

}
