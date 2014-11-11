<!doctype html>
<html lang ="en">
<head>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
	<title>Player Ratings</title>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="/jquery/jquery-1.11.1.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="/js/app.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/app.js"></script>
	<script src="http://imsky.github.io/holder/holder.js"></script>
</head>	

<body>
	@include('layouts.navs.master-nav')
	
	<div class="container">
		<div class="row">
		    <div class="col-md-3">
		    	@include('layouts.bars.left-bar')
		    </div>

		    
		    <div id="centralContent" class="col-md-6">
		    	@yield('content')
		    </div>	

		    <div class="col-md-3">
		    	@if (Route::currentRouteName() === 'home')
					@include('layouts.bars.right-barU21')
				@elseif (Route::currentRouteName() === 'players.u21')
					@include('layouts.bars.right-barU21View')
				@elseif (Route::currentRouteName() === 'players.u18')
					@include('layouts.bars.right-barU18View')
				@elseif (Route::currentRouteName() === 'players.u16')	
					@include('layouts.bars.right-barU18View')
				@else	
					foo	
				@endif		    	
		    </div>
		</div>
	</div>
</body>

</html>
