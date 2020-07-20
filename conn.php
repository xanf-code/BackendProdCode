<?php
	$conn = new mysqli("127.0.0.1","root","","products");

	if ($conn->connect_error) {
		die();
	}
?>