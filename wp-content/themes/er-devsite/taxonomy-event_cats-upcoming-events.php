<?php 
	if (!defined('ABSPATH')) exit;
	get_header(); 
?>

<div class="container-fluid" style="position: relative;">
	 
<div class="row hm-feature-page page-default" style="background-image:url('<?php bloginfo('template_directory'); ?>/images/cp-hero-events-hero.jpg'); background-size: cover; background-position: center center;"></div>
<div class="row">
<div class="col feature-text page-text text-center">
<h1 class="h1_large">Events</h1>
</div>
</div>
</div>

<!-- begin content -->

<div class="container-fluid page-simple-wrap join-wrap">
<div id="content" class="container page-simple event-feed">

<!-- begin row -->

<div class="row">
	
<div class="col-sm-12 col-md-10 offset-md-1 text-center">

            
              
<?php if ( is_page('events') ) { ?>

     <h1>The latest Events from CPActive</h1>

<?php } else { ?>

	 <h1><?php single_cat_title(); ?></h1>

<?php } ?>
	
	<a class="btn" style="margin-bottom: 2rem;" href="/events/">All events</a>

                  
<ul style="padding-left: 0;">		
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	


				<div class="feeditem text-left">  
				
					<li style="list-style: none">

						<div class="row">
								<div class="col-sm-8 itemContent">
									
									<?php           
									$product_terms = wp_get_object_terms( $post->ID,  'event_cats' );
									if ( ! empty( $product_terms ) ) {
										if ( ! is_wp_error( $product_terms ) ) {
												foreach( $product_terms as $term ) {
													echo '<a class="' . $term->slug .'" href="' . get_term_link( $term->slug, 'event_cats' ) . '">' . esc_html( $term->name ) . '</a> '; 
												}
										}
									} ?>  
									
									
								<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>

								<div class="meta date-tab">
									<span class="date"><?php the_field('event_date') ?></span> | <span class="date"><?php the_field('event_time') ?></span>
								</div><!-- end meta -->

								<div class="excerpthm"><?php the_excerpt(); ?></div>

								<a href="<?php the_permalink() ?>" class="btn">Read more</a>
								</div>

						</div>


					</li>
                
    			</div><!-- END feeditem-->

					
<?php endwhile; ?>

				

				<?php else : ?>

				<p>Sorry, but you are looking for something that isn't here.</p>

				<?php endif; ?>
<ul>
	
	<?php if (function_exists("emm_paginate")) {

					emm_paginate();

				} ?>
                
</div><!-- end col -->

        
</div><!-- end row -->
</div><!-- end container-->
</div><!-- end container-fluid-->



<?php get_footer(); ?>