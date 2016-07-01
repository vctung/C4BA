 <?php


$this->pageTitle=Yii::app()->name . ' - Contact Us';
$this->breadcrumbs=array(
	'Edit Product Box',
);
?>


<div class="rowd">
	<div class="col-md-12">
		
		<div class="panel panel-default">

			<div class="panel-heading">
				<i class="icon-external-link-sign"></i>
				Edit Product Box
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

						<?php $form=$this->beginWidget('CActiveForm', array(
						        'enableClientValidation'=>true,
						        'clientOptions'=>array(
						            'validateOnSubmit'=>true,
						        ),
						         'htmlOptions'=>array(
							        'class'=>'form-horizontal',
							        'enctype' => 'multipart/form-data'
							    ),
						    ));
					     ?>


					     <div class="form-group">
							<label class="col-sm-2 control-label" for="form-field-1">
								<?php echo $form->labelEx($model,'name'); ?>
							</label>
							<div class="col-sm-9">
								<?php echo $form->textField($model,'name', array('class' => "form-control", 'placeholder' => 'Product name ')); ?>
								<?php echo $form->error($model,'name'); ?>
							</div>
						</div>


	                    <div class="form-group">
							<label class="col-sm-2 control-label" for="form-field-1">
								Behind image
							</label>
							<div class="col-sm-4 tags">
								<?php echo $form->FileField($model,'att_1', array('class' => "form-control")); ?>
								<?php echo $form->error($model,'att_1'); ?>
							</div>

							<label class="col-sm-2 control-label" for="form-field-1">
								<?php echo $form->labelEx($model,'sku'); ?>
							</label>
							<div class="col-sm-3">
								<?php echo $form->textField($model,'sku', array('class' => "form-control", 'placeholder' => 'Mã sản phẩm')); ?>
								<?php echo $form->error($model,'sku'); ?>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label" for="form-field-1">
								<?php echo $form->labelEx($model,'image'); ?>
							</label>
							<div class="col-sm-4 tags">
								<?php echo $form->FileField($model,'image', array('class' => "form-control")); ?>
								<?php echo $form->error($model,'image'); ?>
							</div>

							<label class="col-sm-2 control-label" for="form-field-1">
								<?php echo $form->labelEx($model,'catalogid'); ?>
							</label>
							<div class="col-sm-3">
								<?php echo $form->DropDownList($model,'catalogid', $list, array('class' => "form-control", 'placeholder' => 'Categories name')); ?>
								<?php echo $form->error($model,'catalogid'); ?>
							</div>
						</div>


					
						<div class="row">
							<div class="col-sm-10 col-sm-offset-1">									
								<!-- Start tab -->
									<div class="tabbable">
												<ul id="myTab" class="nav nav-tabs tab-bricky">
													<li class="active">
														<a href="#panel_tab2_example1" data-toggle="tab">
															<?php echo $form->labelEx($model,'description'); ?>
														</a>
													</li>
													<li>
														<a href="#panel_tab2_example2" data-toggle="tab">
															Color
														</a>
													</li>
													
													<li>
														<a href="#panel_tab2_example3" data-toggle="tab">
															Size
														</a>
													</li>
													
												
												</ul>
												<div class="tab-content">
													<div class="tab-pane in active" id="panel_tab2_example1">
														<?php echo $form->textArea($model,'description', array('class' => "form-control ckeditor", 'placeholder' => 'Product name ')); ?>
														<?php echo $form->error($model,'description'); ?>
													</div>
													<div class="tab-pane" id="panel_tab2_example2">
														<?php echo $form->textArea($model,'att_2', array('class' => "form-control ckeditor", 'placeholder' => 'Color')); ?>
														<?php echo $form->error($model,'att_2'); ?>
													</div>
													<div class="tab-pane" id="panel_tab2_example3">
													<?php echo $form->textArea($model,'att_3', array('class' => "form-control ckeditor", 'placeholder' => 'Size ')); ?>
													<?php echo $form->error($model,'att_3'); ?>
													</div>
												
												</div>
											</div>
								<!-- END :: tab -->
							</div>
						</div>

						<div class="row">
							<div class="col-md-7 col-md-offset-1">
								<i>
									*Note : Check infomation before save !!!!
								</i>
							</div>
							<div class="col-md-3">
								<button class="btn btn-yellow btn-block" type="submit">
									Edit Products <i class="icon-circle-arrow-right"></i>
								</button>
							</div>
						</div>




						<?php $this->endWidget(); ?>

					</div>
				</div>

				

			</div>
			<!--- End pannel body -->



		</div>
			<!--- End panel panel default -->
	</div>
</div>

 <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.number.js"></script>
<script type="text/javascript">
	var ids  ="<?php echo $this->getUniqueId(); ?>";//get Controller name ( like ID values in file menu.php)
	var action_name = "<?php echo Yii::app()->controller->action->id; ?>";
	jQuery(document).ready(function($) {
		actionRun(ids, action_name);


		$('#Product_price, #Product_saleprice').number( true, 2 );

	});//end ready fucntion


</script>