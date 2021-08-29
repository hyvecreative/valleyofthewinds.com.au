<?php get_header(); ?>
	
<div class="container-fluid intro-sections">
	
<div class="row section hm-feature hero-wrap news-level">
					                   
                    <div class="hero-image-feature" style="background-image:url('<?php bloginfo('template_directory'); ?>/images/vow_hero_DJI_0157_blue.jpg'); background-size: cover; background-position: center top;"></div>
		
			<div class="image-content-top hero-content">
				
				<div class="col-xs-12 text-center">
					<h1>Project updates</h1>
					<img class="scroll-chevron scroll-content" src="<?php bloginfo('template_directory'); ?>/images/down-chevron.png" alt="Scroll" />
				</div>
						
			
			</div> <!-- end .row-->	
	
	</div> <!-- end .hero-wrap-->
	
</div> <!-- end .container-fluid-->
		  
<div class="container-fluid page-content">
<div class="container">
<div class="row page-content single-page">

                <div class="col-md-7 main-content" style="min-height: 700px; margin-top: 20px; margin-bottom: 40px;">
	

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
	<div class="postItem clearfix">
	
		<div class="postimage" style="margin-bottom: 20px;"><?php the_post_thumbnail( 'medium_large' ); ?></div>
		
	<div class="meta clearfix">
		<span class="date"><?php the_time('M j, Y') ?></span>
           			    <span class="categs"><?php the_category(' ') ?></span> 
            			
    </div><!-- end meta -->
		
		<h2 style><?php the_title(); ?></h2>
		
		<?php the_content(__('(more...)')); ?>
		
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>	
		
	</div>
	</div>
	
	
	<div class="col-md-offset-1 col-md-4 main-content-sb">
	
	 <?php get_sidebar(' '); ?> 
		
	</div>
              
</div> <!-- end row  -->
              
</div> <!-- end container-->
</div> <!-- end container-fluid -->
               


<?php get_footer(); ?>

