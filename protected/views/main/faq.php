<?php 
    $themes =  Yii::app()->request->baseUrl."/themes/home3/" ; 
    $roots =  Yii::app()->request->baseUrl;
 ?>

 <div class="container">
    <div class="sixteen columns page-title">
        <div class="eight columns alpha">
            <h3> <span> Hỏi - Đáp </span>  </h3>
        </div>
        <div class="eight columns omega">
            <nav class="breadcrumbs">
                <ul>
                    <li> Bạn đang ở : </li>
                    <li>
                        <a href="<?php echo Yii::app()->createUrl("/index") ?>">Trang chủ</a>
                    </li>
                    <li> Hỏi - Đáp  </li>
                </ul>
            </nav>
        </div>
        <div class="clearfix"></div>
    </div><!-- page-title -->
 </div><!-- container -->



 <div class="container">
    
    <!-- begin accordion -->
    <div class="twelve columns">
                <div class="accordion">

                <?php foreach ($faq as $key => $value) {  ?>    
                    <div>
                        <span class="accordion-title"><?php echo $value->question; ?></span>
                        <div class="accordion-inner">
                            <p><?php echo $value->answer; ?></p>
                        </div>
                    </div>
                  <?php } ?> 
                </div>
    </div>
    <!-- end accordion -->
    
                <!-- Sidebar -->
                <div class="four columns sidebar">

                    <?php $this->widget('application.components.RightBar'); ?>

                  
                </div>
                <!-- End Sidebar -->
                
                <div class="clearfix"></div>
    
                
</div><!-- container -->


<?php 

function setCatName($list_cat, $catid)
{
    foreach ($list_cat as $key => $value) {
        if($catid == $value->id)
        {
            return $value->name;
        }
    }
}

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