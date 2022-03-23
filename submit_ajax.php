<?php
// include 'layouts/session.php';
require_once "layouts/config.php";
require 'layouts/function.php'; 
error_reporting(1);
$actionid = 0;
session_start();
$id=$_SESSION['id'];
//print_r($_POST);die;
if(isset($_REQUEST['submit']))
{
    $unqueid = uniqid();

    /**Master Setting Terms & condition**/
    if($_REQUEST['pagetype']=='storage_plans')
    {

        //print_r(  $_POST);die;
        if($_POST['title']!='') {

            extract($_POST);
            mysqli_query($link, "SET AUTOCOMMIT=0");
            mysqli_query($link, "START TRANSACTION");

            $entrytime = date("Y-m-d H:i:s");
            //check_duplicate_data($link, 'tabel', 'cloumn', "where");
			if(isset($_REQUEST['id']) && !empty($_REQUEST['id']))
			{
				$res = update_data($link, "plans", "name='" . mysqli_real_escape_string($link, CleanXXS($_REQUEST['title'])) . "',type='" . mysqli_real_escape_string($link, CleanXXS($_REQUEST['type'])) . "',price='" . mysqli_real_escape_string($link, CleanXXS($_REQUEST['price'])) . "',status='" . mysqli_real_escape_string($link, CleanXXS($_REQUEST['status'])) . "'", " id='".$_REQUEST['id']."'");

                if($res)
                {
                    mysqli_query($link, "COMMIT");
                    echo $msg = "success";
                    exit();
                }
                else
                {
                    mysqli_query($link, "ROLLBACK");
                    echo $msg = "error";
                    exit();
                } 
			}
			else
			{
				$cnt = check_duplicate_data($link, 'plans', 'name', "name='" . mysqli_real_escape_string($link, CleanXXS($_REQUEST['title'])) . "' AND type='" . mysqli_real_escape_string($link, CleanXXS($_REQUEST['type'])) . "' AND category='Storage' ");
				if ($cnt == 0) {

					$actionid = insert_data($link, 'plans', "name='" . mysqli_real_escape_string($link, CleanXXS($_REQUEST['title'])) . "',type='" . mysqli_real_escape_string($link, CleanXXS($_REQUEST['type'])) . "',price='" . mysqli_real_escape_string($link, CleanXXS($_REQUEST['price'])) . "',status='0',category='Storage'");
					if ($actionid) {

						mysqli_query($link, "COMMIT");
						echo $msg = "success";
						exit();
					} else {
						mysqli_query($link, "ROLLBACK");
						echo $msg = "error";
						exit();
					}  
				}
				else
				{
					mysqli_query($link, "ROLLBACK");
                    echo $msg = "exist";
                    exit();
				}
			}
            mysqli_close($link);
        }
    }
	
	if($_REQUEST['pagetype']=='files_plans')
    {

        //print_r(  $_POST);die;
        if($_POST['title']!='') {

            extract($_POST);
            mysqli_query($link, "SET AUTOCOMMIT=0");
            mysqli_query($link, "START TRANSACTION");

            $entrytime = date("Y-m-d H:i:s");
            //check_duplicate_data($link, 'tabel', 'cloumn', "where");
			if(isset($_REQUEST['id']) && !empty($_REQUEST['id']))
			{
				$res = update_data($link, "plans", "name='" . mysqli_real_escape_string($link, CleanXXS($_REQUEST['title'])) . "',type='" . mysqli_real_escape_string($link, CleanXXS($_REQUEST['type'])) . "',price='" . mysqli_real_escape_string($link, CleanXXS($_REQUEST['price'])) . "',status='" . mysqli_real_escape_string($link, CleanXXS($_REQUEST['status'])) . "'", " id='".$_REQUEST['id']."'");

                if($res)
                {
                    mysqli_query($link, "COMMIT");
                    echo $msg = "success";
                    exit();
                }
                else
                {
                    mysqli_query($link, "ROLLBACK");
                    echo $msg = "error";
                    exit();
                } 
			}
			else
			{
				$cnt = check_duplicate_data($link, 'plans', 'name', "name='" . mysqli_real_escape_string($link, CleanXXS($_REQUEST['title'])) . "' AND type='" . mysqli_real_escape_string($link, CleanXXS($_REQUEST['type'])) . "' AND category='Files' ");
				if ($cnt == 0) {

					$actionid = insert_data($link, 'plans', "name='" . mysqli_real_escape_string($link, CleanXXS($_REQUEST['title'])) . "',type='" . mysqli_real_escape_string($link, CleanXXS($_REQUEST['type'])) . "',price='" . mysqli_real_escape_string($link, CleanXXS($_REQUEST['price'])) . "',status='0',category='Files'");
					if ($actionid) {

						mysqli_query($link, "COMMIT");
						echo $msg = "success";
						exit();
					} else {
						mysqli_query($link, "ROLLBACK");
						echo $msg = "error";
						exit();
					}  
				}
				else
				{
					mysqli_query($link, "ROLLBACK");
                    echo $msg = "exist";
                    exit();
				}
			}
            mysqli_close($link);
        }
    }
	
	if($_REQUEST['pagetype']=='web_hosting_plans')
    {

        //print_r(  $_POST);die;
        if($_POST['title']!='') {

            extract($_POST);
            mysqli_query($link, "SET AUTOCOMMIT=0");
            mysqli_query($link, "START TRANSACTION");

            $entrytime = date("Y-m-d H:i:s");
            //check_duplicate_data($link, 'tabel', 'cloumn', "where");
			if(isset($_REQUEST['id']) && !empty($_REQUEST['id']))
			{
				$res = update_data($link, "plans", "name='" . mysqli_real_escape_string($link, CleanXXS($_REQUEST['title'])) . "',type='" . mysqli_real_escape_string($link, CleanXXS($_REQUEST['type'])) . "',price='" . mysqli_real_escape_string($link, CleanXXS($_REQUEST['price'])) . "',status='" . mysqli_real_escape_string($link, CleanXXS($_REQUEST['status'])) . "'", " id='".$_REQUEST['id']."'");

                if($res)
                {
                    mysqli_query($link, "COMMIT");
                    echo $msg = "success";
                    exit();
                }
                else
                {
                    mysqli_query($link, "ROLLBACK");
                    echo $msg = "error";
                    exit();
                } 
			}
			else
			{
				$cnt = check_duplicate_data($link, 'plans', 'name', "name='" . mysqli_real_escape_string($link, CleanXXS($_REQUEST['title'])) . "' AND type='" . mysqli_real_escape_string($link, CleanXXS($_REQUEST['type'])) . "' and category='WebHosting' ");
				if ($cnt == 0) {

					$actionid = insert_data($link, 'plans', "name='" . mysqli_real_escape_string($link, CleanXXS($_REQUEST['title'])) . "',type='" . mysqli_real_escape_string($link, CleanXXS($_REQUEST['type'])) . "',price='" . mysqli_real_escape_string($link, CleanXXS($_REQUEST['price'])) . "',status='0',category='WebHosting'");
					if ($actionid) {

						mysqli_query($link, "COMMIT");
						echo $msg = "success";
						exit();
					} else {
						mysqli_query($link, "ROLLBACK");
						echo $msg = "error";
						exit();
					}  
				}
				else
				{
					mysqli_query($link, "ROLLBACK");
                    echo $msg = "exist";
                    exit();
				}
			}
            mysqli_close($link);
        }
    }
	
	if($_REQUEST['pagetype']=='email_plans')
    {

        //print_r(  $_POST);die;
        if($_POST['title']!='') {

            extract($_POST);
            mysqli_query($link, "SET AUTOCOMMIT=0");
            mysqli_query($link, "START TRANSACTION");

            $entrytime = date("Y-m-d H:i:s");
            //check_duplicate_data($link, 'tabel', 'cloumn', "where");
			if(isset($_REQUEST['id']) && !empty($_REQUEST['id']))
			{
				$res = update_data($link, "plans", "name='" . mysqli_real_escape_string($link, CleanXXS($_REQUEST['title'])) . "',type='" . mysqli_real_escape_string($link, CleanXXS($_REQUEST['type'])) . "',price='" . mysqli_real_escape_string($link, CleanXXS($_REQUEST['price'])) . "',status='" . mysqli_real_escape_string($link, CleanXXS($_REQUEST['status'])) . "'", " id='".$_REQUEST['id']."'");

                if($res)
                {
                    mysqli_query($link, "COMMIT");
                    echo $msg = "success";
                    exit();
                }
                else
                {
                    mysqli_query($link, "ROLLBACK");
                    echo $msg = "error";
                    exit();
                } 
			}
			else
			{
				$cnt = check_duplicate_data($link, 'plans', 'name', "name='" . mysqli_real_escape_string($link, CleanXXS($_REQUEST['title'])) . "' AND type='" . mysqli_real_escape_string($link, CleanXXS($_REQUEST['type'])) . "' AND category='Email' ");
				if ($cnt == 0) {

					$actionid = insert_data($link, 'plans', "name='" . mysqli_real_escape_string($link, CleanXXS($_REQUEST['title'])) . "',type='" . mysqli_real_escape_string($link, CleanXXS($_REQUEST['type'])) . "',price='" . mysqli_real_escape_string($link, CleanXXS($_REQUEST['price'])) . "',status='0',category='Email'");
					if ($actionid) {

						mysqli_query($link, "COMMIT");
						echo $msg = "success";
						exit();
					} else {
						mysqli_query($link, "ROLLBACK");
						echo $msg = "error";
						exit();
					}  
				}
				else
				{
					mysqli_query($link, "ROLLBACK");
                    echo $msg = "exist";
                    exit();
				}
			}
            mysqli_close($link);
        }
    }
	
	if($_REQUEST['pagetype']=='db_plans')
    {

        //print_r(  $_POST);die;
        if($_POST['title']!='') {

            extract($_POST);
            mysqli_query($link, "SET AUTOCOMMIT=0");
            mysqli_query($link, "START TRANSACTION");

            $entrytime = date("Y-m-d H:i:s");
            //check_duplicate_data($link, 'tabel', 'cloumn', "where");
			if(isset($_REQUEST['id']) && !empty($_REQUEST['id']))
			{
				$res = update_data($link, "plans", "name='" . mysqli_real_escape_string($link, CleanXXS($_REQUEST['title'])) . "',type='" . mysqli_real_escape_string($link, CleanXXS($_REQUEST['type'])) . "',price='" . mysqli_real_escape_string($link, CleanXXS($_REQUEST['price'])) . "',status='" . mysqli_real_escape_string($link, CleanXXS($_REQUEST['status'])) . "'", " id='".$_REQUEST['id']."'");

                if($res)
                {
                    mysqli_query($link, "COMMIT");
                    echo $msg = "success";
                    exit();
                }
                else
                {
                    mysqli_query($link, "ROLLBACK");
                    echo $msg = "error";
                    exit();
                } 
			}
			else
			{
				$cnt = check_duplicate_data($link, 'plans', 'name', "name='" . mysqli_real_escape_string($link, CleanXXS($_REQUEST['title'])) . "' AND type='" . mysqli_real_escape_string($link, CleanXXS($_REQUEST['type'])) . "' AND category='DB' ");
				if ($cnt == 0) {

					$actionid = insert_data($link, 'plans', "name='" . mysqli_real_escape_string($link, CleanXXS($_REQUEST['title'])) . "',type='" . mysqli_real_escape_string($link, CleanXXS($_REQUEST['type'])) . "',price='" . mysqli_real_escape_string($link, CleanXXS($_REQUEST['price'])) . "',status='0',category='DB'");
					if ($actionid) {

						mysqli_query($link, "COMMIT");
						echo $msg = "success";
						exit();
					} else {
						mysqli_query($link, "ROLLBACK");
						echo $msg = "error";
						exit();
					}  
				}
				else
				{
					mysqli_query($link, "ROLLBACK");
                    echo $msg = "exist";
                    exit();
				}
			}
            mysqli_close($link);
        }
    }
	
	if($_REQUEST['pagetype']=='domain_plans')
    {

        //print_r(  $_POST);die;
        if($_POST['title']!='') {

            extract($_POST);
            mysqli_query($link, "SET AUTOCOMMIT=0");
            mysqli_query($link, "START TRANSACTION");

            $entrytime = date("Y-m-d H:i:s");
            //check_duplicate_data($link, 'tabel', 'cloumn', "where");
			if(isset($_REQUEST['id']) && !empty($_REQUEST['id']))
			{
				$res = update_data($link, "plans", "name='" . mysqli_real_escape_string($link, CleanXXS($_REQUEST['title'])) . "',type='" . mysqli_real_escape_string($link, CleanXXS($_REQUEST['type'])) . "',price='" . mysqli_real_escape_string($link, CleanXXS($_REQUEST['price'])) . "',status='" . mysqli_real_escape_string($link, CleanXXS($_REQUEST['status'])) . "'", " id='".$_REQUEST['id']."'");

                if($res)
                {
                    mysqli_query($link, "COMMIT");
                    echo $msg = "success";
                    exit();
                }
                else
                {
                    mysqli_query($link, "ROLLBACK");
                    echo $msg = "error";
                    exit();
                } 
			}
			else
			{
				$cnt = check_duplicate_data($link, 'plans', 'name', "name='" . mysqli_real_escape_string($link, CleanXXS($_REQUEST['title'])) . "' AND type='" . mysqli_real_escape_string($link, CleanXXS($_REQUEST['type'])) . "' AND category='Domain' ");
				if ($cnt == 0) {

					$actionid = insert_data($link, 'plans', "name='" . mysqli_real_escape_string($link, CleanXXS($_REQUEST['title'])) . "',type='" . mysqli_real_escape_string($link, CleanXXS($_REQUEST['type'])) . "',price='" . mysqli_real_escape_string($link, CleanXXS($_REQUEST['price'])) . "',status='0',category='Domain'");
					if ($actionid) {

						mysqli_query($link, "COMMIT");
						echo $msg = "success";
						exit();
					} else {
						mysqli_query($link, "ROLLBACK");
						echo $msg = "error";
						exit();
					}  
				}
				else
				{
					mysqli_query($link, "ROLLBACK");
                    echo $msg = "exist";
                    exit();
				}
			}
            mysqli_close($link);
        }
    }
	
	if($_REQUEST['pagetype']=='unlimited_plans')
    {

        //print_r(  $_POST);die;
        if($_POST['title']!='') {

            extract($_POST);
            mysqli_query($link, "SET AUTOCOMMIT=0");
            mysqli_query($link, "START TRANSACTION");

            $entrytime = date("Y-m-d H:i:s");
            //check_duplicate_data($link, 'tabel', 'cloumn', "where");
			if(isset($_REQUEST['id']) && !empty($_REQUEST['id']))
			{
				$res = update_data($link, "plans", "name='" . mysqli_real_escape_string($link, CleanXXS($_REQUEST['title'])) . "',type='" . mysqli_real_escape_string($link, CleanXXS($_REQUEST['type'])) . "',price='" . mysqli_real_escape_string($link, CleanXXS($_REQUEST['price'])) . "',status='" . mysqli_real_escape_string($link, CleanXXS($_REQUEST['status'])) . "'", " id='".$_REQUEST['id']."'");

                if($res)
                {
                    mysqli_query($link, "COMMIT");
                    echo $msg = "success";
                    exit();
                }
                else
                {
                    mysqli_query($link, "ROLLBACK");
                    echo $msg = "error";
                    exit();
                } 
			}
			else
			{
				$cnt = check_duplicate_data($link, 'plans', 'name', "name='" . mysqli_real_escape_string($link, CleanXXS($_REQUEST['title'])) . "' AND type='" . mysqli_real_escape_string($link, CleanXXS($_REQUEST['type'])) . "' AND category='UnlimitedPlans' ");
				if ($cnt == 0) {

					$actionid = insert_data($link, 'plans', "name='" . mysqli_real_escape_string($link, CleanXXS($_REQUEST['title'])) . "',type='" . mysqli_real_escape_string($link, CleanXXS($_REQUEST['type'])) . "',price='" . mysqli_real_escape_string($link, CleanXXS($_REQUEST['price'])) . "',status='0',category='UnlimitedPlans'");
					if ($actionid) {

						mysqli_query($link, "COMMIT");
						echo $msg = "success";
						exit();
					} else {
						mysqli_query($link, "ROLLBACK");
						echo $msg = "error";
						exit();
					}  
				}
				else
				{
					mysqli_query($link, "ROLLBACK");
                    echo $msg = "exist";
                    exit();
				}
			}
            mysqli_close($link);
        }
    }
	
	if($_REQUEST['pagetype']=='update_wallet')
    {

        header('Content-Type: application/json; charset=utf-8'); // Response By Json
		$response = array();
		$response['code'] = 404;
		$response['status'] = 'error';
			
        if($_POST['pagetype']!='') {

            extract($_POST);
            mysqli_query($link, "SET AUTOCOMMIT=0");
            mysqli_query($link, "START TRANSACTION");

            $entrytime = date("Y-m-d H:i:s");
            //check_duplicate_data($link, 'tabel', 'cloumn', "where");
			if(isset($_REQUEST['total_price']) && !empty($_REQUEST['total_price']))
			{
				$res = update_data($link, "user", "current_wallet=current_wallet -  ".$_REQUEST['total_price']." ", "id=$id");
                foreach($_SESSION["shopping_cart"] as $keys => $values){
                    $quantity=$values['product_quantity'];
                    for($x=0;$x<$quantity;$x++){
                    $product_id=$values['product_id'];
                    $res=select_single_data($link,'plans','*',"id='$product_id'");
                    // $sql_s="SELECT * FROM plans where product_id='$product_id'";
                    // $res=mysqli_query($link,$sql);
                    $size=$res['value'];
                    $type=$res['type'];
                    $sql_a="INSERT INTO add_storage (`userid`,`size`,`type`) VALUES ('$id',$size,'$type')";
                    mysqli_query($link,$sql_a);
                    }
                }
                if($res)
                {
                    mysqli_query($link, "COMMIT");
                    $response['msg'] = "success";
					$response['status'] = 'success';
					$response['code'] = 200;
                }
                else
                {
                    mysqli_query($link, "ROLLBACK");
                    $response['msg'] = "error";
					$response['status'] = 'error';
                } 
			}
			else
			{
				mysqli_query($link, "ROLLBACK");
                $response['msg'] = "error";
                $response['status'] = 'error';
			}
            mysqli_close($link);
        }
		echo json_encode($response);
		exit();
    }
}
else
{
	echo "0";
	exit();
}
?>