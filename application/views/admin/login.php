<h1>Please Login</h1>

<?php echo validation_errors(); ?>

<?php echo form_open('admin/contacts'); ?>

<label for="user_name">User Name</label>
<input type="text" name="user_name" title="Enter a User Name"/><br />

<label for="password">Password</label>
<input type="password" name="password" title="Enter a Password"/><br />

<input type="submit" name="submit" title="Login" value="Log In">


