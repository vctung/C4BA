<h3>Sign in to your account</h3>
	<p>
		Please enter your name and password to log in.
	</p>
	<!-- <form class="form-login" action="index.html"> -->
	    <?php $form=$this->beginWidget('CActiveForm', array(
	   
	        'enableClientValidation'=>true,
	        'clientOptions'=>array(
	            'validateOnSubmit'=>true,
	        ),
	         'htmlOptions'=>array(
		        'class'=>'form-login',
		        // 'enctype' => 'multipart/form-data'
		    ),
	    ));
     ?>



		<div class="errorHandler alert alert-danger no-display">
			<i class="icon-remove-sign"></i> You have some form errors. Please check below.
		</div>
		<fieldset>
			<div class="form-group">
				<span class="input-icon">
					<!-- <input type="text" class="form-control" name="username" placeholder="Username"> -->
					<?php echo $form->textField($model,'username', array('class' => "form-control", 'placeholder' => 'User')); ?>
					<i class="icon-user"></i> </span>
					<p class="error_field"> <?php echo $form->error($model,'username'); ?></p>
				<!-- To mark the incorrectly filled input, you must add the class "error" to the input -->
				<!-- example: <input type="text" class="login error" name="login" value="Username" /> -->
			</div>
			<div class="form-group form-actions">
				<span class="input-icon">
					<?php echo $form->passwordField($model,'password', array('class' => "form-control", 'placeholder' => 'Password')); ?>
					<i class="icon-lock"></i>
					<p class="error_field"> <?php echo $form->error($model,'password'); ?></p>
					<a class="forgot" href="#">
						I forgot my password
					</a> </span>
			</div>
			<div class="form-actions">
				<label for="remember" class="checkbox-inline">
					<input type="checkbox" class="grey remember" id="remember" name="remember">
					Keep me signed in
				</label>
				<button type="submit" class="btn btn-bricky pull-right">
					Login <i class="icon-circle-arrow-right"></i>
				</button>
			</div>
			<div class="new-account">
				<!-- Don't have an account yet?
				<a href="#" class="register">
					Create an account
				</a> -->
			</div>
		</fieldset>
	<?php $this->endWidget(); ?>