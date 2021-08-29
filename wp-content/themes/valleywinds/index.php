<?php get_header(); ?>
	
<div class="container-fluid intro-sections">
	
<div class="row section hm-feature hero-wrap top-level">
	
	<?php if(has_post_thumbnail()) {
                        $feat_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), "full", true);
                    } ?>
					                   
                    <div class="hero-image-feature top-feature" style="background-image:url(<?php echo (($feat_image[0]))?>); background-size: cover; background-position: center center;"></div>
	
				<div class="hero-fade"> </div>
		
			<div class="image-content-top hero-content">
				
				<div class="col-xs-12 text-center">
					<h1><?php the_field('banner_head', get_option('page_for_posts')) ?></h1>
					<h2><?php the_field('banner_sub', get_option('page_for_posts')) ?></h2>
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

                <div class="col-xs-12" style="min-height: 700px; margin-top: 40px;" >
					
                <div class="news-panel">
                
			    <?php get_template_part( 'partials/content', 'newsIndex' ); ?>

				</div>  <!-- end news-panel-->   
	</div> <!-- end col-->

              
</div> <!-- end row page-content -->
              
</div> <!-- end container-->
</div> <!-- end container-fluid -->
               


<?php get_footer(); ?>