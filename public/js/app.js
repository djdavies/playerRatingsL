// bind to the form input change events	

$('input[name=username]').on('input', function(){

	var $parent = $(this).parent();
	if (this.value.match(/[^a-zA-Z0-9 ]/g)) {
			// this.value = this.value.replace(/[^a-zA-Z0-9 ]/g, '');
		$parent.addClass("has-error");
    }
    else {
    	$parent.removeClass("has-error");
    }

});

$('input[name=password]').on('input', function(){

	var $parent = $(this).parent();
	if (this.value.match(/[^a-zA-Z0-9 ]/g)) {
			// this.value = this.value.replace(/[^a-zA-Z0-9 ]/g, '');
		$parent.addClass("has-error");
    }
    else {
    	$parent.removeClass("has-error");
    }

});
	//alert('Wrong Information');

// intercept the search form, and customize the URL to give a nice pretty one...
$('[action=searchPlayer]').submit(function (e) {
	e.preventDefault();

	var $this = $(this);
	var searchTerm = $this.find('[name=searchForPlayer]')
		.val()
		.replace(' ', '+');
	window.location = '/searchPlayer/' + searchTerm;
});


// inspect the content of form input to ensure it passes requirements (alpha / num / length)

// if fails -> update form to reflect error - see bootstrap context classes

