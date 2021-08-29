

<?php
/*
Template Name: top_level_benefits_temp
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
	
	<div class="col-sm-12 col-lg-8 col-lg-offset-2 main-content" style="min-height: 700px;">
		
	
		<div class="row benefits-matrix">
			
			<div class="economic-benefits">
			
			<h3 class="text-center" style="margin-bottom: 20px;"><strong><?php the_field('benefit_heading') ?></strong></h3>
		
	<?php if( have_rows('matrix_row') ): while ( have_rows('matrix_row') ) : the_row(); ?>
        <div class="col-sm-6 col-lg-4">
			
			<div class="matrix-item text-center equalise">
				<div class="matrix-icon">
				<?php
                $image = get_sub_field('matrix_icon');

                ?>

                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				</div>	
			<h3 class="matrix-item-head"><?php the_sub_field('matrix_item_head'); ?></h3>
			<p class="matrix-item-text"><?php the_sub_field('matrix_item_text'); ?></p>
			</div>

        </div>
    <?php endwhile; else: endif; ?>
				
			</div> <!-- end .economic-benefits-->
			
			<div class="supporting-benefits">
			
				<div class="col-sm-12"><h3 class="text-center" style="margin-bottom: 20px;"><strong><?php the_field('supporting_heading') ?></strong></h3></div>
		
	<?php if( have_rows('supporting_row') ): while ( have_rows('supporting_row') ) : the_row(); ?>
        <div class="col-sm-6 col-lg-4">
			
			<div class="matrix-item text-center equalise">
				<div class="matrix-icon">
				<?php
                $image = get_sub_field('matrix_icon');

                ?>

                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				</div>	
			<h3 class="matrix-item-head"><?php the_sub_field('matrix_item_head'); ?></h3>
			<p class="matrix-item-text"><?php the_sub_field('matrix_item_text'); ?></p>
			</div>

        </div>
    <?php endwhile; else: endif; ?>
				
			</div> <!-- end .supporting-benefits-->
			
			<div class="securing-benefits">
			
				<div class="col-sm-12"><h3 class="text-center" style="margin-bottom: 20px;"><strong><?php the_field('securing_heading') ?></strong></h3></div>
		
	<?php if( have_rows('securing_row') ): while ( have_rows('securing_row') ) : the_row(); ?>
        <div class="col-sm-6 col-lg-4">
			
			<div class="matrix-item text-center equalise">
				<div class="matrix-icon">
				<?php
                $image = get_sub_field('matrix_icon');

                ?>

                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				</div>	
			<h3 class="matrix-item-head"><?php the_sub_field('matrix_item_head'); ?></h3>
			<p class="matrix-item-text"><?php the_sub_field('matrix_item_text'); ?></p>
			</div>

        </div>
    <?php endwhile; else: endif; ?>
				
			</div> <!-- end .securing-benefits-->

	</div> <!-- end .benefits nmatrix-->
		
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<?php the_content(__('(more...)')); ?>
		
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
			
		
	</div>
	
			
</div> <!-- end .row-->
	
		         
</div> <!-- end container-->
</div> <!-- end container-fluid-->
  
 
<?php get_footer(' '); ?>