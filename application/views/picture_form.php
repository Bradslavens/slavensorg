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

							    <input type="radio" name="license_status" id="license_status2" value="2">

							    No

							  </label>

							</div>

					    </div>

					    <div style="display: none" id="license_number" class="form-group">

					    	<label for="phone">License Number</label>
					    	<input title="Enter CA BRE License Number" type="text" name="license_number" value="<?php echo set_value('license_number'); ?>" class="form-control" >

					  	</div>	
					  	<!-- Get Auth to add to mail list -->
					   <div class="form-group">
					   		<?php echo form_checkbox('spam', 'accept', FALSE); ?>
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
});

$('#license_status2').click(function()
{
	$('#license_number').hide(100);
});
</script>
