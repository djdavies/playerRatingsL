<?php 

require_once( app_path() . '/views/queries.php');
$queries = new Queries;
?>

<div class="rightBar">
	<h4> League Tables </h4>
	<table class="table">
	    <tr>
	      <th>Pos.</th>
	      <th>Teams</th>
	      <th>GD</th>
	      <th>Points</th>
	    </tr>
    {{ $queries->u21table() }}
	<table>

	<table class="table">
	    <tr>
	      <th>Pos.</th>
	      <th>Teams</th>
	      <th>GD</th>
	      <th>Points</th>
	    </tr>
    {{ $queries->u18table() }}
	<table>	

</div> 