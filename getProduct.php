<?php
	include 'conn.php';

	$code = $_GET['code'];

	$sql = $conn->query("SELECT * FROM producttable WHERE code = '$code'");

	$data = $sql->fetch_assoc();

	echo json_encode($data);

	mysqli_close($conn);

?>