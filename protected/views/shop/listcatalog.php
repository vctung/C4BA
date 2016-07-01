 <?php
//  echo "<pre>";
// print_r($categories); exit();

$this->pageTitle=Yii::app()->name . ' - Contact Us';
$this->breadcrumbs=array(
	'Product Catalog Manager ',
);
?>


<div class="rowd">
	<div class="col-md-12">
		
		<div class="panel panel-default">

			<div class="panel-heading">
				<i class="icon-external-link-sign"></i>
				Product Catalog Manager Box
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
							<th>Categories name</th>
							<th class="hidden-xs">Categoy Level</th>
							<th class="hidden-xs">Date Created</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
					<?php foreach ( $catalog as $value) { ?>
						<tr>
							<td class="center"># <?php echo $value['id']; ?></td>
							<td>
							  <?php echo $value['name']; ?>
							  	<p style="margin-left: 20px"><small>Parent: <?php echo setParentName($value['parentid'], $all); ?></small></p>
							  </td>
							<td  class="hidden-xs">
								<?php echo setLevel($value['level']); ?>
							</td>
							<td class="hidden-xs"><?php echo $value['datecreate'] ?></td>
							<td class="center">
							<div class="visible-md visible-lg hidden-sm hidden-xs">
								<?php echo CHtml::link(" <i class=\"icon-edit\"></i>",array('shop/editcatalog', 'catid'=>$value['id'],),
								 array(
									 'class'=>'btn btn-green tooltips',
									 'confirm' => 'Are you sure to Edit ?',
								)); ?>

								 <?php echo CHtml::link(" <i class=\"icon-remove icon-white\"></i>",array('shop/deletecatalog', 'catid'=>$value['id'],),
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
											<a role="menuitem" tabindex="-1" href="#">
												<i class="icon-edit"></i> Edit
											</a>
										</li>
										<li role="presentation">
											<a role="menuitem" tabindex="-1" href="#">
												<i class="icon-remove"></i> Remove
											</a>
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


<script type="text/javascript">
	var ids  ="<?php echo $this->getUniqueId(); ?>";//get Controller name ( like ID values in file menu.php)
	var action_name = "<?php echo Yii::app()->controller->action->id; ?>";
	jQuery(document).ready(function($) {
		actionRun(ids, action_name);

	});


</script>

<?php 


	function setParentName($parentid , $all)
	{
		if ($parentid == 0)
		{
			return "<span style='color : blue'> No Parent</span>";
		} 

		foreach ($all as $key => $value) {
			if ( $value->id == $parentid)
			{
				return "<span style='color : green'>".$value->name."<span>";
			}
		}
	}	



	function setLevel($setLevel)
	{

		switch ($setLevel) {
			case '1':
				 return "<button type=\"button\" class=\"btn btn-primary btn-squared btn-lg\"> Level 1 </button>";
				break;
			
			case '2':
				return "<button type=\"button\" class=\"btn btn-success btn-squared\"> Level 2 </button>"; 
				break;

			case '3':
				return "<button type=\"button\" class=\"btn btn-danger btn-squared btn-xs\"> Level 3 </button>";
				break;
			
		}
	}


 ?>