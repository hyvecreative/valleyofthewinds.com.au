<div id="signupFeature">

	<div class="row signup-module">
	  	<div class="col-xs-12 signup-border text-center">

	  	<h2><?php the_field('form_title') ?></h2>
	  	<!-- <h3>The system is broken and it’s letting people down. Add your name if you think everybody should have a home. </h3> -->

			<?php echo do_shortcode( '[gravityform id="4" name="Sign Up" title="false" description="false" ajax="true"]' ); ?>
			
			<p class="privacy-form">We'll keep you updated about the campaign. <a href="/privacy">Find out more here.</a><p>

		</div>
	  </div>

</div> <!-- #signupFeature -->