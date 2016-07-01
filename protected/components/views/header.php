<?php
$themes =  Yii::app()->request->baseUrl."/themes/blog/" ;
?>
<div id="header">
  
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-3">
        
        <!-- LOGO -->
        <div id="logo">
          <a href="<?php echo Yii::app()->request->baseUrl; ?>/blog">
            <img src="<?php echo $themes; ?>assets/images/logo.png" alt="">
          </a>
          </div><!-- LOGO -->
          
          </div><!-- col -->
          <div class="col-sm-9">
            
            <!-- MENU -->
            <nav>
              
              <a id="mobile-menu-button" href="#"><i class="kors-icon-lines"></i></a>
              
              <ul class="menu clearfix" id="menu">
               
                
                <li class="search">
                  <a href="#"><i class="fa fa-search"></i></a>
                  <div id="search-form-container">
                    
                    <form id="search-form" action="#">
                      <input id="search" type="search" name="search" placeholder="Enter keywords...">
                      <input id="search-submit" type="submit" value="">
                    </form>
                    
                    </div><!-- search-form-container -->
                  </li>     

                </ul>
                
            </nav>
              
          </div><!-- col -->
        </div><!-- row -->
      </div><!-- container-fluid -->
              
  </div><!-- header -->