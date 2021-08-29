<div id="ndisProcess">

	<div class="row clearfix">

		    <h1 class="col-aquaLight text-center">
		    	<?php the_field('ndis_process_title', 'option'); ?>
		    </h1>

		  <div class="large-12 large-push-0 medium-8 medium-push-2 columns clearfix">

		    <ul class="large-block-grid-4 medium-block-grid-2">

			    <?php

					// check if the repeater field has rows of data
					if( have_rows('champions_people', 'option') ):

					 	// loop through the rows of data
					    while ( have_rows('champions_people', 'option') ) : the_row(); ?>

				  			<li class="processItem">
					    		<a href="<?php the_sub_field('ch_people_link', 'option'); ?>" title="title">
					    			<span class='iconRound'>
												 
										<?php 

$image = get_sub_field('ch_people_image', 'option');

?>

	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />


												 </span>
					    			<h4 class="processTitle"><?php the_sub_field('ch_people_title', 'option'); ?></h4>
					    		</a>
					    		<?php the_sub_field('ch_people_description', 'option'); ?>
					    	</li>

					  <?php endwhile;

					else :

					    // no rows found

					endif;

					?>

		    </ul>

		   </div>
    
    </div>
    
</div> <!-- #ndisProcess -->