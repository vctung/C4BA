
<li id="dashboard">
<!-- 	<a href="index.html"><i class="clip-home-3"></i>
		<span class="title"> Dashboard </span><span class="selected"></span>
	</a> -->
	<?php echo CHtml::link(" <i class=\"clip-home-3\"></i> <span class=\"title\"> Dashboard </span><span class=\"selected\"></span>",array('admin/dashboard')); ?>
</li>



<!--=================================================================== -->
<!--=================   System Infomation   =========================== -->
<!--=================================================================== -->

<!--=================================================================== -->
<li id="systeminfo" >
	<a href="javascript:void(0)"><i class="clip-settings"></i>
		<span class="title"> System Infomation </span><i class="icon-arrow"></i>
		<span class="selected"></span>
	</a>
	<ul class="sub-menu" style="display: none;">
		<li id="listcategories">
			<?php echo CHtml::link("<i class=\"clip-tag\"></i> Website Infomation  ",array('systeminfo/infosite')); ?>
		</li>
		<li id="addcategory">
			<?php echo CHtml::link("<i class=\"clip-notification-2\"></i> System Infomation ",array('systeminfo/infosystem')); ?>
		</li>
		
	</ul>
</li>



<!--=================================================================== -->
<!--=================  END  System Infomation          ================ -->
<!--=================================================================== -->




<!--=================================================================== -->
<!--======================== Article Categories  ====================== -->
<!--=================================================================== -->
<li id="categories" >
	<a href="javascript:void(0)"><i class="clip-stack-empty"></i>
		<span class="title">Categories Manager </span><i class="icon-arrow"></i>
		<span class="selected"></span>
	</a>
	<ul class="sub-menu" style="display: none;">
		<li id="listcategories">
			<?php echo CHtml::link("<i class=\"clip-folder-2\"></i> List Categories",array('categories/listcategories')); ?>
		</li>
		<li id="addcategory">
			<?php echo CHtml::link("<i class=\"icon-plus-sign-alt\"></i> Add New Category",array('categories/addcategory')); ?>
		</li>
		
	</ul>
</li>

<!--=================================================================== -->
<!--===========      END     Article Categories ======================= -->
<!--=================================================================== -->





<!--=================================================================== -->
<!--============================ Article  ============================= -->
<!--=================================================================== -->
<li id="article">
	<a href="javascript:void(0)"><i class="clip-pencil"></i>
		<span class="title"> Article Manager </span><i class="icon-arrow"></i>
		<span class="selected"></span>
	</a>
	<ul class="sub-menu" style="display: none;">
		<li id="listarticle">
			<?php echo CHtml::link("<i class=\"clip-folder-2\"></i> List Article",array('article/listarticle')); ?>
		</li>
		<li id="addarticle">
			<?php echo CHtml::link("<i class=\"clip-file-plus\"></i> Add New Article",array('article/addarticle')); ?>
		</li>


		
	</ul>
</li>

<!--=================================================================== -->
<!--=================       END    Article  =========================== -->
<!--=================================================================== -->


<!--=================================================================== -->
<!--=================         Shop   	    =========================== -->
<!--=================================================================== -->

<!-- <li id="shop">
	<a href="javascript:void(0)"><i class="clip-cart"></i>
		<span class="title"> Shopping </span><i class="icon-arrow"></i>
		<span class="selected"></span>
	</a>
	<ul class="sub-menu" style="display: none;">
		<li id="addarticle">
			<?php echo CHtml::link("<i class=\"clip-grid-3\"></i> Product Manager ",array('shop/listproduct')); ?>
		</li>

		<li id="addproduct">
			<?php echo CHtml::link("<i class=\"clip-file-plus\"></i> Add New Product",array('shop/addproduct')); ?>
		</li>



		<li id="listcatalog">
			<?php echo CHtml::link(" <i class=\"clip-folder-2\"></i> Catalog Manager ",array('shop/listcatalog')); ?>
		</li>		

		<li id="addcatalog">
			<?php echo CHtml::link("<i class=\"clip-file-plus\"></i> Add New Catalog",array('shop/addcatalog')); ?>
		</li>

		<li id="listorder">
			<?php echo CHtml::link("<i class=\"icon-dollar\"></i> Order List",array('shop/listorder')); ?>
		</li>



	</ul>
</li>

 -->

<!--=================================================================== -->
<!--=================       END    Shop     =========================== -->
<!--=================================================================== -->




<!--=================================================================== -->
<!--=================         Partner       =========================== -->
<!--=================================================================== -->

<!-- <li id="partner">
	<a href="javascript:void(0)"><i class="clip-users-2"></i>
		<span class="title"> Partner Manager </span><i class="icon-arrow"></i>
		<span class="selected"></span>
	</a>
	<ul class="sub-menu" style="display: none;">
		<li id="listpartner">
			<?php echo CHtml::link("<i class=\"clip-list\"></i> List Partner",array('partner/listpartner')); ?>
		</li>
		<li id="addpartner">
			<?php echo CHtml::link("<i class=\"clip-file-plus\"></i> Add New Partner",array('partner/addpartner')); ?>
		</li>


		
	</ul>
</li> -->

<!--=================================================================== -->
<!--=================     END  Partner      =========================== -->
<!--=================================================================== -->




<!--=================================================================== -->
<!--=================         Slide show    =========================== -->
<!--=================================================================== -->

<li id="slide">
	<a href="javascript:void(0)"><i class="clip-images-3"></i>
		<span class="title"> Slide Show Manager </span><i class="icon-arrow"></i>
		<span class="selected"></span>
	</a>
	<ul class="sub-menu" style="display: none;">

		<li id="listslide">
			<?php echo CHtml::link("<i class=\"icon-list-ul\"></i> List Slide Image",array('slide/listslide')); ?>
		</li>

		<li id="addslide">
			<?php echo CHtml::link("<i class=\"clip-file-plus\"></i> Add Slide Image",array('slide/addslide')); ?>
		</li>
		
	</ul>
</li>


<!--=================================================================== -->
<!--=================   END   Slide show    =========================== -->
<!--=================================================================== -->




<!--=================================================================== -->
<!--===========            Section manage       ======================= -->
<!--=================================================================== -->
<li id="sections">
	<a href="javascript:void(0)"><i class="clip-grid-5"></i>
		<span class="title"> Section manager </span><i class="icon-arrow"></i>
		<span class="selected"></span>
	</a>
	<ul class="sub-menu" style="display: none;">

		<li id="homeabout">
			<?php echo CHtml::link("<i class=\"clip-user-2\"></i> Home-About",array('sections/homeabout')); ?>
		</li>

		<li id="homeservices">
			<?php echo CHtml::link("<i class=\"clip-bulb\"></i> Home-Services",array('sections/homeservices')); ?>
		</li>
		<li id="homefooter">
			<?php echo CHtml::link("<i class=\"clip-map\"></i> Home-Footer",array('sections/homefooter')); ?>
		</li>
		
	</ul>
</li>


<!--=================================================================== -->
<!--============           END :: Section manage       ================ -->
<!--=================================================================== -->




<!--=================================================================== -->
<!--=================            User       =========================== -->
<!--=================================================================== -->

<!-- <li id="user">
	<a href="javascript:void(0)"><i class="clip-user-5"></i>
		<span class="title"> User Manager </span><i class="icon-arrow"></i>
		<span class="selected"></span>
	</a>
	<ul class="sub-menu" style="display: none;">

		<li id="rolemanager">
			<?php echo CHtml::link("<i class=\"clip-key\"></i> Access control list ",array('user/rolemanager')); ?>
		</li>

		<li id="listuser">
			<?php echo CHtml::link("<i class=\"icon-list-ul\"></i> List User",array('user/listuser')); ?>
		</li>

		<li id="adduser">
			<?php echo CHtml::link("<i class=\"clip-user-plus\"></i> Add New User",array('user/adduser')); ?>
		</li>
		
	</ul>
</li> -->

<!--=================================================================== -->
<!--=================        EDN User       =========================== -->
<!--=================================================================== -->



<!--=================================================================== -->
<!--=================         Gallery        =========================== -->
<!--=================================================================== -->

<!-- <li id="slide">
	<a href="javascript:void(0)"><i class="clip-images-3"></i>
		<span class="title"> Gallery Manager </span><i class="icon-arrow"></i>
		<span class="selected"></span>
	</a>
	<ul class="sub-menu" style="display: none;">

		<li id="listslide">
			<?php echo CHtml::link("<i class=\"icon-list-ul\"></i> List Slide Image",array('gallery/listslide')); ?>
		</li>

		<li id="addslide">
			<?php echo CHtml::link("<i class=\"clip-file-plus\"></i> Add Slide Image",array('gallery/addslide')); ?>
		</li>
		
	</ul>
</li>

 -->
<!--=================================================================== -->
<!--=================     END   Gallery     =========================== -->
<!--=================================================================== -->