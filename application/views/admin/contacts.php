<h1>Contact List</h1>

<?php foreach ($contacts as $cont): ?>

        <h3><?php echo $cont['first_name']. " ".$cont['last_name'] ?></h3>
        <div class="main">
                <?php echo $cont['phone']. " ". $cont['email'] ?>
        </div>

        <div class="main">
                <?php echo $cont['license_status_id']. " ". $cont['license_number'] ?>
        </div>

<?php endforeach ?>
