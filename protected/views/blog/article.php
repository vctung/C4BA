<?php  
$themes =  Yii::app()->request->baseUrl."/themes/blog/" ;
$cname = customURLSEO( $newarticle['name'] );
?>
	<!-- HEADER -->
	<header id="header-container">
		<?php $this->widget('application.components.Header'); ?>

		
		<?php  $themes =  Yii::app()->request->baseUrl."/themes/blog/" ;  ?>
		<div id="page-header" class="parallax blog-detail" 
		data-article-id="<?php echo $newarticle['id'];  ?>"
		data-stellar-background-ratio="0.1" style="background-image:url(<?php echo  Yii::app()->request->baseUrl; ?>/images/article/<?php echo $newarticle['image']; ?>)">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						
						<h1><?php echo $newarticle['title'] ?></h1>
						<h6>
							<a href="<?php echo  Yii::app()->createUrl('/category/'.$cname.'-'.$newarticle['catid'] ); ?>" 
							title="<?php echo $newarticle['name'] ?>">
							<?php echo $newarticle['name'] ?>
							</a>
						</h6>
						
					</div><!-- col -->
				</div><!-- row -->
			</div><!-- container -->
		</div><!-- page-header -->


	</header><!-- HEADER CONTAINER -->	


	<!-- PAGE CONTENT -->
		<div id="page-content">
			
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						
						<div class="blog-article">
						
							<div class="blog-article-thumbnail">
								
								<!-- <img src="<?php echo $themes; ?>images/blog/image-11.jpg" alt=""> -->
							
							</div><!-- blog-article-thumbnail -->
								
						
							
							<div class="blog-article-content">

								<blockquote>
									<p><?php echo $newarticle['intro'];  ?></p>
									<footer><?php echo $newarticle['author'];  ?></footer>
								</blockquote>
								<?php echo $newarticle['content'];  ?>
								
								
							</div><!-- blog-article-content -->
							
							<div 
							data-get-comment-url="<?php echo Yii::app()->createUrl("blog/getcomment"); ?>"
							data-save-comment-url="<?php echo Yii::app()->createUrl("blog/savecomment"); ?>"
							id="comments-section">
							
								
								
							</div><!-- blog-article -->
							
						</div><!-- comments-section -->
						
					</div><!-- col -->
				</div><!-- row -->
			</div><!-- container -->
			
		</div><!-- PAGE CONTENT -->

	
	<!-- START :: subscribe -->	
	<section class="section-subscribe">			
		<?php $this->widget('application.components.Subscribe'); ?>
	</section>
	<!-- END :: subscribe -->

		<!-- FOOTER -->
	<footer>
		<?php $this->widget('application.components.Footer'); ?>
	</footer><!-- FOOTER -->
		

<?php 
  $baseUrl = Yii::app()->baseUrl; 
  $cs = Yii::app()->getClientScript();
  Yii::app()->clientScript->registerScriptFile( $baseUrl. '/js/syntaxhighlighter/syntax-highlighter.min.js',CClientScript::POS_END );
  Yii::app()->clientScript->registerCssFile($baseUrl . '/js/syntaxhighlighter/syntax-highlighter.min.css');
  // Yii::app()->clientScript->registerCssFile($baseUrl . '/js/syntaxhighlighter/styles/monokai/shCoreMonokai.css');
  Yii::app()->clientScript->registerCssFile($baseUrl . '/js/syntaxhighlighter/styles/themes/tomorrow-night.css');
  Yii::app()->clientScript->registerScript('myjquery', "	  
  	   $('pre').addClass('brush: apex;');	
	   SyntaxHighlighter.config.clipboardSwf = '$baseUrl/js/syntaxhighlighter/clipboard.swf';
	   SyntaxHighlighter.all();
  ");
    Yii::app()->clientScript->registerScriptFile( $baseUrl. '/js/page/article.js',CClientScript::POS_END );
 ?>