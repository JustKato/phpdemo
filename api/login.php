<?php
session_start();

header('Content-Type: application/json');
header('Author: Dumitrascu Valeriu Daniel');
header_remove("X-Powered-By");

if ( (!isset($_POST['username']) && !isset($_POST['email'])) || !isset($_POST['password'])){
    header("HTTP/1.1 401 Unauthorized");
    exit;
}

require_once('db.php');

$username = isset($_POST['username']) ? $_POST['username'] : $_POST['email'];
$password = $_POST['password'];

$conn = (new db())->connect();

$res = $conn->query("SELECT * FROM phpdemo.users WHERE ( users.username OR users.email ) = '$username' AND users.password = '$password';")->fetch_object();


$log = $res->username . " has logged in with the email " . $res->email . " on " . date('d/m/Y h:m:i');
$conn->query("INSERT INTO `phpdemo`.`logs` (`message`) VALUES ('$log');"); // Log the login

if ($res !== null && isset($res->username)) {
    $_SESSION['logged_in']  = true;
    $_SESSION['username']   = $res->username;
    $_SESSION['email']      = $res->email;
    echo json_encode(["status" => 200, "message" => "Welcome back " . $res->username]);

    exit();
    return;
}
    

header("HTTP/1.1 401 Unauthorized");
echo json_encode(["status" => "failed", "message" => "Failed to login, Data incorrect!"]);
