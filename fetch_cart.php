<?php

//fetch_cart.php

session_start();
$id=$_SESSION['id'];
$total_price = 0;
$total_item = 0;
include('layouts/config.php');
$output = '
<div class="table-responsive" id="order_table">
	<table class="table table-bordered table-striped">
		<tr>  
            <th width="40%">Product Name</th>  
            <th width="10%">Quantity</th>  
            <th width="20%">Price</th>  
            <th width="15%">Total</th>  
            <th width="5%">Action</th>  
        </tr>
';
if(!empty($_SESSION["shopping_cart"]))
{
	foreach($_SESSION["shopping_cart"] as $keys => $values)
	{
		$output .= '
		<tr>
			<td>'.$values["product_name"].'</td>
			<td>'.$values["product_quantity"].'</td>
			<td align="right">R '.$values["product_price"].'</td>
			<td align="right">R '.number_format($values["product_quantity"] * $values["product_price"], 2).'</td>
			<td><button name="delete" class="btn btn-danger btn-xs delete" id="'. $values["product_id"].'">Remove</button></td>
		</tr>
		';
		$total_price = $total_price + ($values["product_quantity"] * $values["product_price"]);
		$total_item = $total_item + 1;
	// }
	// foreach($_SESSION["shopping_cart"] as $keys => $values){
	}
	$output .= '
	<tr>  
        <td colspan="3" align="right">Total</td>  
        <td align="right">R '.number_format($total_price, 2).'</td>  
        <td></td>  
    </tr>
	';
}
else
{
	$output .= '
    <tr>
    	<td colspan="5" align="center">
    		Your Cart is Empty!
    	</td>
    </tr>
    ';
}
if($total_price > 0 && isset($_POST['type']) && $_POST['type']=='checkout')
{
	$tax = $total_price * 20 / 100;
	$output .= '
    <tr>  
        <td colspan="3" align="right">Tax (20%)</td>  
        <td align="right">Rs '.number_format($tax, 2).'</td>  
        <td></td>  
    </tr>
	<tr>  
        <td colspan="3" align="right">Grand Total</td>  
        <td align="right">Rs '.number_format($total_price + $tax, 2).'</td>  
        <td><input type="hidden" class="grand_total" value="'.$total_price + $tax.'"></td>  
    </tr>
    ';
}
$output .= '</table></div>';
$data = array(
	'cart_details'		=>	$output,
	'total_price'		=>	'R' . number_format($total_price + $tax, 2),
	'total_item'		=>	$total_item
);	

echo json_encode($data);


?>