<?php
if (!isset($_POST['user_id']) || !isset($_POST['password']))
exit;
$user_id = $_POST['user_id'];
$password = $_POST['password'];
$admin_id = "admin";
$admin_password = "admin";

if ($user_id != $admin_id || $password != $admin_password) {
echo "<script>alert('Please check your ID or password'); history.back();</script>";
exit;
}
session_start();
$_SESSION['user_session'] = $user_id;
header("location: index.php");