<?php 
	if (!defined('ABSPATH')) exit;
	get_header(); 
?>

<!-- begin content -->

<div class="container-fluid page-simple-wrap join-wrap">
<div id="content" class="container page-simple">

<!-- begin row -->

<div class="row">
	
<div class="col-sm-12 col-md-10 offset-md-1 text-center">

            
              
<?php if ( is_home() ) { ?>

     <h1>The latest from CPActive</h1>

<?php } else { ?>

	 <h1><?php single_cat_title(); ?></h1>

<?php } ?>

                  
<ul style="padding-left: 0;">		
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	


				<div class="feeditem text-left">  
				
					<li style="list-style: none">

						<div class="row">
								<div class="col-sm-8 itemContent">

								<div class="meta date-tab">
									<span class="date"><?php the_time('M, Y') ?></span>
								</div><!-- end meta -->

								<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>

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