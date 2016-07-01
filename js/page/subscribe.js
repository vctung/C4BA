$('form.subscribe-form').submit(function(event) {
	event.preventDefault(); 
	subscribe.active.checkInfo();
});


$('form.subscribe-form input').keypress(function(event) {
	$('#newsletter-email').removeClass('has-error');
});


var subscribe = subscribe || {};

subscribe.active = {		

	sendData : function(){
		
		url = $('.subscribe-form').attr('data-subscribe-url');
		email = $('#newsletter-email').val();
		$.ajax({
			url: url,
			type: 'POST',
			data: { email : email},
		})
		.done(function(data) {
			if (data=="ok") {
				swal("Good job!", "You have successfully registered!", "success");
				 $('#newsletter-email').val("");
			}
		});

		
		
	},
	validateEmail  : function(){
		email =  $('#newsletter-email').val();
		var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  		// console.log( re.test(email) );
  		return re.test(email);
	},
	checkInfo : function(){

		 if (this.validateEmail()) {
		    /* OK */
		    $('#newsletter-email').removeClass('has-error');
		   	this.sendData();
		  } else {
		    /* Fail */
		    $('#newsletter-email').addClass('has-error');
		    // console.log('Fail');
		  }
				
		
	},

};

