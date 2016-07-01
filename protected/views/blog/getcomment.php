<?php 
    $themes =  Yii::app()->request->baseUrl."/themes/blog/" ; 
    $baseUrl =  Yii::app()->request->baseUrl."/" ; 
 ?>

<h6 class="commentlist-title"><?php echo count($commentlist); ?> comments</h6>
							
	<ul class="commentlist">
		<?php foreach ($commentlist as $key => $value) {
			# code...
		 ?>
		<li class="comment depth-1">
			<div class="comment-body">
				
				<div class="comment-meta">
					
					<div class="comment-author">
						
						<img class="avatar" src="<?php echo $baseUrl; ?>images/avatar/user_comment.png" alt="">										
						<a class="fn" href="#"><?php echo $value['name'] ?></a> 
						<span class="says">says:</span>
						
					</div><!-- comment-author -->
					
					 <div class="comment-metadata">
						<a href="#"><?php  echo time_elapsed_string( $value['datetime'] ) ; ?></a>
					</div><!-- comment-metadata -->
					
				</div><!-- comment-meta -->
				
				<div class="comment-content">
					
					<p><?php echo $value['comment'] ?></p>
					
				</div><!--  comment-content -->

				<div class="reply">
					<a class="comment-reply-link" href="#">Reply</a>
				</div><!-- reply -->
				
			</div><!-- comment-body -->
		</li>
		<?php } ?>
		
	</ul>
	
	<h5 class="commentform-title"><span>Leave a comment</span></h5>
	
	<form id="commentform" name="commentform" novalidate method="post" action="#">
		<fieldset>
			
			<p class="commentform-author">
				<input id="name" class="col-xs-12" type="text" name="name" placeholder="name">
			</p>
			
			<p class="commentform-email">
				<input id="email" class="col-xs-12" type="email" name="email" placeholder="email">
			</p>
			
			<p class="commentform-comment">
				<textarea id="comment" class="col-xs-12" name="comment" rows="6" cols="25" placeholder="message"></textarea>
			</p>
			
			<p class="commentform-submit">
				<button class="btn btn-default" id="submit" type="submit" name="submit" value="">Submit <i class="boiler-icon-right"></i></button>
			</p>
			
		</fieldset>
	</form>