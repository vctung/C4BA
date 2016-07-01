 <?php
//  echo "<pre>";
// print_r($categories); exit();

$this->pageTitle=Yii::app()->name . ' - Contact Us';
$this->breadcrumbs=array(
	' Order List Box ',
);
?>


<div class="rowd">
	<div class="col-md-12">
		
		<div class="panel panel-default">

			<div class="panel-heading">
				<i class="icon-external-link-sign"></i>
				Order List Box 
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


			<div class="panel-body">
				

				<table class="table table-hover" id="sample-table-1">
					<thead>
						<tr>
							<th class="center"># ID</th>
							<th>Customer name</th>
							<th class="hidden-xs"> Phone number </th>
							<th> Total</th>
							<th class="hidden-xs">Date Created</th>
							<th>Status</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
					<?php foreach ( $order as $value) { ?>
						<tr rel="<?php echo $value['id']; ?>">
							<td class="center"># <?php echo $value['id']; ?></td>
							<td>
							  <?php echo $value['name']; ?>
							  	<p style="color: green"><small> Email: <?php echo $value['email']; ?></small></p>
							</td>
							
							<td class="hidden-xs"><?php echo $value['phone']; ?></td>
							<td><?php echo number_format($value['total'] ) ;?></td>
							<td class="hidden-xs"><?php echo $value['datecreate'] ?></td>
							<td><?php echo setCompleted ($value['completed'] ); ?></td>
							<td class="center">
							<div class="visible-md visible-lg hidden-sm hidden-xs">

								 <?php echo CHtml::link(" Detail ",array('shop/orderdetail', 'id'=>$value['id'],),
									 array(
										 'class'=>'btn btn-primary tooltips',
								)); ?>

								<button type="button" class="btn btn-warning btn_hidden_order">Hidden</button>

								 <?php echo CHtml::link(" <i class=\"icon-trash icon-white\"></i>",array('shop/deleteorder', 'id'=>$value['id'],),
								 array(
									 'class'=>'btn btn-bricky tooltips',
									 'confirm' => 'Are you sure to Delete ?'
								)); ?>
							</div>
							<div class="visible-xs visible-sm hidden-md hidden-lg">
								<div class="btn-group">
									<a class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
										<i class="icon-cog"></i> <span class="caret"></span>
									</a>
									<ul role="menu" class="dropdown-menu pull-right">									
										<li role="presentation">
											<?php echo CHtml::link(" <i class=\"icon-remove\"></i> Remove ",array('shop/deletecatalog', 'id'=>$value['id'],),
												 array(
													 'role'=>'menuitem',
													 'confirm' => 'Are you sure to Delete ?'
												)); ?>
										</li>
									</ul>
								</div>
							</div></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>

				

			</div>
			<!--- End pannel body -->



		</div>
			<!--- End panel panel default -->
	</div>
</div>

<?php 

	function setCompleted($value)
	{
		if($value == "yes")
		{
			return $string = "<span  style=\" color: green\"> Finish Order </span>";
		} else {
			return $string = "<button type=\"button\" class=\"btn btn-bricky finish_order\"> Pending </button>";
		}
	}
 ?>

<script type="text/javascript">
	var ids  ="<?php echo $this->getUniqueId(); ?>";//get Controller name ( like ID values in file menu.php)
	var action_name = "<?php echo Yii::app()->controller->action->id; ?>";
	jQuery(document).ready(function($) {
		actionRun(ids, action_name);

	});// end ready function


$('.finish_order').click(function(event) {

	confirm = confirm("Are you sure to delete  ???");
	if(confirm==true)
	{
		id = $(this).parent().parent().attr('rel');//id

		$.ajax({
			 url: "<?php echo Yii::app()->createUrl('shop/finishorder'); ?>",
			type: 'POST',
			data: {id: id},
		})
		.done(function(data) {
			console.log("done");
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});//ajax

		$(this).parent().html("<span style=\" color: green\"> Finish Order </span>");
		
	}
});//end finish order row click



$('.btn_hidden_order').click(function(event) {
	confirm = confirm("Are you sure to hidden  ???");
	if(confirm==true)
	{
			id = $(this).parent().parent().parent().attr('rel');//id
			$.ajax({
			 	 url: "<?php echo Yii::app()->createUrl('shop/hiddenorder'); ?>",
				type: 'POST',
				data: {id: id},
				})
				.done(function(data) {
					console.log("done");
				})
				.fail(function() {
					console.log("error");
				})
				.always(function() {
					console.log("complete");
			});//ajax
			
		$(this).parent().parent().parent().hide("800");
	}//end if

});






</script>


