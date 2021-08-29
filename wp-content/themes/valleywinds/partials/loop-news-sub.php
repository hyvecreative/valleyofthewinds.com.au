<div class="item clearfix subItem">
														
	<div class="itemHeading small-12 columns">
		<a href="<?php echo get_permalink( get_page_by_path( 'news-hub/news' ) ) ?>" class="title left iconNews">News</a>
		<span class="date right"><?php the_time('j F Y'); ?></span>
	</div>

	<div class="itemContent row">

		<div class="itemImage small-3 columns">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail( 'thumbnail' ); ?>
			</a>
		</div>

		<div class="itemText small-9 columns">
			<h5><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_title(); ?>
			</a></h5>
				<?php the_excerpt(); ?>

			<a class="read-more-btn" href="<?php the_permalink(); ?>">
				Read more
			</a>
		</div>

 	</div>

</div>