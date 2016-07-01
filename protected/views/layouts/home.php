<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8">
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <meta name="keywords" content="" />
    <meta name="description" content="PTTSoft is the leading software and website outsourcing company in Vietnam.  PTTSoft is capable of delivering global projects with full advantage of Vietnam’s low-cost as an offshore base" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="noindex, follow" />
    <meta name="author" content="PTTSoft" />

    <link rel="shortcut icon" href="img/fa.png" />

    <!-- CSS Files -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-theme.min.css" rel="stylesheet" />
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/nivo-slider.css" rel="stylesheet" media="screen" />
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/fonts.css" rel="stylesheet" media="screen" />
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/general.css" rel="stylesheet" media="screen" />
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/content.css" rel="stylesheet" media="screen" />
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/responsive.css" rel="stylesheet" media="screen" />
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/custom.css" rel="stylesheet" media="screen" />


    <!-- JS Files -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.9.1.js"></script> <!-- jQuery Library -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script> <!-- Bootstrap Framework -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.reject.js"></script> <!-- jQuery Brower Rejection -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.BlackAndWhite.js"></script> <!-- jQuery Black and White Images -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.nivo.slider.pack.js"></script> <!-- Nivo Slider jQuery Plugin -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.nivo.slider.settings.js"></script> <!-- Nivo Slider jQuery Plugin Settings -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/template.js"></script> <!-- UNISTAR Template javascript -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div id="body">
<header id="header" class="container">
    <ul class="contact">
        <li><span>+84-8-6281-5199</span></li>
        <li><a href="mailto:info@pttsoft.vn">info@pttsoft.vn</a></li>
    </ul>

    <div class="logo">
        <a title="Thiết kế web giá rẻ - pttsoft.vn" href="<?php echo Yii::app()->createUrl('main/index'); ?>">
        <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/logo.png" alt="Thiết kế web giá rẻ "/></a>
    </div>

    <div id="topmenu" class="clear">
        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                   <?php $this->widget('application.components.FrontMenu'); ?>
                </ul>
            </div>

            <ul class="fright lang">
                <li><a class="active" href="http://en.pttsoft.vn/">ENG</a></li>
                <li><a href="http://pttsoft.vn/">VIE</a></li>
            </ul>
        </nav>
    </div>
</header>



<!-- Home page content -->

 <?php echo $content; ?>
 
 <!--  END Home page content -->





 
 <footer id="footer-wide">
    <div id="footer" class="container">
        <div class="">
            <div class="box1 pull-left-sm first">
               <div class="fb-like-box" data-href="https://www.facebook.com/pttsoft" data-colorscheme="dark" data-show-faces="true" data-header="false" data-stream="false" data-show-border="true"></div>
            </div>

            <div class="box2 pull-left-sm">
                <div class="header">Thông tin liên hệ</div>
                <ul>
                    <li><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/icons/user.png" alt="Thiết kế web giá rẻ - pttsoft.vn"/>PTT Software Company </li>
                    <li><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/icons/point.png" alt="Thiết kế web giá rẻ - pttsoft.vn"/>68 Nguyễn Huệ, Quận 1, <br> Tp Hồ Chí Minh</li>
                    <li><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/icons/phone.png" alt="Thiết kế web giá rẻ - pttsoft.vn"/>+84-8-6281-5199</li>
                    <li><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/icons/address.png" alt="Thiết kế web giá rẻ - pttsoft.vn"/><a href="mailto:info@pttsoft.vn">info@pttsoft.vn</a></li>
                </ul>
            </div>

            <div class="box3 pull-left-sm last">
                <div class="header">Kết nối với chúng tôi</div>
                <p>Để tiết kiệm thời gian và nâng cao hiệu quả làm việc khi làm việc với bạn, PTTSOFT đã xây dựng và duy trì một công việc đơn giản để tiết kiệm chi phí và thời gian cho khách hàng. Phương châm của PTTSOFT: "Đơn giản là sáng tạo".</p>
                <div class="addthis_toolbox addthis_default_style addthis_16x16_style">
                    <a href="https://www.facebook.com/pttsoft" class="addthis_button_facebook"><span><span></span></span></a>
                    <a href="https://twitter.com/PTTSOFTCOMPANY" class="addthis_button_twitter"><span><span></span></span></a>
              
            </div>
        </div>
    </div>
</footer>
<!-- End footer -->


</div>




<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=255081258022903&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



<script type="text/javascript">

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-45974509-2']);
      _gaq.push(['_setDomainName', 'pttsoft.vn']);
      _gaq.push(['_setAllowLinker', true]);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

</script>

</body>


</html>