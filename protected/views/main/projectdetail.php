<?php 
    $themes =  Yii::app()->request->baseUrl."/themes/home3/" ; 
    $roots =  Yii::app()->request->baseUrl;
?>


<div class="container">
    <div class="sixteen columns page-title">
        <div class="eight columns alpha">
            <h3> <span> <strong>Dự án : </strong><?php echo $project->name; ?>  </span>  </h3>
        </div>
        <div class="eight columns omega">
            <nav class="breadcrumbs">
                <ul>
                    <li> Bạn đang ở : </li>
                    <li>
                        <a href="<?php echo Yii::app()->createUrl("/index") ?>">Trang chủ</a>
                    </li>
                    <li> Chi tiêt về dự án </li>
                </ul>
            </nav>
        </div>
        <div class="clearfix"></div>
    </div><!-- page-title -->
 </div><!-- container -->


 <div class="container">

   <div class="eight columns">
        <div class="carousel">
                <div class="carousel-content">
                <?php foreach ($project_image as $key => $value) {
                    # code...
                  ?>
                   <img class="carousel-item" src="<?php echo  $roots; ?>/images/projects/<?php echo $value->image ?>" alt=" <?php echo $value->description; ?> ">    
                <?php }  ?>             
                   
                </div>
            </div>
        </div>

        <div class="eight columns">
        <h4 class="headline">  <strong>Dự án : </strong><?php echo $project->name; ?>  </h4>
                                                
            <p><?php echo $project->description; ?></p>
            <p>
                <a href="<?php echo $project->link; ?>" class="btn big colored"> Xem Dự án <i class="fa fa-chevron-circle-right" style="margin: 0 0 0 7px;"></i></a>
            </p>
              
        </div>
        <div class="clearfix"></div>
        <div class="separator"></div>


        <!-- Related Projects -->
            <div class="sixteen columns">
                <h4 class="headline">Dự án mới của chúng tôi </h4>
            </div>

            <?php foreach ($new_project as $key => $value) {
                $p_name = customURLforSEO( $value['name'] );
         ?>
                <!-- Project  -->
                <div class="four columns">
                    <div class="work">
                        <a href="<?php echo  Yii::app()->createUrl('project/'.$p_name.'-'.$value['id'] ); ?>" class="work-image">
                            <img src="<?php echo $roots ?>/images/projects/thumb/<?php echo $value['image'] ?>" alt="<?php echo $value['name'] ?>">
                            <div class="link-overlay fa fa-chevron-right">
                            </div>
                        </a>
                        <a href="<?php echo  Yii::app()->createUrl('project/'.$p_name.'-'.$value['id'] ); ?>" class="work-name"><?php echo $value['name'] ?></a>
                        <div class="tags">
                            <?php echo setCatName($all_project_cat , $value['catid'] ) ?>
                        </div>
                    </div>
                </div>
                <!-- End Project  -->

             <?php     }   ?>   
                <div class="clearfix"></div>



 </div>

 <!-- End container -->


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