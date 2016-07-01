 <?php


	$this->pageTitle=Yii::app()->name . ' - Contact Us';
	$this->breadcrumbs=array(
		'List Categories',
	);
?>


<div class="rowd">
	<div class="col-md-12">
		
		<div class="panel panel-default">

			<div class="panel-heading">
				<i class="icon-external-link-sign"></i>
					Artilcles List
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
				


				<table class="table table-hover" id="sample_1">
						<thead>
							<tr>
								<th># ID</th>
								<th class="hidden-xs">Title</th>
								<th> Image</th>
								<th> Date Created</th>
								<th class="hidden-xs"> </th>
								
							</tr>
						</thead>
						<tbody>

						<?php foreach ($articles as $key => $value) {
							# code...
						 ?>
							<tr>
								<td># <?php echo $value->id; ?></td>
								<td> 
									<?php echo $value->title; ?> 
									<p><small style="margin-left: 10px; color: green; "> Category name :  <strong>  <?php echo getCatename($value->catid, $categories); ?> </strong></small></p>
								</td>
								<td  class="hidden-xs">
									<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/article/<?php  echo $value->image; ?>" width='150'  alt="">
								</td>
								<td><?php echo $value->datetcreate; ?></td>
								<td class="hidden-xs">
									
									<?php echo CHtml::link(" <i class=\"icon-edit\"></i>",array('article/editarticle', 'id'=>$value['id'],),
									 array(
										 'class'=>'btn btn-green tooltips',
										 'confirm' => 'Are you sure to Edit ?',
									)); ?>

									 <?php echo CHtml::link(" <i class=\"icon-remove icon-white\"></i>",array('article/deletearticle', 'id'=>$value['id'],),
									 array(
										 'class'=>'btn btn-bricky tooltips',
										 'confirm' => 'Are you sure to Delete ?'
									)); ?>


								</td>
								
							</tr>
						<?php } ?>	
						</tbody>
					</table>


				

			</div> <!--- End pannel body -->




		</div>
	</div>
</div>




		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY  ( page use data table datatable ) -->
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/plugins/select2/select2.min.js"></script>
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/plugins/DataTables/media/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/plugins/DataTables/media/js/DT_bootstrap.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/table-data.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->


<script type="text/javascript">
	var ids  ="<?php echo $this->getUniqueId(); ?>";//get Controller name ( like ID values in file menu.php)
	var action_name = "<?php echo Yii::app()->controller->action->id; ?>";
	jQuery(document).ready(function($) {
		actionRun(ids, action_name);

	});

	jQuery(document).ready(function() {
		// Main.init();
		TableData.init();
		$('#sample_1_filter>label').css('float', 'right');
	});


</script>

<?php 
	function getCatename($catid, $cate)
	{
		foreach ($cate as $key => $value) {

			if (  $value->id == $catid)
			{	 
					return  $value->name;
			}
		}//end foreach

	}//end function
 ?>