<div class="item clearfix bareItem">
	
	<?php if ( get_post_type() == 'page' ) : ?>
	<?php else : ?>

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

	<?php endif ?>


	<div class="itemText small-12 columns">
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			<h5><?php the_title(); ?></h5>
		</a>
		<p>
			<?php the_excerpt(); ?>
		</p>
	</div>

</div>