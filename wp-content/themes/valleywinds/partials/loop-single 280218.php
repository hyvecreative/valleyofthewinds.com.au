<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/WebPage">

	<header class="article-header">	

		<div class="itemHeading item-single-hd">

		<?php if ( is_singular( 'post' ) ) : ?>
			<a href="<?php echo get_permalink( get_page_by_path( 'news-hub/news' ) ) ?>" class="title left iconNews">News</a>
		<?php elseif ( is_singular( 'opinion' ) ) : ?>
			<a href="<?php echo get_permalink( get_page_by_path( 'news-hub/opinion' ) ) ?>" class="title left iconOpinion">Opinion</a>
		<?php elseif ( is_singular( 'in-the-media' ) ) : ?>
			<a href="<?php echo get_permalink( get_page_by_path( 'news-hub/in-the-media' ) ) ?>" class="title left iconMedia">In The Media</a>
		<?php elseif ( is_singular( 'research-reports' ) ) : ?>
			<a href="<?php echo get_permalink( get_page_by_path( 'news-hub/research-and-reports' ) ) ?>" class="title left iconResearch">Research and Reports</a>
		<?php else : ?>
		<?php endif ?>
		
			<span class="date right">| <?php the_time('j F Y'); ?></span>
		</div>

		<h2 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h2>
			<p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'jointstheme') . '</span> ', ', ', ''); ?></p>	</footer> <!-- end article footer -->
   </header> <!-- end article header -->

  <section class="entry-content clearfix" itemprop="articleBody">

  		<?php if( get_field( "video_audio_url" ) || get_field( "video_audio_attachment" ) ): ?>
   		 	<?php get_template_part( 'partials/content', 'mediaEmbed' ); ?>
    	<?php else : ?>
  			<?php the_post_thumbnail('large'); ?>
  		<?php endif; ?>

  		<?php if ( is_singular( 'opinion' ) ) : ?>

  		<div class="item opinionItem opinionSingleAuthor clearfix">

				<div class="opinionImage small-3 columns">
					<?php
						$user_id = get_the_author_meta( 'ID' );
						$user_image = get_field('user_image', 'user_'. $user_id ); // image field, return type = "Image Object"
					?>
	  			<a href="<?php echo get_author_posts_url( $user_id ); ?>" title="<?php the_title(); ?>">
						<?php echo wp_get_attachment_image( $user_image, 'thumbnail' ); ?>
	  			</a>
				</div>

	  		<div class="opinionText small-9 columns">
		  		<a href="<?php echo get_author_posts_url( $user_id ); ?>" title="title" class="authorName">
	  				<?php the_author(); ?>
	  			</a>
	  		</div>

	  	</div>

  		<?php endif ?>

  		<span class="excerptHighlight"><?php the_excerpt(); ?></span>

	    <?php the_content(); ?>

	    <?php if( get_field( 'source_title' )) : ?>
	    	<p><strong>Source:</strong> 
	    	<a href="<?php the_field( 'source_url' ); ?>"><?php the_field( 'source_title' ); ?></a>
	    	</p>
			<?php endif; ?>

	</section> <!-- end article section -->


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