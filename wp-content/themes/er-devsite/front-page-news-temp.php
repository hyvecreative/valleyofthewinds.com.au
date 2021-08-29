<?php
/*
Template Name: frontpage-news-temp
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
<div class="col feature-text feature-button">
			<h1 class=""><?php the_field('banner_head') ?></h1>
			<h2 class=""><?php the_field('banner_sub') ?></h2>
</div>
</div>
</div>

<div class="join-wrap join-wrap-front">
<div class="container-fluid">
	<div class="join-container feature-button">
				<h2 class="h2-lozenge"><i class="fas fa-chevron-right" aria-hidden="true"></i> <?php the_field('join_title') ?></h2>
				<?php the_field('join_text') ?>
				<?php the_field('join_form') ?>	
				<?php the_field('collection_statement', 'option'); ?>
	</div>
	
	<div class="intro-container text-center" style="">
		<div class="row">
			<div class="col-sm-12 intro-para">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<?php the_content(__('(more...)')); ?>

			<?php endwhile; else: ?>
			<p><?php _e('Sorry, no pages are available.2'); ?></p>
			<?php endif; ?>

			</div>

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
	</div>	
	
</div>

<div class="container-fluid news-champs-wrap">
	<div class="intro-container" style="background-color: transparent; padding-right:0; padding-left:0;">
		<?php get_template_part( 'partials/content', 'news-feed' ); ?>
			
</div>
</div>

<div class="container-fluid news-champs-wrap">
<div class="intro-container hm-pic-bottom">
	<div style="margin-top: 20px;"><img src="<?php bloginfo('template_directory'); ?>/images/cp-hunter.jpg" alt="CPActive Hunter" /></div>
</div>
</div>

</div> <!-- end Join wrap -->


<?php get_footer(); ?>