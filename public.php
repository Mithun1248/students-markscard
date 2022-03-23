<?php
  $val = $_GET['id'];

  session_start();
  if (empty($_SESSION['id']))
header("location: login.php");
  $servername = "localhost";
$username = "root";
$password = "";
$db = "google_drive";
// Create connection
$user = $_SESSION['login_user'];
$conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
$error ="";
// Check connection
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);





    
    $reciver = $_POST['username'];
   
    
    $sql =  $conn->prepare("UPDATE `fileupload` SET `private` = 0 where `id` = '$val'");
   
   $result =    $sql->execute();

   header("location: dashboard.php");
        
   

?>