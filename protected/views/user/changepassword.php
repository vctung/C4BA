 <?php


$this->pageTitle=Yii::app()->name . ' - Contact Us';
$this->breadcrumbs=array(
	'Change Password',
);
?>


<div class="rowd">
	<div class="col-md-12">
		
		<div class="panel panel-default">

			<div class="panel-heading">
				<i class="icon-external-link-sign"></i>
					Change Password Box
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
						<?php $form=$this->beginWidget('CActiveForm', array(
						        'enableClientValidation'=>true,
						        'clientOptions'=>array(
						            'validateOnSubmit'=>true,
						        ),
						         'htmlOptions'=>array(
							        'class'=>'form-horizontal',
							        // 'enctype' => 'multipart/form-data'
							    ),
						    ));


					


					     ?>

					       <div class="form-group">
							
								<div class="col-sm-9">

									<?php if(Yii::app()->user->hasFlash('success')):?>
									    <div class="info">
									        <?php echo Yii::app()->user->getFlash('success'); ?>
									    </div>
									<?php endif; ?>

								</div>
							</div>

					    <div class="form-group">
							<label class="col-sm-2 control-label" for="form-field-1">
								<?php echo $form->labelEx($model,'currentPassword'); ?>
							</label>
							<div class="col-sm-9">
								<?php echo $form->passwordField($model,'currentPassword', array('class' => "form-control ", 'placeholder' => 'current Password')); ?>
								<?php echo $form->error($model,'currentPassword'); ?>
							</div>
						</div>


						  <div class="form-group">
							<label class="col-sm-2 control-label" for="form-field-1">
								<?php echo $form->labelEx($model,'newPassword'); ?>
							</label>
							<div class="col-sm-9">
								<?php echo $form->passwordField($model,'newPassword', array('class' => "form-control ", 'placeholder' => 'new Password')); ?>
								<?php echo $form->error($model,'newPassword'); ?>
							</div>
						</div>

						  <div class="form-group">
							<label class="col-sm-2 control-label" for="form-field-1">
								<?php echo $form->labelEx($model,'newPassword_repeat'); ?>
							</label>
							<div class="col-sm-9">
								<?php echo $form->passwordField($model,'newPassword_repeat', array('class' => "form-control ", 'placeholder' => 'new Password repeat ')); ?>
								<?php echo $form->error($model,'newPassword_repeat'); ?>
							</div>
						</div>

						 <div class="form-group">
							<label class="col-sm-2 control-label" for="form-field-1">
								
							</label>
							<div class="col-sm-9">
								<button type="submit" class="btn btn-primary">Change Password</button>

							</div>
						</div>

						
					     <?php $this->endWidget(); ?>

				

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