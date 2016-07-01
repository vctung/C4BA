<!--  <li class="<?php echo (Yii::app()->controller->action->id == 'index') ? 'current_page_item' : ''; ?> menu-item-simple-parent"><a href="<?php echo  Yii::app()->createUrl('index'); ?>">Trang chủ</a></li> -->
 
 <!-- <li class="<?php echo (Yii::app()->controller->action->id == 'gioithieu') ? 'current_page_item' : ''; ?>  menu-item-simple-parent"><a href="<?php echo  Yii::app()->createUrl('gioithieu'); ?>">Giới thiệu </a></li> -->
 <!-- <li class="<?php echo (Yii::app()->controller->action->id == 'vitri') ? 'current_page_item' : ''; ?>  menu-item-simple-parent"><a href="<?php echo  Yii::app()->createUrl('vitri'); ?>">Vị trí dự án </a></li> -->
 <!-- <li class="<?php echo (Yii::app()->controller->action->id == 'matbang') ? 'current_page_item' : ''; ?>   menu-item-simple-parent"><a href="<?php echo  Yii::app()->createUrl('matbang'); ?>">Mặt bằng </a></li> -->
 <!-- <li class="<?php echo (Yii::app()->controller->action->id == 'galler') ? 'current_page_item' : ''; ?>  menu-item-simple-parent"><a href="<?php echo  Yii::app()->createUrl('gallery'); ?>">Cập nhật tiến độ </a></li>
 <li class="<?php echo (Yii::app()->controller->action->id == 'blog') ? 'current_page_item' : ''; ?>  menu-item-simple-parent"><a href="<?php echo  Yii::app()->createUrl('blog'); ?>">Tin tức</a></li>
  <li class="<?php echo (Yii::app()->controller->action->id == 'price') ? 'current_page_item' : ''; ?>   menu-item-simple-parent"><a href="<?php echo  Yii::app()->createUrl('price'); ?>">Giá và PTTT </a></li>
 <li class="<?php echo (Yii::app()->controller->action->id == 'contact') ? 'current_page_item' : ''; ?>  menu-item-simple-parent">
 <a href="<?php echo  Yii::app()->createUrl('contact'); ?>">Liên hệ</a>
 </li> -->

<?php 
  $maincat = Catalog::model()->findAll();
  //active
 ?>

 <ul class="nav navbar-nav">
 <?php foreach ($maincat as $key => $value) { ?>
   <?php if ( $value->parentid == 0 )  {  ?>
      <li class="dropdown">
       <a href="#" data-toggle="dropdown" class="dropdown-toggle ">  
       <?php echo $value->name; ?> </a>
           <ul class="dropdown-menu" role="menu">
             <?php foreach ($maincat as $key => $value2) { ?>
                    <?php if ( $value2->parentid == $value->id )  {  ?>
                        <li class="dropdown-submenu mul">
						     <?php 
							 $count_2 = 0;
							 foreach ($maincat as $key => $value4) { 
								 if ( $value4->parentid == $value2->id )  {
									 $count_2++;
								 }
							 } 
							 $cat_name =  Yii::app()->createUrl('catalog/'.$value2->name.'-'.$value2->id) ;
							 ?>
							
							 
                            <a href="<?php if ($count_2 != 0 ) { echo "#";  }  ?>	 <?php if ($count_2 == 0 ) { echo $cat_name;  }  ?>">
                              <?php echo $value2->name; ?>
                            </a>
								<ul class="dropdown-menu">
									 <?php foreach ($maincat as $key => $value3) { ?>
											 <?php if ( $value3->parentid == $value2->id )  {  ?>
												  <li>   <a href="<?php echo  Yii::app()->createUrl('catalog/'.$value3->name.'-'.$value3->id); ?>"> <?php echo $value3->name; ?></a></li>
											 <?php } ?>
									 <?php } ?>
								</ul>
                        </li>
                     <?php } ?>
               <?php } ?>
                         
          </ul>
      </li>
       <?php } ?>
 <?php  }  ?>

      <li >
        <a href="<?php echo  Yii::app()->createUrl('about'); ?>"> Về chúng tôi </a>
    </li>
  </ul>