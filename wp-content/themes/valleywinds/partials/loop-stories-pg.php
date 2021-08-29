<div class="col-xs-12 feed-item">
													

	<div class="itemContent">

		<div class="itemImage">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail( 'medium_large' ); ?>
			</a>
		</div>

		<div class="itemText">
			<h3><?php the_title(); ?></h3>
				<?php the_excerpt(); ?>
		</div>

 	</div>

</div>