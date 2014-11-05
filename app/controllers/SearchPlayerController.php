<?php

use Illuminate\Database\Eloquent\Collection;

class SearchPlayerController extends \BaseController {
// see: 
// http://stackoverflow.com/questions/19155192/jquery-ajax-call-to-php-script-with-json-return
	
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
		
		// returns json players object
		return $players; 
		//return View::make('layouts.searchPlayers.searchPlayerResult')
		// return View::make('welcome')
		// 	->with('players', $players);
	} // end func
} // end class

