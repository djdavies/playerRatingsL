<!doctype html>
<html lang ="en">
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<title>Player Ratings</title>
</head>	
<body>
	@include('navigation')
	<div class="container">
		<div class="row">
		    <div class="col-md-3">
		    	@include('leftBar')
		    </div>
		    <div class="col-md-6" style="min-height: 300px; background-color:green;">
			    <strong></strong>
		    </div>
		    <div class="col-md-3">
		    	@include('rightBar')
		    </div>
		</div>
	</div>
</body>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="jquery/jquery-1.11.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</html>