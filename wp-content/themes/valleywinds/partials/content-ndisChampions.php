<div class="champions-curve">
<img src="<?php bloginfo('template_directory'); ?>/images/champ-curve-top.jpg" alt="Champions" />
</div>

<div id="ndisChampions" class="champions-wrap">
	<div class="container champions-home">
	  
	<div class="row">

		    
		    
		     <div class="col-sm-6 col-xs-12">
		     
		     <h2 class="">
		    	<?php the_field('champions_title', 'option'); ?>
		    </h2>

		     	<?php the_field('champions_intro', 'option'); ?>
		     	<?php the_field('champions_button', 'option'); ?>
		
		    
		
		</div> <!-- end col-->

		  <div class="col-sm-6 col-xs-12">

		    <ul class="text-center">

			    <?php

					// check if the repeater field has rows of data
					if( have_rows('champions_people', 'option') ):

					 	// loop through the rows of data
					    while ( have_rows('champions_people', 'option') ) : the_row(); ?>

				  			<li class="champItem">
					    		<a href="<?php the_sub_field('ch_people_link', 'option'); ?>" title="title">
					    			<span class='champImg'>
												 
										<?php 

$image = get_sub_field('ch_people_image', 'option');

?>

	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />


												 </span>
					    			<h4 class="champTitle"><?php the_sub_field('ch_people_title', 'option'); ?></h4>
					    		</a>
					    		<?php the_sub_field('ch_people_description', 'option'); ?>
					    	</li>

					  <?php endwhile;

					else :

					    // no rows found

					endif;

					?>

		    </ul>

		   </div> <!-- end col-->
    
    </div>
   </div> <!-- container--> 
   
   <div class="champ-mask"><img src="<?php bloginfo('template_directory'); ?>/images/champ-curve-bottom.png" alt="Champions" /></div>

</div> <!-- #ndisChampions container-wrap-->