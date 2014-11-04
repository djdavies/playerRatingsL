<?php

use Illuminate\Database\Eloquent\Collection;

class SearchPlayerController extends \BaseController {
	// search for a player...
	public function searchForPlayer($q) {

		// $q = Input::get('searchForPlayer');
		$q = str_replace(' ', '+', $q);
		$searchTerms = explode('+', $q);

		$query = Player::orderBy('name');

		foreach($searchTerms as $term) {
			$query->orWhere('name', 'LIKE', '%'. $term .'%');
		}
		
		$players = $query->get();
		
		return $players; // returns json players object
		//return View::make('layouts.searchPlayers.searchPlayerResult')
		//return View::make('welcome')
		//->with('players', $players);
	} // end func
} // end class

