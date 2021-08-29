<?php get_header(); ?>
	
<div class="container-fluid intro-sections">
	
<div class="row section hm-feature hero-wrap top-level">
	
	<?php if(has_post_thumbnail()) {
                        $feat_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), "full", true);
                    } ?>
					                   
                    <div class="hero-image-feature top-feature" style="background-image:url(<?php echo (($feat_image[0]))?>); background-size: cover; background-position: center top;"></div>
	
				<div class="hero-fade"> </div>

		
			<div class="image-content-top hero-content">
				
				<div class="col-xs-12 text-center">
					<h1>Latest News</h1>
					<h2>Media releases and fact sheets</h2>
					<img class="scroll-chevron scroll-hero" src="<?php bloginfo('template_directory'); ?>/images/down-chevron.png" alt="Scroll" />
				</div>
						
			
			</div> <!-- end .row-->	
	
	</div> <!-- end .hero-wrap-->
      
<div class="container-fluid page-content">
<div class="container">
<div class="row page-content single-page">
	
				<div class="col-sm-12 news-intro text-center">
					<?php the_field('news_category_links', get_option('page_for_posts')) ?>
				</div>
		  
        <!-- begin colLeft -->

                <div class="col-sm-8 col-sm-offset-2" style="min-height: 700px;">
					
                <div class="news-panel">
                

             
              
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	



		<div class="postItem clearfix">

        


                        <div class="meta clearfix">
						<span class="date"><?php the_time('M j, Y') ?></span>
                        <span class="categs"><?php the_category(' ') ?></span>
            			</div><!-- end meta -->
			
						<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                        
                        <?php the_excerpt(); ?> 
		
	</div> <!-- end postItem -->
		

		<?php endwhile; ?>
		<?php else : ?>
		<p>Sorry, but you are looking for something that isn't here.</p>
		<?php endif; ?>
		
		<?php if (function_exists("emm_paginate")) {

					emm_paginate();

					} ?>

	</div>  <!-- end news-panel-->   
	</div> <!-- end col-->

              
</div> <!-- end row page-content -->
              
</div> <!-- end container-->
</div> <!-- end container-fluid -->
               


<?php get_footer(); ?>