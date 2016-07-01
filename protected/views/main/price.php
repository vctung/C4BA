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


            <!-- **Full-width-section - Starts** -->
       		<div class="full-width-section">
            	<div class="container">
                
                	<div class="dt-sc-tabs-container type5 text_align_center">
                        <!-- **dt-sc-tabs-frame - Starts** -->
                        <ul class="dt-sc-tabs-frame text_align_center" >

                          

                            <li class="column dt-sc-one-third first"><a href="#">
                                <div class="dt-sc-ico-content type14">
                                    <div class="icon">
                                        <span class="fa fa-money"></span>
                                    </div>
                                    <h4> Giá Căn Hộ Idico </h4>
                                </div>
                                </a>
                            </li>
                            <li class="column dt-sc-one-third"><a href="#"> 
                                <div class="dt-sc-ico-content type14">
                                    <div class="icon">
                                        <span class="fa fa-building"></span>
                                    </div>
                                    <h4> Chính sách bán hàng </h4>
                                </div>
                                </a> 
                            </li>



                            <li class="column dt-sc-one-third"><a href="#"> 
                                <div class="dt-sc-ico-content type14">
                                    <div class="icon">
                                        <span class="fa fa-home"></span>
                                    </div>
                                    <h4> Hồ sơ gói vay 30.000 tỷ </h4>
                                </div>
                                </a> 
                            </li>

                             
                          
                        </ul>  <!-- **dt-sc-tabs-frame - Ends** -->
                        


                       <?php  
                       	foreach ($gioithieu  as $key => $value) { ?>
                       		
                      
                    
                        <!-- **dt-sc-tabs-frame-content - Starts** -->
                        <div class="dt-sc-tabs-frame-content">
                            <div class="column dt-sc-one-column  first text_align_left ">
                                <h3> <?php echo $value->title; ?> </h3>
                               <?php echo $value->content; ?>
                            </div>
                       
                        </div> <!-- **dt-sc-tabs-frame-content - Ends** -->

                         <?php  	}     ?>



                        
                    </div> <!-- **dt-sc-tabs-container - Ends** -->
                </div> <!-- **container - Ends** -->
            </div>
            <div class="dt-sc-margin50"></div>



            
  
            <!-- **Full-width-section - Starts** -->
            <div class="full-width-section parallax parallax-content-bg1">
                <div class="container">
                    <div class="alignleft">
                        <h3> Hotline Phòng Kinh doanh - <strong style="color : red"> 0904.78.77.96 </strong>    </h3>
                        <p> </p>
                        <p> Hỗ trợ xem căn hộ trực tiếp tại dự án: 382 - 384 Cao Thắng, Phường 12, Hồ Chí Minh, Vietnam </p>
                    </div>
                </div>
            </div> <!-- **Full-width-section - Ends** -->
            
        
            
            