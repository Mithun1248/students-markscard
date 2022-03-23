
<?php
  
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


if (isset($_POST['submit']))  {
    
    $reciver = $_POST['username'];
    $msg =$_POST['msg']; 
    $currentdate = date("Y-m-d h:i:s"); 
    $sql =  $conn->prepare("INSERT INTO `chat` (`messages`,`sender`,`receiver`,`date`)  VALUES('$msg','$user','$reciver','$currentdate')");
   //  $result = mysqli_query($conn,$sql);
   $result =    $sql->execute();
   // $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  // $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
    
   //  $count = mysqli_num_rows($result);
        
   
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
    <link rel="stylesheet" href="./login.css">
  
</head>
<body>
<!--LoginForm  -->
<div >
<form action=""   method="post">
 To: <input type="text" name="username">
  
 <br>
<br>
<textarea rows="10" cols="50" name="msg" >
Enter text here...</textarea><br><br>
<button type="submit"  name="submit">Submit</button>
</form>
  </div>
<!-- Login Form -->
      <div class="Loading-Modal">
        <div>
          <img src="https://raw.githubusercontent.com/FaiezWaseem/Video-Point/master/assets/images/71814-loading-dots.gif" alt="Loading">
          <h1>Authenticating Please Wait ...</h1>
          <span>Please Do not Close The Window While Authenticating... </span>
      
        </div>
      </div>
         <!-- ------FIREBASE SDK
         <script src="https://www.gstatic.com/firebasejs/8.3.0/firebase-app.js"></script>
         <script src="https://www.gstatic.com/firebasejs/8.3.0/firebase-auth.js"></script>
         <script src="https://www.gstatic.com/firebasejs/8.3.0/firebase-database.js"></script>
         <script src="https://www.gstatic.com/firebasejs/8.3.0/firebase-storage.js"></script> 
         FIREBASE SDK---------- -->
         
         <script src="./js/auth.js"></script>
</body>
</html>
