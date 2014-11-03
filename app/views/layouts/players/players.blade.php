@extends('welcome')

@section('content')

<?php $i = 1; ?>

@foreach ($players as $player)
	@if ( $i % 3 == 1 )
	<div class="row">
	@endif

	@include('layouts.players.player', array('player'=>$player))

	@if ( $i % 3 == 0 )
		</div>
	@endif

	<?php $i++; ?>

@endforeach

@if( $players->count() % 3 != 0)
		</div>
	@endif
@stop