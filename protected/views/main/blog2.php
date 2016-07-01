
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


<div class="dt-sc-margin100"></div>   

<!-- Container starts-->

            <div class="container">
                
                <!-- Primary Starts -->
                <section id="primary" class="content-full-width"> 

                    <div class="blog-items apply-isotope">

                 
                    <?php foreach ($articles as $key => $value) {
                        $t_article_2 = customURLforSEO($value->title);
                    ?>
                        
                        <div class="column dt-sc-one-half">
                            <!-- **Blog-post - Starts** --> 
                            <article class="blog-post type3">
                                <!-- **entry-meta - Starts** -->
                                <div class="entry-meta">
                                    <div class="date">
                                        <p><span>22</span><br/>Dec</p>
                                    </div>
                                    <div class="post-comments">
                                        <a href="#"><span class="fa fa-comment"></span>12</a>
                                    </div>
                                </div> <!-- **entry-meta - Ends** -->
                                <!-- **entry-thumb - Starts** -->
                                <div class="entry-thumb">
                                    <a href="<?php echo  Yii::app()->createUrl('blog/'.$t_article_2.'-'.$value->id ); ?>">
                                    <img src="<?php echo $roots; ?>/images/article/<?php echo $value->image; ?>" alt="<?php echo $value->title; ?>"/></a>
                                </div> <!-- **entry-thumb - Ends** -->
                                <!-- **entry-detail - Starts** -->
                                <div class="entry-detail">
                                    <div class="entry-title">
                                        <h4><a href="<?php echo  Yii::app()->createUrl('blog/'.$t_article_2.'-'.$value->id ); ?>"> <?php echo $value->title; ?></a></h4>
                                    </div>
                                    <!-- **entry-meta-data - Starts** -->
                                    <div class="entry-meta-data">
                                        <p><span class="fa fa-user"> </span> Posted By: <a href="#"> admin </a></p>
                                        <p><span class="fa fa-tag"> </span> In: <a href="#">  Trend,</a> <a href="#"> Technology,</a> <a href="#"> Web2.0 </a></p>
                                    </div> <!-- **entry-meta-data - Ends** -->
                                    <div class="entry-body">
                                        <p><?php echo $value->intro; ?></p>
                                    </div>
                                </div> <!-- **entry-detail - Ends** -->
                            </article><!-- **Blog-post - Ends** --> 
                        </div>
                        
                       
                    <?php }  ?>
                        
                    </div> 
                    <div class="dt-sc-margin50"></div>
                </section> <!-- **Primary - Ends** --> 
                 
            </div> <!-- **container - Ends** --> 
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