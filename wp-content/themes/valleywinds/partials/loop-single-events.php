<?php //Extract Date
$date = DateTime::createFromFormat('dmY', get_field('start_date'));
?>

<?php if ($date) : ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/WebPage">

	<div class="leftBG"></div>

	<header class="article-header">	

		<div class="itemHeading clearfix">

			<span class="title left"><a href="#">Events</a> &nbsp; <span><?php the_field('state'); ?></span></span>
		<span class="date right"><?php echo $date->format('d'), ' ', $date->format('F'), ' ', $date->format('Y'); ?></span>
	
		</div>


<div class="item eventItem clearfix">

	<div class="itemContent row">

		<div class="itemDate small-3 columns show-for-medium-up">
			
			<div class="dateBox">
				<p class="dateMonth"><?php echo $date->format('F'); ?></p>
				<p class="dateDay"><?php echo $date->format('d'); ?></p>
				<p class="dateYear"><?php echo $date->format('Y'); ?></p>
			</div>

		</div>

		<div class="itemText small-9 columns">
				<h2 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h2>
				<p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'jointstheme') . '</span> ', ', ', ''); ?></p>	
		</div>

 	</div>

</div>
	



	</header> <!-- end article header -->

  <section class="entry-content clearfix" itemprop="articleBody">

    	<?php if( get_field( "video_audio_url" ) || get_field( "video_audio_attachment" ) ): ?>
   		 	<?php get_template_part( 'partials/content', 'mediaEmbed' ); ?>
    	<?php else : ?>
  			<?php the_post_thumbnail('large'); ?>
  		<?php endif; ?>

  		<span class="excerptHighlight"><?php the_excerpt(); ?></span>

	    <?php the_content(); ?>

	    <?php get_template_part( 'partials/content', 'event-details' ); ?>

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

<?php endif; ?>