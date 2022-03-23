<?php

session_start();
if (empty($_SESSION['id']))
header("location: login.php");
$servername = "localhost";
$username = "root";
$password = "";
$db = "google_drive";
// Create connection
$kb = 1000000;
$conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
$error ="";
// Check connection
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sqle =$conn->prepare( "SELECT * FROM fileupload");
$result = $sqle->execute();
$id=$_SESSION['id'];
$referal ="";
$sqls = $conn->prepare("Select size from storage where userid='$id'");

            
$sqls->execute();
$vinod =$sqls->fetchAll(PDO::FETCH_ASSOC);

$totalsize = $vinod[0]['size'];
$sqled = $conn->prepare("Select COALESCE(sum(size),0 )as size from fileupload where userid='$id'");
$sqlad = $conn->prepare("Select COALESCE(sum(size),0 )as size from add_storage where userid='$id'");
$sqlad->execute();
$sqled->execute();
$mks =$sqlad->fetchALL(PDO::FETCH_ASSOC);
$vin =$sqled->fetchAll(PDO::FETCH_ASSOC);
$added_size= $mks[0]['size'];
$totalused = $vin[0]['size'];
 

 // referal code getting string
 $ref =  $conn->prepare("SELECT referalcode FROM user WHERE  id='$id'");
     $ref->execute();
      $refresult =  $ref->fetchAll(PDO::FETCH_ASSOC);
    $refcoun = $ref->rowCount();
     if($refcoun>0 ) {
                $_SESSION['referalcode']=$refresult[0]['referalcode'];
                $referal = $refresult[0]['referalcode'];
       }

 // end of referal code

if (isset($_POST['save'])) { 
  $filename = $_FILES['uploaded_file']['name'];

  // destination of the file on the server
  $destination = 'upload/' . $filename;

  // get the file extension
  $extension = pathinfo($filename, PATHINFO_EXTENSION);

  // the physical file on a temporary uploads directory on the server
  $file = $_FILES['uploaded_file']['tmp_name'];
  $size = $_FILES['uploaded_file']['size'];
$pri =0;
   { $currentdate = date("Y-m-d h:i:s"); 
      // move the uploaded (temporary) file to the specified destination
      if (move_uploaded_file($file, $destination) ) {
          if(($totalused+$size)<$totalsize){
          $sql = $conn->prepare("INSERT INTO fileupload (`name`, `size`, `type`,`created`,`private`,`userid`) VALUES ('$filename', '$size', '$extension','$currentdate','$pri','$id')");
          if ($sql->execute()) {
              echo "<script>alert('File uploaded successfully');</script>";
                header('location:dashboard.php');
          }
          else {
            echo "Failed to upload file.";
        }
    }
          else
              echo "<script>alert('No space to upload!')</script>";
  }
}
  echo  '<script type="text/javascript">  document.getElementById("myfile").reset(); </script>';
  unset($_POST['save'], $_FILES['uploaded_file']); 
}
if (isset($_POST['createfolder'])) {
    $currentdate = date("Y-m-d h:i:s"); 
    $folder = $_POST['foldname'];
    $sql = $conn->prepare("INSERT INTO folder (`id`,`name`,`created`) VALUES ('$id','$folder', '$currentdate')");
    if ($sql->execute()) {
        echo "<script>alert('folder created')</script>";
    }  unset($_POST['foldname'], $_POST['createfolder']); 

    echo '<script type="text/javascript">
    document.getElementById("myfolder").reset();
    </script>';
}
$conn=null;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Drive</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        html, body{
      overflow:initial !important;
    }
    /* dialog{
        width:30vw;
        height:30vh;
    } */
    /* #chat{
        border:none;
        outline:none;
        background:white;
    } */
    /* #left{
        position:fixed;
    } */
    /* #top{
        z-index: 1;
        position:fixed;
        top:0px;
        left:0px;
        margin-left:0px;
        width:100vw;
    }
#home{
    margin-left:20vw;
}
#ref{
    position:fixed;
    top:20vh;
} */
    </style>
    <script src="https://kit.fontawesome.com/5e14d5d81a.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet" href="src/notify.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    </head>
<body>
     <section class="border-bottom">
        <div class="container-fluid">
        <div class="row p-4" id="top">

            <div class="col-2 d-flex align-items-center" id="logo">
                <a href=""><img class="google-drive-logo mr-2" width="120" src="img/Logo.png" alt="goole-drive-logo"></a>
            </div>

            <div class="col-10 d-flex align-items-center" id="top-left">

                <div class="input-group">
                    <i class="fas fa-search"></i>
                    <input class="search-input" id="fileSearch" type="text" name="search" placeholder="Search in drive">
                </div>

                <div class="d-flex justify-content-between align-items-center">
                    
                    <div class="d-flex align-items-center">                         
                        <i id="list" class="fas fa-list" style="font: 1rem; margin: 0px 5px;cursor: pointer;display: none;" onclick="listviewToggle()"></i>
                        <i id="grid" class="fas fa-th" style="font: 1rem; margin: 0px 5px;cursor: pointer;" onclick="listviewToggle()"></i>
                        <a href="#"><img class="profile-img" src="img/New-Icon.png" alt="profile-img"></a>
                        <i class='fas fa-cloud '> <?php echo $totalused; ?> Kb of <?php echo ($totalsize+$added_size)/1000000 ; ?> Gb</i>
                        <i id="nav" class="fas fa-bars mr-3 ml-4" style="cursor: pointer;" onclick="openNav()"></i>
                    </div>

                </div>

            </div>

        </div>
        </div>
        <div id="ref">
        <hr>
      <b>  <span style="text:center;" id="ref"> Refeal Code :<?php echo $referal; ?></span> </b>

<hr>
</div>
     </section>
     
     <section>
         <div class="container-fluid">
            <div class="row">
                <!-- Sidbar -->
                <div class="col-2 p-4" id="left">
                    <div class="dropdown d-flex justify-content-center align-items-center mb-4" >
                        <button class="btn bg-light dropdown-toggle my-drive-btn font-weight-light" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            My Drive
                        </button>
                        <i class="far fa-times-circle"  id="nav-close"></i>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <form action="" method="post" enctype="multipart/form-data" id="myfile">
         <input type="file" name="uploaded_file"><br>
         <input type="submit" name="save" value="Upload file" >
     </form>
                             

     <form action="" method="post" id="myfolder">
     <input type="text" name="foldname"><br>
         <input type="submit" name="createfolder" value="Create Folder" />
     </form>
                              
                            </div>

                    </div>
                    <a href="index1.php" class="d-flex ml-4 left-bar-btn mb-4">
                        <div class="mr-4">
                            <i class="fas fa-box"></i>
                        </div>
                        <div>
                            <h5 class="my-auto">Buy plans</h5>
                        </div>
                    </a>
                    <a href="javascript: void(0)" class="d-flex ml-4 left-bar-btn mb-4">
                        <div class="mr-4">
                            <i class="far fa-clock"></i>
                        </div>
                        <div>
                            <h5 class="my-auto">Recent</h5>
                        </div>
                    </a>
                    <a href="#javascript: void(0)" class="d-flex ml-4 left-bar-btn mb-4">
                        <div>
                            <label class="switch">
                                <input type="checkbox"  id="darkSwitch">
                                <span class="slider round"></span>
                              </label>
                        </div>
                          <div>
                              <h5 class="my-auto" >Dark Mode</h5>
                          </div>
                    </a>
                    <a href="logout.php" class="d-flex ml-4 left-bar-btn">
                        <div class="mr-4">
                            <i class="fas fa-sign-out-alt" style="font: 1rem; margin: 0px 5px;cursor: pointer;"></i>
                        </div>
                        <div>
                            <h5 class="my-auto">SignOut</h5>
                        </div>
                    </a>
                    <br>
                    <!-- <script>
                        $('#chat').click(function(){
                            var url=$(this).attr('href');
                            showDialog(url);
                        })
                        $('#target').dialog({
                            autoOpen:false,
                            height:300,
                            width:400,
                            modal:true
                        });
                        function showDialog(url){
                            $('#target').load(url);
                            $('#target').dialog("open");
                        }
                    </script> -->
                    <!-- <a href="chat.php" id="chat" class="d-flex ml-4 left-bar-btn">
                    <div class="mr-4">
                    <i class='fas fa-comment-alt'></i></div>
                        <div>
                            <h5 class="my-auto">Chat</h5>
                        </div>
                    </a>
                    </div>
                <div id="target">-->

                </div>
                    <!-- <script>
$("#chat").fancybox({
    maxWidth:500,
    maxHeight:600,
    fitToView:false,
    width:'60%',
    height:'100%'
}
});</script> -->
                
                
                <!-- main -->
                <div id="home">

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a  onclick="home()" style="cursor: pointer;color: #000;">Home</a></li>
                       
                          
                        </ol>
                      </nav>

                     <?php 
                    
            //   $c   =   $sqle->rowCount();
             $c =0;
             $vinod=$sqle->fetchAll(PDO::FETCH_ASSOC);
             foreach ($vinod as $row)   
{   
    if($row['userid']==$id || $row['private']==0){
    echo "<div class='centerdiv'>";
    if($row['type']=="zip"){
  echo "<i class='fa-solid fa-file-zipper'></i>";
  
  echo"<a href='upload/".$row['name']."' download>". $row['name']."</a>";
  echo"<br>";
  echo "size : " .$row['size'];
  echo"<br>";
  echo "<a href='delete.php?id=".$row['id']."'>delete</a>";
   echo"<br>";
   if($row['userid']==$id){
   if(!$row['private']){    echo "<a href='sharefile.php?id=".$row['id']."'>share</a>" ; echo "<br>";
     echo "<a href='private.php?id=".$row['id']."'>make private</a>" ;}
     else{
        echo "<br>";
       echo "<a href='public.php?id=".$row['id']."'>make public</a>" ;
    }
    }
       echo "<br>";
   }
 if($row['type']=="txt" || $row['type']=="docx" || $row['type']=="xlsx"){
    echo "<i class='fas fa-file-word'></i>";
    echo"<a href='upload/".$row['name']."' download>". $row['name']."</a>";
    echo"<br>";
    echo "size : " .$row['size'];
    echo"<br>";
    echo "<a href='delete.php?id=".$row['id']."'>delete</a>";
     echo"<br>";
     if($row['userid']==$id){
     if(!$row['private']){    echo "<a href='sharefile.php?id=".$row['id']."'>share</a>" ; echo "<br>";
       echo "<a href='private.php?id=".$row['id']."'>make private</a>" ;}
       else{
        echo "<br>";
       echo "<a href='public.php?id=".$row['id']."'>make public</a>" ;
    }
    }
         echo "<br>";
        }
        if($row['type']=="c" || $row['type']=="php" || $row['type']=="cpp" || $row['type']=='html' || $row['type']=="css"){
            echo "<i class='fas fa-file'></i>";
            echo"<a href='upload/".$row['name']."' download>". $row['name']."</a>";
            echo"<br>";
            echo "size : " .$row['size'];
            echo"<br>";
            echo "<a href='delete.php?id=".$row['id']."'>delete</a>";
             echo"<br>";
             if($row['userid']==$id){
             if(!$row['private']){    echo "<a href='sharefile.php?id=".$row['id']."'>share</a>" ; echo "<br>";
               echo "<a href='private.php?id=".$row['id']."'>make private</a>" ;}
               else{
                echo "<br>";
               echo "<a href='public.php?id=".$row['id']."'>make public</a>" ;
            }
            }
                 echo "<br>";
                }
    if($row['type']=="jpg" || $row['type']=="jpeg" || $row['type']=="png" || $row['type']=="gif"){
        echo "<i class='fas fa-solid fa-image'></i>";
        echo"<a href='upload/".$row['name']."' download>". $row['name']."</a>";
        echo"<br>";
        echo "size : " .$row['size'];
        echo"<br>";
        echo "<a href='delete.php?id=".$row['id']."'>delete</a>";
         echo"<br>";
         if($row['userid']==$id){
    if(!$row['private']){    echo "<a href='sharefile.php?id=".$row['id']."'>share</a>" ; echo "<br>";
      echo "<a href='private.php?id=".$row['id']."'>make private</a>" ;}
      else{
        echo "<br>";
       echo "<a href='public.php?id=".$row['id']."'>make public</a>" ;
    }
    }
        echo "<br>";
    }
            if($row['type']=="EXE" ){
                echo "<i class='fas fa-solid fa-file'></i>";
                echo"<a href='upload/".$row['name']."' download>". $row['name']."</a>";
                echo"<br>";
                echo "size : " .$row['size'];
                echo"<br>";
                echo "<a href='delete.php?id=".$row['id']."'>delete</a>";
                 echo"<br>";
                 if($row['userid']==$id){
                 if(!$row['private']){    echo "<a href='sharefile.php?id=".$row['id']."'>share</a>" ; echo "<br>";
                   echo "<a href='private.php?id=".$row['id']."'>make private</a>" ;}
                    else{
                        echo "<br>";
                       echo "<a href='public.php?id=".$row['id']."'>make public</a>" ;
                    }
                }
                     echo "<br>";
                    }
                    if($row['type']=="mp3" || $row['type']=="mp4" || $row['type']=="mkv" ){
                        echo "<i class='fas fa-solid fa-file'></i>";
                        echo"<a href='upload/".$row['name']."' download>". $row['name']."</a>";
                        echo"<br>";
                        echo "size : " .$row['size'];
                        echo"<br>";
                        echo "<a href='delete.php?id=".$row['id']."'>delete</a>";
                         echo"<br>";
                         if($row['userid']==$id){
                         if(!$row['private']){    echo "<a href='sharefile.php?id=".$row['id']."'>share</a>" ; echo "<br>";
                           echo "<a href='private.php?id=".$row['id']."'>make private</a>" ;}
                           else{
                            echo "<br>";
                           echo "<a href='public.php?id=".$row['id']."'>make public</a>" ;
                        }
                        }
                             echo "<br>";
                            }
echo "</div>";
$c +=1;
                        }
}
?>
                      

                   <div class="quick-access ml-2 mb-5" style="display: none;" id="folder">

                    <div>
                        <p class="mb-3">Files</p>
                    </div>

                   <div class="d-flex" id="files" >
                
                   </div>

               </div>
               <div class="emailList__list" id="file_list" style="display: none;">
                <!-- Email Row Starts -->

<!-- Email Row Ends -->   
      </div>

                </div>

            </div>
         </div>
     </section>



     <div id="overlay">
        <div class="delete-content">
            <div>
                <h3 style="color:red">Are Sure You Want To Delete this Folder?</h1>
            </div>
            <div>
                <button type="button" id="deleteFolder" class="btn btn-danger">Delete</button>
                <button type="button" class="btn btn-primary" onclick="document.getElementById('overlay').style.display='none'">Cancel</button>
            </div>
        </div>
     </div>

<!-- Right Sidebar -->
<!-- <div id="right-sidebar"> 
    <div class="options">
        <h2>Options</h2>
        <i class="fas fa-times" style="cursor: pointer;" id="sidebar-close"></i>
    </div>
    <hr>
   
    <div class="filename">
        <h4>File Name</h4>
        <h5 id="title-option">xyx.mp4</h5>
    </div>
    <div class="size">
        <h4>File Size</h4>
        <h5 id="size">29.4 MB</h4>
    </div>
    <div class="modified">
        <h4>File Uploaded on:</h4>
        <h5 id="date">3/4/21</h4>
    </div>
    <div class="share">
        <h4>File Share:</h4>
        <label class="switch">
            public
            <input type="checkbox"  id="view" >
            <span class="slider round"></span>
          </label>
    </div>
    <hr>
    <div class="buttons">
        <button id="button-download">Download File</button>
        <button id="button-Delete" onclick="deleteFile(this)">Delete File </button>
    </div>
    <div class="buttons">
        <button id="button-copy">Copy Link</button>
    </div>


</div> -->


<ul class="menu2">
    <li class="menu-item">
        <a href="#" class="menu-btn" id="openFolder" onclick="folderClick(this)">
            <i class="fa fa-folder-open"></i>
            <span class="menu-text" >Open</span>
        </a>
    </li>
    <li class="menu-separator"></li>
    <li class="menu-item">
        <button type="button" class="menu-btn">
            <i class="fa fa-download"></i>
            <span class="menu-text">Save</span>
        </button>
    </li>
    <li class="menu-item" id="rename" onclick="RenameFolder(this)">
        <button type="button" class="menu-btn" >
            <i class="fa fa-edit"></i>
            <span class="menu-text" >Rename</span>
        </button>
    </li>
    <li class="menu-item"  id="folderDelete" onclick="DeleteFolder(this)">
        <button type="button" class="menu-btn">
            <i class="fa fa-trash"></i>
            <span class="menu-text">Delete</span>
        </button>
    </li>
</ul>

<div class="jnotify" style="bottom: 40px; color: white; background: rgb(40, 167, 69); display: none;">
  <div class="message-container" style="color: white; background: rgb(26, 107, 44);"><div class="icon success"></div>
  <div class="message">Files</div> <div></div><div class="close" id="close_upload_box"></div>
</div>
<div class="description" id="upload_elem">
    

</div>
</div>  
     

     <!-- Extra Libs -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://apis.google.com/js/api.js"></script>
<script src="./js/resumableupload.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="./js/dark-mode-switch.min.js"></script>
<script src="./js/longpress.min.js"></script>
<script src="src/notify.js"></script>
    <!-- Main file -->

<script src="./js/components.js"></script>
<script src="./js/upload.js"></script>
<script src="./js/DomFunction.js"></script>
        
</body>
</html>