 <?php

//   echo "<pre>";
// print_r($content); exit(); 
 // value="<?php echo $service_1;


	$this->pageTitle=Yii::app()->name . ' - Section Home - Footer';
	$this->breadcrumbs=array(
		'Section Home - Footer',
	);

	$_decode = json_decode($content['json'] , true);
	$address = str_replace("+"," ",$_decode['address']);
	$phone = str_replace("+"," ",$_decode['phone']);
	$coppyright = str_replace("+"," ",$_decode['coppyright']); 
	$map = str_replace("+"," ",$_decode['map']);
?>


<div class="rowd">

	<div class="col-md-12">
		<!-- start: ALERTS PANEL -->
		<div class="panel panel-default">
				<div class="panel-heading">
					<i class="icon-external-link-sign"></i>
					Section Home - Infomation
					<div class="panel-tools">
					
					</div>
				</div>
			<div class="panel-body">

				<form
				class="form-horizontal section-homefooter"
				data-savehomeabout-url = "<?php echo Yii::app()->createUrl("sections/savehomeservices"); ?>"
				data-section-detail-id="<?php echo  $content['id'] ?>">

					<div class="form-group">
						<label class="col-sm-2 control-label" for="form-field-1">
							Address
						</label>
						<div class="col-sm-9">
							<input name="address" 
							value="<?php  echo $address;    ?>"
							type="text" placeholder="Text Address" id="form-field-1" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="form-field-1">
							Phone
						</label>
						<div class="col-sm-9">
							<input name="phone" 
							value="<?php  echo $phone;    ?>"
							type="text" placeholder="Text Phone" id="form-field-1" class="form-control">
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label" for="form-field-1">
							Coppy right
						</label>
						<div class="col-sm-9">
							<input name="coppyright" 
							value="<?php  echo $coppyright;    ?>"
							type="text" placeholder="Text Coppy right" id="form-field-1" class="form-control">
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label" for="form-field-1">
							Map address
						</label>
						<div class="col-sm-9">
							<input name="map" 
							value="<?php  echo $map;    ?>"
							type="text" placeholder="Text Map address" id="form-field-1" class="form-control">
						</div>
					</div>


					<div class="form-group">
						<div class="col-sm-2 col-sm-offset-9">
							<button class="btn-save btn btn-yellow next-step btn-block">
								<i class="icon-save"></i> Save 
							</button>
						</div>
					</div>

				</form>
			</div>
		</div>
		<!-- end: ALERTS PANEL -->
	</div>

	

</div>



<?php 
  $baseUrl = Yii::app()->baseUrl; 
  $cs = Yii::app()->getClientScript();
    Yii::app()->clientScript->registerCssFile($baseUrl . '/js/alert/sweetalert.css');
  Yii::app()->clientScript->registerScriptFile( $baseUrl. '/js/alert/sweetalert.min.js',CClientScript::POS_END );
  Yii::app()->clientScript->registerScriptFile( $baseUrl. '/ckfinder/ckfinder.js',CClientScript::POS_END );
  Yii::app()->clientScript->registerScriptFile( $baseUrl. '/js/page/homefooter.js',CClientScript::POS_END );
 ?>


 
<script type="text/javascript">

/*Do not Delete*/

	var ids  ="<?php echo $this->getUniqueId(); ?>";//get Controller name ( like ID values in file menu.php);
	var action_name = "<?php echo Yii::app()->controller->action->id; ?>";
	jQuery(document).ready(function($) {
		actionRun(ids, action_name);
	});

/* Do not Delete */
</script>

