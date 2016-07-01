
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


<div class="full-width-section">
            <div class="dt-sc-margin50"></div>
              <?php 
                     $t_article = customURLforSEO($matbang->title);
              ?>

                <div class="container">
                    <h2 class="aligncenter">Mặt bằng - căn hộ mẫu</h2>
                    <!-- <p class="middle-align">Sơ đồ mặt bằng của Căn hộ Idico </p>    -->
                    <div class="dt-sc-hr-invisible-small"></div>
                    
                    <div class="column dt-sc-one-half first animate" data-animation="fadeInDown" data-delay="100">
                        <!-- **entry-post - Starts** --> 
                        <article class="entry-post">
                            <div class="entry-meta">
                                <div class="date">
                                    <p> <span>28</span> FEB 2015 </p>
                                </div>
                                <div class="post-comments">
                                    <a href="#"><span class="fa fa-comment"></span> 12</a>
                                </div>
                            </div>
                            <div class="entry-post-content">
                                <div class="entry-thumb">
                                    <a href="<?php echo  Yii::app()->createUrl('blog/'.$t_article.'-'.$matbang->id ); ?>"><img src="<?php echo $roots; ?>/images/article/<?php echo $matbang->image; ?>" alt="image"/></a>
                                </div>
                                <div class="entry-detail">
                                    <h3>
                                   
                                        <a href="<?php echo  Yii::app()->createUrl('blog/'.$t_article.'-'.$matbang->id ); ?>">

                                            <?php echo $matbang->title; ?> 
                                        </a>
                                    </h3>
                                    <p><?php echo $matbang->intro; ?>  </p>
                                    <a class="dt-sc-button small" href="<?php echo  Yii::app()->createUrl('blog/'.$t_article.'-'.$matbang->id ); ?>"> Xem chi tiết <span class="fa fa-long-arrow-right"></span> </a>
                                </div>
                            </div>
                        </article><!-- **entry-post - Ends** --> 
                    </div>


                    <?php 
                         $t_article_2 = customURLforSEO($canhomau->title);
                  ?>
                    
                    <div class="column dt-sc-one-half animate" data-animation="fadeInUp" data-delay="100">
                        <!-- **entry-post - Starts** --> 
                        <article class="entry-post">
                            <div class="entry-meta">
                                <div class="date">
                                    <p> <span>27</span> AUG 2015 </p>
                                </div>
                                <div class="post-comments">
                                    <a href="#"><span class="fa fa-comment"></span> 15</a>
                                </div>
                            </div>
                            <div class="entry-post-content">
                                <div class="entry-thumb">
                                   <a href="<?php echo  Yii::app()->createUrl('blog/'.$t_article.'-'.$canhomau->id ); ?>"><img src="<?php echo $roots; ?>/images/article/<?php echo $canhomau->image; ?>" alt="image"/></a>
                                </div>
                                <div class="entry-detail">
                                    
                                    <h3><a href="<?php echo  Yii::app()->createUrl('blog/'.$t_article.'-'.$canhomau->id ); ?>">  <?php echo $canhomau->title; ?> </a></h3>
                                    <p> <?php echo $matbang->intro; ?> </p>
                                    <a class="dt-sc-button small" href="<?php echo  Yii::app()->createUrl('blog/'.$t_article.'-'.$canhomau->id ); ?>"> Xem chi tiết  <span class="fa fa-long-arrow-right"></span> </a>
                                </div>
                            </div>
                        </article><!-- **entry-post - Ends** --> 
                    </div>
                    

                
                    <div class="dt-sc-margin70"></div>
                </div>
            </div> <!-- **Full-width-section - Ends** -->


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

function customURLforSEO($str)
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