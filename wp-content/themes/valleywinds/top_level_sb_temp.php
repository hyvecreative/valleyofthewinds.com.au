

<?php
/*
Template Name: top_level_sb_temp
*/

?>
<?php get_header(' '); ?>

<div class="container-fluid intro-sections">
	
<div class="row section hm-feature hero-wrap top-level">
	
	<?php if(has_post_thumbnail()) {
                        $feat_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), "full", true);
                    } ?>
					                   
                    <div class="hero-image-feature top-feature" style="background-image:url(<?php echo (($feat_image[0]))?>); background-size: cover; background-position: center center;"></div>
	
				<div class="hero-fade"> </div>

		
			<div class="image-content-top hero-content">
				
				<div class="col-xs-12 text-center">
					<h1><?php the_field('banner_head') ?></h1>
					<h2><?php the_field('banner_sub') ?></h2>
					<?php the_field('banner_button') ?>
					<img class="scroll-chevron scroll-content" src="<?php bloginfo('template_directory'); ?>/images/down-chevron.png" alt="Scroll" />
				</div>
						
			
			</div> <!-- end .row-->	
	
	</div> <!-- end .hero-wrap-->
	
</div> <!-- end .container-fluid-->

<div class="container-fluid">
<div class="container">
	
<div id="content" class="row section content-wrap">
	
	<div class="col-md-7 main-content" style="min-height: 700px;">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<?php the_content(__('(more...)')); ?>
		
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
		
	</div>
	
	<div class="col-md-offset-1 col-md-4 main-content-sb">
	
	 <?php get_sidebar(' '); ?> 
		
	</div>
	
			
</div> <!-- end .row-->
	
		         
</div> <!-- end container-->
</div> <!-- end container-fluid-->
  
 
<?php get_footer(' '); ?>