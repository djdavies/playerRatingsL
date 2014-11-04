@extends('welcome')

@section('searchPlayerResult')
Here are your search results:
@foreach ($players as $player)
	<li>{{{ $player->name }}}</li>
@endforeach
@stop
