<?php 
$takeActionImage = get_field('take_action_image', 'options');
$size = 'large'; // (thumbnail, medium, large, full or custom size)
if( $takeActionImage ) { ?>

<div id="takeAction">

	<div class="row clearfix">

	  <div class="small-12 columns clearfix">

	  	<h1 class="text-center col-red">Take action</h1>

	  	<div class="row">

		  	<div class="takeActionImage medium-12 <?php if( get_field('full_width_style', 'options') ) { echo "large-12"; } else { echo "large-8"; } ?> columns">

		  		<?php if( get_field('take_action_link', 'options') ) { ?>
		  			<a href="<?php the_field('take_action_link', 'options'); ?>">
		  				<?php echo wp_get_attachment_image( $takeActionImage, $size ); ?>
		  			</a>
		  		<?php } else { ?>
						<?php echo wp_get_attachment_image( $takeActionImage, $size ); ?>
		  		<?php } ?>

		  	</div>

				<?php if( !get_field('full_width_style', 'options') ) { ?>
		  	<div class="medium-12 large-4 columns">

					<div class="widget">
		  			<div class="widgetHeading">
		  				<h4>Take action</h4>
		  			</div>

		  			<div class="widgetContent clearfix">

		  				<div class="small-12 columns">

			  				<?php the_field('take_action_form_code', 'options'); ?>

			  			</div>

					 </div>

		  		</div>

				</div>
				<?php } ?>

			</div>

	  </div>

	</div>

</div> <!-- #takeAction -->

<?php } ?>