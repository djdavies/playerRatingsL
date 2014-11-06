<!doctype html>
<html lang ="en">
<head>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
	<title>Player Ratings</title>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="/jquery/jquery-1.11.1.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
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
		    	@if (Request::url() === 'http://localhost:8000')
					@include('layouts.bars.right-barU21')
				@elseif (Request::url() === 'http://localhost:8000/u21/defender')
					@include('layouts.bars.right-barU21View')
				@elseif (Request::url() === 'http://localhost:8000/u18/defender')
					@include('layouts.bars.right-barU18View')
				@elseif (Request::url() === 'http://localhost:8000/u16/defender')	
					@include('layouts.bars.right-barU18View')
				@else	
					foo	
				@endif		    	
		    </div>
		</div>
	</div>
</body>

</html>
