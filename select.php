<?php
	// require('connect.php');
	require('insert.php');

	$selected = $link->query("SELECT * FROM users");
	


	$result = $selected->fetch_assoc();

	echo json_encode($result);
?>