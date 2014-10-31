<?php

class U21DefenderController extends BaseController {

	public function showU21Defenders() {
		return "test";
	}
}
/*
SELECT * 
FROM players
WHERE team = 'u21' 
AND position = 'defender';
*/