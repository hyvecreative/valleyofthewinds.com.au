<div id="ndisProcess">

	<div class="row clearfix">

		    <h1 class="text-center">
		    	NDIS Stories
		    </h1>

		  <div class="large-12 large-push-0 medium-8 medium-push-2 columns clearfix">

		    <ul class="large-block-grid-3 medium-block-grid-2">


					<?php
					// DISPLAY 
					$args = array (
						'post_type'              => 'your-stories',
						'posts_per_page'         => '0',
						'offset'                 => '0',
						'order'                  => 'ASC',
						'orderby'                => 'date',
						'post_parent'						 => 0,
					);

					// The Query
					$query = new WP_Query( $args );

					// The Loop
					if ( $query->have_posts() ) {
						while ( $query->have_posts() ) {
							$query->the_post(); 

							// Get First Child Permalink
						$children = get_pages("child_of=".$post->ID."&sort_column=menu_order&post_type=your-stories");
						$first_child = $children[0];
						$first_child_permalink = get_permalink($first_child->ID);

					?>

					<li class="storyItem">
		    		<a href="<?php echo $first_child_permalink ?>">
		    			<span class='storyRound'><?php the_post_thumbnail('medium'); ?></span>
		    			<h4 class="storyTitle"><?php the_title(); ?>'s story</h4>
		    		</a>
		    		<p><?php the_content();?></p>
		    		<a href="<?php echo $first_child_permalink ?>">
		    			Read <?php the_title(); ?>'s story
		    		</a>
		    	</li>

					<?php	
					}
					} else {
						// no posts found
					}

					// Restore original Post Data
					wp_reset_postdata();
					?>


		    </ul>

		   </div>
    
    </div>
    
</div> <!-- #ndisProcess -->