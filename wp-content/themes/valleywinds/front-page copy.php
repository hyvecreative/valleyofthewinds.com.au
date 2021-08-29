
<?php get_header(); ?>

<div class="container-fluid intro-sections">
	
<div class="row section hm-feature hero-wrap">
	
	<div class="hero-image-feature"><?php the_post_thumbnail( 'full' ); ?></div>
	
			<div class="image-content hero-content">
				
				<div class="col-xs-12 text-center">
					<h1><?php the_field('banner_head') ?></h1>
					<h2><?php the_field('banner_sub') ?></h2>
					<?php the_field('banner_button') ?>
					<img class="scroll-chevron scroll-hero" src="<?php bloginfo('template_directory'); ?>/images/down-chevron.png" alt="Scroll" />
				</div>
						
			
			</div> <!-- end .row-->	
	
	</div> <!-- end .hero-wrap-->
	
<div id="community" class="row section community-wrap">
	
	<div class="hero-image-feature">
	<?php 

$image = get_field('page_col_image_2');

if( !empty($image) ): ?>

	<img class="hero-image-acp" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>
	</div>
	
<div class="community-content">
	<h2><?php the_field('sec_2_title') ?></h2>
	<?php the_field('sec_2_text') ?>
	<?php the_field('sec_2_button') ?>
</div> <!-- end .row-->	
	
	</div> <!-- end .community-wrap-->	
	
<div id="project" class="row section project-wrap">
	
	<div class="hero-image-feature">
	<?php 

$image = get_field('page_col_image_3');

if( !empty($image) ): ?>

	<img class="hero-image-acp" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>
	</div>
	
<div class="project-content">
	<h2><?php the_field('sec_3_title') ?></h2>
	<?php the_field('sec_3_text') ?>
	<?php the_field('sec_3_button') ?>
			
</div> <!-- end .row-->	
	
</div> <!-- end .project-wrap-->
	
	<div id="location" class="row section location-wrap">
	
	<div class="hero-image-feature">
	<?php 

$image = get_field('page_col_image_4');

if( !empty($image) ): ?>

	<img class="hero-image-acp" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>
	</div>
	
<div class="location-content">
	<h2><?php the_field('sec_4_title') ?></h2>
	<?php the_field('sec_4_text') ?>
	<?php the_field('sec_4_button') ?>		
</div> <!-- end .row-->	
	
</div> <!-- end .location-wrap-->
	
<div id="timeline" class="row section timeline-wrap text-center" style="padding-bottom: 40px;">
	
	<div class="col-md-8 col-md-offset-2 col-xs-12 timeline">
	
		<h2 class="text-center"><?php the_field('timeline_title') ?></h2>
		
		<?php the_field('timeline_intro') ?>
		
		<div class="col-xs-12 text-center" style="margin-bottom: 20px;">
				
				<?php 

$image = get_field('timeline_pic');

if( !empty($image) ): ?>

	<img class="hero-image-acp" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>
	
		</div>
		
		 <?php the_field('timeline_button') ?>

	</div>
		
</div> <!-- end .timeline-wrap-->
	
<div id="news" class="row section news-wrap" style="background: #e1ecf0; padding-bottom: 40px;">
		
		<h2 class="text-center"><?php the_field('news_title') ?></h2>
   
   		<?php get_template_part( 'partials/content', 'newsFeed' ); ?>
	
	    <?php the_field('news_button') ?>
		
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
  
 
<?php get_footer(); ?>