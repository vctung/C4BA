
$('form.section-homeabout').submit(function(event) {
	event.preventDefault();
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

$('body').on('click', '#ckfinder-popup-0', function(event) {
	event.preventDefault();
	selectFileWithCKFinder( 'ckfinder-input-popup-0' );
});

$('body').on('click', '#ckfinder-popup-1', function(event) {
	event.preventDefault();
	selectFileWithCKFinder( 'ckfinder-input-popup-1' );
});

$('body').on('click', '#ckfinder-popup-2', function(event) {
	event.preventDefault();
	selectFileWithCKFinder( 'ckfinder-input-popup-2' );
});
$('body').on('click', '#ckfinder-popup-3', function(event) {
	event.preventDefault();
	selectFileWithCKFinder( 'ckfinder-input-popup-3' );
});




function selectFileWithCKFinder( elementId ) {
	CKFinder.modal( {
		chooseFiles: true,
		width: 800,
		height: 600,
		onInit: function( finder ) {
			finder.on( 'files:choose', function( evt ) {
				var file = evt.data.files.first();
				var output = document.getElementById( elementId );
				output.value = file.getUrl();
			} );

			finder.on( 'file:choose:resizedImage', function( evt ) {
				var output = document.getElementById( elementId );
				output.value = evt.data.resizedUrl;
			} );
		}
	} );
}