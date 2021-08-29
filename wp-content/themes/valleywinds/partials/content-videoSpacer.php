
<?php 

$image = get_field('video_spacer');

if( !empty($image) ): ?>

	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
	
<?php endif; ?>