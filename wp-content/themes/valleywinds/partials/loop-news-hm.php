<div class="feed-item">
													

	<div class="itemContent">

		<div class="itemImage">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail( 'thumbnail' ); ?>
			</a>
		</div>

		<div class="itemText">
			<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_title(); ?>
			</a></h3>
				<?php the_excerpt(); ?>

			<a class="read-more-btn" href="<?php the_permalink(); ?>">
				Read more <img src="<?php bloginfo('template_directory'); ?>/images/more-arrow-sm.png" alt="Read more" />
			</a>
		</div>

 	</div>

</div>