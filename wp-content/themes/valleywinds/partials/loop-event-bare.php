<?php //Extract Date
$date = DateTime::createFromFormat('dmY', get_field('start_date'));
?>

<?php if ($date) : ?>

<div class="item eventItem clearfix">

	<div class="itemHeading small-12 columns">
		<span class="title left"><a href="#">Events</a> &nbsp; <span><?php the_field('state'); ?></span></span>
		<span class="date right"><?php echo $date->format('d'), ' ', $date->format('F'), ' ', $date->format('Y'); ?></span>
	</div>

	<div class="itemContent row">

		<div class="itemDate small-3 columns">
			
			<div class="dateBox">
				<p class="dateMonth"><?php echo $date->format('F'); ?></p>
				<p class="dateDay"><?php echo $date->format('d'); ?></p>
				<p class="dateYear"><?php echo $date->format('Y'); ?></p>
			</div>

		</div>

		<div class="itemText small-9 columns">
			<a href="<?php the_permalink(); ?>" title="title">
				<h5><?php the_title(); ?></h5>
			</a>
			<p>
				<?php the_excerpt(); ?>

			<a class="read-more-btn" href="<?php the_permalink(); ?>">
				Read more
			</a>
			</p>
		</div>

 	</div>

</div>

<?php endif; ?>