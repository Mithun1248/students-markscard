<?php

session_start();
if (empty($_SESSION['id']))
header("location: adminlogin.php");

$servername = "localhost";
$username = "root";
$password = "";
$db = "google_drive";
// Create connection

$conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
$error ="";
$usertype="user";
$id=$_SESSION['id'];
//echo $id;
$sql =  $conn->prepare("SELECT count(id) as total FROM user WHERE usertype = '$usertype'");
//  $result = mysqli_query($conn,$sql);
$sql->execute();
// $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$result =  $sql->fetchAll(PDO::FETCH_ASSOC);

//echo $result[0]['total'];;

?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>

    <body>

    <div class="sidenav">
    <a href="admindashboard.php">Dashboard</a>
  <a href="userlist.php">User List</a>
 
  <i><a href="adminlogout.php">Signout</a></i>
</div>

<div class="main">
       

       <h5> Total User <?php echo  $result[0]['total']; ?> </h5>
      
</div>
    </body>
</html>