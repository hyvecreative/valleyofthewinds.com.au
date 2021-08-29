<?php
/*
Template Name: flyaway_temp
*/

?>


<?php get_header(); ?>

<!-- begin content -->

<div id="content" class="wideform">

<div class="hmcolumnC">


</div>


<!-- begin colLeft -->
	
    <div id="colLeft" class="flybg">
    
    <div id="flyaway">
    <div id="set1">
			<ul><?php

			$my_query = new WP_Query("cat=4");

			while ($my_query->have_posts()) : $my_query->the_post();?>

            <li>

            <h3 class="newsitem"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a> </h3>
            
			<div class="excerpthm"><?php the_excerpt(); ?></div>

            </li>

            <?php endwhile;	?>
            </ul>
</div>

    <div id="set2">
			<ul><?php

			$my_query = new WP_Query("cat=4&offset=1");

			while ($my_query->have_posts()) : $my_query->the_post();?>

            <li>

            <h3 class="newsitem"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a> </h3>
            
			<div class="excerpthm"><?php the_excerpt(); ?></div>

            </li>

            <?php endwhile;	?>
            </ul>
</div>

    <div id="set3">
			<ul><?php

			$my_query = new WP_Query("cat=4&offset=2");

			while ($my_query->have_posts()) : $my_query->the_post();?>

            <li>

            <h3 class="newsitem"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a> </h3>
            
			<div class="excerpthm"><?php the_excerpt(); ?></div>

            </li>

            <?php endwhile;	?>
            </ul>
</div>
</div>

<div id="wrapslide">
    
    <div id="textslide"><input name="action" type="button" value="action" /></div>
   <div id="videoslide"> video</div>
</div>
		
	</div><!-- end colleft -->
    
	</div><!-- end content -->
    
    <a id="toTop" href="#">Go to Top</a>
    
<?php get_footer(); ?>




