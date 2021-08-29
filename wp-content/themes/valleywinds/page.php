<?php get_header( ); ?>

<div class="container-fluid">
			<div class="row hero-title">
			<div class="metaslider ">
				<div class="page-image">
				 <?php 

$image = get_field('page_image');

if( !empty($image) ): ?>

	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>
				</div>
				
				<div class="caption-wrap">
				<div class="caption"><h1><?php the_title(); ?></h1></div>	
				</div>
				
				</div>	
			
			</div> <!-- end .row-->														
</div> <!-- end .container-fluid -->

      
<div class="container-fluid page-content">
<div class="container">
<div class="row page-content single-page">
		  
        <!-- begin colLeft -->

        <div class="col-sm-8 col-sm-offset-2" style="min-height: 700px;">
	

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class=" ">
		
		<?php the_content(__('(more...)')); ?>
		
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>	
		
	</div>
	</div>
	
              
</div> <!-- end row page-content -->
              
</div> <!-- end container-->
</div> <!-- end container-fluid -->
               


<?php get_footer( ); ?>