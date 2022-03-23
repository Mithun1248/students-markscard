<?php

$val = $_GET['id'];
echo $val;
session_start();
if (empty($_SESSION['id']))
header("location: login.php");
$servername = "localhost";
$username = "root";
$password = "";
$db = "google_drive";
// Create connection
$conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
$error ="";
// Check connection
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = $conn->prepare("delete  from fileupload where id='$val'");
$sql->execute();
header("location: dashboard.php");
?>