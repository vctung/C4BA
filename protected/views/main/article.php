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
<!-- Blog detail -->


<div class="section_holder50">
<div class="container">

<div class="content_left">
<div class="section_holder52">

<!-- <div class="post_img">
<div class="img">
  <img src="<?php echo $roots; ?>/images/article/<?php echo $article->image; ?>" alt="<?php echo $article->title; ?>" alt="" class="img_size1"/>
</div>

<div class="bottom_strip"></div>
<div class="bottom_shape"></div>
</div> -->
 <!--end img-->

<div class="post_text">
<a href="#"><h3 class="uppercase padd_top1"><?php echo $article->title; ?></h3></a>
<span><?php echo $article->intro; ?></span>
<p><?php echo $article->content; ?></p>

<div class="divider_line"></div>
</div>

</div>
</div>



<div class="right_sidebar">

<div class="pro_sidebar_search">
<h4 class="pro_sidebar_title">Tìm kiếm</h4>
<div class="search">
<input class="serch_input" type="search" placeholder="Nhập để tìm">
<input name="" value="Tìm" class="search_submit" type="submit"></div>
</div>
        
<div class="categories_holder">
<h4 class="pro_sidebar_title">Chuyên mục</h4>

<ul class="list">
	<li class="first"><a href="<?php echo  Yii::app()->createUrl('blog'); ?>">Tư vấn</a></li>
<?php
///$lens = count($cat);
 //foreach ($cat as $key => $value) { 
 // $name = customURLSEO($value->name);
 //<li class=""><a href="#">  </a></li>
?>

	
 <?php// } ?> 
<li class="last"><a href="<?php echo  Yii::app()->createUrl('price'); ?>">Bảng giá</a></li>

</ul>
</div> <!--end categories-->

<div class="clearfix"></div>


<div class="sidebar_latest_posts">
<h4 class="pro_sidebar_title">Bài viết mới </h4>

<?php

  foreach ($new_article as $key => $value) { 
  $t_article = customURLSEO($value['title']);

  ?>
<div class="post_holder">
  <div class="left">
    <div class="img"><img src="<?php echo $roots; ?>/images/article/<?php echo $value['image']; ?>" alt="" class="img_size1"/></div>
  </div>
  <div class="right">
    <a href="<?php echo  Yii::app()->createUrl('blog/'.$t_article.'-'.$value['id'] ); ?>"><span class="title">
      <?php echo $value['title']; ?>
    </span></a>
    <div class="info">
      <span>By Admin</span>
    </div>
  </div>
  </div> <!--end item-->
 <?php } ?>   



</div> <!--end top rated products-->
<div class="clearfix"></div>



</div>
</div>
</div> <!--end section 50-->



<!--END :: Blog detail -->
<!---------------------------------------------->



<?php 

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
