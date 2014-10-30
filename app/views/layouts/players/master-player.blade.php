<!doctype html>
<html lang ="en">
<head>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<title>Player Ratings</title>
</head>	
<body>
	@include('layouts.navs.master-nav')
	
	<div class="container">
		<div class="row">
	@section('left-bar')
		    <div class="col-md-3">
		    	@include('layouts.bars.left-bar')
		    </div>
	@show    

	{{-- content for the player goes here e.g. rating, edit rating --}}
	@yield('content')
		
		@section('right-bar')    
		    <div class="col-md-3">
				@include('layouts.bars.right-bar')		    	
		    </div>
		@show    
		</div>
	</div>
</body>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="/jquery/jquery-1.11.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/js/bootstrap.min.js"></script>
<script src="/app.js"></script>
<script src="http://imsky.github.io/holder/holder.js"></script>
</html>