<?php 
    $themes =  Yii::app()->request->baseUrl."/themes/home3/" ; 
    $roots =  Yii::app()->request->baseUrl;
?>

<!-- Filtering -->
<script src="<?php echo $themes; ?>/js/jquery.isotope.min.js"></script>
<script src="<?php echo $themes; ?>/js/filter.js"></script>

<!-- Prety photo -->
<script src="<?php echo $themes; ?>/js/jquery.prettyPhoto.js"></script>
<script>
    $(document).ready(function(){
        $("a[data-gal^='prettyPhoto']").prettyPhoto();
    });
</script>



<div class="container">
    <div class="sixteen columns page-title">
        <div class="eight columns alpha">
            <h3> <span> Dự án chúng tôi đã thực hiện  </span>  </h3>
        </div>
        <div class="eight columns omega">
            <nav class="breadcrumbs">
                <ul>
                    <li> Bạn đang ở : </li>
                    <li>
                        <a href="<?php echo Yii::app()->createUrl("/index") ?>">Trang chủ</a>
                    </li>
                    <li> Dự án </li>
                </ul>
            </nav>
        </div>
        <div class="clearfix"></div>
    </div><!-- page-title -->
 </div><!-- container -->




<div class="container">
    
    <div class="sixteen columns">
            <ul class="filter-list">
                <li data-filter="*" class="active">All</li>
                <?php foreach ($all_project_cat as $key => $value) {    ?>
                 <li data-filter=".cat_<?php echo $value->id; ?>"><?php echo $value->name; ?></li>
                <?php }  ?>
               
            </ul>
    </div>
    
    <div class="sixteen columns">
        <div class="filter-select">
            <div class="filter-current">
                 All categories
            </div>
            <ul>
                <li data-filter="*" class="active">All</li>
                 <?php foreach ($all_project_cat as $key => $value) {    ?>
                     <li data-filter=".cat_<?php echo $value->id; ?>"><?php echo $value->name; ?></li>
               <?php }  ?>
            </ul>
        </div>                
    </div>

</div>


<div class="container">
            
    <div class="row port works">
    <?php foreach ($project as $key => $value) {
        $p_name = customURLforSEO( $value->name );
     ?>

        <div class="row-item one-third column identity <?php echo "cat_".$value->catid; ?>">
            <div class="work">
                <a href="<?php echo  Yii::app()->createUrl('project/'.$p_name.'-'.$value->id); ?>" class="work-image">
                    <img src="<?php echo $roots; ?>/images/projects/thumb/<?php echo $value->image; ?>" alt="">
                    <div class="link-overlay fa fa-chevron-right">
                    </div>
                </a>
                <a href="<?php echo  Yii::app()->createUrl('project/'.$p_name.'-'.$value->id); ?>" class="work-name"><?php echo $value->name; ?></a>
                <div class="tags">
                    <?php echo setCatName($all_project_cat , $value->catid) ?>
                </div>
            </div>
        </div>
    <?php  }  ?>

    </div>
    
</div>



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