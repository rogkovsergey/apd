<?php
$reset = new mysqli("localhost", "root", "", "apd");
$reset->query("DROP TABLE `users`");
$reset->query("DROP DATABASE `apd`");
echo 'Database reset';
?>