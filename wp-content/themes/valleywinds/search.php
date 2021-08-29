<?php get_header(); ?>
	
	<div class="container-fluid news-title">
		<div class="container">
			<div class="row">
				
					<h1>Search Results</h1>

			</div> <!-- end .row-->	
</div> <!-- end container-->													
</div> <!-- end .container-fluid -->
      
<div class="container-fluid page-content">
<div class="container">
<div class="row page-content">
		  
        <!-- begin colLeft -->

        <div class="col-sm-8">
			<div id="archive-title">

		Search results for "<?php /* Search Count */ $allsearch = new WP_Query("s=$s&showposts=-1"); $key = wp_specialchars($s, 1); $count = $allsearch->post_count; _e(''); _e('<strong>'); echo $key; _e('</strong>'); wp_reset_query(); ?>"

		</div>

						

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		

		<div class="postItem">


						<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
						<?php the_excerpt(); ?> 

					</div>

		

		<?php endwhile; ?>



	<?php else : ?>

		<p>Sorry, but you are looking for something that isn't here.</p>

	<?php endif; ?>

            <!--<div class="navigation">

						<div class="alignleft"><?php next_posts_link() ?></div>

						<div class="alignright"><?php previous_posts_link() ?></div>

			</div>-->

			<?php if (function_exists("emm_paginate")) {

				emm_paginate();

			} ?>

		</div> <!-- end col-sm-8 -->
	
	
	
	<div class="col-sm-4">
              <div class="feed-sb">
              

              
			  </div>
			  </div> <!-- end col-->
              
</div> <!-- end row page-content -->
              
</div> <!-- end container-->
</div> <!-- end container-fluid -->
               


<?php get_footer(); ?>
