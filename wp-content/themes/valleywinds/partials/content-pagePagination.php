  <?php

		$args = array(
			'sort_order' => 'ASC',
			'sort_column' => 'menu_order',
			'hierarchical' => 0,
			'exclude' => '',
			'include' => '',
			'meta_key' => '',
			'meta_value' => '',
			'authors' => '',
			'child_of' => 0,
			'parent' => get_post_ancestors( $post ),
			'exclude_tree' => '',
			'number' => '',
			'offset' => 0,
			'post_type' => get_post_type(),
			'post_status' => 'publish'

		); 
		$pagelist = get_pages($args); 

		$pages = array();
		foreach ($pagelist as $page) {
		   $pages[] += $page->ID;
		}

		//print_r($pages);

		$current = array_search(get_the_ID(), $pages);
		$prevID = isset($pages[$current-1]) ? $pages[$current-1] : false;
    $nextID = isset($pages[$current+1]) ? $pages[$current+1] : false;

		//echo "Current: $current";
		//echo "Prev: $prevID";
		//echo "Next: $nextID";

		?>

		<div class="pageNavigation clearfix">

			<?php if (is_singular( 'your-stories' )) { ?>
			<h3>Continue <?php echo get_the_title($post->post_parent); ?>’s journey</h3>
			<?php } else { ?>
			<h3>Continue your NDIS journey</h3>
			<?php } ?>

			<img class="navLines" alt="Page Navigation Path" src="<?php echo get_template_directory_uri(); ?>/img/iconPageNavLines.svg" />

		<?php if (!empty($prevID)) { ?>
		<div class="pageNav pageNavLeft">
		<a class="h7" href="<?php echo get_permalink($prevID); ?>"
		  title="<?php echo get_the_title($prevID); ?>"><?php echo get_the_title($prevID); ?></a>
		</div>
		<?php } elseif (is_singular( 'your-stories' )) { ?>
		<div class="pageNav pageNavLeft">
		<a class="h7" href="<?php echo get_permalink(23); ?>"
		  title="<?php echo get_the_title(23); ?>"><?php echo get_the_title(23); ?></a>
		</div>
		<?php } else { ?>
		<div class="pageNav pageNavLeft">
		<a class="h7" href="<?php echo get_permalink($post->post_parent); ?>"
		  title="<?php echo get_the_title($post->post_parent); ?>"><?php echo get_the_title($post->post_parent); ?></a>
		</div>
		<?php } if (!empty($nextID)) { ?>
		<div class="pageNav pageNavRight">
		<a class="h7" href="<?php echo get_permalink($nextID); ?>" 
		 title="<?php echo get_the_title($nextID); ?>"><?php echo get_the_title($nextID); ?></a>
		</div>
		<?php } elseif (is_singular( 'your-stories' )) { ?>
		<div class="pageNav pageNavRight">
		<a class="h7" href="<?php echo get_permalink(23); ?>"
		  title="<?php echo get_the_title(23); ?>"><?php echo get_the_title(23); ?></a>
		</div>
		<?php } else { ?>
		<div class="pageNav pageNavRight">
		<a class="h7" href="<?php echo get_permalink($post->post_parent); ?>"
		  title="<?php echo get_the_title($post->post_parent); ?>"><?php echo get_the_title($post->post_parent); ?></a>
		</div>
		<?php } ?>
		</div><!-- pageNavigation -->