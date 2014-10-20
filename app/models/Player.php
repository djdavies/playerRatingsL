<?php

class Player extends Eloquent {

	public function url() {
		return URL::route('players.show', $this->id);
	}

}