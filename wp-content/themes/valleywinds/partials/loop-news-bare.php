<div class="col-md-3 col-sm-4 col-xs-12 feed-item">
	<div class="feed-wrap">
		
	<div class="itemContent">
														


	<div class="itemText" style=" padding-top: 25px;">
		
			<div class="itemHeading">
				<span class="date right"><?php the_time('j F Y'); ?></span>
		<a href="<?php echo get_permalink( get_page_by_path( 'news' ) ) ?>" class="title left iconNews">News</a>
		
	</div>
		
		<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			<?php the_title(); ?>
		</a></h3>
			<?php the_excerpt(); ?>

	</div>
		
</div>		
</div>
</div>