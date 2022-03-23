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
$id=$_SESSION['id'];
$sqle =$conn->prepare( "SELECT s.sharedwith,f.name FROM sharedfile s join fileupload f on s.fileid = f.id");
$result = $sqle->execute();
$vinod =$sqle->fetchAll(PDO::FETCH_ASSOC);


if (isset($_POST['submit']))  {
    
    $reciver = $_POST['username'];
   
    $currentdate = date("Y-m-d h:i:s"); 
    $sql =  $conn->prepare("INSERT INTO `sharedfile` (`fileid`,`sharedwith`,`created`,`userid`)  VALUES('$val','$reciver','$currentdate','$id')");
   //  $result = mysqli_query($conn,$sql);
   $result =    $sql->execute();

   header("location: dashboard.php");
        
   
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
   
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
    crossorigin="anonymous"
  />
   
  
</head>
<body>
<h3> share file </h3>
<div >
<form action=""   method="post">
 share with: <input type="text" name="username">
  
 
<button type="submit"  name="submit">Submit</button>
</form>
  </div>
<br>
<br>
  <div>
  <?php echo "<table border='1'>
       <tr>
       <th>File name</th>
       <th>Shared with</th>
</tr>";
       foreach ($vinod as $value) {
  echo "<tr>";
  echo "<td>". $value['name'] . "</td>";
  echo "<td>". $value['sharedwith'] . "</td>";
  echo "</tr>";
} ?>
</table>

  </div>
<!-- Login Form -->
      
         <!-- ------FIREBASE SDK
         <script src="https://www.gstatic.com/firebasejs/8.3.0/firebase-app.js"></script>
         <script src="https://www.gstatic.com/firebasejs/8.3.0/firebase-auth.js"></script>
         <script src="https://www.gstatic.com/firebasejs/8.3.0/firebase-database.js"></script>
         <script src="https://www.gstatic.com/firebasejs/8.3.0/firebase-storage.js"></script> 
         FIREBASE SDK---------- -->
         
         <script src="./js/auth.js"></script>
</body>
</html>
