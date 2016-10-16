<?php
	require('connect.php');

	$post_json = json_decode(file_get_contents('php://input'), true);
	(int)$post_json['post_id'];

	if (!$link->query("CREATE TABLE IF NOT EXISTS `users` (id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
														   post_id INT,
														   name CHAR(50),
														   surname CHAR(50))"
					   )
	){echo "Table not created: (" . $link->errno . ") " . $link->error;};

	$base_link = "INSERT INTO users(post_id, name, surname) VALUES (%d, '%s', '%s')";
	$query = sprintf($base_link, $post_json['post_id'], $post_json['name'], $post_json['surname']);

	if ($link->query($query)){
		echo "User added successfuly";
	}else{
		echo "Не удалось добавить строку: (" . $link->errno . ") " . $link->error;
	};
	
?>