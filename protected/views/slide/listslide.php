 <?php


$this->pageTitle=Yii::app()->name . ' - Contact Us';
$this->breadcrumbs=array(
	'List Slide Box',
);
?>


<div class="rowd">
	<div class="col-md-12">
		
		<div class="panel panel-default">

			<div class="panel-heading">
				<i class="icon-external-link-sign"></i>
				List Slide Box
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
								<th class="hidden-xs"> Text</th>
								<th> Date Created</th>
								<th class="hidden-xs"> </th>
								
							</tr>
						</thead>
						<tbody>

						<?php foreach ($slide as $key => $value) {
							# code...
						 ?>
							<tr>
								<td># <?php echo $value->id; ?></td>
								<td> 
									<?php echo $value->name; ?> 
								</td>
								<td  class="hidden-xs">
									<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/slide/<?php  echo $value->image; ?>" width='150'  alt="">
								</td>
								<td class="hidden-xs"><?php echo $value->text; ?></td>
								<td><?php echo $value->datecreate; ?></td>
								<td class="hidden-xs">
									
									<?php echo CHtml::link(" <i class=\"icon-edit\"></i>",array('slide/editslide', 'id'=>$value['id'],),
									 array(
										 'class'=>'btn btn-green tooltips',
										 'confirm' => 'Are you sure to Edit ?',
									)); ?>

									 <?php echo CHtml::link(" <i class=\"icon-remove icon-white\"></i>",array('slide/deleteslide', 'id'=>$value['id'],),
									 array(
										 'class'=>'btn btn-bricky tooltips',
										 'confirm' => 'Are you sure to Delete ?'
									)); ?>


								</td>
								
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


<script type="text/javascript">
	var ids  ="<?php echo $this->getUniqueId(); ?>";//get Controller name ( like ID values in file menu.php)
	var action_name = "<?php echo Yii::app()->controller->action->id; ?>";
	jQuery(document).ready(function($) {
		actionRun(ids, action_name);

	});


</script>