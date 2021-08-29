<div class="grid-item feed-item">
													

	<div class="itemContent ">
	<?php if ( get_post_type() == 'post' ) : ?>
				<div class="news-meta">
			<?php elseif ( get_post_type() == 'opinion' ) : ?>
				<div class="opinion-meta">
			<?php else : ?>
				<div class="opinion-meta">
			<?php endif ?>
			
		
		<div class="itemHeading small-12 columns">
			<?php if ( get_post_type() == 'post' ) : ?>
				<a href="<?php echo get_permalink( get_page_by_path( 'news-hub/news' ) ) ?>" class="title left iconNews">News</a>
			<?php elseif ( get_post_type() == 'opinion' ) : ?>
				<a href="<?php echo get_permalink( get_page_by_path( 'news-hub/opinion' ) ) ?>" class="title left iconOpinion">Opinion</a>
			<?php elseif ( get_post_type() == 'in-the-media' ) : ?>
				<a href="<?php echo get_permalink( get_page_by_path( 'news-hub/in-the-media' ) ) ?>" class="title left iconMedia">In The Media</a>
			<?php elseif ( get_post_type() == 'research-reports' ) : ?>
				<a href="<?php echo get_permalink( get_page_by_path( 'news-hub/research-and-reports' ) ) ?>" class="title left iconResearch">Research and Reports</a>
			<?php elseif ( get_post_type() == 'faqs' ) : ?>
				<a href="<?php echo get_permalink( get_page_by_path( 'faqs' ) ) ?>" class="title left">FAQs</a>
			<?php elseif ( get_post_type() == 'your-stories' ) : ?>
				<a href="<?php echo get_permalink( get_page_by_path( 'your-stories' ) ) ?>" class="title left">Your Stories</a>
			<?php elseif ( get_post_type() == 'page' ) : ?>
				<a href="<?php echo get_permalink( get_page_by_path( 'your-stories' ) ) ?>" class="title left"></a>
			<?php else : ?>
				<a href="#" class="title left">1</a>
			<?php endif ?>

				<span class="date right"><?php the_time('j F Y'); ?></span>
					
		</div>

		<div class="itemImage">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail( 'medium_large' ); ?>
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

</div>