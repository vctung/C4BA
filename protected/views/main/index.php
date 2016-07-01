<?php 
    $themes =  Yii::app()->request->baseUrl."/themes/blog_mainpage/" ; 
    $roots =  Yii::app()->request->baseUrl;

    // echo "<pre>";
    // var_dump($section_about_content );
    // exit();
 ?>


<!-- Slide -->
<div data-id="" id="page1" class=''>
      <div class="bgHolder">
        <div class="bg1"></div>
      </div>
      <div class="container">
      <div class="slider_box">
          <div class="slider_wrapper">
              <div>
                  <div id="camera_wrap">
                  <?php foreach ($slide as $key => $value) {
                    # code...
                   ?>
                      <div data-src="<?php  echo $roots ?>/images/slide/<?php echo $value->image; ?>">
                        <div class="caption fadeIn">
                          <div class="container">
                           <div class="row mar_t_200">
                             <div class="col-lg-6 col-lg-offset-6 col-md-6 col-md-offset-6  col-sm-offset-6 col-sm-6 col-xs-offset-6 col-xs-6">
                              <p class="p1"> <?php echo $value->name; ?>  </p>
                              <p class="p2 mar_t_3"><?php echo $value->text; ?> </p>
                              <a href="<?php echo $value->link; ?> " class="btn mar_t_5">more info</a>
                             </div>
                           </div>
                          </div>
                        </div>
                      </div>
                    <?php } ?>  
                  </div>
              </div> 
          </div>
          <div class="navigCamera">
          <a href="#" class="prev_b icon-angle-left"></a>
          <a href="#" class="next_b icon-angle-right"></a>
        </div>
      </div>
      </div>
    </div>
<!-- END :: Slide -->



<!-- About -->
<div data-id="about" id="page2" class='oh'>
      <div class="bgHolder">
        <div class="bg2"></div>
      </div>
      <div class="container">
        <div class="row">

            <div class="row mar_t_6 pad_b_3">

            <?php foreach ($section_about_content as $key => $value) {
                $_decode = json_decode($value['json'] , true);

                $image = str_replace("%2F","/",$_decode['image']);
                $title = str_replace("+"," ",$_decode['title']);
                $text = str_replace("+"," ",$_decode['text']);
                $link = str_replace("%3A",":",$_decode['link']);
             ?>
              <div class="col-lg-3 col-lg-offset-0 col-md-3 col-md-offset-0 col-sm-6 col-xs-12 tac">
                <div id="page2_item1">
                  <img src="<?php  echo $image ?>" alt="" class=''>
                  <h3 class="mar_t_5"><?php echo $title; ?></h3>
                  <p class="mar_t_3">
                  <?php echo $text; ?>
                  </p>
                  <div class="bord_2"></div>
                  <p class=""><a href="<?php echo str_replace("%2F","/",$link) ; ?>" class="btn btn_1">more info</a></p>
                </div>
              </div>
              <?php  }  ?>
            
          </div>
        </div>
      </div>
    </div>

<!-- END :: About -->


<?php 

  $_decode = json_decode($section_service_content['json'] , true);
  $title_service = str_replace("+"," ",$_decode['title']);
  $intro_service = str_replace("+"," ",$_decode['intro']);
  $service_1 = str_replace("+"," ",$_decode['service_1']);
  $service_2 = str_replace("+"," ",$_decode['service_2']);
  $service_3 = str_replace("+"," ",$_decode['service_3']);
  $link_service = str_replace("%3A",":",$_decode['link']);

 ?>
<!-- Service -->
<div data-id="our_services" id="page3"  class=''>
      <div class="image_resize">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-lg-offset-0 col-md-6 col-md-offset-0 col-sm-6 col-xs-12">
          <p class="p3"><?php echo $title_service; ?></p>
          <p class="p2 tal mar_t_3">   </p>
          <p class="tal mar_t_3 p5 t1">
          <?php echo $intro_service; ?>
          </p>
          </div>
          </div>
          <div class="row">
          <div class="col-lg-4 col-lg-offset-0 col-md-4 col-md-offset-0 col-sm-6 col-xs-12 pad_b_3">
          <ul class="list_1">
        
           <li class='p3_item1'>
            <p class="p4">1.</p>
            <p class="tal mar_t_1 p5">
             <?php echo $service_1; ?>
            </p>
           </li>
           <li  class='p3_item2'>
            <p class="p4">2.</p>
            <p class="tal mar_t_1 p5">
              <?php echo $service_2; ?>
            </p>
           </li>
           <li  class='p3_item3'>
            <p class="p4">3.</p>
            <p class="tal mar_t_1 p5">
              <?php echo $service_3; ?>
            </p>
           </li>
           </ul>
           <a href="<?php echo  str_replace("%2F","/",$link_service );?>" class="btn tal mar_t_2 p3_item4">more info</a>
          </div>
        </div>
      </div>
      </div>
    </div>
<!-- END :: Service -->




<!-- Blog -->

<div data-id="news" id="page4"  class=''>
      
      <div class="bgHolder">
        <div class="bg2"></div>
      </div>
      <div class="container ">
            <div class="row mar_t_100 pad_b_100">
            <div class="col-lg-12 col-lg-offset-0 col-md-12 col-md-offset-0 col-sm-12 col-xs-12">
            <h2>latest news</h2>
            </div>

            <?php foreach ($newarticle as $key => $value) {
             $title = customURLSEO($value['title']);
            ?>
              <div class="col-lg-3 col-lg-offset-0 col-md-3 col-md-offset-0 col-sm-6 col-xs-12">
                <div id="page4_item1"  class="maxheight">
                  <div class="badge mar_t_2">
                  <?php echo retypeTimeIndex($value['datetcreate']) ?>                  
                  </div>
                  <p class="mar_t_3">
                  <strong><?php echo $value['title'] ?></strong>
                  </p>
                  <p class="">
                  <a href="<?php echo  Yii::app()->createUrl('/article/'.$title.'-'.$value['id'] ); ?>" class="btn btn_1 mar_t_5">more info</a></p>
                </div>
              </div>  
            <?php }  ?>


          </div>
      </div>
    
    </div>

<!-- END :: Blog -->


<?php 
  $_decode = json_decode($section_footer_content['json'] , true);
  $address = urldecode($_decode['address']);
  $phone = urldecode($_decode['phone']);
  $coppyright = urldecode($_decode['coppyright']);
  $map = urldecode($_decode['map']);

 ?>

<!-- Contact -->
<div data-id="contacts" id="page5">
  <div class="bgHolder">
    <div class="bg5"></div>
  </div>
  <div class="container">
    <div class="row mar_t_100">
      <div class="col-lg-3 col-lg-offset-0 col-md-3 col-md-offset-0 col-sm-4 col-xs-12">
        <h2 class="">locations</h2>
        <p class="mar_t_6"> <?php echo $address  ?></p>
        <p class=""><em class="width_1">Freephone:</em> + <?php echo $phone  ?></p>
      </div>
      <div class="col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1 col-sm-4 col-xs-12">
        <h2 class="">newsletter</h2>
        <form id="form1">
          <div class="success">Your subscribe request has been sent!</div>
          <fieldset>
            <label class="email">
              <input type="email" value="enter your email">
              <span class="error">*This is not a valid email address.</span></label>
              <div class="btns"><a href="#" class="button" data-type="submit">GO</a></div>
              <div class="claer"></div>
            </fieldset>
          </form>
        </div>
        
        <div class="col-lg-3 col-lg-offset-0 col-md-3 col-md-offset-0 col-sm-4 col-xs-12 desktop-only">
          <h2 class="">copyright</h2>
          <p class="copyright"><?php echo $coppyright  ?></p>
        </div>
      </div>
    </div>
    <div class="mapHolder">
      <figure class="g_map"><iframe src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
      </figure>
    </div>  
    
  </div>

  <!--  END :: Contact -->