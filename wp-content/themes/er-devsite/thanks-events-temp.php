<?php
/*
Template Name: thanks_events_temp
*/
?>
<?php get_header(); ?>

<!-- begin content -->

<div class="container-fluid page-intro">
	
	<div id="content" class="container">
		<div class="row">
			
			<div class="col-sm-12 col-md-8 offset-md-2 text-center" style="margin-top: 2rem;">
				<h1 style="color: #288537"><?php the_title(); ?></h1>
			</div>

		</div>
	</div>
</div>

<div class="container-fluid sources-content">
	<div class="container">
		
		<div class="row" style="margin-bottom: 4rem;">
		
			<div class="col-sm-12 col-md-8 offset-md-2 text-center">
				
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<?php the_content(__('(more...)')); ?>

			<?php endwhile; else: ?>
			<p><?php _e('Sorry, no pages are available. visit: http://coalimpactindex.com.au'); ?></p>
			<?php endif; ?>
				
				
			</div>
		
		</div>
		
	</div>
</div>

    
<?php get_footer(); ?>


