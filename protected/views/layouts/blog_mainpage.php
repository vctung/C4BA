
<?php  $themes =  Yii::app()->request->baseUrl."/themes/blog_mainpage/" ;  ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title> <?php echo CHtml::encode($this->pageTitle); ?> </title>

    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
	<link rel="stylesheet" href="<?php  echo $themes ?>css/bootstrap.css">
	<link rel="stylesheet" href="<?php  echo $themes ?>css/style.css">

	<script type="text/javascript" src="<?php  echo $themes ?>js/jquery.js"></script>
	<script type="text/javascript" src="<?php  echo $themes ?>js/device.js"></script>	
	<script type="text/javascript" src="<?php  echo $themes ?>js/bootstrap.js"></script>
	<script type="text/javascript" src="<?php  echo $themes ?>js/core.js"></script>
	<script type="text/javascript" src="<?php  echo $themes ?>js/script.js"></script>
	

	<!--[if lt IE 9]>
        <div style='text-align:center'><a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a></div>  
    <![endif]-->
</head>
<body>
<div id="webSiteLoader"></div>
<div id="glob-wrap">
	<header>


		<div class="container">
			<div class="row">
				<div class="col-lg-12 tac">
						<!--logo and company name-->  
		<h1><a href="./"><img src="<?php  echo $themes ?>img/logo.png" class="" alt=""></a></h1>
		<!--menu-->
					<nav id="mainNav" class="mainNav hideMenu" data-follow="location" data-type="navigation">
						<ul>
							<li><a href="./">Home</a></li>
							<li><a href="./about">About us</a></li>
							<li><a href="./our_services">Our services</a></li>
							<li><a href="./news">Latest news</a></li>
							<li><a href="./contacts">Contacts</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>

	<article id="content" data-follow="location" data-type="switcher" data-behavior="scroll" class=''>

		<?php echo $content; ?>



	</article>
	<div id="other_pages" data-follow="location" data-type="switcher" data-flags="ajax">
		
	</div>
	<footer>
	<div class="container">
	<div class="col-lg-12 col-lg-offset-0 col-md-12 col-md-offset-0 col-sm-12 col-xs-12 tac">
		<p class="copyright mobile-only">Consulting <i>24</i> &copy; <span id="year1"></span> &bull; <a href="./privacy.html">Privacy Policy</a><br><!-- {%FOOTER_LINK} --></p>
	</div>
	</div>
	</footer>
</div>

</body>
</html>