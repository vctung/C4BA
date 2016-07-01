
jQuery(document).ready(function($) {
	BLOG.get.getBlog();
});

$('body').on('click', '.loadmore-blog', function(event) {
	var totalPage = $(this).data('count-Page');
	var curent = Blog.attr('data-curent-page');
	
	BLOG.get.curentPage = Blog.attr('data-curent-page');
	BLOG.get.getBlog();
	if(totalPage == curent ) {
		$(this).fadeOut('slow', function() {});
		
	}
	
});



Blog=  $('.__Blog');
var BLOG = BLOG || {};

BLOG.get = {
	
	curentPage :  Blog.attr('data-curent-page'),
	getBlogurl :  Blog.data('get-Blog-url'),

	getBlog : function(){
		
		url = this.getBlogurl;
		page = this.curentPage;
		
		$.ajax({
			url: url,
			type: 'POST',
			data: {curentpage: this.curentPage },
		})
		.done(function(data) {
			Blog.hide().fadeIn('slow').append(data);			
			Blog.attr('data-curent-page',  parseInt(page)+1);
		});

		
		
	},

	sendRequest : function(url, data){
		
		
	},

};

