@extends('welcome')

@section('content')
	<div id="pitch" style="min-height: 300px; background-color:green;">
	@foreach($defenders as $index => $defender)
			<div class="defenders" 
				style="position: absolute; top: 25%; left:{{ 10 + $index * 20 }}%">
				<a href="{{ $defender->url() }}">{{ $defender->name }}</a>
			</div> 
	@endforeach

	@foreach($midfielders as $index => $midfielder)
		<div class="midfielders" style="position: absolute; top: 45%; left:{{ 10 + $index * 20 }}%">
			<a href="{{ $midfielder->url() }}">{{ $midfielder->name }}</a>
		</div> 
	@endforeach

	@foreach($strikers as $index => $striker)
		<div class="strikers" style="position: absolute; top: 65%; left:{{ 30 + $index * 20 }}%">
			<a href="{{ $striker->url() }}">{{ $striker->name }}</a>
		</div> 
	@endforeach
	</div>
@stop
