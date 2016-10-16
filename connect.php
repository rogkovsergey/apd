<?php
	$link = new mysqli("localhost", "root");
	$link->query("CREATE DATABASE IF NOT EXISTS `apd`");
	$link->select_db("apd");
?>