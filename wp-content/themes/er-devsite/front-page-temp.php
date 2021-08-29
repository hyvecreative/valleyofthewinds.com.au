<?php
/*
Template Name: frontpage-temp
*/
?>
<?php
get_header(); 
?>

<!-- begin content -->

<div class="container-fluid" style="position: relative;">
	 <?php if(has_post_thumbnail()) {
                        $feat_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), "full", true);
                    } ?>
<div class="row hm-feature-page" style="background-image:url(<?php echo (($feat_image[0]))?>); background-size: cover; background-position: center;"></div>
<div class="row">
<div class="col feature-text">
			<h1 class=""><?php the_field('banner_head') ?></h1>
			<h2 class=""><?php the_field('banner_sub') ?></h2>
</div>
</div>
</div>


<div class="container-fluid join-wrap">
	<div class="join-container">
				<h2 class=""><i class="fas fa-chevron-right" aria-hidden="true"></i> <?php the_field('join_title') ?></h2>
				<?php the_field('join_text') ?>
				<?php the_field('join_form') ?>	
	</div>
	
	<div class="intro-container text-center" style="">
			<div class="row">
			<div class="col-sm-12">
				<h2 style="border-top: none;"><?php the_field('about_title') ?></h2>
					<?php the_field('about_text') ?>
					<div class="row about-items">
							<?php if( have_rows('about_icons') ): while ( have_rows('about_icons') ) : the_row(); ?>
								<div class="col-sm-4">

										<?php
										$image = get_sub_field('about_icons_image');

										?>

										<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
										<p><?php the_sub_field('about_icons_text'); ?><p>

								</div>
							<?php endwhile; else: endif; ?>

					</div>
			</div>
			</div>
			
			<div class="row voice-section">
					
					<div class="col-sm-12">

					<h2 style="color:#00838a; margin-top: 20px; padding-top: 2rem;"><?php the_field('voices_title') ?></h2>
						<div class="row voice-items">
							<?php if( have_rows('voices_statistics') ): while ( have_rows('voices_statistics') ) : the_row(); ?>
								<div class="stat-col">
									<div class="voice stat-wrap">
										<div class="stat-percent"><?php the_sub_field('voices_stat'); ?></div>
									</div>
									<p><?php the_sub_field('voices_stat_text'); ?><p>
								</div>
							<?php endwhile; else: endif; ?>

						</div>	
					</div>
			</div>
	</div>
</div>


<?php get_footer(); ?>