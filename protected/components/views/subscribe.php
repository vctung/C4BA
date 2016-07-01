<?php 
    $themes =  Yii::app()->request->baseUrl."/themes/blog/" ; 
 ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-6">
			<img src="<?php echo $themes; ?>assets/images/logo-small-2.png" alt="">
		</div>
		<div class="col-md-6">
			<form name="newsletter"
			data-subscribe-url="<?php echo Yii::app()->createUrl("subscribe/registeremail"); ?>"
			class="subscribe-form" action="#">
				<fieldset>
					<input id="newsletter-email" type="email" name="email" placeholder="Enter your email address">
					<button class="btn btn-loadmore" type="submit" name="submit" value="">subscribe</button>
				</fieldset>
			</form>
		</div>
	</div>
</div>
<?php 
  $baseUrl = Yii::app()->baseUrl; 
  $cs = Yii::app()->getClientScript();
  Yii::app()->clientScript->registerCssFile($baseUrl . '/js/alert/sweetalert.css');
  Yii::app()->clientScript->registerScriptFile( $baseUrl. '/js/alert/sweetalert.min.js',CClientScript::POS_END );
  Yii::app()->clientScript->registerScriptFile( $baseUrl. '/js/page/subscribe.js',CClientScript::POS_END );
 ?>a