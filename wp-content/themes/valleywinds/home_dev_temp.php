

<?php
/*
Template Name: home_dev_temp
*/

?>


<?php get_header('slider'); ?>

<div class="container-fluid intro-sections">
	
<div class="row section hm-feature hero-wrap">
	
	<?php if(has_post_thumbnail()) {
                        $feat_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), "full", true);
                    } ?>
					                   
                    <div class="hero-image-feature top-feature" style="background-image:url(<?php echo (($feat_image[0]))?>); background-size: cover; background-position: center top;"></div>
		
			<div class="image-content-top hero-content">
				
				<div class="col-xs-12 text-center">
					<h1><?php the_field('banner_head') ?></h1>
					<h2><?php the_field('banner_sub') ?></h2>
					<?php the_field('banner_button') ?>
					<img class="scroll-chevron scroll-hero" src="<?php bloginfo('template_directory'); ?>/images/down-chevron.png" alt="Scroll" />
				</div>
						
			
			</div> <!-- end .row-->	
	
	</div> <!-- end .hero-wrap-->
	

	
	
<div id="project" class="row section project-wrap">
	
	<div class="hero-image-feature">
		
		
	<?php

              $image = get_field('page_col_image_3');
              $size = 'full'; // (thumbnail, medium, large, full or custom size)

              if( $image ) {

                echo wp_get_attachment_image( $image, $size );

              }

     ?>	

	</div>
	
<div class="project-content">
	<h2><?php the_field('sec_3_title') ?></h2>
	<?php the_field('sec_3_text') ?>
	<?php the_field('sec_3_button') ?>
			
</div> <!-- end .row-->	
	
</div> <!-- end .project-wrap-->
	
<div id="benefits-slider" class="row benefits-slider-wrap">
	
	<div class="slick-slider">
		
	<?php if( have_rows('benefits_row') ): while ( have_rows('benefits_row') ) : the_row(); ?>
        <div class="benefits-item">
			<div class="benefits-item-pic">

                <?php
                $image = get_sub_field('benefits_icon');

                ?>

                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				
			</div>
			<div class="benefits-item-textwrap">
			<h3 class="benefits-item-head"><?php the_sub_field('benefits_item_head'); ?></h3>
			<h3 class="benefits-item-head" style="margin-top: 4px;"><?php the_sub_field('benefits_item_text'); ?></h3>
			</div>

        </div>
    <?php endwhile; else: endif; ?>

	</div> <!-- end .slick-slider-->
</div> <!-- end benefits slider -->
	
<div id="community" class="row section community-wrap">
	
	<div class="hero-image-feature">
		
	<?php

              $image = get_field('page_col_image_2');
              $size = 'full'; // (thumbnail, medium, large, full or custom size)

              if( $image ) {

                echo wp_get_attachment_image( $image, $size );

              }

     ?>	

	</div>
	
	<div class="community-content">
	<h2><?php the_field('sec_2_title') ?></h2>
	<?php the_field('sec_2_text') ?>
	<?php the_field('sec_2_button') ?>
</div> <!-- end .row-->	
	
	</div> <!-- end .community-wrap-->	
	
<div id="location" class="row section location-wrap">
	
	<div class="hero-image-feature">
		
	<?php

              $image = get_field('page_col_image_4');
              $size = 'full'; // (thumbnail, medium, large, full or custom size)

              if( $image ) {

                echo wp_get_attachment_image( $image, $size );

              }

     ?>	
		
	</div>
	
<div class="location-content">
	<h2><?php the_field('sec_4_title') ?></h2>
	<?php the_field('sec_4_text') ?>
	<?php the_field('sec_4_button') ?>		
</div> <!-- end .row-->	
	
</div> <!-- end .location-wrap-->
	
<div id="timeline" class="row section timeline-wrap timeline text-center" style="padding-bottom: 40px; background: #e7e7e7;">
	
<div class="col-md-8 col-md-offset-2 col-xs-12">
	
		<h2 class="text-center"><?php the_field('timeline_title') ?></h2>
		
		<?php the_field('timeline_intro') ?>
		
	<div class="col-sm-12">
			<div class="timeline-row">
				
			<div class="timeline-line" style="width: 88.88888%; left: 10.555555%"></div>
				
					<div class="timeline-item done" style="width: 20%;">
						<p class="timeline-item-title">Site Identification &amp; Due Diligence</p>
						<p class="timeline-item-date">Complete</p>
						<span class="check-circ"></span>
					</div>
				
					<div class="timeline-item" style="width: 20%;">
						<p class="timeline-item-title">Technical Assessments</p>
						<p class="timeline-item-date"> </p>
						<span class="check-circ"><img class="" src="<?php bloginfo('template_directory'); ?>/images/timeline-cog.svg" alt=" " style="width: 100%; height: auto;" /></span>
					</div>
					<div class="timeline-item" style="width: 20%;">
						<p class="timeline-item-title">Environmental Planning Approval</p>
						<p class="timeline-item-date"> </p>
						<span class="check-circ"></span>
					</div>
				
					<div class="timeline-item" style="width: 20%;">
						<p class="timeline-item-title">Detailed Engineering</p>
						<p class="timeline-item-date"> </p>
						<span class="check-circ"></span>
					</div>
					<div class="timeline-item" style="width: 20%;">
						<p class="timeline-item-title">Commencement of Construction</p>
						<p class="timeline-item-date"> </p>
						<span class="check-circ"></span>
					</div>
				
			</div>
	</div>
	
</div>
		
		

</div>
		
</div> <!-- end .timeline-wrap-->
	
<div id="news" class="row section news-wrap" style="background: #e1ecf0; padding-bottom: 40px;">
		
		<h2 class="text-center"><?php the_field('news_title') ?></h2>
   
   		<?php get_template_part( 'partials/content', 'newsFeed' ); ?>
	
	<div class="col-xs-12">
	
	    <?php the_field('news_button') ?>
		
	</div>
		
</div> <!-- end .news-wrap-->
	
	
</div> <!-- end .container-fluid -->

<!-- start title-content -->

<div class="container-fluid solution-section">
<div class="container">
<div id="contact" class="row contact-wrap">
		
		<div class="col-md-8 col-md-offset-2 intro-text text-center">
		
		
		<h2 class="text-center"><?php the_field('contact_title') ?></h2>
			<?php the_field('contact_intro') ?>
			
			<?php get_template_part( 'partials/content', 'signupModuleBase' ); ?>

		
		</div> <!-- end .col-->	
			

</div> <!-- end row-->	
	
		         
</div> <!-- end container-->
</div> <!-- end container-fluid-->
  
 
<?php get_footer('slider'); ?>