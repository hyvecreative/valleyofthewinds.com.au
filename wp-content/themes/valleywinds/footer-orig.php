
</div><!-- end container-fluid -->


  
<div class="footer-wrap">
   <footer>
        <div class="row footer-content text-center">
            <div class="col-sm-4 copy-right">

			<p style="color: #fff;">&copy; 2019</p>
			</div>
			
			<div class="col-sm-4 social-logos">
				
			<p style="font-size: 1.1rem;">Share to
				<span class="fa-stack fa-1x">	
					<i class="fa fa-circle fa-stack-2x icon-background"></i>
					<a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fgameover.org.au%2F"><i class="fa fa-facebook fa-stack-1x"></i></a>
				</span>
				<span class="fa-stack fa-1x">
					<i class="fa fa-circle fa-stack-2x icon-background"></i>
					<a href=" https://twitter.com/intent/tweet?url=https%3A%2F%2Fgameover.org.au%2F&text=Join%20the%20campaign%20to%20call%20Game%20Over%20on%20off-shore%20detention"><i class="fa fa-twitter fa-stack-1x"></i></a>
				</span>
			</p>

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

    <script type="text/javascript">
	   
$(function() {
	$('.fiveitem').matchHeight('true');
});
	   
</script> 

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>


</body>

</html>