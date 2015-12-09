<?php
class Blog extends CI_Controller {

	public function index()
	{
		echo 'Hello World!';

		echo password_hash("rasmuslerdorf", PASSWORD_DEFAULT)."\n";
	}
}
?>
