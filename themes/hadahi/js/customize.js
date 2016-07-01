jQuery(document).ready(function($) {

		var cat_box_width = $('.pro_container  li.img_ho_st_holder a').width();
		console.log(cat_box_width);
		$('.pro_container  li.img_ho_st_holder a').height(cat_box_width*1.484057);

		// $('.custom_cat_box pro_container  li.img_ho_st_holder a.proimage.img_ho_st1 ').css({
		// 	height: cat_box_width*1.484057,
		// });



});