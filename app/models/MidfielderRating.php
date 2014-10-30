<?php

class MidfielderRating extends Eloquent {
	protected $table = 'ratingsmidfielder';
	protected $guarded = ['id'];

	public function player() {
		return $this->belongsTo('Player');
	}

	public function user() {
		return $this->belongsTo('User');
	}

	public function ratingAverage(){
		return (
			$this->tackling + 
			$this->passing + 
			$this->shooting + 
			$this->dribling
			) / 4;
	}
}
