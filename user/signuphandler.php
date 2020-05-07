<?php
session_start();
require_once '../config.php';
$uName = $_POST['name'];
$uEmail = $_POST['check'];
$uPassword = $_POST['password'];
$uCellphone = $_POST['cellphone'];

echo $uName;
$output = "";

$sql = "INSERT INTO user (username, email, password, cellphone) VALUES ('$uName', '$uEmail', '$uPassword', '$uCellphone')";

if ($link->query($sql) === TRUE) {
    $output = '<div class="alert alert-success">Signup done!</div>';
} else {
    $output = '<div class="alert alert-success">Signup did not go through.</div>';
}

echo  $output;

?>
