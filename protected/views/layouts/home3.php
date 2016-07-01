<?php 
    $themes =  Yii::app()->request->baseUrl."/themes/home3/" ; 
 ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title>  <?php echo CHtml::encode($this->pageTitle); ?> </title>
    <meta name="description" content="PTTSoft is the leading software and website outsourcing company in Vietnam.  PTTSoft is capable of delivering global projects with full advantage of Vietnam’s low-cost as an offshore base" />
    <meta name="author" content="Sunny Love">
    <meta name="google-site-verification" content="jlce4aone3JrBawCEoKw1iD0ARFESYv65T6YzD-ef9U" />
    <!-- Mobile Specific Metas
  ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
  ================================================== -->
    <link rel="stylesheet" href="<?php echo $themes; ?>css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $themes; ?>css/settings.css" media="screen"/>

    <!-- JS
  ================================================== -->
    <script src="<?php echo $themes; ?>js/jquery-1.8.2.min.js" type="text/javascript"></script> <!-- jQuery -->
    <script src="<?php echo $themes; ?>js/jquery.easing.1.3.js" type="text/javascript"></script> <!-- jQuery easing -->
    <script src="<?php echo $themes; ?>js/modernizr.custom.js" type="text/javascript"></script> <!-- Modernizr -->
    <script src="<?php echo $themes; ?>js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script> <!-- tabs, toggles, accordion -->
    <script src="<?php echo $themes; ?>js/custom.js" type="text/javascript"></script> <!-- jQuery initialization -->
  
    <!-- Responsive Menu -->
    <script src="<?php echo $themes; ?>js/jquery.meanmenu.js"></script> 
    <script>
    jQuery(document).ready(function () {
    jQuery('header nav').meanmenu();
    });
    </script>
    
    <!-- Revolution Slider -->
    <script src="<?php echo $themes; ?>js/jquery.themepunch.plugins.min.js"></script>
    <script src="<?php echo $themes; ?>js/jquery.themepunch.revolution.min.js"></script>
    <script src="<?php echo $themes; ?>js/revolution-slider-options.js"></script>
    
    <!-- Prety photo -->
    <script src="<?php echo $themes; ?>js/jquery.prettyPhoto.js"></script>
    <script>
        $(document).ready(function(){
            $("a[data-gal^='prettyPhoto']").prettyPhoto();
        });
    </script>

    <!-- Tooltip -->
    <script src="<?php echo $themes; ?>js/tooltip.js"></script>
    
    <!-- Flexisel -->
    <script type="text/javascript" src="<?php echo $themes; ?>js/jquery.flexisel.js"></script>

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl ?>/images/fa.jpg">
    <link rel="apple-touch-icon" href="<?php echo Yii::app()->request->baseUrl ?>/images/fa.jpg">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo Yii::app()->request->baseUrl ?>/images/fa.jpg">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo Yii::app()->request->baseUrl ?>/images/fa.jpg">
    <meta property="og:image" content="http://www.pttsoft.vn/images/fa.jpg"/>
    
    <!-- Font -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400italic,700italic,400,700,900&subset=latin,vietnamese' rel='stylesheet' type='text/css'>

</head>
<body>



    <!-- Primary Page Layout
    ================================================== -->
    
<header class="header">
<div class="container">
<div class="four columns">
<h1 class="logo"><a href="/index.html"><img src="<?php echo $themes; ?>images/logo.png" alt="pttsoft
" /></a></h1>
</div><!-- logo -->

<div class="twelve columns">
<nav class="main_menu">
    <?php $this->widget('application.components.FrontMenu'); ?>
</ul>

</nav><!-- navigation -->
</div>
<div class="clearfix"></div>
</div>
</header><!-- header -->

         <?php echo $content; ?>


<footer class="footer">
    <?php $this->widget('application.components.Footer'); ?>
</footer><!-- footer -->

<script type="text/javascript">

$(window).load(function() {
    $("#flexiselDemo2").flexisel({
        visibleItems: 5,
        animationSpeed: 1000,
        autoPlay: true,
        autoPlaySpeed: 3000,            
        pauseOnHover: true,
        enableResponsiveBreakpoints: true,
        responsiveBreakpoints: { 
            portrait: { 
                changePoint:480,
                visibleItems: 1
            }, 
            landscape: { 
                changePoint:640,
                visibleItems: 2
            },
            tablet: { 
                changePoint:768,
                visibleItems: 3
            }
        }
    });
    
});
</script>
<!-- End Document
================================================== -->
</body>
</html>