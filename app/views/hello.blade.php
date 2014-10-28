<!doctype html>
<html lang ="en">
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<title>Player Ratings</title>
</head>	
<body>
	<button>Go!</button>

	<form 
		method="POST"
		action="{{ URL::route('api.make') }}">
		
		Title: <input name="title" type="text">
		<button type="submit">Go form</button>
	</form>
</body>


<script>
$(function() {

	// bind to the form event...
	$('form').submit(function (e) {
		e.preventDefault();
		var $this = $(this);
		var action $this.attr('action');
		$.post(action, {
			title: $this.find('[name=title]').val()
	})
});

    $('button').click(function () {
	    $.get("{{ URL::route('api.players') }}", function (json) {
		    // iterate over each item in the collection returned
		    for (var i=0; i<json.length; i++) {
	            // create a new elem
	            var $newElem = $('<li>').text(json[i].name);

	            // add it to the body
	            $('body').append($newElem);
		    }
	    })
	    .error(function () {
	    	alert('ERROR!!!');
	    });
    });
});
       
</script>
</html>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="jquery/jquery-1.11.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>