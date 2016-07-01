 
<?php 
        
         $new_project = Yii::app()->db->createCommand()
            ->select('*')
            ->from('project')
            ->limit('6')
            ->order('id desc')
            ->queryAll();

         $themes =  Yii::app()->request->baseUrl."/themes/home3/" ; 
         $roots =  Yii::app()->request->baseUrl;

 ?>



  <!-- Latest Projects -->
    <h3 style="margin-bottom: 20px;">Dự án mới </h3>
    <div class="latest-project">
    <?php foreach ($new_project as $key => $value) {
         $p_name = customURLforSEO( $value['name'] );
    ?>
        <div class="latest-project-item">
            <a href="<?php echo  Yii::app()->createUrl('project/'.$p_name.'-'.$value['id'] ); ?>"><img src="<?php echo $roots; ?>/images/projects/thumb/<?php echo $value['image']; ?>" alt="<?php echo $value['name']; ?>"></a>
        </div>
     <?php } ?>
    </div>
    <!-- End Latest Project -->
    <!-- Twitter Widget -->
    <h3> Dự án tiêu biểu </h3>
    <div class="twitter ads_img_right">   

           <div class="post-image-wrap">
                <a href="<?php echo $roots ?>/images/banner/9.jpg" data-gal="prettyPhoto" class="post-image">
                   <img src="<?php echo $roots ?>/images/banner/9.jpg" alt="">
                    <div class="link-overlay fa fa-search"></div>
                </a>
            </div>


             <div class="post-image-wrap">
                <a href="<?php echo $roots ?>/images/banner/10.jpg" data-gal="prettyPhoto" class="post-image">
                   <img src="<?php echo $roots ?>/images/banner/10.jpg" alt="">
                    <div class="link-overlay fa fa-search"></div>
                </a>
            </div>

             <div class="post-image-wrap">
                <a href="<?php echo $roots ?>/images/banner/11.jpg" data-gal="prettyPhoto" class="post-image">
                   <img src="<?php echo $roots ?>/images/banner/11.jpg" alt="">
                    <div class="link-overlay fa fa-search"></div>
                </a>
            </div>



    </div>
    <!-- End Twitter Widget -->