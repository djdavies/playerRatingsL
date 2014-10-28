<?php

class StrikerRating extends Eloquent {
	protected $table = 'ratingsstriker';
	protected $guarded = ['id'];

	public function player() {
		return $this->belongsTo('Player');
	}

	public function user() {
		return $this->belongsTo('User');
	}
}
