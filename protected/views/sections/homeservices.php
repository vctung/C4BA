 <?php
//  echo "<pre>";
// print_r($categories); exit(); 
 // value="<?php echo $service_1;

	$this->pageTitle=Yii::app()->name . ' - Section Home - Service';
	$this->breadcrumbs=array(
		'Section Home - Service',
	);

	$_decode = json_decode($content['json'] , true);
	$title = str_replace("+"," ",$_decode['title']);
	$intro = str_replace("+"," ",$_decode['intro']);
	$service_1 = str_replace("+"," ",$_decode['service_1']);
	$service_2 = str_replace("+"," ",$_decode['service_2']);
	$service_3 = str_replace("+"," ",$_decode['service_3']);
	$link = str_replace("%3A",":",$_decode['link']);
?>


<div class="rowd">
	<div class="col-md-12">
		<div class="panel panel-default">

			<div class="panel-heading">
				<i class="icon-external-link-sign"></i>
				Section Home - Service 
 				<div class="panel-tools">
				<!-- 	<a class="btn btn-xs btn-link panel-collapse collapses" href="#">
					</a>
					<a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
						<i class="icon-save"></i>
					</a>
					<a class="btn btn-xs btn-link panel-refresh" href="#">
						<i class="icon-refresh"></i>
					</a>
					<a class="btn btn-xs btn-link panel-expand" href="#">
						<i class="icon-resize-full"></i>
					</a>
					<a class="btn btn-xs btn-link panel-close" href="#">
						<i class="icon-remove"></i>
					</a>  $data = str_replace("%2F","\/",$_POST['data']);  -->
				</div>
			</div>

			<div class="panel-body">
				<form
				class="form-horizontal section-homeservice"
				data-savehomeabout-url = "<?php echo Yii::app()->createUrl("sections/savehomeservices"); ?>"
				data-section-detail-id="<?php echo  $content['id'] ?>">

					<div class="form-group">
						<label class="col-sm-2 control-label" for="form-field-1">
							Title
						</label>
						<div class="col-sm-9">
							<input name="title" 
							value="<?php echo $title;    ?>"
							type="text" placeholder="Text Field" id="form-field-1" class="form-control">
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label" for="form-field-1">
							Text Intro
						</label>
						<div class="col-sm-9">
							<textarea name="intro" placeholder="Default Text" id="form-field-22" class="form-control"><?php echo $intro;    ?></textarea>
						</div>
					</div>


					<div class="form-group">
						<label class="col-sm-2 control-label" for="form-field-1">
							Service Text 1 
						</label>
						<div class="col-sm-9">
							<span class="input-icon">
								<input name='service_1' 
								value="<?php echo $service_1; ?>"  
								type="text" placeholder="Text Field" id="form-field-15" class="form-control">
								<i class="icon-quote-left"></i> 
							</span>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label" for="form-field-1">
							Service Text 2
						</label>
						<div class="col-sm-9">
							<span class="input-icon">
								<input name='service_2'  
								value="<?php echo $service_2; ?>" 
								type="text" placeholder="Text Field" id="form-field-15" class="form-control">
								<i class="icon-quote-left"></i> 
							</span>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label" for="form-field-1">
							Service Text 3
						</label>
						<div class="col-sm-9">
							<span class="input-icon">
								<input  name='service_3'
								value="<?php echo $service_3; ?>" 
								 type="text" placeholder="Text Field" id="form-field-15" class="form-control">
								<i class="icon-quote-left"></i> 
							</span>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label" for="form-field-1">
							Link
						</label>
						<div class="col-sm-9">
							<input name="link" 
							value="<?php echo  str_replace("%2F","/",$link );?>"
							type="text" placeholder="Text Field" id="form-field-1" class="form-control">
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
	</div>
</div>


<?php 
  $baseUrl = Yii::app()->baseUrl; 
  $cs = Yii::app()->getClientScript();
    Yii::app()->clientScript->registerCssFile($baseUrl . '/js/alert/sweetalert.css');
  Yii::app()->clientScript->registerScriptFile( $baseUrl. '/js/alert/sweetalert.min.js',CClientScript::POS_END );
  Yii::app()->clientScript->registerScriptFile( $baseUrl. '/ckfinder/ckfinder.js',CClientScript::POS_END );
  Yii::app()->clientScript->registerScriptFile( $baseUrl. '/js/page/homeservices.js',CClientScript::POS_END );
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
