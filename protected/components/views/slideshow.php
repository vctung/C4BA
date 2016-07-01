
<?php 
    $themes =  Yii::app()->request->baseUrl."/themes/blog/" ; 
    
 ?>

<div class="rev_slider_wrapper">
    <div class="rev_slider" data-version="5.0">
        <ul>

           <?php foreach ($newarticle as $key => $value ) { 
            $_title = customURLSEO($value['title']);

           ?>            
     
            <li data-transition="fade">
               
               <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/article/<?php echo $value['image'] ?>" 
               alt="<?php echo $value['title'] ?>">
                
                <div class="tp-caption text"
                    data-x="center"
                    data-y="center"
                    data-voffset="-80"
                    data-speed="700"
                    data-start="1200"
                    data-transform_in="o:0;y:-100;s:500;"
                    data-transform_out="o:0;y:-100;s:500;">
                    <?php echo $value['name'] ?>
                </div>
                
                <div class="tp-caption title"
                    data-x="center"
                    data-y="center"
                    data-speed="700"
                    data-start="1500"
                    data-transform_in="o:0;x:-100;s:500;"
                    data-transform_out="o:0;x:-100;s:500;">
                    <?php echo $value['title'] ?>
                </div>  
            
                
                <div class="tp-caption"
                    data-x="center"
                    data-y="center"
                    data-hoffset="0"
                    data-voffset="120"
                    data-speed="700"
                    data-start="1800"
                    data-transform_in="o:0;y:100;s:500;"
                    data-transform_out="o:0;y:100;s:500;">
                    <a class="btn btn-default" 
                    href="<?php echo  Yii::app()->createUrl('/article/'.$_title.'-'.$value['id'] ); ?>">
                        Read more
                    </a>
                </div>
                
            </li>
            <?php } ?>
        </ul>
    </div><!-- rev_slider -->
</div><!-- rev_slider_wrapper -->