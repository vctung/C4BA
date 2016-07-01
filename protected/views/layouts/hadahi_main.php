<?php 
    $themes =  Yii::app()->request->baseUrl."/themes/hadahi/" ; 
 ?>

 <!doctype html>
<html lang="en-gb">
<!--<![endif]-->
<head>
<title> Hadahi.vn - Đồng phục Hadahi - Sự lựa chọn ưu Việt về đồng phục cá nhân và doanh nghiệp </title>
<meta charset="utf-8">
<!-- Meta -->
<meta name="keywords" content="" />
<meta name="author" content="Sunny">
<meta name="robots" content="" />
<meta name="description" content="" />

<!-- this styles only adds some repairs on idevices  -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Favicon -->
<link rel="shortcut icon" href="<?php echo $themes; ?>images/favicon.ico"> 

<!-- Google fonts - witch you want to use - (rest you can just remove) -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>

<!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

<!-- ######### CSS STYLES ######### -->

<link rel="stylesheet" href="<?php echo $themes; ?>css/reset.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $themes; ?>css/style.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $themes; ?>css/font-awesome/css/font-awesome.min.css">

<!-- responsive devices styles -->
<link rel="stylesheet" media="screen" href="<?php echo $themes; ?>css/responsive-leyouts.css" type="text/css" />

<!-- mega menu -->
<link href="<?php echo $themes; ?>js/mainmenu/sticky.css" rel="stylesheet">
<link href="<?php echo $themes; ?>js/mainmenu/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $themes; ?>js/mainmenu/demo.css" rel="stylesheet">
<link href="<?php echo $themes; ?>js/mainmenu/menu.css" rel="stylesheet">

<!-- revolution slider -->

<!-- CSS STYLE-->
<link rel="stylesheet" type="text/css" href="<?php echo $themes; ?>js/revolutionslider/css/style.css" media="screen" />


<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
<link rel="stylesheet" type="text/css" href="<?php echo $themes; ?>js/revolutionslider/css/extralayers.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo $themes; ?>js/revolutionslider/rs-plugin/css/settings.css" media="screen" />

<!-- simple line icons -->
<link rel="stylesheet" type="text/css" href="<?php echo $themes; ?>css/Simple-Line-Icons-Webfont/simple-line-icons.css" media="screen" />

<!-- flexslider -->
<link rel="stylesheet" href="<?php echo $themes; ?>js/flexslider/flexslider.css" type="text/css" media="screen" />

<!-- progressbar -->
<link rel="stylesheet" href="<?php echo $themes; ?>js/progressbar/ui.progress-bar.css">

<!-- tabs -->
<link rel="stylesheet" type="text/css" href="<?php echo $themes; ?>js/tabs/assets/css/responsive-tabs.css">
<link rel="stylesheet" type="text/css" href="<?php echo $themes; ?>js/tabs/assets/css/responsive-tabs2.css">
<link rel="stylesheet" type="text/css" href="<?php echo $themes; ?>js/tabs/assets/css/responsive-tabs3.css">
<link rel="stylesheet" type="text/css" href="<?php echo $themes; ?>js/tabs/assets/css/responsive-tabs6.css">
<link rel="stylesheet" type="text/css" href="<?php echo $themes; ?>js/tabs/assets/css/responsive-tabs9.css">


<!--product preview-->
<link rel="stylesheet" href="<?php echo $themes; ?>js/product-preview/stylesheet.css">
<link rel="stylesheet" href="<?php echo $themes; ?>js/product-preview/fancybox/jquery.fancybox.css">
<!-- Customize -->
<link rel="stylesheet/less" type="text/css" href="<?php echo $themes; ?>css/customize.less">


<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){
z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
$.src='//v2.zopim.com/?3WxfhAfBAFz4ycFWw0XtEJBEo3n3WueR';z.t=+new Date;$.
type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
</script>
<!--End of Zopim Live Chat Script-->


</head>

<body>
    
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=651523744976587";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    
    
<div class="site_wrapper">
 
<?php $this->widget('application.components.Header'); ?>

<?php echo $content; ?>


<?php $this->widget('application.components.Footer'); ?>


  
  <a href="#" class="scrollup"></a><!-- end scroll to top of the page--> 

  
</div>

<!-- ######### JS FILES ######### --> 

<!-- get jQuery from the google apis --> 
<script type="text/javascript" src="<?php echo $themes; ?>js/universal/jquery.js"></script> 

<!-- style switcher --> 
<script src="<?php echo $themes; ?>js/style-switcher/jquery-1.js"></script> 
<script src="<?php echo $themes; ?>js/style-switcher/styleselector.js"></script> 

<!-- SLIDER REVOLUTION 4.x SCRIPTS  --> 
<script type="text/javascript" src="<?php echo $themes; ?>js/revolutionslider/rs-plugin/js/jquery.themepunch.revolution.js"></script> 
<script type="text/javascript" src="<?php echo $themes; ?>js/revolutionslider/rs-plugin/js/jquery.themepunch.tools.min.js"></script> 
<script type="text/javascript" src="<?php echo $themes; ?>js/revolutionslider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script> 
<script type="text/javascript" src="<?php echo $themes; ?>js/revolutionslider/custom1.js"></script> 

<!-- mega menu --> 
<script src="<?php echo $themes; ?>js/mainmenu/bootstrap.min.js"></script> 
<script src="<?php echo $themes; ?>js/mainmenu/customeUI.js"></script> 

<!-- sticky menu --> 
<script type="text/javascript" src="<?php echo $themes; ?>js/mainmenu/sticky.js"></script> 
<script type="text/javascript" src="<?php echo $themes; ?>js/mainmenu/modernizr.custom.75180.js"></script> 

<!-- Flexslider --> 
<!--<script src="<?php echo $themes; ?>js/flexslider/modernizr.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>--> 
<script defer src="<?php echo $themes; ?>js/flexslider/jquery.flexslider.js"></script> 
<script defer src="<?php echo $themes; ?>js/flexslider/custom.js"></script> 

<!-- tabs --> 
<script src="<?php echo $themes; ?>js/tabs/assets/js/responsive-tabs.min.js" type="text/javascript"></script> 

<!-- scroll up --> 
<script src="<?php echo $themes; ?>js/scrolltotop/totop.js" type="text/javascript"></script> 

<!-- progress bar --> 
<script src="<?php echo $themes; ?>js/progressbar/progress.js" type="text/javascript" charset="utf-8"></script> 

<!-- tabs -->
<link rel="stylesheet" type="text/css" href="<?php echo $themes; ?>js/tabs/assets/css/responsive-tabs.css">
<link rel="stylesheet" type="text/css" href="<?php echo $themes; ?>js/tabs/assets/css/responsive-tabs2.css">
<link rel="stylesheet" type="text/css" href="<?php echo $themes; ?>js/tabs/assets/css/responsive-tabs3.css">
<!-- forms -->
<link rel="stylesheet" href="<?php echo $themes; ?>js/form/sky-forms.css" type="text/css" media="all">


<!-- LESSr --> 
<script src="<?php echo $themes; ?>js/less/less.min.js" type="text/javascript" ></script>



<!--product preview-->
<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->
<script src="<?php echo $themes; ?>js/product-preview/fancybox/jquery.fancybox.js"></script> 

<!-- tabs --> 
<script src="<?php echo $themes; ?>js/tabs/assets/js/responsive-tabs.min.js" type="text/javascript"></script> 
<script src="<?php echo $themes; ?>js/customize.js" type="text/javascript"></script> 

<script>
  $(document).ready(function(){
    $('.product_preview_left .previews a').click(function(){
      var largeImage = $(this).attr('data-full');
      $('.selected').removeClass();
      $(this).addClass('selected');
      $('.full img').hide();
      $('.full img').attr('src', largeImage);
      $('.full img').fadeIn();


    }); // closing the listening on a click
    $('.full img').on('click', function(){
      var modalImage = $(this).attr('src');
      $.fancybox.open(modalImage);
    });
  }); //closing our doc ready
  </script>


<!--product quantity-->

<script>
$(".number_but").on("click", function () {
    var $button = $(this);
    var $input = $button.closest('.product_quantity').find("input.product_input");
    
    $input.val(function(i, value) {
        return +value + (1 * +$button.data('multi'));
    });
});
</script>



</body>
</html>
