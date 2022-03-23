<?php


include('layouts/config.php');
include('layouts/function.php');
$id=11;
$quantity=3;
                    for($x=0;$x<$quantity;$x++){
                    $product_id=8;
                    $res=select_single_data($link,'plans','*',"id='$product_id'");
                    // $sql_s="SELECT * FROM plans where product_id='$product_id'";
                    // $res=mysqli_query($link,$sql);
                    $size=$res['value'];
                    $type=$res['type'];
                    $sql_a="INSERT INTO add_storage (`userid`,`size`,`type`) VALUES ('$id',$size,'$type')";
                    mysqli_query($link,$sql_a);
                    }
                ?>