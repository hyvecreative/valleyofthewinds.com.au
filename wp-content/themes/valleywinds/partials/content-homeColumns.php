<div id="homeColumns" class="container">

	<div class="row page-columns">
	  
	  <div class="col-xs-12">
		<h2><?php the_field('page_col_title_1') ?></h2>
		</div>

	  <div class="col-sm-6">
	  	
	  	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<?php the_content(); ?>
		
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
	  	
	  </div>
	  
	  <div class="col-sm-6">
	  
	  <?php 

$image = get_field('page_col_image_1');

if( !empty($image) ): ?>

	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>
	  
	  	
	  </div>

	</div>

</div> <!-- #signupFeature -->