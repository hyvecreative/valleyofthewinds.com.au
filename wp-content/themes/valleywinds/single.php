<?php get_header(); ?>
	
<div class="container-fluid intro-sections" style="box-shadow: 0px 5px 8px rgba(0,0,0,.3);">
	
<div class="row hm-feature hero-wrap news-level">
					                   
                    <div class="hero-image-feature" style="background-image:url('<?php bloginfo('template_directory'); ?>/images/news_hero.jpg'); background-size: cover; background-position: center top;"></div>
		
			<div class="image-content-top hero-content">
				
				<div class="col-xs-12 text-center">
					
						<?php if ( ! empty ( $GLOBALS['post'] )
   && is_single()
   && in_category( 'project-updates', $GLOBALS['post'] ) 
) {  ?>
									<h1>Project updates</h1>
								<?php } else { ?>
									<h1>News and updates</h1>
								<?php } ?>				
					
					
					<img class="scroll-chevron scroll-content" src="<?php bloginfo('template_directory'); ?>/images/down-chevron.png" alt="Scroll" />
				</div>
						
			
			</div> <!-- end .row-->	
	
	</div> <!-- end .hero-wrap-->
	
</div> <!-- end .container-fluid-->
		  
<div class="container-fluid page-content" style="margin-top: 20px;">
<div class="container">
<div class="row page-content single-page">

                <div class="col-md-7 main-content" style="min-height: 700px; margin-top: 20px; margin-bottom: 40px;">
	

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
	<div class="postItem clearfix">
		
	<div class="meta clearfix">
		<span class="date"><?php the_time('M j, Y') ?></span>
           			    <span class="categs"><?php the_category(' ') ?></span> 
            			
    </div><!-- end meta -->
		
		<h3 class="single-h3"><?php the_title(); ?></h3>
		
		<?php the_content(__('(more...)')); ?>
		
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>	
		
	</div>
	</div>
	
	
	<div class="col-md-offset-1 col-md-4 main-content-sb">
	
	 <?php get_sidebar('news'); ?> 
		
	</div>
              
</div> <!-- end row  -->
              
</div> <!-- end container-->
</div> <!-- end container-fluid -->
               


<?php get_footer(); ?>

