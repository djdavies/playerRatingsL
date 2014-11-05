<?php 

require_once( app_path() . '/views/queries.php');
$queries = new Queries;
?>

<div class="rightBar">
	<table class="table">
		<h4> U16 League Table </h4>
		<tr>
	      <th>Pos.</th>
	      <th>Teams</th>
	      <th>GD</th>
	      <th>Points</th>
	    </tr>
		{{ $queries->u21table() }}	
	<table>
</div> 