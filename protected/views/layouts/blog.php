<?php  $themes =  Yii::app()->request->baseUrl."/themes/blog/" ;  ?>

<!doctype html>
<html>


<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
	<meta name="keywords" content="">
	<meta name="description" content="">
	
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	
	<!-- FAVICON AND APPLE TOUCH -->    
	<link rel="shortcut icon" href="favicon.png">
	<link rel="apple-touch-icon-precomposed" sizes="180x180" href="apple-touch-180x180.png">
	<meta name="msapplication-TileImage" content="mstile.png">
	
	<!-- FONTS -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sacramento">
	
	<!-- BOOTSTRAP CSS -->
	<link rel="stylesheet" href="<?php echo $themes; ?>assets/bootstrap/css/bootstrap.min.css"> 
	
	<!-- FONT AWESOME -->
	<link rel="stylesheet" href="<?php echo $themes; ?>assets/fonts/fontawesome/css/font-awesome.min.css">
	
	<!-- KORS ICONS -->
	<link rel="stylesheet" href="<?php echo $themes; ?>assets/fonts/kors-icons/css/kors-icons.min.css">
	
	<!-- FANCYBOX -->
	<link rel="stylesheet" href="<?php echo $themes; ?>assets/plugins/fancybox/jquery.fancybox.css">
	
	<!-- REVOLUTION SLIDER -->
	<link rel="stylesheet" href="<?php echo $themes; ?>assets/plugins/revolutionslider/css/settings.css">
	<link rel="stylesheet" href="<?php echo $themes; ?>assets/plugins/revolutionslider/css/layers.css">
	<link rel="stylesheet" href="<?php echo $themes; ?>assets/plugins/revolutionslider/css/navigation.css">
	
	<!-- OWL Carousel -->
	<link rel="stylesheet" href="<?php echo $themes; ?>assets/plugins/owl-carousel/owl.carousel.css">
	
	<!-- YOUTUBE PLAYER -->
	<link rel="stylesheet" href="<?php echo $themes; ?>assets/plugins/ytplayer/css/jquery.mb.ytplayer.min.css">
	
	<!-- ANIMATIONS -->
	<link rel="stylesheet" href="<?php echo $themes; ?>assets/plugins/animations/animate.min.css">
	
	<!-- CUSTOM & PAGES STYLE -->
	<link rel="stylesheet" href="<?php echo $themes; ?>assets/css/custom.css">
	<link rel="stylesheet" href="<?php echo $themes; ?>assets/css/pages-style.css">
    <link rel="stylesheet" href="<?php echo $themes; ?>assets/css/aqua.css">
	
	<!-- THEME OPTIONS -->
	<link rel="stylesheet" href="<?php echo $themes; ?>assets/plugins/theme-options/theme-options.css">
    <link href="<?php echo $themes; ?>assets/less/style.less" rel="stylesheet/less" >
	

	

</head>

<body>

	<div id="main-container">
		
		 <?php echo $content; ?>
		
	</div><!-- MAIN CONTAINER -->
	
	
	<!-- SCROLL UP -->
	<!-- <a id="scroll-up"><i class="fa fa-angle-up"></i></a> -->
	
	

	
	
	<!-- jQUERY -->
	<script src="<?php echo $themes; ?>assets/plugins/jquery/jquery-2.2.3.min.js"></script>
	
	<!-- BOOTSTRAP JS -->
	<script src="<?php echo $themes; ?>assets/bootstrap/js/bootstrap.min.js"></script>
	
	<!-- VIEWPORT -->
	<script src="<?php echo $themes; ?>assets/plugins/viewport/jquery.viewport.js"></script>
	
	<!-- MENU -->
	<script src="<?php echo $themes; ?>assets/plugins/menu/hoverIntent.js"></script>
	<script src="<?php echo $themes; ?>assets/plugins/menu/superfish.js"></script>
	
	<!-- FANCYBOX -->
	<script src="<?php echo $themes; ?>assets/plugins/fancybox/jquery.fancybox.pack.js"></script>
	
	<!-- REVOLUTION SLIDER  -->
	<script src="<?php echo $themes; ?>assets/plugins/revolutionslider/js/jquery.themepunch.tools.min.js"></script>
	<script src="<?php echo $themes; ?>assets/plugins/revolutionslider/js/jquery.themepunch.revolution.min.js"></script>
	<script src="<?php echo $themes; ?>assets/plugins/revolutionslider/js/extensions/revolution.extension.actions.min.js"></script>
	<script src="<?php echo $themes; ?>assets/plugins/revolutionslider/js/extensions/revolution.extension.carousel.min.js"></script>
	<script src="<?php echo $themes; ?>assets/plugins/revolutionslider/js/extensions/revolution.extension.kenburn.min.js"></script>
	<script src="<?php echo $themes; ?>assets/plugins/revolutionslider/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script src="<?php echo $themes; ?>assets/plugins/revolutionslider/js/extensions/revolution.extension.migration.min.js"></script>
	<script src="<?php echo $themes; ?>assets/plugins/revolutionslider/js/extensions/revolution.extension.navigation.min.js"></script>
	<script src="<?php echo $themes; ?>assets/plugins/revolutionslider/js/extensions/revolution.extension.parallax.min.js"></script>
	<script src="<?php echo $themes; ?>assets/plugins/revolutionslider/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script src="<?php echo $themes; ?>assets/plugins/revolutionslider/js/extensions/revolution.extension.video.min.js"></script>
	
	<!-- OWL Carousel -->
	<script src="<?php echo $themes; ?>assets/plugins/owl-carousel/owl.carousel.min.js"></script>
	
	<!-- PARALLAX -->
	<script src="<?php echo $themes; ?>assets/plugins/parallax/jquery.stellar.min.js"></script>
	
	<!-- ISOTOPE -->
	<script src="<?php echo $themes; ?>assets/plugins/isotope/imagesloaded.pkgd.min.js"></script>
	<script src="<?php echo $themes; ?>assets/plugins/isotope/isotope.pkgd.min.js"></script>
	
	<!-- PLACEHOLDER -->
	<script src="<?php echo $themes; ?>assets/plugins/placeholders/jquery.placeholder.min.js"></script>
	
	<!-- CONTACT FORM VALIDATE & SUBMIT -->
	<script src="<?php echo $themes; ?>assets/plugins/validate/jquery.validate.min.js"></script>
	<script src="<?php echo $themes; ?>assets/plugins/submit/jquery.form.min.js"></script>
	
	<!-- GOOGLE MAPS -->
	<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script src="<?php echo $themes; ?>assets/plugins/googlemaps/gmap3.min.js"></script>
	
	<!-- CHARTS -->
	<script src="<?php echo $themes; ?>assets/plugins/charts/jquery.easypiechart.min.js"></script>
	
	<!-- COUNTER -->
	<script src="<?php echo $themes; ?>assets/plugins/counter/jquerysimplecounter.js"></script>
	
	<!-- STATISTICS -->
	<script src="<?php echo $themes; ?>assets/plugins/statistics/chart.min.js"></script>
	
	<!-- YOUTUBE PLAYER -->
	<script src="<?php echo $themes; ?>assets/plugins/ytplayer/jquery.mb.ytplayer.min.js"></script>
	
	<!-- INSTAFEED -->
	<script src="<?php echo $themes; ?>assets/plugins/instafeed/instafeed.min.js"></script>
	
	<!-- TWITTER -->
	<script src="<?php echo $themes; ?>assets/plugins/twitter/twitterfetcher.min.js"></script>
	
	<!-- COUNTDOWN -->
	<script src="<?php echo $themes; ?>assets/plugins/countdown/jquery.countdown.min.js"></script>
	
	<!-- ANIMATIONS -->
	<script src="<?php echo $themes; ?>assets/plugins/animations/wow.min.js"></script>
	

	
	<!-- CUSTOM JS -->
	<script src="<?php echo $themes; ?>assets/js/custom.js"></script>
    <script src="<?php echo $themes; ?>assets/less/less.min.js"></script>
    

	
</body>


</html>