<div class="container">
	<div class="row">
		<div class="col-md-4">
			<!-- photo -->
			<img src="../_/images/Agents_Wanted_vert_top.gif" alt="agents wanted" >
			
		</div>

		<div class="col-md-8">

			<div id="form-container">
				<h2>Welcome to Slavens Realty!</h2>
				<h3><span class="label label-default">REQUEST MORE INFORMATION</span></h3>

					<!-- codeignitor errors -->
					<?php echo validation_errors(); ?>

					<?php echo form_open(''); ?>

						<div class="form-group">

					    	<label for="firstname">First Name</label>

					    	<input required type="text" name="first_name" class="form-control" value="<?php echo set_value('first_name'); ?>" placeholder="First Name">

					  	</div>

					  	<div class="form-group">

					    	<label for="lastname">Last Name</label>

					    	<input required type="text" name="last_name" value="<?php echo set_value('last_name'); ?>" class="form-control" placeholder="Last Name">

					  	</div>

					  	<div class="form-group">

					    	<label for="phone">Phone</label>

					    	<input type="text" name="phone" value="<?php echo set_value('phone'); ?>" class="form-control" placeholder="Phone">

					  	</div>

					    <div class="form-group">

						    <label for="email">Email address</label>

						    <input required type="email" value="<?php echo set_value('blue'); ?>" class="form-control" name="blue" placeholder="Enter email">

					    </div>

					    <div style="display:none;">
					    	<label for="email">Leave this blank if you're human</label>
					    	<input type="text" name="email">
					    </div>

					    <div class="form-group">

					    	<label for="licensed">Do you have a Real Estate License?</label>

						  	<div class="radio">

							  <label>

							    <input type="radio" name="license_status" id="license_status1" value="1" >

							    Yes

							  </label>

							</div>

							<div class="radio">

							  <label>

							    <input  type="radio" name="license_status" id="license_status2" value="2">

							    No

							  </label>

							</div>

					    </div>

					    <div style="display: none" id="license_number" class="form-group">

					    	<label for="phone">License Number</label>
					    	<input title="Enter CA BRE License Number" type="text" name="license_number" value="<?php echo set_value('license_number'); ?>" class="form-control" >

					  	</div>

					  	<div style="display: none" id="mail_list1">
						  <div class="well">
						    Unfortunately we can only hire people with a California Real Estate License in good standing. If you are in the process of getting your license or thinking about getting one, please subscribe to our mailing list to stay in touch.
						    Thanks!

							<!-- Begin MailChimp Signup Form -->
							<link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
							<style type="text/css">
								#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
								/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
								   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
							</style>
							<div id="mc_embed_signup">
							<form action="//slavensrealty.us12.list-manage.com/subscribe/post?u=fe5c8ce76eb8cb317a69e4f7e&amp;id=97a7777e4d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
							    <div id="mc_embed_signup_scroll">
								<h2>Subscribe to our mailing list</h2>
							<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
							<div class="mc-field-group">
								<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
							</label>
								<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
							</div>
								<div id="mce-responses" class="clear">
									<div class="response" id="mce-error-response" style="display:none"></div>
									<div class="response" id="mce-success-response" style="display:none"></div>
								</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
							    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_fe5c8ce76eb8cb317a69e4f7e_97a7777e4d" tabindex="-1" value=""></div>
							    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
							    </div>
							</form>
							</div>
							<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
							<!--End mc_embed_signup-->
						  </div>
						</div>	
					  	<!-- Get Auth to add to mail list -->
					   <div class="form-group">
					   		<?php echo form_checkbox('mail_list', '1', FALSE); ?>
					    	<label for="phone">Please email me Real Estate and Sales Tips and News about once a month.</label>

					  	</div>


						<!-- <div class="form-group">

							<img id="captcha" src="/securimage/securimage_show.php" alt="CAPTCHA Image" />

							<input required type="text" name="captcha_code" size="10" maxlength="6" />

							<a href="#" onclick="document.getElementById('captcha').src = '/securimage/securimage_show.php?' + Math.random(); return false">New Image</a>

						</div> -->
			<!-- 
						<input type="hidden" value="1" name="source_short_name"> -->


					   <!-- craigslist.. need to update -->
					   <input type="hidden" class="form-control" name="source" value="<?php echo $source; ?>">

		   			   <input type= "hidden" name="type" value = "3">
					  <button type="submit" name="submit" class="btn btn-primary">Submit</button>

					  <br />
					  <br />
					  <br />

					</form>

			</div><!-- form-container -->
		</div>

		

	</div><!-- row -->

</div>

<script>
$('#license_status1').click(function()
{
	$('#license_number').show(100);
	$('#mail_list1').hide(100);
});

$('#license_status2').click(function()
{
	$('#license_number').hide(100);
	$('#mail_list1').show(100);
});
</script>
