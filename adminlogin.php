
<?php
  
  session_start();
  $servername = "localhost";
$username = "root";
$password = "";
$db = "google_drive";
// Create connection

$conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
$error ="";
// Check connection
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$error= null;
$usertype="admin";
if (isset($_POST['submitsignin']))  {
  
     $username = $_POST['emailsignin'];
     $pass =md5($_POST['passwordsignin']); 
     
     $sql =  $conn->prepare("SELECT id FROM user WHERE email = '$username' and password = '$pass' and usertype = '$usertype'");
    //  $result = mysqli_query($conn,$sql);
    $sql->execute();
    // $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $result =  $sql->fetchAll(PDO::FETCH_ASSOC);

    $coun = $sql->rowCount();
    //  $count = mysqli_num_rows($result);
     //  print_r($result);  
     if($coun>0 ) {
        
        $_SESSION['login_user'] = $username;
        $_SESSION['id'] = $result[0]['id'];
      
        header("location: admindashboard.php");
     }else {
        $error = "Username or Password is invalid";
       
     }
  }

          
  if (isset($_POST['submitsignup'])) {
    $exists= false; $showAlert = false;
    $pass = md5($_POST["password"]);
    $name = $_POST["name"];
    $email = $_POST["email"];
   
  
    $sqls = $conn->prepare("Select * from user where email='$email'");
    $sqls->execute();
    // $results = mysqli_query($conn, $sqls);
    
    // $nums = mysqli_num_rows($results);
    $nums =$sqls->rowCount();
    
     if($nums == 0) {
        
         $currentdate = date("Y-m-d h:i:s");       
            
            $sql =$conn->prepare("INSERT INTO `user` ( `name`,
                `email`, `password`,`created`,`usertype`) VALUES ('$name',
                '$email','$pass','$currentdate','$usertype)");
  $result =    $sql->execute();

            $_SESSION['id'] =  $conn->lastInsertId();
    
            $_SESSION['login_user'] = $email;
$id=$_SESSION['id'];

            $sqls =$conn->prepare("INSERT INTO `storage` ( `userid`,
            `size`) VALUES ('$id',
            '5')");
    $sqls->execute();



          header("location: admindashboard.php"); 
   
            if ($result) {
                $showAlert = true;
            }
            
    }
    
if($nums>0)
{
    $exists= true;
}
    
}
$conn =null;

//end if
 // mysqli_close($conn);
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
    <title>Login</title>
</head>
<body>
<!--LoginForm  -->
<div class="registration-form">
  <div class="header">
    <button class="btn btn-tab btn-ripple active" data-target-tab="#signin">
     ADMIN SIGN IN
    </button>
    <button class="btn btn-tab btn-ripple" data-target-tab="#signup">
     ADMIN SIGN UP
    </button>
  </div>
  <div class="body">
    <div class="content active" id="signin">
      <h1>Sign in to your acccount</h1>
      <p class="gray">Sign in to access all free resources</p>
    
<!-- Form Signin -->
      <form action=""   method="post">
        <div class="input-group">
          <input
            type="text"
            name="emailsignin"
            id="email-signin"
            class="input-elem"
            placeholder=" "
            autocomplete="off"
          />
          <label for="email-signin">Email</label>
        </div>

        <div class="input-group">
          <input
            type="password"
            name="passwordsignin"
            id="password-signin"
            class="input-elem"
            placeholder=" "
            autocomplete="off"
          />
          <label for="password-signin">Password</label>
          <i class="fas fa-eye-slash eye"></i>
        </div>
        <div class="agreements">
          <input type="checkbox" name="" id="rem_pass" />
          <label for="rem_pass" class="gray">Remember Password</label>
        </div>
        <button class="btn btn-register" type="submit" name="submitsignin">Sign In</button>
        <span style="color:red; text:center;"><?php if(!is_null($error)) echo $error; ?></span><br>
        <a href="#" class="reg_link">Forgot your password?</a>
      </form>
    </div>
    <div class="content" id="signup">
      <h1>REGISTER</h1>
      <p class="gray">
        You can use this account to log in to any of our products
      </p>
      <!-- Form register new account -->
      <form action="" method="post">
        <div class="input-group">
          <input
            type="text"
            name="name"
            id="name"
            class="input-elem"
            placeholder=" "
            autocomplete="off"
          />
          <label for="name">Name</label>
        </div>
        <div class="input-group">
          <input
            type="email"
            name="email"
            id="email"
            class="input-elem"
            placeholder=" "
            autocomplete="off"
          />
          <label for="email">Email</label>
        </div>
        <div class="input-group">
          <input
            type="password"
            name="password"
            id="password"
            class="input-elem"
            placeholder=" "
            autocomplete="off"
          />
          <label for="password">Password</label>
          <i class="fas fa-eye-slash eye"></i>
        </div>
        <div class="agreements">
          <input type="checkbox" name="" id="terms" />
          <label for="terms" class="gray">Agree to our conditions</label>
        </div>
        <button class="btn btn-register" type="submit" name="submitsignup">Sign Up</button>
      </form>
    </div>
  </div>
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