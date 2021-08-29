<div class="item clearfix bareItem">
														
	<div class="itemHeading small-12 columns">
		<a href="<?php echo get_permalink( get_page_by_path( 'news-hub/news' ) ) ?>" class="title left iconNews">News</a>
		<span class="date right"><?php the_time('j F Y'); ?></span>
	</div>

	<div class="itemText small-12 columns">
		<h5><?php the_title(); ?></h5>
			<?php the_excerpt(); ?>

	</div>

</div>