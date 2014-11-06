<form 
	id="formSearch"
	class="navbar-form navbar-left" 
	method="get"
	action="searchPlayer"
>
	<div class="form-group">
		<input type="text" id="searchForPlayer" name="searchForPlayer" class="form-control">
	</div>
	<button id="searchPlayerButton" type="submit" class="btn btn-default">Submit</button>
</form>

<script>
// waits for page to load, then loads function
$(document).ready(function(event) {
	// event listener for the form
	$("#formSearch").submit(ajaxSearch);	

});	

function ajaxSearch(event){
	event.preventDefault();

	// setup url
    var formSearch = $('#searchForPlayer').val();
    console.log("Searching for player: " + formSearch);
    var url = decodeURI("{{ URL::route('search.player') }}");
    url = url.replace('{q}', formSearch);

	$.ajax({
		// route that points to controller method
		url: url,
		type: 'get',
		// data i want to send
		data: {search: formSearch},
		dataType: 'json',
		
		success: function(data) {
			// build a useful string!
			var html = '';
			for (var i=0; i<data.length; i++)
				html += '<li><a href="{{ $player->url() }}">' 
				+ data[i].name 
				+ '</a></li>';

			$("#centralContent").html(html);
        },

        error: function() {
        	console.log("Ajax function not successful");
        }

	});
}
</script>