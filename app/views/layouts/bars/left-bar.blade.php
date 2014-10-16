<?php 
require_once( app_path() . '/views/queries.php');
$queries = new Queries;

$randNewportScore = rand(0,5);
$randOtherTeamScore = rand(0,5);
?>

<div class="leftBar">
	<div class="leftBar-fixture">
		<strong><u><h4>Latest Fixture</h4></u></strong>

		{{ $queries->listNewport() }}<br> <em>vs.</em> <br> {{ $queries->fixtureOpponent() }}
	</div>
<br>
	<div class="leftBar-result">
		<strong><u><h4>Last Result</h4></u></strong>
		{{ $queries->listNewport() . ' ' . $randNewportScore }} <br> 
		{{ $queries->fixtureOpponent() . ' ' . $randOtherTeamScore }} 
	</div>
</div>