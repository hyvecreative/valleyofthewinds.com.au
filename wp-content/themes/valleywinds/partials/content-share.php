<section class="share clearfix ">


<div class="row">

	<div class="col-sm-6 col-xs-12">
		<span class="h7">Share this content</span>

		<div class="shareIcons">

			<a
			class="shareFB" title="Share via Facebook" target="_blank"
			href="https://facebook.com/share.php?u=<?php the_permalink(); ?>"
			>Facebook</a>

	<?php // using urlencode to replace spaces with + for IE Compatability
	ob_start();
	the_title_attribute();
	$title = ob_get_clean();
	?>

			<a
			class="shareTW" title="Share via Twitter" target="_blank"
			href="https://twitter.com/home?status=<?php echo urlencode($title); ?>+<?php the_permalink(); ?>"
			>Twitter</a>

			<a
			class="shareEM" title="Share via Email" target="_blank"
			href="mailto:?Subject=<?php the_title(); ?>&Body=<?php echo get_the_excerpt(); ?>%0A%0A<?php the_permalink(); ?>"
			>Email</a>

		</div>

	</div>

	<?php //if (current_user_can( 'manage_options' )) { ?>

	<div class="col-sm-6 col-xs-12">
		<span class="h7">Was this content useful?</span>

	      <?php echo rw_the_post_rating(); ?>

	</div>

	<? //} ?>


</div>

</section> <!-- end share section -->
