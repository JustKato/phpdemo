<?php

var_dump($_POST);

require_once('./db.php');

if ( !isset($_POST['username']) || !isset($_POST['email']) || !isset($_POST['password']) ) {
    header("HTTP/1.1 401 Unauthorized");
    exit(); return;
}

$username   = $_POST['username'];
$email      = $_POST['email'];
$password   = $_POST['password'];

$conn = (new db())->connect();
$conn->query("INSERT INTO `phpdemo`.`users` (`username`, `email`, `password`) VALUES ('$username', '$email', '$password');");

return true;