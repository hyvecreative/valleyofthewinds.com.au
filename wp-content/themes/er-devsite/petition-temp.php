<?php
/*
Template Name: petition-temp
*/
?>
<?php
get_header('panels'); 
?>

<!-- begin content -->

<div class="container-fluid" style="position: relative;">
	 <?php if(has_post_thumbnail()) {
                        $feat_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), "full", true);
                    } ?>
<div class="row hm-feature-page" style="background-image:url(<?php echo (($feat_image[0]))?>); background-size: cover; background-position: center;"></div>
<div class="row">
<div class="col feature-text feature-full text-center">
			<h1 class=""><?php the_field('banner_head') ?></h1>
			<h2 class=""><?php the_field('banner_sub') ?></h2>
</div>
</div>
</div>


<div class="container-fluid action-wrap">
<div class="container">
	
				<div class="row">
					<div class="col-lg-6 action-intro" style="margin-bottom: 1rem;">

					<div class="btn scroll-down-pet petition-action">Scroll to Take Action</div>

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<?php the_content(__('(more...)')); ?>

							<?php endwhile; else: ?>
							<p><?php _e('Sorry, no pages are available. visit: http://cpactive.org.au'); ?></p>
							<?php endif; ?>
					</div>

					<div class="col-lg-6 action-form-wrap">
						<div class="action-form">
						<div style="margin-bottom: -1rem;"><?php 
									$image = get_field('action_graphic');
									if( !empty( $image ) ): ?>
										<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
									<?php endif; ?>
						</div>
						<h2><?php the_field('action_title') ?></h2>
									
						<?php the_field('action_text') ?>
						<div class="" style="margin: 20px 0;"><?php the_field('action_form') ?></div>
					</div>
					</div>
				</div>

	
</div>
</div>


<?php get_footer(); ?>