<?php



class U21Controller extends \BaseController {

		public function showU21($id)
		$player = Player::find($id);
		if ($player)
			return View::make('layouts.players.player', ['player'=>$player]);
		else
			return Redirect::route('home');
	}

	public function showU21($id) {
		
		$u21Player = Player::find($id);
		
		if ($u21Player position == 'defender' and team == 'u21')
			return View::make('layouts.LOplayers.player', ['player'=>$player]);
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