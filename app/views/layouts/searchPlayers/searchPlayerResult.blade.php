@section('searchPlayerResult')
	Here are your search results:

	@foreach ($players as $player)
		<a href="{{ $player->url() }}">{{ $player->name }}</a>
		<li>{{{ $player->name }}}</li>

	@endforeach
@stop