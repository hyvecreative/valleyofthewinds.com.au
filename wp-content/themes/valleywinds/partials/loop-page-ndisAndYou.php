<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/WebPage">

	<div class="leftBG"></div>

  <section class="entry-content clearfix" itemprop="articleBody">

			<header class="ndisYouTitle">

			<?php 
			$image = get_field('icon');
			$size = 'full'; // (thumbnail, medium, large, full or custom size)
			if( $image ) {
				echo wp_get_attachment_image( $image, $size );
			}
			?>
			<h1><?php the_title(); ?></h1>

			</header>

			<?php get_template_part( 'partials/content', 'mediaEmbed' ); ?>

	  <?php the_content(); ?>


	</section> <!-- end article section -->


	<?php get_template_part( 'partials/content', 'pagePagination' ); ?>

	<?php get_template_part( 'partials/content', 'attachments' ); ?>

	<?php if( get_field( "transcript" ) ):
	   get_template_part( 'partials/content', 'transcript' );
	endif; ?>

	<?php get_template_part( 'partials/content', 'share' ); ?>

	<?php if ( comments_open() ) : ?>
		<section class="comments clearfix">		
			<h3>Join the conversation</h3>			    
			<?php comments_template(); ?>
		</section>
	<?php endif;  ?>

	<?php get_template_part( 'partials/content', 'relatedFaqs' ); ?>
					
</article> <!-- end article -->