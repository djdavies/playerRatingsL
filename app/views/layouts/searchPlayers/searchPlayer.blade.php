<form 
	id="formSearch"
	class="navbar-form navbar-left" 
	method="POST"
	action="searchPlayer"
>
	<div class="form-group">
		<input type="text" id="searchForPlayer" name="searchForPlayer" class="form-control">
	</div>
	<button id="searchPlayerButton" type="submit" class="btn btn-default">Submit</button>
</form>

<script>
$(document).ready(function() {
	$("#formSearch").submit(function(event) {
		console.log(event);
		event.preventDefault();
	$("#searchPlayerButton").click(function(event) {
		$("#pitch").hide();
	  	});	
	});
});	
</script>