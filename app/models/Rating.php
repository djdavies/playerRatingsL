<?php

class Rating extends Eloquent {

	public function url() {
		return URL::route('ratings.show', $this->id);
	}

	public function rateUrl() {
		return URL::route('ratings.rate', $this->id);
	}

	/*
	protected $appends = ['greeting'];
	protected $hidden = ['position'];

	// may be called using: $user->greeting;
	public function getGreetingAttribute () {
		return 'Hello there';
	}
	*/

}