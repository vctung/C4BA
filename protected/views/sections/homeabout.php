 <?php
//  echo "<pre>";
// print_r($categories); exit();

	$this->pageTitle=Yii::app()->name . ' - Section Home - About';
	$this->breadcrumbs=array(
		'Section Home - About',
	);
?>

<div class="rowd">

<?php foreach ($content as $key => $value) {
	$_decode = json_decode($value['json'] , true);
	$image = str_replace("%2F","/",$_decode['image']);
	$title = str_replace("+"," ",$_decode['title']);
	$text = str_replace("+"," ",$_decode['text']);
	$link = str_replace("%3A",":",$_decode['link']);

	// print_r($_decode );
 ?>
	<div class="col-md-6">
		
		<div class="panel panel-default">

			<div class="panel-heading">
				<i class="icon-external-link-sign"></i>
				Section Home - About : <?php echo $value['name']; ?>
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
				<form class="section-homeabout" 
				data-savehomeabout-url = "<?php echo Yii::app()->createUrl("sections/savehomeabout"); ?>"
				data-section-detail-id="<?php echo  $value['id'] ?>">
						<div class="form-group">
							<label for="form-field-22">
								Image 
							</label>
							<div class="input-group">
							  <input name="image" 
							  id="ckfinder-input-popup-<?php echo  $key ?>"
							  type="text" class="form-control "

							  value="<?php echo $image;    ?>"

							  placeholder="Image" aria-describedby="basic-addon2">
							  <span id="ckfinder-popup-<?php echo  $key ?>" class="input-group-addon btn btn-blue ckfinder-popup" >Choose image</span>
							</div>
						</div>
						<div class="form-group">
							<label for="form-field-22">
								Title
							</label>
							<input name="title" 
							value="<?php echo  $title; ?>"
							type="text" placeholder="Title"  class="form-control ">

						</div>
						<div class="form-group">
							<label for="form-field-22">
								Text
							</label>
							<textarea name="text" class="form-control limited "><?php echo $text; ?></textarea>
						</div>
						<div class="form-group">
							<label for="form-field-22">
								Link
							</label>
							<input name="link" type="text" 
							value="<?php echo  str_replace("%2F","/",$link );?>"
							placeholder="Link"  class="form-control ">
						</div>
						<div class="form-group">
							<div class="col-sm-2 col-sm-offset-10">
								<button class="btn-save btn btn-yellow next-step btn-block">
									<i class="icon-save"></i> Save 
								</button>
							</div>
						</div>
				</form>		

			</div>
			<!--- End pannel body -->



		</div>
			<!--- End panel panel default -->
	</div>


<?php } ?>



</div>


<?php 
  $baseUrl = Yii::app()->baseUrl; 
  $cs = Yii::app()->getClientScript();
    Yii::app()->clientScript->registerCssFile($baseUrl . '/js/alert/sweetalert.css');
  Yii::app()->clientScript->registerScriptFile( $baseUrl. '/js/alert/sweetalert.min.js',CClientScript::POS_END );
  Yii::app()->clientScript->registerScriptFile( $baseUrl. '/ckfinder/ckfinder.js',CClientScript::POS_END );
  Yii::app()->clientScript->registerScriptFile( $baseUrl. '/js/page/homeabout.js',CClientScript::POS_END );
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


