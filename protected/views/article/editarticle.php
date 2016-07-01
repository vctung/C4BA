 <?php


$this->pageTitle=Yii::app()->name . ' - Contact Us';
$this->breadcrumbs=array(
	'Add Article',
);
?>


<div class="rowd">
	<div class="col-md-12">
		
		<div class="panel panel-default">

			<div class="panel-heading">
				<i class="icon-external-link-sign"></i>
				Edit Article Form
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
								<?php echo $form->labelEx($model,'title'); ?>
							</label>
							<div class="col-sm-9">
								<?php echo $form->textField($model,'title', array('class' => "form-control", 'placeholder' => 'Article title')); ?>
								<?php echo $form->error($model,'title'); ?>
							</div>
						</div>


						<div class="form-group">
							<label class="col-sm-2 control-label" for="form-field-1">
								<?php echo $form->labelEx($model,'image'); ?>
							</label>
							<div class="col-sm-4">
								<?php echo $form->FileField($model,'image', array('class' => "form-control")); ?>
								<?php echo $form->error($model,'image'); ?>
							</div>
							<!-- -->
							<label class="col-sm-2 control-label" for="form-field-1">
								<?php echo $form->labelEx($model,'catid'); ?>
							</label>
							<div class="col-sm-3">
								<?php echo $form->DropDownList($model,'catid', $list, array('class' => "form-control", 'placeholder' => 'Categories name')); ?>
								<?php echo $form->error($model,'catid'); ?>
							</div>

						</div>


						<div class="form-group">
							<label class="col-sm-2 control-label" for="form-field-1">
								<?php echo $form->labelEx($model,'intro'); ?>
							</label>
							<div class="col-sm-9">
								<?php echo $form->textArea($model,'intro', array('class' => "form-control")); ?>
								<?php echo $form->error($model,'intro'); ?>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label" for="form-field-1">
								<?php echo $form->labelEx($model,'content'); ?>
							</label>
							<div class="col-sm-9">
								<?php echo $form->textArea($model,'content', array('class' => "form-control ckeditor")); ?>
								<?php echo $form->error($model,'content'); ?>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label" for="form-field-1">
								<?php echo $form->labelEx($model,'location'); ?>
							</label>
							<div class="col-sm-9">
								<?php echo $form->textField($model,'location', array('class' => "form-control", 'placeholder' => 'Article location')); ?>
								<?php echo $form->error($model,'location'); ?>
							</div>
						</div>



						<div class="form-group">
							<label class="col-sm-2 control-label" for="form-field-1">
								<?php echo $form->labelEx($model,'keytag'); ?>
							</label>
							<div class="col-sm-4 tags">
								<?php echo $form->textField($model,'keytag', array('class' => "form-control", 'placeholder' => 'Article keytag')); ?>
								<?php echo $form->error($model,'keytag'); ?>
							</div>

							<label class="col-sm-2 control-label" for="form-field-1">
								<?php echo $form->labelEx($model,'author'); ?>
							</label>
							<div class="col-sm-3">
								<?php echo $form->textField($model,'author', array('class' => "form-control", 'placeholder' => 'Article author')); ?>
								<?php echo $form->error($model,'author'); ?>
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
									Save Article <i class="icon-circle-arrow-right"></i>
								</button>
							</div>
						</div>
					   

						<?php $this->endWidget(); ?>
					</div>
					<!--- End col-md-12 -->
				</div>
				<!--- End row -->
			</div>
			<!--- End pannel body -->



		</div>
			<!--- End panel panel default -->
	</div>
</div>


<script type="text/javascript">

/*Do not Delete*/

	var ids  ="<?php echo $this->getUniqueId(); ?>";//get Controller name ( like ID values in file menu.php);
	var action_name = "<?php echo Yii::app()->controller->action->id; ?>";
	jQuery(document).ready(function($) {
		actionRun(ids, action_name);
	});

/* Do not Delete */
</script>