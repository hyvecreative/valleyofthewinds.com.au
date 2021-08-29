<div class="item clearfix bareItem">
												
	<div class="itemHeading small-12 columns">
		<a href="<?php echo get_permalink( get_page_by_path( 'news-hub/research-and-reports' ) ) ?>" class="title left iconResearch">Research and reports</a>
		<span class="date right"><?php the_time('j F Y'); ?></span>
	</div>

	<div class="itemText small-12 columns">
		<h5><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			<?php the_title(); ?>
		</a></h5>
			<?php the_excerpt(); ?>

		<a class="read-more-btn" href="<?php the_permalink(); ?>">
			Read more
		</a>
	</div>

</div>