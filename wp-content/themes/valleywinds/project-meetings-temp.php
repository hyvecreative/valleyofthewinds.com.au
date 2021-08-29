
<?php
/*
Template Name: project_meetings_temp
*/

?>
<?php get_header(' '); ?>

<div class="container-fluid intro-sections" style="box-shadow: 0px 5px 8px rgba(0,0,0,.3);">
	
<div class="row hm-feature hero-wrap news-level">
					                   
                    <div class="hero-image-feature" style="background-image:url('<?php bloginfo('template_directory'); ?>/images/news_hero.jpg'); background-size: cover; background-position: center top;"></div>
		
			<div class="image-content-top hero-content">
				
				<div class="col-xs-12 text-center">
					

									<h1>Meet with the project manager</h1>
		
					
					
					<img class="scroll-chevron scroll-content" src="<?php bloginfo('template_directory'); ?>/images/down-chevron.png" alt="Scroll" />
				</div>
						
			
			</div> <!-- end .row-->	
	
	</div> <!-- end .hero-wrap-->
	
</div> <!-- end .container-fluid-->

<div class="container-fluid">
<div class="container">
	
	<div id="content" class="row section content-wrap">

		<div class="col-sm-8 col-sm-offset-2 main-content" style="min-height: 700px;">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<?php the_content(__('(more...)')); ?>

			<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>

		</div>


	</div> <!-- end .row-->
	
	<div class="row">
		<div class="col-sm-4">
			<figure class="alignleft size-full is-resized"><a href="http://localhost/wp-content/uploads/2021/08/VOW_Posters_A_R1-1-PRINT.jpg" data-slb-active="1" data-slb-asset="217079790" data-slb-internal="0"><img loading="lazy" src="http://localhost/wp-content/uploads/2021/08/VOW_Posters_A_R1-1-PRINT.jpg" alt="" class="wp-image-1415" width="224" height="316" srcset="http://localhost/wp-content/uploads/2021/08/VOW_Posters_A_R1-1-PRINT.jpg 1252w, http://localhost/wp-content/uploads/2021/08/VOW_Posters_A_R1-1-PRINT-497x700.jpg 497w, http://localhost/wp-content/uploads/2021/08/VOW_Posters_A_R1-1-PRINT-726x1024.jpg 726w, http://localhost/wp-content/uploads/2021/08/VOW_Posters_A_R1-1-PRINT-768x1083.jpg 768w, http://localhost/wp-content/uploads/2021/08/VOW_Posters_A_R1-1-PRINT-1090x1536.jpg 1090w" sizes="(max-width: 224px) 100vw, 224px" /></a></figure>
		</div>
		<div class="col-sm-4">
			<figure class="alignleft size-full is-resized"><a href="http://localhost/wp-content/uploads/2021/08/VOW_Posters_A_R1-1-PRINT.jpg" data-slb-active="1" data-slb-asset="217079790" data-slb-internal="0"><img loading="lazy" src="http://localhost/wp-content/uploads/2021/08/VOW_Posters_A_R1-1-PRINT.jpg" alt="" class="wp-image-1415" width="224" height="316" srcset="http://localhost/wp-content/uploads/2021/08/VOW_Posters_A_R1-1-PRINT.jpg 1252w, http://localhost/wp-content/uploads/2021/08/VOW_Posters_A_R1-1-PRINT-497x700.jpg 497w, http://localhost/wp-content/uploads/2021/08/VOW_Posters_A_R1-1-PRINT-726x1024.jpg 726w, http://localhost/wp-content/uploads/2021/08/VOW_Posters_A_R1-1-PRINT-768x1083.jpg 768w, http://localhost/wp-content/uploads/2021/08/VOW_Posters_A_R1-1-PRINT-1090x1536.jpg 1090w" sizes="(max-width: 224px) 100vw, 224px" /></a></figure>
		</div>
		<div class="col-sm-4">
			<figure class="alignleft size-full is-resized"><a href="http://localhost/wp-content/uploads/2021/08/VOW_Posters_A_R1-1-PRINT.jpg" data-slb-active="1" data-slb-asset="217079790" data-slb-internal="0"><img loading="lazy" src="http://localhost/wp-content/uploads/2021/08/VOW_Posters_A_R1-1-PRINT.jpg" alt="" class="wp-image-1415" width="224" height="316" srcset="http://localhost/wp-content/uploads/2021/08/VOW_Posters_A_R1-1-PRINT.jpg 1252w, http://localhost/wp-content/uploads/2021/08/VOW_Posters_A_R1-1-PRINT-497x700.jpg 497w, http://localhost/wp-content/uploads/2021/08/VOW_Posters_A_R1-1-PRINT-726x1024.jpg 726w, http://localhost/wp-content/uploads/2021/08/VOW_Posters_A_R1-1-PRINT-768x1083.jpg 768w, http://localhost/wp-content/uploads/2021/08/VOW_Posters_A_R1-1-PRINT-1090x1536.jpg 1090w" sizes="(max-width: 224px) 100vw, 224px" /></a></figure>
		</div>	
	</div>

		         
</div> <!-- end container-->
</div> <!-- end container-fluid-->
  
 
<?php get_footer(' '); ?>