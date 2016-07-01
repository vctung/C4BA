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


<!-- **Full-width-section - Starts** -->
            <div class="full-width-section grey">
            <div class="dt-sc-margin50"></div>
                <div class="container">
                    <h2 class="aligncenter">Hình ảnh thực tế</h2>
                    <div class="sorting-container">
                       <!--  <a data-filter=".all-sort" class="active-sort" href="#" >All</a>     
                        <a data-filter=".photography-sort" href="#" >Photography</a>
                        <a href="#" data-filter=".outdoors-sort" >Outdoors</a>         
                        <a href="#" data-filter=".fashion-sort" >Fashion</a>         
                        <a data-filter=".graphic-sort" href="#" >Graphic Design</a> -->
                    </div>
                    <div class="dt-sc-hr-invisible-small"></div>
                    <!-- **portfolio-container - Starts** -->
                    <div class="portfolio-container no-space">


                    <?php foreach ($gallery as $key => $value) {
                        # code...
                    ?>
                        <div class="portfolio dt-sc-one-fourth no-space column all-sort outdoors-sort fashion-sort">
                            <!-- **portfolio-thumb - Starts** -->
                            <div class="portfolio-thumb">
                                <figure>
                                    <img src="<?php echo $roots; ?>/images/gallery/<?php echo $value->image; ?>" alt="image"/>
                                    <div class="image-overlay">
                                        <a class="zoom" href="<?php echo $roots; ?>/images/gallery/<?php echo $value->image; ?>" data-gal="prettyPhoto[gallery]"><span class="fa fa-search"></span></a>
                                        <a class="link" href="#"><span class="fa fa-link"></span></a>
                                        <div class="portfolio-content">
                                            <h5> <a href="portfolio-detail-v2.html"><?php echo $value->name; ?> </a> </h5>
                                            <span class="fa fa-sort-up"></span>
                                        </div>
                                    </div>
                                </figure>
                            </div> <!-- **portfolio-thumb - Ends** -->
                        </div>

                        <?php }   ?>



                    </div> <!-- **portfolio-container - Ends** -->
                    <div class="dt-sc-hr-invisible"></div>
                
                </div>
            </div> <!-- **Full-width-section - Ends** -->
