
</div><!-- end container-fluid -->


  
<div class="footer-wrap">
   <footer>
        <div class="row footer-content text-center">
            <div class="col-sm-4 copy-right">

				<p style="color: #fff;">&copy; <?php the_field('copyright_text', 'option'); ?> <a href="<?php the_field('copyright_link_url', 'option'); ?>"><?php the_field('copyright_link_text', 'option'); ?></a></p>
				  <p style="color: #fff;"><a href="<?php the_field('privacy_link_url', 'option'); ?>"><?php the_field('privacy_link_text', 'option'); ?></a></p>
				
			
			</div>
			
			<div class="col-sm-4 social-logos">
				
			<p style="font-size: 1.1rem;">Contact us</p>
				<p><strong><?php the_field('email_title', 'option'); ?></strong> <a href="<?php the_field('email_url', 'option'); ?>"><?php the_field('email_text', 'option'); ?></a><br />
					<strong><?php the_field('phone_number_title', 'option'); ?></strong> <?php the_field('phone_number', 'option'); ?></p>
				
			<!-- <p style="font-size: 1.1rem;">Share to
				<span class="fa-stack fa-1x">	
					<i class="fa fa-circle fa-stack-2x icon-background"></i>
					<a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fgameover.org.au%2F"><i class="fa fa-facebook fa-stack-1x"></i></a>
				</span>
				<span class="fa-stack fa-1x">
					<i class="fa fa-circle fa-stack-2x icon-background"></i>
					<a href=" https://twitter.com/intent/tweet?url=https%3A%2F%2Fgameover.org.au%2F&text=Join%20the%20campaign%20to%20call%20Game%20Over%20on%20off-shore%20detention"><i class="fa fa-twitter fa-stack-1x"></i></a>
				</span>
			</p> -->

			</div>
			
			<div class="col-sm-4 footer-nav">
            <img class="nds-logo-footer" src="<?php bloginfo('template_directory'); ?>/images/logo-valley-of-the-winds-ft.png" alt="Valley of the winds" />
			</div>
	   </div>
	   
	    <div class="row footer-content text-center">
            <div class="col-xs-12">
			<p style="font-size: 12px;"></p>
			</div>
		</div>
   </footer>
</div> <!-- end footer-wrap -->


</div> <!-- end main-wrap -->

<a id="scroll-to-top" title="Back To Top" class="" href="#">
<span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span>
<span class="sr-only">Error:</span>
</a>

<?= wp_footer() ?> 
    
    <script>
(function($){
      $('.menu').flexMenu({
        responsivePattern: 'off-canvas'
      });
    })(jQuery);   
</script> 

<script>
	
$(document).ready(function(){
	
	jQuery( window ).on('load', function() {

var $ = jQuery;
var breakpoint = 767;
var resizeTimer;
var $partyWrap = $('.equalise');

function runMatchHeight($elements, minBreakpoint) {
  if ($(window).width() > minBreakpoint) {
    $.fn.matchHeight._apply($elements)
  } else {
    $elements.height('');
  }
}

runMatchHeight($partyWrap, breakpoint);

$(window).on('resize', function() {
  clearTimeout(resizeTimer);
  
  resizeTimer = setTimeout(function() {
	  runMatchHeight($partyWrap, breakpoint);  
  }, 250);
});

// ^^ all above inside document ready ^^

});
	
});
</script>




</body>

</html>