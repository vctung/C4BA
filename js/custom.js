jQuery(document).ready(function($) {
	

});//end ready function


function actionRun(Controller_name, action_name)
{

	$('#'+Controller_name).attr('class', 'active open');//get active menu
	$('#'+Controller_name).find('.sub-menu').attr('style', 'display: block;');
	$('#'+Controller_name).find('#'+action_name).attr('class', 'active open');

	$('.controller_name').text(Controller_name);
	$('.action_name').text(action_name);
	$('.controller_name').css('textTransform', 'capitalize');
	$('.action_name').css('textTransform', 'capitalize');
}

/* END  action run */