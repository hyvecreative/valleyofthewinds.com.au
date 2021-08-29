<?php get_header(); ?>

<style>
	#accordian {cursor: pointer;}
	.acc-cont {display: none;}
</style>
	
<div class="container-fluid">
			<div class="row hero-title">				
				
				<div class="caption-wrap text-center" style="background-color: #0073Bc; padding: 100px 0;">
				<div class="page-image">
					<?php 

						$image = get_field('page_image');

						if( !empty($image) ): ?>

							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

					<?php endif; ?>
				</div>
				<div class="caption"><h1><?php the_title(); ?></h1></div>	
				</div>
				

			
			</div> <!-- end .row-->														
</div> <!-- end .container-fluid -->
      
<div id="content" class="container-fluid content" style="margin-top: 2rem;">
<div class="container">
<div  class="row page-content single-page">
		  
        <!-- begin colLeft -->

        <div class="col-sm-12 col-lg-8 col-lg-offset-2">
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="postItem clearfix">
	<div class="meta clearfix"><span class="categs"><?php the_category(' ') ?></span> | <span class="date"><i class="far fa-calendar-alt"></i> <?php the_time('M j, Y') ?></span>
    		</div><!-- end meta --> 
		
		<?php the_content(__('(more...)')); ?>
		
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>	
		
	</div>
			
			<div class="question-feed">
				
				<?php
$featured_posts = get_field('report_questions');
if( $featured_posts ): ?>
    <ul style="padding-left: 0;">
    <?php foreach( $featured_posts as $post ): 

        // Setup this post for WP functions (variable must be named $post).
        setup_postdata($post); ?>
        <li style="padding: 1rem 0; border-bottom: 2px solid #ccc; margin-bottom: 1rem; list-style: none;">
							<a href="<?php the_permalink(); ?>" style="font-size: 1.66rem;"><?php the_title(); ?></a>
							<p>A custom field from this post if needed: <?php the_field( 'field_name' ); ?></p>
							<div><?php the_content(); ?></div>
						</li>
    <?php endforeach; ?>
    </ul>
    <?php 
    // Reset the global post object so that the rest of the page works correctly.
    wp_reset_postdata(); ?>
<?php endif; ?>
				
			</div>
			
			
			
	</div>
	
	
	<div class="col-md-offset-1 col-lg-offset-1 col-sm-12 col-md-4 col-lg-4">
              <div class="action-sb text-center">
              
              <?php get_sidebar('stories'); ?> 
              
			  </div>
			  </div> <!-- end col-->
              
</div> <!-- end row page-content -->
              
</div> <!-- end container-->
</div> <!-- end container-fluid -->
               
<script>
	$( document ).ready(function() {

  //FAQ.
  $("[id^=accordion]").find('.acc-togg').click(function(){
  	$(this).parent().addClass("active");
    $(this).next().slideToggle('fast');
  });

});
</script>

<?php get_footer(); ?>

