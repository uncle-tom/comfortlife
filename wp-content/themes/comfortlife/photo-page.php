

<div class="mainblock">
	<div class="mainblock-title">
		<img src="http://genichesk.info/wp-content/uploads/2017/02/taxi-sign.png" alt="">
		<span>Фотографии</span>
	</div>
	<div class="mainblock-content">
		
		<?php $my_postid = 7213;//This is page id or post id
$content_post = get_post($my_postid);
$content = $content_post->post_content;
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]&gt;', $content);
echo $content;
 ?>
	</div>
</div>