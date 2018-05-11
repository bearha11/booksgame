<?php

$username = $_POST['username'];
$password = $_POST['password'];
//parametre de connexion
$host_name = "localhost";
$database = "booksgame";
$user_name = "root";
$password = "root";
//connexion
$conn = mysqli_connect("$host_name", "$user_name", "$password", "$database");

?>