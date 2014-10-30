<?php

class SearchPlayerController extends \BaseController {
	// search for a player...
	public function searchForPlayer() {

		   $q = Input::get('searchForPlayer');

    		$searchTerms = explode(' ', $q);

    		$query = DB::table('players');

		foreach($searchTerms as $term)
    	{
			//$searchPlayer = Player::where('name', 'LIKE', '%'.$term.'%');
			$query->where('name', 'LIKE', '%'. $term .'%');
			//$users = User::where('username', '=', Input::get('username'))->take(1)->get();
		}
		
		$results = $query->get();
		return $results;
	} // end func
} // end class

