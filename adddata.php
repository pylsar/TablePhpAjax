<?php
$con = mysqli_connect('localhost', 'root', '', 'db');

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$mail = $_POST['mail'];
$password = $_POST['password'];

$sel = "INSERT INTO `users` VALUES (NULL, '$firstname', '$lastname', '$mail', '$password')";

mysqli_query($con, $sel);

?>