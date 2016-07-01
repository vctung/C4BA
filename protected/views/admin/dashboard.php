 <?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Contact Us';
$this->breadcrumbs=array(
	'Dashboard',
);
?>

<script type="text/javascript">
	jQuery(document).ready(function($) {
		$('#dashboard').attr('class', 'active');
	});
</script>


<div class="rowd">
	
	<div class="col-md-8">


		<div class="panel panel-default">

			<div class="panel-heading">
				<i class="icon-external-link-sign"></i>
					Quick Menu
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
				<div class="row">

					<div class="col-sm-3">
						<?php echo CHtml::link(" <i class=\"icon-briefcase\"></i> Website Infomation ",array('systeminfo/infosite'),
							 array(
								 'class'=>'btn btn-icon btn-block quick_icon',
							)); ?>
					</div>

					<div class="col-sm-3">
						<?php echo CHtml::link(" <i class=\"icon-globe\"></i> System Infomation ",array('systeminfo/infosystem'),
							 array(
								 'class'=>'btn btn-icon btn-block quick_icon',
							)); ?>
					</div>

					<div class="col-sm-3">
							<?php echo CHtml::link(" <i class=\"icon-folder-open\"></i> Categories Manager ",array('categories/listcategories'),
							 array(
								 'class'=>'btn btn-icon btn-block quick_icon',
							)); ?>
					</div>

					<div class="col-sm-3">
						<?php echo CHtml::link(" <i class=\"icon-file-alt\"></i> Articles Manager ",array('article/listarticle'),
							 array(
								 'class'=>'btn btn-icon btn-block quick_icon',
							)); ?>
					</div>

				</div>
				<!-- ===== End A Row ===== -->

				<div class="row">

						<div class="col-sm-3">
						<?php echo CHtml::link(" <i class=\"clip-file-plus\"></i> <br>Add New Articles ",array('article/addarticle'),
							 array(
								 'class'=>'btn btn-icon btn-block quick_icon',
							)); ?>
						</div>

						<div class="col-sm-3">
						<?php echo CHtml::link(" <i class=\"clip-folder-plus\"></i> <br>Add New Category ",array('categories/addcategory'),
							 array(
								 'class'=>'btn btn-icon btn-block quick_icon',
							)); ?>
						</div>

						<div class="col-sm-3">
						<?php echo CHtml::link(" <i class=\"clip-users-2\"></i> <br>Partner Manager ",array('partner/listpartner'),
							 array(
								 'class'=>'btn btn-icon btn-block quick_icon',
							)); ?>
						</div>

						<div class="col-sm-3">
						<?php echo CHtml::link(" <i class=\"clip-plus-circle\"></i> <br>Add new Partner  ",array('partner/addpartner'),
							 array(
								 'class'=>'btn btn-icon btn-block quick_icon',
							)); ?>
						</div>

				</div>
			</div>
			
		

		</div>
		<!-- ====================  END Pannel Quick menu ====================  -->




		<div class="panel panel-default">

			<div class="panel-heading">
				<i class="icon-external-link-sign"></i>
				 Shopping Quick Menu
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
				<div class="row">

					<div class="col-sm-3">
						<?php echo CHtml::link(" <i class=\"clip-grid-3\"></i> <br> Product Manager  ",array('shop/listproduct'),
							 array(
								 'class'=>'btn btn-icon btn-block shopping_icon',
							)); ?>
					</div>

					<div class="col-sm-3">
							<?php echo CHtml::link(" <i class=\"icon-folder-open\"></i> Catalog Manager ",array('shop/listcatalog'),
							 array(
								 'class'=>'btn btn-icon btn-block shopping_icon',
							)); ?>
					</div>

					<div class="col-sm-3">
						<?php echo CHtml::link(" <i class=\"clip-file-plus\"></i>  <br>  Add New Product ",array('shop/addproduct'),
							 array(
								 'class'=>'btn btn-icon btn-block shopping_icon',
							)); ?>
					</div>

					<div class="col-sm-3">
						<?php echo CHtml::link(" <i class=\"icon-dollar\"></i> Order Manager ",array('shop/listorder'),
							 array(
								 'class'=>'btn btn-icon btn-block shopping_icon',
							)); ?>
					</div>

				</div>
				<!-- ===== End A Row ===== -->

			</div>
		</div>
		<!-- ====================  END Pannel Shoping menu ====================  -->



		


	</div>
<!-- ====================  END Pannel Left ====================  -->

	<div class="col-md-4">
		
		<div class="panel panel-default">

			<div class="panel-heading">
				<i class="icon-external-link-sign"></i>
					New 5th Article
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
				<div class="row">
					<div class="col-md-12">
						<table class="table table-hover">
							<tbody>
							<?php  foreach ($article as $key => $value) {
								# code...
							?>
								<tr>
									<td>
										<?php echo CHtml::link("<i class=\"clip-pencil\"></i> ".$value['title'],array('article/editarticle','id' => $value['id'])); ?>
									</td>
								</tr>
							<?php  }   ?>
							</tbody>
						</table>
						
					</div>
				</div>
			</div>


		</div>


		<div class="panel panel-default">

			<div class="panel-heading">
				<i class="icon-external-link-sign"></i>
					Last 5th Login History
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
				<div class="row">
					<div class="col-md-12">
					
					<table class="table table-hover">
							<tbody>
							<?php  foreach ($login_history as $key => $value) {
								# code...
							?>
								<tr>
									<td>
										<i class="clip-user-4" style="margin-right: 20px"></i>
										<?php echo $value['time'] ?>
									</td>
								</tr>
							<?php  }   ?>
							</tbody>
						</table>

					</div>
				</div>
			</div>


		</div>

	</div>
</div>