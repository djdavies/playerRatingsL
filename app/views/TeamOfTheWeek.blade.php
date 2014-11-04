@extends('welcome')

@section('content')
	<div style="min-height: 300px; background-color:green;">
	@foreach($defenders as $index => $player)
			<div class="defenders" 
				style="position: absolute; top: 25%; left:{{ 10 + $index * 20 }}%">
				<a href="{{ $player->url() }}">{{ $player->name }}</a>
				@include('layouts.modals.modal-' . $player->position . 's')
			</div> 
	@endforeach

	@foreach($midfielders as $index => $player)
		<div class="midfielders" style="position: absolute; top: 45%; left:{{ 10 + $index * 20 }}%">
			<a href="{{ $player->url() }}">{{ $player->name }}</a> 
		@include('layouts.modals.modal-' . $player->position . 's')
	</div>
	@endforeach

	@foreach($strikers as $index => $player)
		<div class="strikers" style="position: absolute; top: 65%; left:{{ 30 + $index * 20 }}%">
			<a href="{{ $player->url() }}">{{ $player->name }}</a>
			@include('layouts.modals.modal-' . $player->position . 's')
		</div> 
	@endforeach
	</div>
@stop
