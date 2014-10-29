<?php

class LoginController extends BaseController{


	
		public function login()

	{
		session_start();
		$users = User::where('username', '=', Input::get('username'))->take(1)->get();
				
		if(count($users) == 0){
			return 'user not found';
		}

	 	$user = $users[0];
		if ($user->password == Input::get('password')) {

			
			// Unset all of the session variables.
			$_SESSION = array();
			$_SESSION['user_id'] = $user->id; 
			//$_SESSION['user_id'];
			
			return Redirect::to('/');
			# code...
		
		}
		else {

			return 'password is not correct';
		}
		//return View::make('hello');
	}

		public function logout()

	{	
		session_start();
		session_destroy();
		return Redirect::to('/');
	}

} 