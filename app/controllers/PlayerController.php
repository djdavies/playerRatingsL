<?php

class PlayerController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return Player::all();
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return 'This should render the view to create a new resource!!';
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$player = Player::find($id);
		if ($player)
			return View::make('layouts.players.players', ['players'=>[$player]]);
		else
			return Redirect::route('home');
	}

	public function showRateMe($id)
	{
		return View::make('layouts.modals.master-modal', compact('player'));
	}


	/**
	 * Show the form for editing the specified resource. 
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		$player = Player::find($id);
		if ($player)
			return View::make('modal-layout', compact('player'));
		else 
			// create a "not found page or use a 404?..."
			return Redirect::route('home');
	} 

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	public function showU21($id)
	{
		
		$u21Player = Player::find($id);
		
		if ($u21Player->position == 'defender'){
			return View::make('layouts.players.player', ['player'=>$u21Player]);
		}

		else
			return Redirect::route('home');
	}

	public function showU18($id)
	{
		
		$u18Player = Player::find($id);
		
		if ($u18Player->position == 'defender' and $u18Player->team == 'u21'){
			return View::make('layouts.players.player', ['player'=>$u18Player]);
		}

		else
			return Redirect::route('home');
	}

	public function showU16($id)
	{
		
		$u16Player = Player::find($id);
		
		if ($u16Player->position == 'defender' and $u16Player->team == 'u16'){
			return View::make('layouts.players.player', ['player'=>$u16Player]);
		}

		else
			return Redirect::route('home');
	}
	public function getU21s($position){
		
		$playersu21 = Player::getU21s($position);
		

		return View::make('layouts.players.players', ['players' => $playersu21]);
	}

	public function getU18s($position){
		
		$playersu18 = Player::getU18s($position);

		return View::make('layouts.players.players', ['players' => $playersu18]);
	}

	public function getU16s($position){
		
		$playersu16 = Player::getU16s($position);

		return View::make('layouts.players.players', ['players' => $playersu16]);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function rate($id) {
		// find the model
		$player = Player::find($id);
		$values = Input::all();
		$rating = $player->ratings()->create($values);

		if (Auth::check())
			$rating->user()->associate(Auth::user()->id);
		// consider whether the authenticated user *can* rate this model

		// sanity check the ratings received - validation class

		// interact with the player model to save the new rating

		// interact with the website user - return some view
	}
}
