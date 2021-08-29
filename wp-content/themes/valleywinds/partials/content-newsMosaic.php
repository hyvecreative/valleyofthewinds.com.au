<div id="newsMosaic" class="page-news-wrap">
<div class="container">
<h2 class="">News</h2>
	
		<div class="row page-news-module grid">
							<div class="grid-sizer"></div>

							<?php
							$args = array (
								'post_type'              => array('post', 'opinion'), 
								'offset'                 => '0',
								'posts_per_page'	 	 => '14',
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
									<?php get_template_part( 'partials/loop', 'news-mosaic' ); ?>
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
		
	<div class="btn more-news-btn"><a href="#">More News</a></div>


</div> <!-- #container -->
</div> <!-- #newsFeature page-news-wrap -->