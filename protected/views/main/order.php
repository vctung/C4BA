<?php 
    $themes =  Yii::app()->request->baseUrl."/themes/hadahi/" ; 
    $roots =  Yii::app()->request->baseUrl;
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
      <div class="pagenation">&nbsp;<a href="index.html">Trang chủ</a> <i>/</i> Đặt hàng</div>
    </div>
  </div>
  <!--end pagenation-->
  <div class="clearfix"></div>
  <!--END ::  Breadcrumb-->
  <!-- ============================================= -->



<!---------------------------------------------->
<!-- Order-->

<div class="section_holder66 order_block">
  <div class="container">
    
    
    <div class="one_half">   
      
        <?php $form=$this->beginWidget('CActiveForm', array(
                    'enableClientValidation'=>true,
                    'clientOptions'=>array(
                        'validateOnSubmit'=>true,
                    ),
                     'htmlOptions'=>array(
                      'id' => 'sky-form',
                      'class'=>'sky-form',
                      'enctype' => 'multipart/form-data'
                  ),
                ));
               ?>

      <!-- <form action="demo-contacts.php" method="post" id="sky-form" class="sky-form">        -->
        <fieldset>

          <div class="row">
            <section class="col col-6">
              <label class="label">Tên</label>
              <label class="input"> <i class="icon-append icon-user"></i>
                <!-- <input type="text" name="name" id="name"> -->
                <?php echo $form->textField($model,'name', array('id' => 'name' , 'placeholder' => '')); ?>
              </label>
            </section>
            <section class="col col-6">
              <label class="label">Điện thoại</label>
              <label class="input"> <i class="icon-append icon-phone"></i>
                 <?php echo $form->textField($model,'phone', array('id' => 'phone' , 'placeholder' => '')); ?>
              </label>
            </section>
          </div>

            <div class="row">
            <section class="col col-6">
              <label class="label">Tên mặt hàng</label>
              <label class="input"> <i class="icon-append icon-tag"></i>
                 <?php echo $form->textField($model,'note_1', array('id' => 'note_1' , 'placeholder' => '')); ?>
              </label>
            </section>
            <section class="col col-6">
              <label class="label">Số lượng sản phẩm</label>
              <label class="input"> <i class="icon-append icon-tag"></i>
                  <?php echo $form->textField($model,'total', array('id' => 'total' , 'placeholder' => '')); ?>
              </label>
            </section>
          </div>

          <section>
            <label class="label">Email</label>
            <label class="input"> <i class="icon-append icon-tag"></i>
               <?php echo $form->textField($model,'email', array('id' => 'email' , 'placeholder' => '')); ?>
            </label>
          </section>

           <section>
            <label class="label">Tiêu đề</label>
            <label class="input"> <i class="icon-append icon-tag"></i>
              <?php echo $form->textField($model,'titile', array('id' => 'titile' , 'placeholder' => '')); ?>
            </label>
          </section>

          <section>
            <label class="label">Ghi chú</label>
            <label class="textarea"> <i class="icon-append icon-comment"></i>
              <!-- <textarea rows="4" name="message" id="message"></textarea> -->
              <?php echo $form->textArea($model,'note_2', array('id' => "message",'rows' => "4")); ?>
            </label>
          </section>
        
        </fieldset>
        <footer>
          <button type="submit" class="button">Gửi đơn đặt hàng</button>
        </footer>
        <div class="message"> <i class="icon-ok"></i>
          <p>Gửi tin nhắn thành công!</p>
        </div>
     <?php $this->endWidget(); ?>
    </div>
    
    <div class="one_half last order_right_img">

        <div>
          <img src="<?php echo  $themes ?>/images/order.png" alt=""/>      
        </div>
       
    </div>

  </div>
</div>

  <!--END ::  Order-->
  <!---------------------------------------------->


 
