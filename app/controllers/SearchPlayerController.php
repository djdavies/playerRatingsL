<?php

class SearchPlayerController extends \BaseController {
	// search for a player...
	public function searchForPlayer() {

	   $q = Input::get('searchForPlayer');

		$searchTerms = explode(' ', $q);

		$query = DB::table('players');

		foreach($searchTerms as $term) {
			$query->where('name', 'LIKE', '%'. $term .'%');
		}
		
		$results = $query->get();
		return $results;
	} // end func
} // end class

