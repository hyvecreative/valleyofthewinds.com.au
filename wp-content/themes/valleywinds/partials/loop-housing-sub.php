<div class="item clearfix subItem">
					
	<div class="itemHeading small-12 columns">

		<span class="title left"><a href="<?php echo get_permalink( get_page_by_path( 'housing-stories-all' ) ) ?>" class="title left iconHousing">Housing Stories</a>&nbsp;-<span>


		<?php $terms = get_the_terms( $post->ID , 'housing_category' ); 
        foreach ( $terms as $term ) {
            $term_link = get_term_link( $term, 'housing_category' );
            if( is_wp_error( $term_link ) )
            continue;
        echo '<a href="' . $term_link . '">' . $term->name . '</a>';
        } 
    ?>


		</span></span>

		<span class="date right"><?php the_time('j F Y'); ?></span>
	</div>

	<div class="itemContent row">

		<div class="itemImage small-3 columns">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail( 'thumbnail' ); ?>
			</a>
		</div>

		<div class="itemText small-9 columns">
			<h5><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php $myvalue = get_the_title(); ;
		$arr = explode(' ',trim($myvalue));
		echo $arr[0]; // will print Test

		?>'s Housing Story
			</a></h5>
				<?php the_excerpt(); ?>

			<a class="read-more-btn" href="<?php the_permalink(); ?>">
				Read more
			</a>
		</div>

 	</div>

</div>