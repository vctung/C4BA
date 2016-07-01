<?php  foreach ($newarticle as $key => $value) { ?>
	
	<?php 
	 $title = customURLSEO($value['title']);
	 $cname = customURLSEO( $value['name'] );
		if ($key  == 0 || $key % 4 == 0) {
				echo "<div class=\"row\">";
		}
	 ?>

	<div class="col-sm-3">
				
		<div class="image-box">
			
			<div class="image-box-thumbnail">
				<a href="<?php echo  Yii::app()->createUrl('/article/'.$title.'-'.$value['id'] ); ?>">
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/article/<?php echo $value['image'] ?>" alt="<?php echo $value['title'] ?>">
				</a>
			</div><!-- image-box-thumbnail -->
			<h6>
				<a href="<?php echo  Yii::app()->createUrl('/category/'.$cname.'-'.$value['catid'] ); ?>" title="<?php echo $value['name'] ?>">
					<?php echo $value['name'] ?>
				</a>
			</h6>
			<h4><a href="<?php echo  Yii::app()->createUrl('/article/'.$title.'-'.$value['id'] ); ?>"><span><?php echo $value['title'] ?></span></a></h4>
			
			<p><?php echo $value['intro'] ?></p>			
			
			
		</div><!-- image-box -->

	</div><!-- col -->	



	<?php 
		if ( $key != 0 && ($key+1) % 4 == 0) {
				echo "</div ><!-- row -->";
		}
	 ?>

<?php  } ?>