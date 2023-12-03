<?php

$localhost = 'localhost';
$user = 'root';
$pass = '';
$db_name = "login";

$pdo = new PDO("mysql:host=".$localhost . ";dbname=" .$db_name, $user,$pass);



?>