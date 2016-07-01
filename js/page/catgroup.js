
jQuery(document).ready(function($) {
	BLOG.get.getBlog();

	var totalPage = $('.loadmore-blog').data('count-Page');
	if(totalPage == 1 ) {
		$('.loadmore-blog').fadeOut('slow', function() {});
		
	}
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



Blog=  $('.__Cat');
var BLOG = BLOG || {};

BLOG.get = {
	
	curentPage :  Blog.attr('data-curent-page'),
	getBlogurl :  Blog.data('get-Blog-url'),
	catid :  Blog.attr('data-cat-id'),

	getBlog : function(){
		
		url = this.getBlogurl;
		page = this.curentPage;
	
		$.ajax({
			url: url,
			type: 'POST',
			data: {curentpage: this.curentPage,  catid : this.catid },
		})
		.done(function(data) {
			Blog.hide().fadeIn('slow').append(data);		
			Blog.attr('data-curent-page',  parseInt(page)+1);
		});

		
		
	},

	sendRequest : function(url, data){
		
		
	},

};

