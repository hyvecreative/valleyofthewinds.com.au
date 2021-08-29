<section class="eventDetails clearfix ">

	<h6>Details</h6>

<?php //Extract Date
$date = DateTime::createFromFormat('dmY', get_field('start_date'));
$enddate = DateTime::createFromFormat('dmY', get_field('end_date'));
?>

<?php if ($date) : ?>

	<p>
		<?php if (get_field('start_date')): ?><strong>Start Date: </strong><?php echo $date->format('d F Y'); ?><br /><?php endif; ?>
		<?php if (get_field('start_time')): ?><strong>Start Time: </strong><?php the_field('start_time'); ?><br /><?php endif; ?>
		<?php if (get_field('end_date')): ?><strong>End Date: </strong><?php echo $enddate->format('d F Y'); ?><br /><?php endif; ?>
		<?php if (get_field('end_time')): ?><strong>End Time: </strong><?php the_field('end_time'); ?><br /><?php endif; ?>
		<?php if (get_field('cost')): ?><strong>Cost: </strong><?php the_field('cost'); ?><br /><?php endif; ?>
		<?php if (get_field('street_name')): ?><strong>Address: </strong><?php the_field('address_number'); ?> <?php the_field('street_name'); ?>, <?php the_field('city_name'); ?> <?php the_field('postcode'); ?>, <?php the_field('state'); ?> <?php the_field('country'); ?><br /><?php endif; ?>
		<?php if (get_field('website')): ?><strong>Website: </strong><a target="_blank" href="<?php the_field('website'); ?>"><?php the_field('website'); ?></a><br /><?php endif; ?>
		<?php if (get_field('contact_name')): ?><strong>Contact Name: </strong><?php the_field('contact_name'); ?><br /><?php endif; ?>
		<?php if (get_field('contact_email')): ?><strong>Contact Email: </strong><a href="mailto:<?php the_field('contact_email'); ?>"><?php the_field('contact_email'); ?></a><br /><?php endif; ?>
		<?php if (get_field('contact_phone')): ?><strong>Contact Phone: </strong><?php the_field('contact_phone'); ?><br /><?php endif; ?>
	</p>

<?php endif; ?>


<style type="text/css">

.acf-map {
	width: 100%;
	height: 400px;
	border: #ccc solid 1px;
	margin: 20px 0;
}

</style>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script type="text/javascript">
(function($) {

/*
*  render_map
*
*  This function will render a Google Map onto the selected jQuery element
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$el (jQuery element)
*  @return	n/a
*/

function render_map( $el ) {

	// var
	var $markers = $el.find('.marker');

	// vars
	var args = {
		zoom		: 16,
		center		: new google.maps.LatLng(0, 0),
		mapTypeId	: google.maps.MapTypeId.ROADMAP
	};

	// create map	        	
	var map = new google.maps.Map( $el[0], args);

	// add a markers reference
	map.markers = [];

	// add markers
	$markers.each(function(){

    	add_marker( $(this), map );

	});

	// center map
	center_map( map );

}

/*
*  add_marker
*
*  This function will add a marker to the selected Google Map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$marker (jQuery element)
*  @param	map (Google Map object)
*  @return	n/a
*/

function add_marker( $marker, map ) {

	// var
	var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

	// create marker
	var marker = new google.maps.Marker({
		position	: latlng,
		map			: map
	});

	// add to array
	map.markers.push( marker );

	// if marker contains HTML, add it to an infoWindow
	if( $marker.html() )
	{
		// create info window
		var infowindow = new google.maps.InfoWindow({
			content		: $marker.html()
		});

		// show info window when marker is clicked
		google.maps.event.addListener(marker, 'click', function() {

			infowindow.open( map, marker );

		});
	}

}

/*
*  center_map
*
*  This function will center the map, showing all markers attached to this map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	map (Google Map object)
*  @return	n/a
*/

function center_map( map ) {

	// vars
	var bounds = new google.maps.LatLngBounds();

	// loop through all markers and create bounds
	$.each( map.markers, function( i, marker ){

		var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

		bounds.extend( latlng );

	});

	// only 1 marker?
	if( map.markers.length == 1 )
	{
		// set center of map
	    map.setCenter( bounds.getCenter() );
	    map.setZoom( 16 );
	}
	else
	{
		// fit to bounds
		map.fitBounds( bounds );
	}

}

/*
*  document ready
*
*  This function will render each map when the document is ready (page has loaded)
*
*  @type	function
*  @date	8/11/2013
*  @since	5.0.0
*
*  @param	n/a
*  @return	n/a
*/

$(document).ready(function(){

	$('.acf-map').each(function(){

		render_map( $(this) );

	});

});

})(jQuery);
</script>



<?php 

$location = get_field('google_map');

if( !empty($location) ):
?>
<div class="acf-map">
	<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
</div>
<?php endif; ?>



</section> <!-- end share section -->
