<?php

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
 $currentdate = date("Y-m-d h:i:s"); 
$folder = $_POST['name'];
$sql = $conn->prepare("INSERT INTO folder (`id`,`name`,`created`) VALUES ('$_SESSION['id']','$folder', '$currentdate')");
if ($sql->execute()) {
    echo "<script>alert('folder created!')</script>";
}


echo $folder;

?>