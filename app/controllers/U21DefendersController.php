<?php

class U21DefenderController extends BaseController {

	public function showU21Defenders($id) {
		
		$u21Player = Player::find($id);

		if ($player position == 'defender' and team == 'u21')
			return View::make('layouts.players.player');
		}
		else
			return Redirect::route('home');
	}
/*
SELECT * 
FROM players
WHERE team = 'u21' 
AND position = 'defender';
*/