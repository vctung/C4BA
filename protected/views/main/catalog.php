<!-- <pre> -->
<?php 
    $themes =  Yii::app()->request->baseUrl."/themes/hadahi/" ; 
    $roots =  Yii::app()->request->baseUrl;

    // print_r($Catalog); exit();
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
      <div class="pagenation">&nbsp;<a href="index.html">Trang chủ</a> <i>/</i> 
      <?php echo $Catalog->name; ?>
      </div>
    </div>
  </div>
  <!--end pagenation-->
  <div class="clearfix"></div>
  <!--END ::  Breadcrumb-->
  <!-- ============================================= -->




<div class="clearfix"></div> 
<div class="section_holder50">
    <div class="container">
        <div class="section_holder39 two custom_cat_box">
<!--
      <h3 class="shop_title_medium">Featured Products</h3>
      <div class="shop_title_line"></div>
      <div class="clearfix"></div>
-->
 
      <div class="pro_container two">
            <ul class="grid ul_product ">
              <?php
                $lens = count($articles);
                foreach ($Catalogs as $key => $value):
                $tit = customURLSEO($value->name);
              ?>
              <li class="img_ho_st_holder" >
                <a href="<?php echo  Yii::app()->createUrl('product/'.$tit.'-'.$value->id ); ?>" class="proimage img_ho_st1">
                 <span class="text">
                      <div class="imgbox"> <img src="<?php echo $roots; ?>/images/product/<?php echo $value->image; ?>" alt="<?php echo  $value->name; ?>" class="img_size1"/>  </div>
                       <img src="<?php echo $roots; ?>/images/product/<?php echo $value->att_1; ?>" alt="<?php echo  $value->name; ?>" class="img_size1"/> 
                     
                  </span>
                 
                </a>
                <h5 class="lessmar nocaps"><?php echo  $value->name; ?></h5>
                <div>Mã sản phẩm : <?php echo  $value->sku; ?></div>
                <!-- <div class="proprice">$24.99</div> -->
              </li>
              <!--end item-->
              
              <?php endforeach ?>
              
            </ul>

      </div>


        
  </div>
        

    </div>
</div>

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


