
<?php 
    $themes =  Yii::app()->request->baseUrl."/themes/idico/" ; 
    $roots =  Yii::app()->request->baseUrl;
?>


<div class="parallax full-width-bg">
    <div class="container">
        <div class="main-title">
            <h1><?php echo $pagename; ?></h1>
            <div class="breadcrumb">
                <a href="index.html">Trang chủ</a>                
                <span class="fa fa-angle-right"></span>
                <span class="current"><?php echo $pagename; ?></span>
            </div>
        </div>
    </div>
</div>
<div class="dt-sc-margin100"></div>   


<div class="full-width-section">
                <div class="container">
                	<!-- **column - Starts** -->
                  
                    <!-- **column - Starts** -->
                    <div class="column dt-sc-full-width">

                        <!-- **hr-title - Starts** -->
                        
                     <!--    <div class="hr-title dt-sc-hr-invisible-small">
                            <h2>Vị trí - Tiện ích</h2>
                            **title-sep - Starts**
                            <div class="title-sep">
                            </div> <!-- **title-sep - Ends** -->
                        <!-- </div>  -->

                         <!-- **hr-title - Ends** -->

                        <!-- **dt-sc-tabs-container - Starts** -->
                        <div class="dt-sc-tabs-container">
                        	 <!-- **dt-sc-tabs-frame - Starts** -->
                            <ul class="dt-sc-tabs-frame">
                            	<li> <a href="#"><?php echo $vitri->title ?></a> </li>
                                <li> <a href="#"><?php echo $tienich->title ?></a> </li>
                              
                            </ul>  <!-- **dt-sc-tabs-frame - Ends** -->
                            
                            <!-- **dt-sc-tabs-frame-content - Starts** -->
                            <div class="dt-sc-tabs-frame-content">
                            	<!-- <div class="thumb"> <img src="<?php echo $roots; ?>/images/article./<?php echo $vitri->image; ?>" alt="image"/> </div> -->
                                <h4><?php echo $vitri->title; ?></h4>
                                <p><?php echo $vitri->content; ?></p>

                            </div> <!-- **dt-sc-tabs-frame-content - Ends** -->
                            
                            <!-- **dt-sc-tabs-frame-content - Starts** -->
                            <div class="dt-sc-tabs-frame-content">
                            	<!-- <div class="thumb"> <img src="<?php echo $roots; ?>/images/article./<?php echo $tienich->image; ?>" alt="image"/> </div> -->
                                <h4><?php echo $tienich->title ?></h4>
                                <?php echo $tienich->content ?>
                                <div class="dt-sc-margin10"></div>
                            </div> <!-- **dt-sc-tabs-frame-content - Ends** -->
                            
                           
                            
                        </div> <!-- **dt-sc-tabs-container - Ends** -->
                    </div> <!-- **column - Ends** -->
                
                </div> <!-- **container - Ends** -->
                <div class="dt-sc-hr-invisible"></div>
            </div> <!-- **Full-width-section - Ends** -->