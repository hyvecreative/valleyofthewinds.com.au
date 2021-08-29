
</div><!-- end container-fluid -->


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