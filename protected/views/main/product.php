<!-- <pre> -->
<?php 
    $themes =  Yii::app()->request->baseUrl."/themes/hadahi/" ; 
    $roots =  Yii::app()->request->baseUrl;

  //  print_r($product); exit();
?>


  <div class="clearfix"></div>
  
  <div class="header_medium two">
    <div class="container">
      <h3 class="bigtext"><span>Chúng tôi là </span> Hadahi.</h3>
      <h3 class="smalltext"><span>Chúng tôi tạo nên</span> sự khác biệt </h3>
    </div>
  </div>
  <!--  END :: Image header-->
  


    <div class="clearfix"></div>
  <div class="section_holder46">
    <div class="container">
      <div class="pagenation">&nbsp;<a href="index.html">Trang chủ</a> <i>/</i> <a href="#">Sản phẩm</a> <i>/</i> 
      <?php echo $product->name; ?>
      </div>
    </div>
  </div>
  <!--end pagenation-->
  <div class="clearfix"></div>
  <!--END ::  Breadcrumb-->
  <!-- ============================================= -->





 <!-- ------------------------------------------ -->
<!-- Product detail -->
<div class="clearfix"></div>
<div class="section_holder47">
  <div class="container">
    <div class="product_preview_left">
      <div class="gallery">
            <div class="full">
              <!-- first image is viewable to start -->
              <img src="<?php echo $roots; ?>/images/product/<?php echo $product->image; ?>" />
            </div>
  <!--       <div class="previews">
          <a class="selected" data-full="<?php echo $themes; ?>/images/products/big_1.jpg"><img src="<?php echo $themes; ?>/images/products/thumbs/small_1.jpg" /></a>
          <a data-full="<?php echo $themes; ?>/images/products/big_1.jpg"><img src="<?php echo $themes; ?>/images/products/thumbs/small_1.jpg" /></a>
          <a data-full="<?php echo $themes; ?>/images/products/big_2.jpg"><img src="<?php echo $themes; ?>/images/products/thumbs/small_2.jpg" /></a>
          <a data-full="<?php echo $themes; ?>/images/products/big_3.jpg"><img src="<?php echo $themes; ?>/images/products/thumbs/small_3.jpg" /></a>
          <a data-full="<?php echo $themes; ?>/images/products/big_4.jpg"><img src="<?php echo $themes; ?>/images/products/thumbs/small_4.jpg" /></a>
        </div> -->
      </div>
      </div> <!--end left-->

    <div class="product_info_right">
      <h2 class="product_title nocaps"> <?php echo $product->name; ?> </h2>
      <div class="clearfix"></div>

      <div class="product_detail_tab"
      >
         <ul class="tabs9">
          <li><a href="#example-9-tab-1" target="_self">Mô tả</a></li>
          <li><a href="#example-9-tab-2" target="_self">Màu sắc</a></li>
          <li><a href="#example-9-tab-3" target="_self">Size</a></li>
        </ul>

        <div class="tabs-content9">
          <div id="example-9-tab-1" class="tabs-panel9">
            <p>Development dolor sit amet, consectetur adipiscing elit. Phasellus ac fringilla nulla, sit amet consequat eros. Pellentesque pharetra blandit commyolk. Phasellus massa nisl, feugiat ac bibendum et.</p><br/>
            
            <p>Development dolor sit amet, consectetur adipiscing elit. Phasellus ac fringilla nulla, sit amet consequat eros. Pellentesque pharetra blandit commyolk. Phasellus massa nisl, feugiat ac bibendum et, dictum id ipsum. Quisque sit amet accumsan tortor It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged many web sites still in their infanc versions have evolved o</p>
            
          </div>
          <!-- end tab 1 -->
          
          <div id="example-9-tab-2" class="tabs-panel9">              
            <p>Development dolor sit amet, consectetur adipiscing elit. Phasellus ac fringilla nulla, sit amet consequat eros. Pellentesque pharetra blandit commyolk. Phasellus massa nisl, feugiat ac bibendum et, dictum id ipsum. Quisque sit amet accumsan tortor It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged many web sites still in their infanc versions have evolved over the years. the Internet tend to repeat predefined chunks as necessary, making this the first true rand.</p>
          </div>
          <!-- end tab 2 -->


          <div id="example-9-tab-3" class="tabs-panel9">              
            <p>Development dolor sit amet, consectetur adipiscing elit. Phasellus ac fringilla nulla, sit amet consequat eros. Pellentesque pharetra blandit commyolk. Phasellus massa nisl, feugiat ac bibendum et, dictum id ipsum. Quisque sit amet accumsan tortor It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged many web sites still in their infanc versions have evolved over the years. the Internet tend to repeat predefined chunks as necessary, making this the first true rand.</p>
          </div>
          <!-- end tab 3-->

          
        </div>
        <!-- end all tabs --> 

      </div>

  
      <a class="add_but" href="<?php echo  Yii::app()->createUrl('order'); ?>">Hướng dẫn đặt hàng</a>
      
    </div>
        <!--end right-->

      </div>
      </div> <!--end section 47-->
<!--END ::  Product detail-->
<!---------------------------------------------->







    
 <!-- ------------------------------------------ -->
<!-- Clients -->
   <div class="clearfix"></div>
  <div class="section_holder11 client_quote">
    <div class="container">
  
      <section class="slider">
        <div class="flexslider style2">
          <ul class="slides">
            <li>
              <div class="one_half">
                <div class="clint_img_holder">
                  <div class="clint_img_frame">
                    <div class="clint_img_shape">
                      <div class="clint_img three" style="background: url('<?php echo $themes; ?>/images/avar2.jpg');"> </div>
                    </div>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="text_holder_outer">
                  <div class="text_holder">
                    <p>Lorem ipsum dolor sit amet consectetuer dolor sit amet adipiscing elit Suspendisse et justo. </p>
                    <br/>
                    <h6 class="lessmar2"><strong>Sunny</strong></h6>
                    <div class="clearfix"></div>
                    <span>Manager - <b>MediaInc</b></span> </div>
                </div>
              </div>
              <!--end item-->
              
              <div class="one_half last">
                <div class="clint_img_holder">
                  <div class="clint_img_frame">
                    <div class="clint_img_shape">
                      <div class="clint_img four" style="background: url('<?php echo $themes; ?>/images/avar1.jpg');"> </div>
                    </div>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="text_holder_outer">
                  <div class="text_holder">
                    <p>Lorem ipsum dolor sit amet consectetuer dolor sit amet adipiscing elit Suspendisse et justo. </p>
                    <br/>
                    <h6 class="lessmar2"><strong>Sunny</strong></h6>
                    <div class="clearfix"></div>
                    <span>Support - <b>MediaInc</b></span> </div>
                </div>
              </div>
              <!--end item--> 
              
            </li>
            <!--end item-->
            
            <li>
              <div class="one_half">
                <div class="clint_img_holder">
                  <div class="clint_img_frame">
                    <div class="clint_img_shape">
                      <div class="clint_img" style="background: url('<?php echo $themes; ?>/images/avar1.jpg');"> </div>
                    </div>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="text_holder_outer active">
                  <div class="text_holder">
                    <p>Lorem ipsum dolor sit amet consectetuer dolor sit amet adipiscing elit Suspendisse et justo. </p>
                    <br/>
                    <h6 class="lessmar2"><strong>Sunny </strong></h6>
                    <div class="clearfix"></div>
                    <span>Manager - <b>MediaInc</b></span> </div>
                </div>
              </div>
              <!--end item-->
              
              <div class="one_half last">
                <div class="clint_img_holder">
                  <div class="clint_img_frame">
                    <div class="clint_img_shape">
                      <div class="clint_img two" style="background: url('<?php echo $themes; ?>/images/avar2.jpg');"> </div>
                    </div>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="text_holder_outer">
                  <div class="text_holder">
                    <p>Lorem ipsum dolor sit amet consectetuer dolor sit amet adipiscing elit Suspendisse et justo. </p>
                    <br/>
                    <h6 class="lessmar2"><strong>Sunny </strong></h6>
                    <div class="clearfix"></div>
                    <span>Support - <b>MediaInc</b></span> </div>
                </div>
              </div>
              <!--end item--> 
              
            </li>
            <!--end item-->
            
          </ul>
          <ul class="flex-direction-nav four">
            <li> <a class="flex-prev four" href="#"></a> </li>
            <li> <a class="flex-next four" href="#"></a> </li>
          </ul>
        </div>
      </section>
    </div>
  </div>

  <!--END ::  Clients-->
<!---------------------------------------------->







<!-- ------------------------------------------ -->
<!--RELATED PRODUCTS -->
<div class="section_holder49">
    <div class="container">
      <h3 class="shop_title_medium">Có thể bạn sẽ thích</h3>
      <div class="shop_title_line"></div>
      <div class="clearfix"></div>
      <div class="left">
        <ul class="tabs6">
          <li><a href="#example-6-tab-1" target="_self">Áo thun</a></li>
          <li><a href="#example-6-tab-2" target="_self">Đồng phục HSSV</a></li>
          <li><a href="#example-6-tab-3" target="_self">Đồng phục công ty</a></li>
          <li><a href="#example-6-tab-4" target="_self">Phụ kiện</a></li>
        </ul>
      </div>
      <div class="tabs-content6">
        <div id="example-6-tab-1" class="tabs-panel6">
          <div class="pro_container2 custom_cat_box">
            <ul class="grid">
            <?php 
                $lens_Aothun = count($Aothun);
              foreach ($Aothun as $key => $value): 
              $tit = customURLSEO($value->name);

            ?>
   
              <li class="<?php  if( $key == $lens_Aothun - 1 ) { echo 'last' ;} ?>">
              <a href="<?php echo  Yii::app()->createUrl('product/'.$tit.'-'.$value->id ); ?>" class="proimage">
               <img src="<?php echo $roots; ?>/images/product/<?php echo $value->image; ?>" alt="" class="img_size1"/>
              </a>
                 <h5 class="lessmar nocaps"><?php echo  $value->name; ?></h5>
                   <div>Mã sản phẩm : DL420</div>
                
              </li>
              <!--end item-->
              <?php endforeach ?>

              
            </ul>
          </div>
          <!-- end product categories --> 
          
        </div>
        <!-- end tab 1 -->
        
        <div id="example-6-tab-2" class="tabs-panel6">
          <div class="pro_container2 custom_cat_box">
            <ul class="grid">
              <?php 
                $lens_hssv = count($hssv);
              foreach ($hssv as $key => $value): 
              $tit = customURLSEO($value->name);

            ?>
   
              <li class="<?php  if( $key == $lens_hssv - 1 ) { echo 'last' ;} ?>">
              <a href="<?php echo  Yii::app()->createUrl('product/'.$tit.'-'.$value->id ); ?>" class="proimage">
               <img src="<?php echo $roots; ?>/images/product/<?php echo $value->image; ?>" alt="" class="img_size1"/>
              </a>
                 <h5 class="lessmar nocaps"><?php echo  $value->name; ?></h5>
                   <div>Mã sản phẩm : DL420</div>
                
              </li>
              <!--end item-->
              <?php endforeach ?>
              
            </ul>
          </div>
          <!-- end product categories --> 
        </div>
        <!-- end tab 2 -->
        
        <div id="example-6-tab-3" class="tabs-panel6">
          <div class="pro_container2 custom_cat_box">
            <ul class="grid">
              <?php 
                $lens_cty = count($cty);
              foreach ($cty as $key => $value): 
              $tit = customURLSEO($value->name);

            ?>
   
              <li class="<?php  if( $key == $lens_hssv - 1 ) { echo 'last' ;} ?>">
              <a href="<?php echo  Yii::app()->createUrl('product/'.$tit.'-'.$value->id ); ?>" class="proimage">
               <img src="<?php echo $roots; ?>/images/product/<?php echo $value->image; ?>" alt="" class="img_size1"/>
              </a>
                 <h5 class="lessmar nocaps"><?php echo  $value->name; ?></h5>
                   <div>Mã sản phẩm : DL420</div>
                
              </li>
              <!--end item-->
              <?php endforeach ?>
              
              
            </ul>
          </div>
          <!-- end product categories --> 
          <!-- end tab 3 --> 
          
        </div>
        <div id="example-6-tab-4" class="tabs-panel6">
          <div class="pro_container2 custom_cat_box">
            <ul class="grid">
              <?php 
                $lens_pk = count($pk);
              foreach ($pk as $key => $value): 
              $tit = customURLSEO($value->name);

            ?>
   
              <li class="<?php  if( $key == $lens_hssv - 1 ) { echo 'last' ;} ?>">
              <a href="<?php echo  Yii::app()->createUrl('product/'.$tit.'-'.$value->id ); ?>" class="proimage">
               <img src="<?php echo $roots; ?>/images/product/<?php echo $value->image; ?>" alt="" class="img_size1"/>
              </a>
                 <h5 class="lessmar nocaps"><?php echo  $value->name; ?></h5>
                   <div>Mã sản phẩm : DL420</div>
                
              </li>
              <!--end item-->
              <?php endforeach ?>
              
              
            </ul>
          </div>
          <!-- end product categories --> 
        </div>
        <!-- end tab 4 --> 
      </div>
      <!-- end all tabs --> 
    </div>
  </div>
  <!--end section 41-->

<!--END ::  RELATED PRODUCTS -->
<!---------------------------------------------->



<?php 

// function setCatName($list_cat, $catid)
// {
//     foreach ($list_cat as $key => $value) {
//         if($catid == $value->id)
//         {
//             return $value->name;
//         }
//     }
// }




function customURLSEO($str)
{

     $str = str_replace( " " , "-", $str);

    $accents_arr=array(
        "à","á","ạ","ả","ã","â","ầ","ấ","ậ","ẩ","ẫ","ă",
        "ằ","ắ","ặ","ẳ","ẵ","è","é","ẹ","ẻ","ẽ","ê","ề",
        "ế","ệ","ể","ễ",
        "ì","í","ị","ỉ","ĩ",
        "ò","ó","ọ","ỏ","õ","ô","ồ","ố","ộ","ổ","ỗ","ơ",
        "ờ","ớ","ợ","ở","ỡ",
        "ù","ú","ụ","ủ","ũ","ư","ừ","ứ","ự","ử","ữ",
        "ỳ","ý","ỵ","ỷ","ỹ",
        "đ",
        "À","Á","Ạ","Ả","Ã","Â","Ầ","Ấ","Ậ","Ẩ","Ẫ","Ă",
        "Ằ","Ắ","Ặ","Ẳ","Ẵ",
        "È","É","Ẹ","Ẻ","Ẽ","Ê","Ề","Ế","Ệ","Ể","Ễ",
        "Ì","Í","Ị","Ỉ","Ĩ",
        "Ò","Ó","Ọ","Ỏ","Õ","Ô","Ồ","Ố","Ộ","Ổ","Ỗ","Ơ",
        "Ờ","Ớ","Ợ","Ở","Ỡ",
        "Ù","Ú","Ụ","Ủ","Ũ","Ư","Ừ","Ứ","Ự","Ử","Ữ",
        "Ỳ","Ý","Ỵ","Ỷ","Ỹ",
        "Đ"
    );
 
    $no_accents_arr=array(
        "a","a","a","a","a","a","a","a","a","a","a",
        "a","a","a","a","a","a",
        "e","e","e","e","e","e","e","e","e","e","e",
        "i","i","i","i","i",
        "o","o","o","o","o","o","o","o","o","o","o","o",
        "o","o","o","o","o",
        "u","u","u","u","u","u","u","u","u","u","u",
        "y","y","y","y","y",
        "d",
        "A","A","A","A","A","A","A","A","A","A","A","A",
        "A","A","A","A","A",
        "E","E","E","E","E","E","E","E","E","E","E",
        "I","I","I","I","I",
        "O","O","O","O","O","O","O","O","O","O","O","O",
        "O","O","O","O","O",
        "U","U","U","U","U","U","U","U","U","U","U",
        "Y","Y","Y","Y","Y",
        "D"
    );
 
    $str2 =   str_replace($accents_arr,$no_accents_arr,$str);
    return  strtolower($str2);
}


?>
