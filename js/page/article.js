jQuery(document).ready(function($) {
	Articles.comment.getComment();
});



$('body').on('submit', '#commentform', function(event) {
	event.preventDefault();
	var name = $('#name').removeClass('has-error').val();
	var email = $('#email').removeClass('has-error').val();
	var comment = $('#comment').removeClass('has-error').val();

	if(name.length < 3 ) {
		$('#name').focus();
		$('#name').addClass('has-error');

	}else if ( !Articles.comment.validateEmail(email) ) {
		console.log(email);
		$('#email').focus();
		$('#email').addClass('has-error');

	}else if (comment.length < 3 ) {
		$('#comment').focus();
		$('#comment').addClass('has-error');
	} else {
		Articles.comment.saveComment(name, email , comment);
	}
	
});


$('body').on('keypress', '#email, #name ', function(event) {
	$(this).removeClass('has-error');
});


$('body').on('click', '.comment-reply-link', function(event) {
	event.preventDefault();
	document.getElementById('name').focus();
	document.getElementById('name').scrollIntoView({block: "end", behavior: "smooth"});

});



var Articles = Articles || {};

Articles.comment = {

	getComment : function(){

		var articleid = $('#page-header').attr('data-article-id');
        url = $('#comments-section').attr('data-get-comment-url');    
		
		$.ajax({
			url: url,
			type: 'GET',
			data: { id : articleid},
		})
		.done(function(data) {
			$('#comments-section').html(data)
		});


	},
	saveComment : function(name, email , comment){

		var articleid = $('#page-header').attr('data-article-id');
		url = $('#comments-section').attr('data-save-comment-url');   
		$.ajax({
			url: url,
			type: 'POST',
			data: { id : articleid , name : name, email : email , comment : comment},
		})
		.done(function(data) {
			if(data = "ok") {
				Articles.comment.getComment();
				$('.commentlist-title').scrollIntoView({block: "end", behavior: "smooth"});
			}
		}); 

	},
	validateEmail  : function(email){		
		var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  		console.log( re.test(email) );
  		return re.test(email);
	},

	leaveComment : function(){

	},

}