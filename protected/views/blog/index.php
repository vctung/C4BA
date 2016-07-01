<?php  $themes =  Yii::app()->request->baseUrl."/themes/blog/" ;  ?>


	<!-- HEADER -->
	<header id="header-container">
		<?php $this->widget('application.components.Header'); ?>
		<?php $this->widget('application.components.Slideshow'); ?>			
	</header><!-- HEADER CONTAINER -->		
			
	<!-- PAGE CONTENT -->
	<div id="page-content">
		
		<div class="container section-blog-headline">
	        <div class="row">
	            <div class="col-sm-12">
					
					<div class="headline text-center">
						
						<h6>SEE WHAT ELSE IS NEW...</h6>							
						
					</div><!-- headline -->

	            </div><!-- col -->
	        </div><!-- row -->
	    </div><!-- container -->
		
		<?php $this->widget('application.components.BlogGroup'); ?>
		
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
		
	