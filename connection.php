<?php
	$post_json = json_decode(file_get_contents('php://input'), true);
	(int)$post_json['post_id'];
	
	$link = new mysqli("localhost", "root");
	$link->query("CREATE DATABASE IF NOT EXISTS `apd`");
	$link->select_db("apd");
	
	if (!$link->query("CREATE TABLE IF NOT EXISTS `users` (id INT NOT NULL AUTO_INCREMENT, post_id INT, name CHAR(50), surname CHAR(50), PRIMARY KEY (id))")){
		echo "Table not created";
	};

	$base_link = "INSERT INTO users(post_id, name, surname) VALUES (%d, '%s', '%s')";
	$query = sprintf($base_link, $post_json['post_id'], $post_json['name'], $post_json['surname']);

	if (!$link->query($query)){
	    echo "Не удалось добавить строку: (" . $link->errno . ") " . $link->error;
	};
	
	$selected = $link->query("SELECT * FROM users");
	$result = $selected->fetch_assoc();

	echo json_encode($result);
?>