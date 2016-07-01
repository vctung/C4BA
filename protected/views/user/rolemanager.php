 <?php


$this->pageTitle=Yii::app()->name . ' - Access Control List';
$this->breadcrumbs=array(
	'Access Control List',
);
?>


<div class="rowd">
	<div class="col-md-12">
		
		<div class="panel panel-default">

			<div class="panel-heading">
				<i class="icon-external-link-sign"></i>
				Access Control List Box
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
				
				<table class='table table-hover'>
					<thead>
						<tr>
							<th># ID</th>
							<th># Access Control Name </th>
						</tr>
					</thead>
					<tbody>
					<?php foreach ($acl as $key => $value) {
						# code...
					?>
						<tr>
							<td># <?php echo $value->id; ?></td>
							<td style="text-transform:uppercase; font-weight: bold;"> <i class="clip-key-2"></i> <?php echo $value->name; ?></td>
						</tr>
					<?php }   ?>
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