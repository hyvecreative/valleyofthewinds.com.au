

		<div class="col-xs-12 text-center">
							
							<h2><?php the_field('stories_title') ?></h2>
			                <h3><?php the_field('stories_sub') ?></h3>
			                <?php the_field('stories_button') ?>
		</div>
						
		<div class="col-sm-8 col-sm-offset-2 page-stories-module">

							<?php
							$args = array (
								'post_type'              => 'your_stories',
								'posts_per_page'	 	 => '3',
								'offset'                 => '0',
								'order'                  => 'DESC',
								'orderby'                => 'date',
							);

							// The Query
							$query = new WP_Query( $args );

							// The Loop
							if ( $query->have_posts() ) {
								while ( $query->have_posts() ) {
									$query->the_post(); 
							?>

								<?php if ( has_post_thumbnail() ) {  ?>
									<?php get_template_part( 'partials/loop', 'stories-pg' ); ?>
								<?php } else { ?>
									<?php get_template_part( 'partials/loop', 'stories-bare' ); ?>
								<?php } ?>

							<?php	
							}
								} else {
							}

							wp_reset_postdata();
							?>
							
							
			
		</div> <!-- .page-news-module -->
		
		<div class="col-xs-12 text-center">
		<?php the_field('more_stories_button') ?>
</div>

