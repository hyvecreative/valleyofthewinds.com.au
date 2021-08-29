<div id="stayInTouch">

	<div class="row clearfix">

	  <div class="small-12 columns clearfix">

	  	<h1 class="text-center col-blue">Stay in touch</h1>

	  	<div class="row">

		  	<div class="medium-12 large-4 columns">
		  		
		  		<div class="widget">
		  			<div class="widgetHeading">
		  				<h4>Sign up for updates</h4>
		  			</div>

		  			<div class="widgetContent clearfix">

		  				<div class="small-12 columns">

		  					<?php
									require_once 'cm-api/csrest_lists.php';
									$auth = array('api_key' => '4f60f3754539dcecf907bf3e65ef98cc7eb25df4b197df00');
									$wrap = new CS_REST_Lists('d4a3b3e003dd24cc68dd6181fbe683d1', $auth);
									$result = $wrap->get_stats();
									//echo "Result of GET /api/v3.1/lists/{ID}/stats\n<br />";
									if($result->was_successful()) {
									    //echo "Got list stats\n<br /><pre>";
									    //var_dump($result->response);
									  ?>
											<h1 class="supporterCount"><?php echo $result->response->TotalActiveSubscribers; ?></h1>
										<?php
									} else {
									    //echo 'Failed with code '.$result->http_status_code."\n<br /><pre>";
									    //var_dump($result->response);
									}
									
								?>

		  					<p>Supporters and counting</p>
		  				</div>

		  				<div class="small-12 columns">
						 		<?php echo do_shortcode( '[gravityform id="2" name="Stay In Touch" title="false" description="false" ajax="true" ]' ); ?>
						 	</div>


					 </div>

		  		</div>

		  	</div>

		  	<div class="medium-6 large-4 columns">
		  		
		  		<div class="widget">
		  			<div class="widgetHeading">
		  				<h4>Facebook</h4>
		  			</div>

		  			<div class="widgetContent social">
							<div class="fb-like-box" data-href="https://www.facebook.com/everyaustraliancounts" data-width="260" data-height="397" data-colorscheme="light" data-show-faces="false" data-header="false" data-stream="true" data-show-border="false"></div>
						</div>

		  		</div>

		  	</div>

		  	<div class="medium-6 large-4  columns">
		  		
		  		<div class="widget">
		  			<div class="widgetHeading">
		  				<h4>Twitter</h4>
		  			</div>

						<div class="widgetContent social">
							<a class="twitter-timeline" href="https://twitter.com/EveryAustralian" data-widget-id="521506848772329473">Tweets by @EveryAustralian</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		  			</div>

		  		</div>

		  	</div>

		  </div>

	  </div>

	</div>

</div> <!-- #stayInTouch -->