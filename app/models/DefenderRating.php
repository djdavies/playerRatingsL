<?php

class DefenderRating extends Eloquent {
	protected $table = 'ratingsdefender';
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
			$this->strength + 
			$this->composure
			) / 5;
	}

/*SELECT
tackling, 
passing, 
shooting, 
strength, 
composure,
(tackling + passing + shooting + strength + composure) / 5 as 'points'
FROM `ratingsdefender`
SUM (points) as Total Points
WHERE player_id = '1'*/


}
