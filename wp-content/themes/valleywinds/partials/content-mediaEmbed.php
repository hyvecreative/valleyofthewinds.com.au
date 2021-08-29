<?php if( get_field( "video_audio_url" ) || get_field( "video_audio_attachment" ) ): ?>
	<a href="#transcriptContainer" id="triggerAccordion1">Show Transcript</a>
  <div id="mediaEmbed" tabindex="0">Loading the player...</div>
  <script type="text/javascript">
    jwplayer("mediaEmbed").setup({
        file: "<?php if( get_field( "video_audio_url" ) ): the_field( "video_audio_url" ); elseif ( get_field( "video_audio_attachment" ) ): the_field( "video_audio_attachment" ); endif; ?>",
        width: "100%",
        skin: "five",
        abouttext: "<?php the_title(); ?>",
        aboutlink: "<?php the_permalink(); ?>",
        controls: true,
        aspectratio: "16:9",
        image: "<?php if( get_field( "video_thumbnail" ) ): the_field( "video_thumbnail" ); endif; ?>",
        stretching: "fill",
    });
	</script>

<script>
jwplayer().onReady(function() { 
	$('#mediaEmbed button').attr('tabindex', '0');
});


$( ".jwhd span button" ).onFocus(function() {
  
});

$(".jwhd span button").on('focus', function () {
alert( "Handler for .focus() called." );
  $( "#mediaEmbed_controlbar_hd_overlay" ).css('visability', 'visible');
  $( "#mediaEmbed_controlbar_hd_overlay" ).css('opacity', '1');
});

</script>

<?php endif; ?>
