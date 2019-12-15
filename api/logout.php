<?php
require_once('db.php');
session_start();

$log = $_SESSION['username'] . " has logged out";
$_SESSION['logged_in']  = null;
$_SESSION['username']   = null;
$_SESSION['email']      = null;

$conn = (new db())->connect();
$conn->query("INSERT INTO `phpdemo`.`logs` (`message`) VALUES ('$log');"); // Log the login

header("Location: /page/login");