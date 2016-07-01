<!-- <pre> -->
<?php 
    $themes =  Yii::app()->request->baseUrl."/themes/hadahi/" ; 
    $roots =  Yii::app()->request->baseUrl;


  //  print_r($articles); exit();
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
      <div class="pagenation">&nbsp;<a href="index.html">Trang chủ</a> <i>/</i>Tư vấn</div>
    </div>
  </div>
  <!--end pagenation-->
  <div class="clearfix"></div>
  <!--END ::  Breadcrumb-->
  <!-- ============================================= -->


<!---------------------------------------------->
<!--Blog-->
<div class="blog section_holder53 two">
<div class="container">


<?php 
$lens = count($articles);
foreach ($articles as $key => $value): 
 $t_article_2 = customURLSEO($value->title);

?>
   
<div class="one_third <?php  if( $key == $lens - 1 ) { echo 'last' ;} ?>">
  <div class="post_holder">
    <!-- <div class="date"> <span>25</span>Th11, 2015 </div> -->
    <!-- <div class="comments"> <span><i class="fa fa-comment"></i></span> 15 </div> -->
    <div class="post_img">
      <div class="hover_box">
        <div class="box_inner">
          <a href="<?php echo  Yii::app()->createUrl('blog/'.$t_article_2.'-'.$value->id ); ?>"><div class="icon"><i class="fa fa-search"></i></div></a>
          <a href="<?php echo  Yii::app()->createUrl('blog/'.$t_article_2.'-'.$value->id ); ?>"><div class="icon last"><i class="fa fa-link"></i></div></a>
        </div>
      </div>
      <img src="<?php echo $roots; ?>/images/article/<?php echo $value->image; ?>" alt="<?php echo  $value->title; ?>" class="img_size1"/>
    </div>
    <div class="bottom_strip"></div>
    <div class="bottom_shape"></div>
    <div class="text_holder">
      <a href="<?php echo  Yii::app()->createUrl('blog/'.$t_article_2.'-'.$value->id ); ?>"><h4 class="uppercase"><?php echo  $value->title; ?></h4></a>
      <p><?php echo substr($value->intro,0,50) . "..."; ?></p>
      <a class="readmore_but12" href="<?php echo  Yii::app()->createUrl('blog/'.$t_article_2.'-'.$value->id ); ?>">Chi tiết</a>
    </div>
    </div> <!--end postholder-->
    </div><!--end item-->

<?php endforeach ?>



</div>
</div><!-- end section-->


<!--END :: Blog-->
<!---------------------------------------------->

<?php 



function customURLSEO($str)
{
    
	$str = preg_replace('/[^A-Za-z0-9. -]/', '', str_replace( " " , "-", $str));
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