<?php
/*
Template Name: frontpage-home-dev
*/
?>
<?php
get_header(); 
?>

<!-- begin content -->

<div class="container-fluid header-quote">	
	<div class="container">
		<div class="row">
			
			<div class="col-sm-12"> 
				<h1>The report that keeps your finger on the pulse of social, political and environmental issues.</h1>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid" style="position: relative;">
	 <?php if(has_post_thumbnail()) {
                        $feat_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), "full", true);
                    } ?>
<div class="row hm-feature-page" style="background-image:url(<?php echo (($feat_image[0]))?>); background-size: cover; background-position: center;"></div>
<div class="row" style="overflow: hidden;">
<div class="col feature-text">
			<h1 class=""><?php the_field('banner_head') ?></h1>
	        <?php the_field('banner_para') ?>
			<a style="margin-right: .5rem;" class="btn btn-banner" href="<?php the_field('banner_but_url') ?>"><?php the_field('banner_but_text') ?></a>
			<a class="btn btn-banner" href="<?php the_field('banner_but_url_2') ?>"><?php the_field('banner_but_text_2') ?></a>

</div>
</div>
</div>

<div class="container-fluid" style="padding: 2rem 0">		
	<div class="container">
		<div class="row">
			
			<div class="col-sm-12 col-md-10 offset-md-1"> 
				
				<?php 
					$args = array(  
						'post_type' => 'reports',
						'post_status' => 'publish',
						'posts_per_page' => 1, 
						'order_by' => 'title', 
						'order' => 'DESC',
					); 

				$loop = new WP_Query( $args ); 

				while ( $loop->have_posts() ) : $loop->the_post();

				the_title( '<h2 class="entry-title text-center"><a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark">Latest ', '</a></h2>' ); 
				?>

					<div class="entry-content">
						<?php the_content(); ?>
						<?php
				$featured_posts = get_field('report_questions');
				if( $featured_posts ): ?>
					<div id="accordion" style="padding-left: 0;">
						
						<?php $count = 1; ?>
						<?php $count2 = 1; ?>
						
					<?php foreach( $featured_posts as $post ): 

						// Setup this post for WP functions (variable must be named $post).
						setup_postdata($post); ?>
						
						<div class="card">
							
							<div class="card-header">
								<a class="collapsed card-link" data-toggle="collapse" href="#collapse-<?php echo $count; $count++; ?>"><?php the_title(); ?>
								</a>
							</div>
							
							<div id="collapse-<?php echo $count2; $count2++; ?>" class="collapse" data-parent="#accordion">
							  <div class="card-body">
								<?php the_content(); ?>
							  </div>
    						</div>
							
						</div>						
						
					<?php endforeach; ?>
					</div>
					<?php 
					// Reset the global post object so that the rest of the page works correctly.
					wp_reset_postdata(); ?>
				<?php endif; ?>
					</div>

				<?php endwhile; ?>
				
			</div>	
			
			<div class="col-sm-12 text-center" style="padding-top: 2rem"> 
					
			<a style="margin-right: .5rem;" class="btn btn-banner" href="#">View previous reports</a>
			<a style="margin-right: .5rem;" class="btn btn-banner" href="#">Explore the full archivet</a>
			<a class="btn btn-banner" href="#">About the Essential Report</a>
			
			
			</div>
	
			
		</div>
	</div>
</div>

<div class="container-fluid facts-info" style="display: none;">	
	<div class="container">
		<div class="row">
			
			<div class="col-sm-12 col-md-8 offset-md-2"> 
				
				<h2>Essential Report Archives</h2>
				
				<?php 
					$args = array(  
						'post_type' => 'reports',
						'post_status' => 'publish',
						'posts_per_page' => 10, 
						'order_by' => 'title', 
						'order' => 'DESC',
					); 

				$loop = new WP_Query( $args ); 

				while ( $loop->have_posts() ) : $loop->the_post();

				the_title( '<p class="entry-title"><a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark">', '</a></p>' ); 
				?>

				<?php endwhile; ?>
				
			</div>
		</div>
	</div>
</div>

<div class="container-fluid subscribe" style="background: #333; padding: 2rem 0">	
	<div class="container">
		<div class="row">
			
			<div class="col-sm-12 text-center"> 
				<h2>Stay in the know</h2>
				<p>The nation's best political research, straight in your inbox, for free, every fortnight.</p>
				
				<?php gravity_form( 6, false, false, false, '', true, false ); ?>
				
				<p><a href="#">Privacy link</a></p>
			</div>
			
		</div>
	</div>
</div>


<div class="container-fluid political-polling" style="padding: 2rem 0">	
	<div class="container">
		<div class="row">
			
			<div class="col-sm-12 text-center">
				<h2>Latest political insights</h2>
				<p>Look through a summary of the federal political questions (updated quarterly)</p>
				
				<div class="row">
					<div class="col-sm-6" style="display: flex; align-items: center;">
						<div class="" style="width: 100%; display: flex; align-items: center; min-height: 100px; background: #e7e7e7;">
							<div class="text-center" style="width: 100%;">
								<p>Recent 2pp</p>
							</div>
						</div>
					</div>
					
					<div class="col-sm-6" style="display: flex; align-items: center;">
						<div class="" style="width: 100%; display: flex; align-items: center; min-height: 100px; background: #e7e7e7;">
							<div class="text-center" style="width: 100%;">
								<p>Primary</p>
							</div>
						</div>
					</div>				
				</div>
				
				<a class="btn btn-banner" href="#">View all political insights</a>
				
			</div>
	</div>
</div>
</div>

<div class="container-fluid purchase-question" style="padding: 2rem 0">	
	<div class="container">
		<div class="row">
			
			<div class="col-sm-12 text-center">
				<h2>Find answers to your burning questions</h2>
				<p>Uncover insights into the topics that matter most to you and your organisation. Essential Report questions are available to purchase either as a single or multi-pack. </p>

				<div class="row">
					<div class="col-sm-6" style="display: flex; align-items: center;">
						<div class="" style="width: 100%; display: flex; align-items: center; min-height: 100px; background: #e7e7e7;">
							<div class="text-center" style="width: 100%;">
								<p> Ask the questions that matter to you</p>
							</div>
						</div>
					</div>
					
					<div class="col-sm-6" style="display: flex; align-items: center;">
						<div class="" style="width: 100%; display: flex; align-items: center; min-height: 100px; background: #e7e7e7;">
							<div class="text-center" style="width: 100%;">
								<p>Purchase an Essential Report question.</p>
							</div>
						</div>
					</div>				
				</div>
				
			</div>

				<a class="btn btn-banner" href="#">Find out more</a>
			</div>
			
		</div>
	</div>
</div>


 <!-- end Join wrap -->


<?php get_footer(); ?>