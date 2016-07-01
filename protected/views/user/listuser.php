 <?php
$this->pageTitle=Yii::app()->name . ' - List Users ';
$this->breadcrumbs=array(
	'List Users',
);
?>


<div class="rowd">
	<div class="col-md-12">
		
		<div class="panel panel-default">

			<div class="panel-heading">
				<i class="icon-external-link-sign"></i>
				List Users Box
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
							<th >Name of User </th>
							<th> Image</th>
							<th> Role </th>
							<th class="hidden-xs"> </th>
							
						</tr>
					</thead>
					<tbody>

					<?php foreach ($user as $key => $value) {
						# code...
					 ?>
						<tr>
							<td># <?php echo $value->id; ?></td>
							<td> 
								 <strong><?php echo $value->name; ?> 	</strong>
							</td>
							
							<td  class="hidden-xs">
								<img style="border-radius: 50%" src="<?php echo Yii::app()->request->baseUrl; ?>/images/avatar/<?php  echo $value->avatar; ?>" width='100'  alt="">
							</td>
							<td><?php echo checkRole($value->role); ?></td>
							<td class="hidden-xs">
								<?php echo CHtml::link(" <i class=\"clip-key-2\"></i>",array('user/changerole', 'id'=>$value['id'],),
								 array(
									 'class'=>'btn btn-primary tooltips',
								)); ?>

								<?php echo CHtml::link(" <i class=\"icon-edit\"></i>",array('user/edituser', 'id'=>$value['id'],),
								 array(
									 'class'=>'btn btn-green tooltips',
								)); ?>

								 <?php echo CHtml::link(" <i class=\"icon-remove icon-white\"></i>",array('user/deleteuser', 'id'=>$value['id'],),
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

<?php 

	function checkRole($role)
	{
		switch ($role) {
			case 'admin':
				return "<button type=\"button\" class=\"btn btn-danger btn-squared\"> Administrator </button>";
				break;
			case 'manager':
				return "<button type=\"button\" class=\"btn btn-primary btn-squared\"> Manager </button>";
				break;
			case 'user':
				return "<button type=\"button\" class=\"btn btn-success  btn-squared\"> User </button>";
				break;
			
			
		}
	}
 ?>