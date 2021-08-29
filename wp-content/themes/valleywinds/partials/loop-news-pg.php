<div class="col-lg-3 col-sm-6 col-xs-12 feed-item">
	<div class="feed-wrap">
													

	<div class="itemContent">

		<div class="itemImage">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail( 'medium' ); ?>
			</a>
		</div>

		<div class="itemText equalise">
			
			<div class="itemHeading">
		<span class="date right"><?php the_time('j F Y'); ?></span>
		<span class="categs"><?php the_category(' ') ?></span>

	</div>
			<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_title(); ?>
			</a></h3>
				<?php the_excerpt(); ?>
		</div>

 	</div>

	</div>
</div>