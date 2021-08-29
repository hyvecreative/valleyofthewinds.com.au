<div class="page-news-index">
<?php
							$args = array (
								'post_type'              => 'post',
								'cat' 					 => '1,4,5',
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
									<?php get_template_part( 'partials/loop', 'news-pg' ); ?>
								<?php } else { ?>
									<?php get_template_part( 'partials/loop', 'news-bare' ); ?>
								<?php } ?>

							<?php	
							}
								} else {
							}

							wp_reset_postdata();
							?>
</div> <!-- #page-news-module -->

