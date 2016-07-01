 <?php


$this->pageTitle=Yii::app()->name . ' - Contact Us';
$this->breadcrumbs=array(
	'List Parter Box',
);
?>


<div class="rowd">
	<div class="col-md-12">
		
		<div class="panel panel-default">

			<div class="panel-heading">
				<i class="icon-external-link-sign"></i>
				List Parter Box
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
							<th class="center">#ID</th>
							<th>Partner Name</th>
							<th class="hidden-xs">Lik</th>
							<th class="hidden-xs">Logo image</th>
							<th></th>
						</tr>
					</thead>
					<tbody>

					<?php foreach ($partner as $key => $value) {
						# code...
					  ?>

						<tr>
							<td class="center hidden-xs"># <?php  echo $value->id; ?></td>
							<td><?php  echo $value->name; ?></td>
							<td><?php  echo $value->link; ?></td>
							<td class="hidden-xs">
								<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/partner/<?php echo  $value->image;  ?>" width="100" alt="">
							</td>
							<td class="center">
							<div class="visible-md visible-lg hidden-sm hidden-xs">
							<?php echo CHtml::link(" <i class=\"icon-edit\"></i>",array('partner/editpartner', 'id'=>$value['id'],),
								 array(
									 'class'=>'btn btn-green tooltips',
								)); ?>

								 <?php echo CHtml::link(" <i class=\"icon-remove icon-white\"></i>",array('partner/deletepartner', 'id'=>$value['id'],),
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

											<?php echo CHtml::link(" <i class=\"icon-edit\"></i> Edit",array('partner/editpartner', 'id'=>$value['id'],),
											 array(
												 'role'=>'menuitem',
												 'tabindex'=>'menuitem',
											)); ?>

										</li>
										<li role="presentation">										
											<?php echo CHtml::link(" <i class=\"icon-remove\"></i> Remove",array('partner/editpartner', 'id'=>$value['id'],),
											 array(
												 'role'=>'menuitem',
												 'tabindex'=>'menuitem',
											)); ?>
										</li>
									</ul>
								</div>
							</div></td>
						</tr>

						<?php }  ?>
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