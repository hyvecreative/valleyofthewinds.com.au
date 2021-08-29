<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/WebPage">

	<div class="leftBG"></div>

	<header class="article-header yourStories">	
			
			<img src="<?php echo get_template_directory_uri(); ?>/img/iconStories.svg" alt="Story Icon" />
			<h1><?php echo get_the_title($post->post_parent); ?>'s NDIS Story</h1>
			<!--<h1><?php echo get_the_title($post->post_parent); ?> checks his eligibility</h1>-->
			<h1><?php the_title(); ?></h1>

   </header> <!-- end article header -->
					

  <section class="entry-content clearfix" itemprop="articleBody">

  		<?php get_template_part( 'partials/content', 'mediaEmbed' ); ?>

  		<span class="excerptHighlight"><?php //the_excerpt(); ?></span>

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