	<?php
		// check if the repeater field has rows of data
		if( have_rows('attachment') ): ?>

		<section class="attachments clearfix">

		<h3>Attachments</h3>

		<?php
		 	// loop through the rows of data
		    while ( have_rows('attachment') ) : the_row(); ?>

				 	<?php
				 		$file = make_href_root_relative( get_sub_field('file') ); // Get Relative URL of file
						$field = get_sub_field_object('file_type'); // Get Field for Type
						$value = get_sub_field('file_type'); // Get Value Selected
						$label = $field['choices'][ $value ]; // Get Label of Selected
					?>

					<div class="attachmentItem icon<?php echo $value ?>"
							 href="<?php the_permalink(); ?>"
							 title="<?php the_title(); ?>">
						 <a href="<?php the_sub_field('file'); ?>" target="_blank"><h5><?php the_sub_field('title'); ?></h5></a>
						 <p><strong><?php echo getFileSize($file, 0);	?></strong> <?php echo $label; ?></p>
						 <p>This file will open in a new tab window</p>
					</div>

		    <?php endwhile; ?>

		</section> <!-- end attachments section -->

	<?php endif; ?>


