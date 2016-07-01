<?php 
    $themes =  Yii::app()->request->baseUrl."/themes/idico/" ; 

 ?>
<!Doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>   <?php echo CHtml::encode($this->pageTitle); ?>  </title>
    
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
      
    <link rel="shortcut icon" href="<?php echo $themes; ?>favicon.ico" type="image/x-icon" />
    
    <!-- **CSS - stylesheets** -->
    <link id="default-css" rel="stylesheet" href="<?php echo $themes; ?>style.css" type="text/css" media="all" />
    <link id="shortcodes-css" rel="stylesheet" href="<?php echo $themes; ?>shortcodes.css" type="text/css" media="all"/>
    <link id="skin-css" rel="stylesheet" href="<?php echo $themes; ?>skins/green/style.css" type="text/css" media="all"/>
    <link id="layer-slider" rel="stylesheet"  href="<?php echo $themes; ?>css/layerslider.css" media="all" />
    
    <!-- **Additional - stylesheets** -->
    <link rel="stylesheet" href="<?php echo $themes; ?>responsive.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="<?php echo $themes; ?>css/meanmenu.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="<?php echo $themes; ?>css/prettyPhoto.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="<?php echo $themes; ?>css/animations.css" type="text/css" media="all" />
     <link rel="stylesheet" href="<?php echo $themes; ?>css/tung.css" type="text/css" media="all" />
    <!-- **Font Awesome** -->
    <link rel="stylesheet" href="<?php echo $themes; ?>css/font-awesome.min.css" type="text/css" />
    
    <!-- **Google - Fonts** -->
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>  
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-61576326-4', 'auto');
	  ga('send', 'pageview');
	
</script>
    
</head>

<body>


<!-- <div class="loader-wrapper">
    <div id="loader-image"></div>
</div> -->

    <!-- **Wrapper** -->
<div class="wrapper"> 
    <div class="inner-wrapper">


      <!-- **Top Bar** -->
        <div class="top-bar">
            <div class="container">
            
                    <ul class="top-menu">
                        <li> <i class="fa fa-phone"></i>  Hotline Phòng Kinh doanh : <span> <strong >
                         <a style ="color: red" href="tel:+84 904 7877 96">0904.78.77.96</a></strong> </span></li>

                        <li> <i class="fa fa-skype"></i>  Skype: <a href="#" title=" vc.tung"> bufst.pham‏ </a></li>
                    </ul>
                
                <div class="top-right" style="text-align: center">
                  <i class="fa fa-envelope"></i>
                   Email : <a href="#" title=" vc.tung"> chungcuidico@gmail.com </a>
                  
                </div>
                
            </div>
        </div><!-- **Top Bar - End** -->


        <div id="header-wrapper">
            <!-- **Header** -->
          <header class="header">
                <div class="container">
                
                    <!-- **Logo - End** -->
                    <div id="logo">
                        <a href="index.html" title="Priority"> <img src="<?php echo $themes; ?>images/logo.png" alt="logo"> </a>
                    </div><!-- **Logo - End** -->
                    
                    <div id="menu-container">
                        <!-- **Nav - Starts**-->
                        <nav id="main-menu">
                            <div id="dt-menu-toggle" class="dt-menu-toggle">
                                Menu
                                <span class="dt-menu-toggle-icon"></span>
                            </div>
                            <ul class="menu">
                                <?php $this->widget('application.components.FrontMenu'); ?>
                            </ul>
                        </nav>
                        <!-- **Nav - End**-->
                   </div>
    
                </div>
            </header><!-- **Header - End** -->
        </div>

          <!-- **Main - Starts** --> 
        <div id="main">
             <?php echo $content; ?>
        </div>



         <!-- **Footer** -->
        <footer id="footer">           

               <?php $this->widget('application.components.Footer'); ?>
            
        </footer> <!-- **Footer - End** -->



    </div><!-- **inner-wrapper - End** -->
</div>
 <!-- END -> **Wrapper** -->



    <!-- **jQuery** -->  
    <script src="<?php echo $themes; ?>js/jquery-1.10.2.min.js" type="text/javascript"></script>
    <script src="<?php echo $themes; ?>js/jquery-migrate.min.js"></script> 
    
    <script src="<?php echo $themes; ?>js/preloader.js" type="text/javascript"></script>
    <script src="<?php echo $themes; ?>js/pace.min.js" type="text/javascript"></script>
    
    <script src="<?php echo $themes; ?>js/jquery.tabs.min.js"></script>
    <script src="<?php echo $themes; ?>js/jquery.tipTip.minified.js"></script>
    
    <script src="<?php echo $themes; ?>js/jquery-easing-1.3.js" type="text/javascript"></script>
    
    <script src="<?php echo $themes; ?>js/jquery.parallax-1.1.3.js" type="text/javascript"></script>
    
    <script src="<?php echo $themes; ?>js/jquery.carouFredSel-6.2.1-packed.js" type="text/javascript"></script>
    
    <script src="<?php echo $themes; ?>js/jquery.inview.js" type="text/javascript"></script>
    
    <script src="<?php echo $themes; ?>js/jquery.nav.js" type="text/javascript"></script>
    
    <script src="<?php echo $themes; ?>js/layerslider.transitions.js"></script> 
    <script src="<?php echo $themes; ?>js/layerslider.kreaturamedia.jquery.js"></script> 
    <script src="<?php echo $themes; ?>js/greensock.js"></script> 
    
    <script data-cfasync="false" type="text/javascript">var lsjQuery = jQuery;</script><script data-cfasync="false" type="text/javascript"> lsjQuery(document).ready(function() { if(typeof lsjQuery.fn.layerSlider == "undefined") { lsShowNotice('layerslider_10','jquery'); } else { lsjQuery("#layerslider_10").layerSlider({responsiveUnder: 1240, layersContainer: 1170, startInViewport: false, pauseOnHover: false, forceLoopNum: false, autoPlayVideos: false, skinsPath: '<?php echo $themes; ?>js/layerslider/skins/'}) } }); </script>
    
    <script src="<?php echo $themes; ?>js/jquery.jcarousel.min.js" type="text/javascript"></script>
    
    <script src="<?php echo $themes; ?>js/jquery.isotope.min.js" type="text/javascript"></script>
    <script src="<?php echo $themes; ?>js/jquery.prettyPhoto.js" type="text/javascript"></script>
    
    <script src="<?php echo $themes; ?>js/masonry.pkgd.min.js" type="text/javascript"></script>
    <script src="<?php echo $themes; ?>js/jquery.smartresize.js" type="text/javascript"></script>
    
    <script src="<?php echo $themes; ?>js/responsive-nav.js" type="text/javascript"></script>
    <script src="<?php echo $themes; ?>js/jquery.meanmenu.min.js" type="text/javascript"></script>


    
    <?php if (Yii::app()->controller->action->id == 'contact') {  ?>
        
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="<?php echo $themes; ?>js/jquery.gmap.min.js"></script>

    <?php } ?>


     <!-- 
    <script src="<?php //echo $themes; ?>js/jquery.gmap.min.js"></script> -->
    
    <!-- **Sticky Nav** -->
    <script src="<?php echo $themes; ?>js/jquery.sticky.js" type="text/javascript"></script>

    <!-- **To Top** -->
    <script src="<?php echo $themes; ?>js/jquery.ui.totop.min.js" type="text/javascript"></script>
    

    <!--  <script type="text/javascript" src="<?php echo $themes; ?>js/twitter/jquery.tweet.min.js"></script>  -->
    
    
    <script src="<?php echo $themes; ?>js/jquery.viewport.js" type="text/javascript"></script> 
    
    <script type="text/javascript" src="<?php echo $themes; ?>js/jquery.validate.min.js"></script>
    
    <script src="<?php echo $themes; ?>js/retina.js" type="text/javascript"></script>
    
        <script src="<?php echo $themes; ?>js/jquery.bxslider.min.js" type="text/javascript"></script>

    
    <script src="<?php echo $themes; ?>js/custom.js" type="text/javascript"></script>      
    
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-63449195-1', 'auto');
  ga('send', 'pageview');

</script>
 
        
</body>
</html>