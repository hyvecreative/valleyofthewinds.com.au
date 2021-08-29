<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/WebPage">

	<div class="leftBG"></div>

	<header class="article-header">	

		<div class="itemHeading clearfix">

		<span class="title left"><a href="<?php echo get_permalink( get_page_by_path( 'housing-stories-all' ) ) ?>" class="title left iconHousing">Housing Stories</a>&nbsp;-<span>


		<?php $terms = get_the_terms( $post->ID , 'housing_category' ); 
        foreach ( $terms as $term ) {
            $term_link = get_term_link( $term, 'housing_category' );
            if( is_wp_error( $term_link ) )
            continue;
        echo '<a href="' . $term_link . '">' . $term->name . '</a>';
        } 
    ?>


		</span></span>		
			<span class="date right"><?php the_time('j F Y'); ?></span>
		</div>

		<h2 class="entry-title single-title" itemprop="headline"><?php 

		$myvalue = get_the_title(); ;
		$arr = explode(' ',trim($myvalue));
		echo $arr[0]; // will print Test

		?>'s Housing Story</h2>
			<p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'jointstheme') . '</span> ', ', ', ''); ?></p>	</footer> <!-- end article footer -->
   </header> <!-- end article header -->

  <section class="entry-content clearfix" itemprop="articleBody">

    	<?php if( get_field( "video_audio_url" ) || get_field( "video_audio_attachment" ) ): ?>
   		 	<?php get_template_part( 'partials/content', 'mediaEmbed' ); ?>
    	<?php else : ?>
  			<?php the_post_thumbnail('large'); ?>
  		<?php endif; ?>


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