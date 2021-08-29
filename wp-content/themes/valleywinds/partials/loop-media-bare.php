<div class="item opinionItem clearfix">
											
	<div class="itemHeading small-12 columns">
		<a href="<?php echo get_permalink( get_page_by_path( 'news-hub/in-the-media' ) ) ?>" class="title left iconMedia">Media</a>
		<span class="date right"><?php the_time('j F Y'); ?></span>
	</div>

	<?php if( get_field( 'source_title' )) : ?>
		<div class="mediaSource small-12 columns">
			<p class="bold"><?php the_field( 'source_title' ); ?></p>
		</div>
	<?php endif; ?>

	<div class="mediaTitle small-12 columns">
		<h6><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			<?php the_title(); ?>
		</a></h6>
	</div>

	<div class="itemText small-12 columns">
			<?php the_excerpt(); ?>

		<a class="read-more-btn" href="<?php the_permalink(); ?>">
			Read more
		</a>
	</div>

</div>