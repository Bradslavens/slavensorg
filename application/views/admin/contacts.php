<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Contact List</h1>
		</div>
	</div>
	<?php foreach ($contacts as $cont): ?>
	<div class="row">
		<div class="col-md-12">

	        <h3><?php echo $cont['first_name']. " ".$cont['last_name'] ?></h3>
	        <div class="main">
	                <p><strong>Phone:</strong><?php echo $cont['phone']. "</p><strong>Email:</strong>". $cont['email'] ?>
	        </div>

	        <div class="main">
	               <p><strong>Licensed: </strong> <?php echo $cont['license_status_id']. "</p><strong>License # </strong> ". $cont['bre_license_number'] ?>
	        </div>

	       	<div>
	       		<p>Mail List? <?php echo $cont['mail_list']; ?></p>
	       	</div>
	       	<div><p>Date: <?php echo $cont['add_date']; ?> </p></div>



		</div>

	</div>
	<?php endforeach ?>

	<div class="row">

	</div>




</div>