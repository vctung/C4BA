 <?php


$this->pageTitle=Yii::app()->name . ' - Contact Us';
$this->breadcrumbs=array(
	'Order Detail Box',
);


?>


<div class="rowd">
	<div class="col-md-12">
		
		<div class="panel panel-default">

			<div class="panel-heading">
				<i class="icon-external-link-sign"></i>
				Order Detail Box
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
				<h2><i class="clip-cart teal"></i> Order Detail   </h2>
					<div class="row">
							<div class="col-md-2 order_detail_image" >
									<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/noimage.jpg" width="160">
							</div>

							<div class="col-md-6"> 

								<table class="table table-hover">
									<tbody>
										<tr>
											<td> <i class="clip-user-3"></i> Customer Name : <?php echo $order_detail->name; ?> </td>
										</tr>
										<tr>
											<td> <i class="icon-envelope"></i> Email : <?php echo $order_detail->email; ?> </td>
										</tr>
										<tr>
											<td><i class="clip-phone-hang-up"></i>  Phone : <?php echo $order_detail->phone; ?> </td>
										</tr>

										<tr>
											<td><i class="icon-dollar"></i>  Total  : <?php echo number_format($order_detail->total); ?> </td>
										</tr>
										<tr>
											<td><i class="icon-calendar"></i>  Date Created  : <?php echo $order_detail->datecreate; ?></td>
										</tr>
									</tbody>
								</table>

							</div>
					</div>

					<div class="row">
						<div class="col-md-12"> 
								<table class="table table-hover">
									<thead>
										<tr>
											<th># ID</th>
											<th> Product name</th>
											<th> Product image</th>
											<th> Quantity </th>
										</tr>
									</thead>
									<tbody>
									<?php  foreach ($item as $key => $value) {
										
									 ?>
										<tr>
											<td># <?php echo   $value['id'] ?></td>
											<td><?php echo $value['productname'] ?></td>
											<td>
											<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/product/<?php echo $value['image'] ?>" width="100" alt="">
											</td>
											<td><?php echo $value['quantity'] ?></td>
										</tr>
									<?php } ?>
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



<script type="text/javascript">
	var ids  ="<?php echo $this->getUniqueId(); ?>";//get Controller name ( like ID values in file menu.php)
	var action_name = "<?php echo Yii::app()->controller->action->id; ?>";
	jQuery(document).ready(function($) {
		actionRun(ids, action_name);

	});


</script>