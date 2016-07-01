$('form.section-homefooter').submit(function(event) {
	event.preventDefault();
	console.log( $(this).html() );

	var id = $(this).data('section-detail-id');
	var url = $(this).data('savehomeabout-url');

	data = $(this).serialize().replace("%252F", "/");

	console.log( $(this).serialize() );

	$.ajax({
		url: url,
		type: 'POST',
		data: {id: id, data : data },
	})
	.done(function(data) {
		if (data=="ok") {
				swal("Good job!", "You have successfully saved!", "success");				
			}
	});
});


