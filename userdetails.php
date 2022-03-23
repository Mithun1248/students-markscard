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
$id=$_GET['id'];
//echo $id;
$sql =  $conn->prepare("SELECT *FROM fileupload WHERE userid = '$id'");
// //  $result = mysqli_query($conn,$sql);
$sql->execute();
// // $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$result =  $sql->fetchAll(PDO::FETCH_ASSOC);

// echo $_GET['id'];
$sqls =$conn->prepare( "SELECT s.sharedwith,f.name FROM sharedfile s join fileupload f on s.fileid = f.id where s.userid = '$id'");
$sqls->execute();
$results =  $sqls->fetchAll(PDO::FETCH_ASSOC);
$vky = $conn->prepare("Select size from storage where userid='$id'");

            
$vky->execute();
$vinod =$vky->fetchAll(PDO::FETCH_ASSOC);

$totalsize = $vinod[0]['size'];
$sqled = $conn->prepare("Select COALESCE(sum(size),0 )as size from fileupload where userid='$id'");
$sqled->execute();
$vin =$sqled->fetchAll(PDO::FETCH_ASSOC);

 $totalused = $vin[0]['size'];

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
  <H4>user detail</H4>     
<br>
<?php echo "<table border='1'>
       <tr>
       <th>id</th>
       <th>name</th>
       <th>size</th>
       <th>type</th>
       <th>created</th>
       <th>private</th>


</tr>";
       foreach ($result  as $value) {
  echo "<tr>";
  echo "<td>". $value['id'] . "</td>";
  echo "<td>". $value['name'] . "</td>";
  echo "<td>". $value['size'] . "</td>";
  echo "<td>". $value['type'] . "</td>";
  echo "<td>". $value['created'] . "</td>";
  echo "<td>". $value['private'] . "</td>";
  
  echo "</tr>";
} 
?>
</table>
<?php echo "<table border='1'>
       <tr>
       
       <th>name</th>
       <th>sharedwith</th>
       


</tr>";
       foreach ($results  as $value) {
  echo "<tr>";
  
  echo "<td>". $value['name'] . "</td>";
  echo "<td>". $value['sharedwith'] . "</td>";
 
  
  echo "</tr>";
} 
?>
</table>
<span>total space allocated- </span> 
<?php
echo $totalsize ;
?>
</br>
<span>total space used- </span> 
<?php
echo $totalused;
?>

</div>
    </body>
</html>