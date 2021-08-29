
<?php get_header(); ?>

<div class="container-fluid header-quote">	
	<div class="container">
		<div class="row">
			
			<div class="col-sm-12"> 
				<h1>The report that keeps your finger on the pulse of social, political and environmental issues.</h1>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid header-hero">	
	<div class="container">
		<div class="row">
			
			<div class="col-sm-12"> 
				<p>The Essential Report is an ongoing opinion poll that leads Australia's political research. Spanning everything from politics to the environment, the economy to equality, the Essential poll tracks the mood of the nation and gets to the heart of issues affecting Australians.</p>
				
				<a class="btn" href="/about/">About</a> <a class="btn" href="#">Subscribe</a>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid">		
	<div class="container">
		<div class="row">
			
			<div class="col-sm-12"> 
				
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

				the_title( '<h2 class="entry-title"><a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark">', '</a></h2>' ); 
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
		</div>
	</div>
</div>

<div class="container-fluid facts-info">	
	<div class="container">
		<div class="row">
			
			<div class="col-sm-12"> 
				
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


<div class="container-fluid facts-info">	
<div class="container">
	
<div id="community">
	
			
			
			
			<div class="row icon-items text-center">
				
				<div class="col-12">
					<h2>Facts and information</h2>
				</div>
			
				<div class="col-sm-3" style="margin-top: 20px; margin-bottom: 20px;">
					<img class="icon-img" src="<?php bloginfo('template_directory'); ?>/images/icon-generic.jpg" alt="Icon" />
					<p>Lorem ipsum dolor sit amet, ut pri maiorum delectus. </p>
				</div>
				<div class="col-sm-3" style="margin-top: 20px; margin-bottom: 20px;">
					<img class="icon-img" src="<?php bloginfo('template_directory'); ?>/images/icon-generic.jpg" alt="Icon" />
					<p>Possim docendi blandit nec ut, sit impedit sensibus imperdiet an.</p>
				</div>
				<div class="col-sm-3" style="margin-top: 20px; margin-bottom: 20px;">
					<img class="icon-img" src="<?php bloginfo('template_directory'); ?>/images/icon-generic.jpg" alt="Icon" />
					<p>Ex usu vero ponderum. Omnium theophrastus no his.</p>
				</div>
				<div class="col-sm-3" style="margin-top: 20px; margin-bottom: 20px;">
					<img class="icon-img" src="<?php bloginfo('template_directory'); ?>/images/icon-generic.jpg" alt="Icon" />
					<p>At vim audiam alienum accusamus, velit omittantur.</p>
				</div>
			
				<div class="col-12">
					<img class="scroll-chevron scroll-hero" src="<?php bloginfo('template_directory'); ?>/images/down-chevron-dk.png" alt="Scroll" />
				</div>
						

		</div> <!-- end .row-->	
	

	
</div> <!-- end .row-->

</div>	

</div> <!-- end .container-fluid -->

<div class="container-fluid services-section" style="padding: 40px; background: #e7e7e7;">
	<div class="container ">
		<div id="service" class="text-center">
			
			
			
			<div class="row service-items">
				<div class="col-12">
					<h2>Services</h2>
				</div>
				<div class="col-sm-6">
					<div class="service-wrap" style="margin-top: 20px; margin-bottom: 20px; background: #fff;">
					<h3 style="padding: 20% 0;">Service #1</h3>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="service-wrap" style="margin-top: 20px; margin-bottom: 20px; background: #fff;">
					<h3 style="padding: 20% 0;">Service #2</h3>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="service-wrap" style="margin-top: 20px; margin-bottom: 20px; background: #fff;">
					<h3 style="padding: 20% 0;">Service #3</h3>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="service-wrap" style="margin-top: 20px; margin-bottom: 20px; background: #fff;">
					<h3 style="padding: 20% 0;">Service #4</h3>
					</div>
				</div>
			</div>	
			
			<a href="#" class="btn btn-more">More services </a>
			
</div> <!-- end row-->	
		         
</div> <!-- end container-->
	
</div> <!-- end container-fluid-->

<div id="donate" class="container-fluid donate" style="position: relative;">
<div class="container">
	
	
	
<div class="row" style="position: relative;">
	
	<img class="" src="<?php bloginfo('template_directory'); ?>/images/slider-2.jpg" alt="donate" style="width: 100%; height: auto;" />

	<div class="donate-wrap">
		<div class="col-sm-6 col-md-5 col-md-offset-1 donate-intro">
			


		</div> <!-- end .col-->	
	
	    <div class="col-md-5 col-sm-6 donate-content">
			<h3>Donate</h3>
			<p>Possim docendi blandit nec ut, sit impedit sensibus imperdiet an interdum erat.</p>
		</div> <!-- end .col-->	
			
	</div>
		

</div> <!-- end row-->	
	
		         
</div> <!-- end container-->
	
</div>
	
	<div id="proof" class="container-fluid proof" style="position: relative;">
<div class="container">
	
	
	
<div class="row text-center" style="position: relative;">
	
	<h2>What we do, how we do it</h2>
	
	<img class="" src="<?php bloginfo('template_directory'); ?>/images/play.jpg" alt="donate" style="width: 100%; height: auto;" />
		

</div> <!-- end row-->	
	
		         
</div> <!-- end container-->
</div>
		
		<div id="testimonial" class="container-fluid testimonial" style="position: relative;">
<div class="container">
	
	
	
<div class="row" style="position: relative;">
	
	<img class="" src="<?php bloginfo('template_directory'); ?>/images/testimonial.jpg" alt="donate" style="width: 100%; height: auto;" />
	
	<div class="testimonial-wrap">
		<div class="col-sm-6 col-md-5 col-md-offset-1 donate-intro">
			


		</div> <!-- end .col-->	
	
	    <div class="col-md-5 col-sm-6 testimonial-content">
			<h3>Testimonial</h3>
			<p>How we do it... possim docendi blandit nec ut, sit impedit sensibus imperdiet an interdum erat.</p>
		</div> <!-- end .col-->	
			
	</div>

	
		

</div> <!-- end row-->	
		         
</div> <!-- end container-->

  
 
<?php get_footer(); ?>