<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "upload_foto";
$port = "3307";
$connect  = mysqli_connect($server, $username,  $password, $database, $port);

$pdo = new PDO('mysql:host=' . $server . ';port=' . $port . ';dbname=' . $database, $username, $password);
