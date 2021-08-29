<!--begin Sidebar default -->


<div class="col-xs-12 sb-wrap" style="margin: 20px 0; background:
#e1ecf0; padding: 4%;">
	
	<h3 style="margin-top: 10px;">Register for project updates</h3>
	
			<?php echo do_shortcode( '[gravityform id="2" name="Sign Up" title="false" description="false" ajax="true"]' ); ?>
</div>	
	
<div class="col-xs-12 sb-wrap" style="margin: 20px 0; background:
#e1ecf0; padding: 4%;">
	
<h3 style="margin-top: 10px;">News categories</h3>

		
	<a class="btn" href="/category/latest-news">Latest news</a>
	<a class="btn" href="/category/news-gallery">News gallery</a>
	<a class="btn" href="/category/project-updates">Project updates</a>

	
</div> <!-- end  sb-wrap-->

<div class="col-xs-12 sb-wrap" style="margin: 20px 0; background:
#e1ecf0; padding: 4%;">

<h3 style="margin-top: 10px;">Recent news</h3>

<ul style="list-style-type: none; padding-left: 0;">
    <?php
			$my_query = new WP_Query("showposts=5");
			while ($my_query->have_posts()) : $my_query->the_post();?>

    <div class="">  
				<li>
                
                <div class="">	
                
                <i class="fa fa-chevron-right" style="color: rgba(0,80,150,.8);"></i>  <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>

   				</div><!-- end feedcont -->
              
                </li>
                
                </div><!-- END feeditem-->
                
			<?php endwhile;	?>
    </ul>	

</div><!-- end  sb-wrap-->
       