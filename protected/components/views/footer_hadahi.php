<?php 
    $themes =  Yii::app()->request->baseUrl."/themes/hadahi/" ; 

    $new_article = Yii::app()->db->createCommand()
        ->select('*')
        ->from('article')
        ->where('catid=1')
        ->limit('2')
        ->order('id desc')
        ->queryAll();

 ?>


<div class="clearfix"></div>
<!--end section 30 : Our client-->
  <div class="footer">
    <div class="container">
      <div class="one_fourth">
        <div class="footer_logo"><img src="<?php echo $themes; ?>images/footer_logo.png" alt=""/></div>
        <span class="address">Trụ sở chính : 187/7 Điện Biên Phủ, P. ĐaKao, Q. 1, Tp. HCM</span> 
		 <span class="address">Trụ sở giao dịch: 333/33 Đinh Bộ Lĩnh, P. 26, Q. Bình Thạnh, Tp. HCM</span> 
		<span class="address phone">Điện thoại: (08) 6279 2727  </span>
		<span class="address fax">Fax: (08) 38 23 50 99 </span>
		<span class="address email">Email:  support@hadahi.vn </span> </div>
      <!--end item-->
      
      <div class="one_fourth">
        <h3 class="title">Tư vấn</h3>
        <div class="title_line"></div>

        <?php  foreach ($new_article as $key => $value) { 
          $t_article = customURLforSEO($value['title']);
          $a  = ($key == 0) ?  ' first' :  ' last' ;
          ?>
        <div class="recent_posts <?php   echo $a; ?> ">
          <div class="img">
            <div class="imgholder"><img style="width: 60px" src="<?php echo $themes; ?>/images/article/<?php echo $value['image']; ?>" alt=""/></div>
          </div>
          <div class="post">
            <h4 title="<?php echo $value['title']; ?>" class="title"><a href="<?php echo  Yii::app()->createUrl('blog/'.$t_article.'-'.$value['id'] ); ?>"> 
            <?php echo substr($value['title'], 0, 30 ). "..."; ?></a></h4>
            <div class="clearfix"></div>
            <!--<p class="smalltext">Lorem ipsum dolor sit</p>-->
            <div class="clearfix"></div>
            <div class="info">By Admin</div>
          </div>
        </div>
        <!--end item-->
         <?php } ?>  
        
      
        
      </div>
      <!--end item-->
  
      
      <div class="one_half last">
                <div class="fb-page" data-href="https://www.facebook.com/dongphucHadahi" data-width="500px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-   facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/dongphucHadahi"><a href="https://www.facebook.com/dongphucHadahi">Facebook</a></blockquote></div></div>
      </div>
      <!--end item-->
          
      
    </div>
  </div>
  <!--end footer-->
  
  <div class="copyrights">
    <div class="container"><span>Copyright © 2015 Hadahi | <a href="http://tungvc.com/">Design by Sunny </a></span></div>
  </div>
  <!--end copyrights--> 



<?php 

function customURLforSEO($str)
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