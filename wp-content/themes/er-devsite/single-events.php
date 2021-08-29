<?php get_header(); ?>

<!-- begin content -->

<div class="container-fluid page-simple-wrap join-wrap">

<div class="container single-event">

<!-- begin row  -->
	
    <div class="row content" style="min-height: 900px">
			

			<div class="col-sm-12 col-md-8">

			


						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	

							<div class="postItem itemContent">
								
								<div class="bCrumbs" style="margin-bottom: 20px;" xmlns:v="http://rdf.data-vocabulary.org/#">
									<?php if(function_exists('bcn_display'))
									{
										bcn_display();
									}?>
								</div>
								
								<?php           
													$product_terms = wp_get_object_terms( $post->ID,  'event_cats' );
									if ( ! empty( $product_terms ) ) {
										if ( ! is_wp_error( $product_terms ) ) {
												foreach( $product_terms as $term ) {
													echo '<a class="' . $term->slug .'" href="' . get_term_link( $term->slug, 'event_cats' ) . '">' . esc_html( $term->name ) . '</a> '; 
												}

										}
									} ?>  

								 <h1><?php the_title(); ?></h1>

								 <span class="date"><?php the_field('event_date') ?></span> | <span class="date"><?php the_field('event_time') ?></span>


								<?php the_content(__('Continue reading &raquo;')); ?> 

							</div> <!-- Postitem -->

						<?php endwhile; ?>

						<?php else : ?>

						<p>Sorry, but you are looking for something that isn't here.</p>				
						<?php endif; ?>

			</div>
					<!-- end col left -->

			<div class="col-sm-12 col-md-4">
				<div class="event-sign-up-wrap">
				<h2><?php the_field('event_sign_up_title') ?></h2>
					<p><?php the_field('event_sign_up_intro') ?></p>
					<?php the_field('event_sign-up') ?>
				</div>
			</div>

            
	</div><!-- end row -->
	
</div><!-- end cont -->
	
</div>

<?php get_footer(); ?>




