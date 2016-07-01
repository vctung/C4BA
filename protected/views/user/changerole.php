 <?php


$this->pageTitle=Yii::app()->name . ' - Change Role ';
$this->breadcrumbs=array(
	'Change Role',
);
?>


<div class="rowd">
	<div class="col-md-12">
		
		<div class="panel panel-default">

			<div class="panel-heading">
				<i class="icon-external-link-sign"></i>
				Change Role Box
				<div class="panel-tools">
					<a class="btn btn-xs btn-link panel-collapse collapses" href="#">
					</a>
					<a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
						<i class="icon-wrench"></i>
					</a>
					<a class="btn btn-xs btn-link panel-refresh" href="#">
						<i class="icon-refresh"></i>
					</a>
					<a class="btn btn-xs btn-link panel-expand" href="#">
						<i class="icon-resize-full"></i>
					</a>
					<a class="btn btn-xs btn-link panel-close" href="#">
						<i class="icon-remove"></i>
					</a>
				</div>
			</div>


			<div class="panel-body buttons-widget">
				<div class="row">
						<div  class="col-md-4">
								<table class="table table-hover">
									<thead>
										<tr>
											<th  colspan='2' style="text-align:center">
											<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/avatar/<?php echo $userinfo->avatar; ?>" width='150'></th>
										</tr>
									</thead>
									<tbody>

										<tr>
											<td>Name</td>
											<td> <strong><?php echo $userinfo->name;  ?></strong></td>
										</tr>

										<tr>
											<td>Email</td>
											<td> <strong><?php echo $userinfo->email;  ?></strong></td>
										</tr>

										<tr>
											<td>Date create</td>
											<td> <strong><?php echo $userinfo->datecreate;  ?></strong></td>
										</tr>

									</tbody>
								</table>
						</div>

						<div  class="col-md-8">
							
							<table class="table table-hover">
								<thead>
									<tr>
										<th> <i class="icon-list-ul"></i> Role</th>
										<th> <i class="clip-key"></i> Management </th>
									</tr>
								</thead>
								<tbody>
								<?php foreach ($acl as $key => $value) {


								  ?>
									<tr>
										<td><?php echo $value->name; ?></td>
										<td class="show_acl" data-roleid="<?php echo $value->id ?>" data-flag="<?php echo setOnoff($value->id, $acldetail ); ?>">
											<div class="make-switch" data-on="primary" data-off="info">
												<input class="cai_nut_check" type="checkbox" <?php echo setOnoff($value->id, $acldetail ); ?> >
											</div>												
										</td>
									</tr>
								<?php  }  ?>
								</tbody>
							</table>
						</div>

				</div>
			</div>
			<!--- End pannel body -->



		</div>
			<!--- End panel panel default -->
	</div>
</div>




<?php 

	function setOnoff($aclid, $acldetail)
	{
		foreach ($acldetail as $key => $value) {

			if($value['aclid'] == $aclid)
			{
				return "checked";
			} 			
		}

		return "";
	}
 ?>

















<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/plugins/ladda-bootstrap/dist/ladda-themeless.min.css">
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/plugins/bootstrap-switch/static/stylesheets/bootstrap-switch.css">
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/plugins/bootstrap-social-buttons/social-buttons-3.css">

<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/plugins/ladda-bootstrap/dist/spin.min.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/plugins/ladda-bootstrap/dist/ladda.min.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/plugins/bootstrap-switch/static/js/bootstrap-switch.min.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/ui-buttons.js"></script>
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->

<script type="text/javascript">
	var ids  ="<?php echo $this->getUniqueId(); ?>";//get Controller name ( like ID values in file menu.php)
	var action_name = "<?php echo Yii::app()->controller->action->id; ?>";

	jQuery(document).ready(function($) {
		actionRun(ids, action_name);	
	});

	jQuery(document).ready(function() {
			Main.init();
			UIButtons.init();
	});


	var userid = "<?php echo $userinfo->id; ?>";






	$(".make-switch").on("click",function(){
	  	aclid= $(this).parent().data('roleid');
	  	flag= $(this).parent().data('flag');

	  	if (flag == 'checked')
	  	{
	  		$(this).parent().data('flag', '');
	  	} else {
	  		$(this).parent().data('flag', 'checked');
	  	}
	 
	  	changeRole (userid, aclid, flag);
	});


	function changeRole (userid, aclid, flag) {
		if(flag == 'checked')
		{
			action = "delete";
		}	else {
			action = "add";
		}
		

		$.ajax({
			url: "<?php echo Yii::app()->createUrl('user/getroleajax'); ?>",
			type: 'POST',
			data: {userid: userid, aclid:aclid , action : action},
		})
		.done(function(data) {
			// console.log(data);
			alert(data);
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
		
	}//end function checkRole
</script>