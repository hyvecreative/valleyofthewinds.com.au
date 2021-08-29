<div class="item opinionItem clearfix">
								
	<div class="itemHeading small-12 columns">
		<a href="<?php echo get_permalink( get_page_by_path( 'news-hub/opinion' ) ) ?>" class="title left iconOpinion">Opinion</a>
		<span class="date right"><?php the_time('j F Y'); ?></span>
	</div>

	<div class="opinionImage small-4 medium-2 columns">
		<?php
			$user_id = get_the_author_meta( 'ID' );
			$user_image = get_field('user_image', 'user_'. $user_id ); // image field, return type = "Image Object"
		?>
		<a href="<?php echo get_author_posts_url( $user_id ); ?>" title="<?php the_title(); ?>">
			<?php echo wp_get_attachment_image( $user_image, 'thumbnail' ); ?>
		</a>
	</div>

		<div class="opinionText small-6 medium-10 columns">
			<h6><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_title(); ?></h6></a>
			<a href="<?php echo get_author_posts_url( $user_id ); ?>" title="title" class="authorName">
			<?php the_author(); ?>
		</a>
		</div>

		<div class="itemText small-12 columns">
				<?php the_excerpt(); ?>

		<a class="read-more-btn" href="<?php the_permalink(); ?>">
			Read more
		</a>
		</div>

	<?php	if (get_comments_number()>0) { ?>
		<div class="itemText small-12 columns">
			<span class="comments right iconComment"><?php comments_number( '0', '1', '%' ); ?></span>
		</div>
	<?php } ?>

</div>