
<?php
/*
Template Name: project_meetings_temp
*/

?>
<?php get_header(' '); ?>

<div class="container-fluid intro-sections" style="box-shadow: 0px 5px 8px rgba(0,0,0,.3);">
	
<div class="row hm-feature hero-wrap news-level">
					                   
                    <div class="hero-image-feature" style="background-image:url('<?php bloginfo('template_directory'); ?>/images/news_hero.jpg'); background-size: cover; background-position: center top;"></div>
		
			<div class="image-content-top hero-content">
				
				<div class="col-xs-12 text-center">
					

									<h1>Meet with the project manager</h1>
		
					
					
					<img class="scroll-chevron scroll-content" src="<?php bloginfo('template_directory'); ?>/images/down-chevron.png" alt="Scroll" />
				</div>
						
			
			</div> <!-- end .row-->	
	
	</div> <!-- end .hero-wrap-->
	
</div> <!-- end .container-fluid-->

<div class="container-fluid">
<div class="container">
	
	<div id="content" class="row section content-wrap">

		<div class="col-sm-12 main-content">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<?php the_content(__('(more...)')); ?>

			<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>

		</div>


	</div> <!-- end .row-->
	
	<div class="row">
		<?php if( have_rows('projects_list') ): while ( have_rows('projects_list') ) : the_row(); ?>

					<div class="col-sm-4 wp-block-image" style="margin-bottom: .5rem;">
						
						<a href="<?php the_sub_field('project_image_url'); ?> " data-slb-active="1" data-slb-asset="473701592" data-slb-internal="0">

							<?php
							$image = get_sub_field('project_image');
								?>

							<img style="margin-bottom: .5rem;" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></a>
						<a href="<?php the_sub_field('download_url'); ?>">Dowmload pdf</a>
					</div>
							
				<?php endwhile; else: endif; ?>
	</div>

		         
</div> <!-- end container-->
</div> <!-- end container-fluid-->
  
 
<?php get_footer(' '); ?>