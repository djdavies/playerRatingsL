<!doctype html>
<html lang ="en">
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<title>Player Ratings</title>
</head>	
<body>
	@include('layouts.navs.master-nav')
	
	<div class="container">
		<div class="row">
		    <div class="col-md-3">
		    	@include('layouts.bars.left-bar')
		    </div>

		    <div class="col-md-6" style="min-height: 300px; background-color:green;">
				<strong>
			    	@foreach($defenders as $index => $defender)
						<div class="defenders" style="position: absolute; top: 25%; left:{{ 10 + $index * 20 }}%">
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
				</strong>
		    </div>

		    <div class="col-md-3">
				@include('layouts.bars.right-bar')		    	
		    </div>
		    
		</div>
	</div>
</body>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="jquery/jquery-1.11.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/app.js"></script>
</html>