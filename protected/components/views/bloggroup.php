<?php 
    $themes =  Yii::app()->request->baseUrl."/themes/blog/" ; 
 ?>

<div class="container-fluid section-blog __Blog"
 data-get-Blog-url="<?php echo Yii::app()->createUrl("blog/newarticle"); ?>"
 data-curent-page='0'>

</div><!-- container -->


<div class="container">
	<div class="row">
		<div class="col-md-12 text-align-center">
			<button data-count-Page="<?php echo $page; ?>"  class="btn btn-md btn-loadmore loadmore-blog"type="">Load more</button>
		</div>
	</div>
</div>


<?php 
  $baseUrl = Yii::app()->baseUrl; 
  $cs = Yii::app()->getClientScript();
  Yii::app()->clientScript->registerScriptFile( $baseUrl. '/js/page/bloggroup.js',CClientScript::POS_END );
 ?>