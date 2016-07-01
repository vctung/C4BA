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


<div class="container">
                <!-- Primary Starts -->
                <section id="primary" class="with-right-sidebar page-with-sidebar"> 
                
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
                            <a href="blog.html"><img  style="width: 100%"  src="<?php echo $roots; ?>/images/article/<?php echo $article->image; ?>" alt="<?php echo $article->title; ?>"/></a>
                        </div> <!-- **entry-thumb - Ends** -->
                        <!-- **entry-detail - Starts** -->
                        <div class="entry-detail">
                            <div class="entry-title">
                                <h4><a href="blog.html"><?php echo $article->title; ?></a></h4>
                            </div>
                            <!-- **entry-meta-data - Starts** -->
                            <div class="entry-meta-data">
                                <p><span class="fa fa-user"> </span> Posted By: <a href="#"> admin </a></p>
                                <p><span class="fa fa-tag"> </span> In: <a href="#">  Trend,</a> <a href="#"> Technology,</a><a href="#"> Web2.0 </a></p>
                            </div> <!-- **entry-meta-data - Ends** -->
                      
                            <div class="dt-sc-margin10"></div>
                            <blockquote class="type2"> 
                                <span class="fa fa-quote-left"></span> 
                                <q><?php echo $article->intro; ?></q> 
                                <span class="fa fa-quote-right"></span> 
                            </blockquote>
                            <div class="dt-sc-hr-invisible-very-small"></div>
                            <?php echo $article->content; ?>
                        </div> <!-- **entry-detail - Ends** -->
                    </article><!-- **Blog-post - Ends** -->
                    
            


                    <!-- **commententries** - Starts-->
                    <div class="commententries">
                        
                    </div> <!-- **commententries- Ends** --> 

               
                 
                    
                </section> <!-- **Primary - Ends** --> 
                <!-- **secondary - Starts** --> 
                <section id="secondary-right" class="secondary-sidebar secondary-has-right-sidebar">
                
                    <aside class="widget widget_recent_entries" id="my_recent_posts-3">
                        <h4 class="widgettitle"><span>Recent Posts</span></h4>
                        <div class="recent-posts-widget">
                            <ul>
                            <?php  foreach ($new_article as $key => $value) {
                              $t_article = customURLforSEO($value['title']);
                             ?>
                                <li>
                                    <div class="thumb">
                                        <a href="#" title=""> <img src="<?php echo $roots; ?>/images/article/<?php echo $value['image']; ?>" alt="image" title=""/></a>
                                    </div>
                                    <h4><a href="<?php echo  Yii::app()->createUrl('blog/'.$t_article.'-'.$value['id'] ); ?>">
                                    <?php echo $value['title']; ?></a></h4>
                                    <!-- **entry-meta-data - Starts** -->
                                  
                                </li>
                           <?php } ?>   

                            </ul>
                        </div>
                    </aside>

            
                    
                </section> <!-- **secondary - Ends** --> 
            </div> <!-- **container - Ends** --> 



<?php 

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


 <style type="text/css" media="screen">

    .recent-posts-widget ul li {
        border-bottom: 1px dotted #ccc;
    }
     .recent-posts-widget ul li  h4{
            line-height:59px;
     }
     .recent-posts-widget ul li:first-child {
        border-top: 1px solid #ccc;
    }

</style>
