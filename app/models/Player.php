<?php

class Player extends Eloquent {

	public function url() {
		return URL::route('players.show', $this->id);
	}

	public function rateUrl() {
		return URL::route('players.rate', $this->id);
	}

	public function u21Url(){
		return URL::route('players.u21', $this->id);
	}

	public static function getu21s($position){
		if ($position == 'defender'){
			return Player::where('position', '=', 'defender','and')->where('team','=','u21','and')->get();
		}
		else if ($position == 'midfielder'){
			return Player::where('position', '=', 'midfielder', 'and')->where('team','=','u21','and')->get();
		}	
		// todo midfielder, strikers, goalkeeper
		else if ($position == 'striker'){
			return Player::where('position', '=', 'striker', 'and')->where('team','=','u21','and')->get();
		}	
		else {
			return 'Error: position not found';
		}
	}

	public static function getu18s($position){
		if ($position == 'defender'){
			return Player::where('position', '=', 'defender', 'and')->where('team','=','u18','and')->get();
		}
		else if ($position == 'midfielder'){
			return Player::where('position', '=', 'midfielder', 'and')->where('team','=','u18','and')->get();
		}	
		// todo midfielder, strikers, goalkeeper
		else if ($position == 'striker'){
			return Player::where('position', '=', 'striker', 'and')->where('team','=','u18','and')->get();
		}	
		else {
			return 'Error: position not found';
		}
	}

	public static function getu16s($position){
		if ($position == 'defender'){
			return Player::where('position', '=', 'defender', 'and')->where('team','=','u16','and')->get();
		}
		else if ($position == 'midfielder'){
			return Player::where('position', '=', 'midfielder', 'and')->where('team','=','u16','and')->get();
		}	
		// todo midfielder, strikers, goalkeeper
		else if ($position == 'striker'){
			return Player::where('position', '=', 'striker', 'and')->where('team','=','u16','and')->get();
		}	
		else {
			return 'Error: position not found';
		}
	}	
			
	public function ratings() {
		if ($this->position == 'defender') {
			return $this->hasMany('DefenderRating');
		}
		else if ($this->position == 'midfielder') {
			return $this->hasMany('MidfielderRating');
		}
		else if ($this->position == 'striker'){
			return $this->hasMany('StrikerRating');
		}
		// Haven't implemented GoalkeeperRating yet
		else if($this->position == 'goalkeeper') {
			return $this->hasMany('GoalkeeperRating');
		}
		else {
			return 'Error: position not found';
		}
	}

	public function average() {
		// calculate the average score across all of their ratings
		$total = 0;
		foreach ($this->ratings as $rating) {
			$total += $rating->ratingAverage();
		}
		
		return $this->ratings->count()
			? round ($total / $this->ratings->count(), 2)
			: 0;
	}
}

/*
	protected $appends = ['greeting'];
	protected $hidden = ['position'];

	// may be called using: $user->greeting;
	public function getGreetingAttribute () {
		return 'Hello there';
	}
*/	
