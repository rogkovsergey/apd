<?php
	require('connect.php');
	$selected = $link->query("SELECT * FROM users");
	echo json_encode($selected->fetch_all(MYSQLI_ASSOC));
?>