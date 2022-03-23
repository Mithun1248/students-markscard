<?php
include 'layouts/config.php';
//fetch_item.php
$connect = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME, DB_USERNAME, DB_PASSWORD);
//include('database_connection.php');
$page = $_REQUEST['page'];
if($page=='staogea_plan_monthly')
{
	$category = 'Storage';
	$type = 'Monthly';
	$flag='Month';
}
elseif($page=='staogea_plan_yearly')
{
	$category = 'Storage';
	$type = 'Yearly';
	$flag='Year';
}
elseif($page=='load_files_plan_monthly')
{
	$category = 'Files';
	$type = 'Monthly';
	$flag='Month';
}
elseif($page=='load_files_plan_yearly')
{
	$category = 'Files';
	$type = 'Yearly';
	$flag='Year';
}
elseif($page=='load_webhosting_plan_monthly')
{
	$category = 'WebHosting';
	$type = 'Monthly';
	$flag='Month';
}
elseif($page=='load_webhosting_plan_yearly')
{
	$category = 'WebHosting';
	$type = 'Yearly';
	$flag='Year';
}
elseif($page=='load_mail_plan_monthly')
{
	$category = 'Email';
	$type = 'Monthly';
	$flag='Month';
}
elseif($page=='load_mail_plan_yearly')
{
	$category = 'Email';
	$type = 'Yearly';
	$flag='Year';
}
elseif($page=='load_db_plan_monthly')
{
	$category = 'DB';
	$type = 'Monthly';
	$flag='Month';
}
elseif($page=='load_db_plan_yearly')
{
	$category = 'DB';
	$type = 'Yearly';
	$flag='Year';
}
elseif($page=='load_domain_plan_monthly')
{
	$category = 'Domain';
	$type = 'Monthly';
	$flag='Month';
}
elseif($page=='load_domain_plan_yearly')
{
	$category = 'Domain';
	$type = 'Yearly';
	$flag='Year';
}
elseif($page=='load_ul_plan_monthly')
{
	$category = 'UnlimitedPlans';
	$type = 'Monthly';
	$flag='Month';
}
elseif($page=='load_ul_plan_yearly')
{
	$category = 'UnlimitedPlans';
	$type = 'Yearly';
	$flag='Year';
}
$table = 'plans';
	$query = "SELECT * FROM $table where status='0' and type='$type' AND category='$category' ORDER BY id ASC";

	$statement = $connect->prepare($query);

	if($statement->execute())
	{
		$result = $statement->fetchAll();
		$output = '';
		foreach($result as $row)
		{
			$output .= '
			<div class="col-xl-2 col-sm-6">
				<div class="card mb-xl-0">
					<div class="card-body">
						<div class="p-2">
							<h5 class="font-size-16">'.$row["name"].'</h5>
							<h1 class="mt-3">Rs. '.$row["price"] .' <span class="text-muted font-size-16 fw-medium">/ '.$flag.'</span></h1>
							<p class="text-muted mt-3 font-size-15">For small businesses / larger businesses / extra large businesses or regulated industries</p>
							<!--<div class="mt-4 pt-2 text-muted">
								<p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-secondary font-size-18 me-2"></i>Verifide
									work and
									reviews</p>
								<p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-secondary font-size-18 me-2"></i>Dedicated
									Ac managers</p>
								<p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-secondary font-size-18 me-2"></i>Unlimited
									proposals</p>
								<p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-secondary font-size-18 me-2"></i>Project
									tracking
								</p>
								<p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-secondary font-size-18 me-2"></i>Dedicated
									Ac managers</p>
								<p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-secondary font-size-18 me-2"></i>Unlimited
									proposals</p>
							</div>-->
							<div class="mt-4 pt-2">
							<input type="hidden" name="quantity" id="quantity' . $row["id"] .'" class="form-control" value="1" />
							<input type="hidden" name="hidden_name" id="name'.$row["id"].'" value="'.$row["name"].'" />
							<input type="hidden" name="hidden_price" id="price'.$row["id"].'" value="'.$row["price"].'" />
								<a href="#" class="btn btn-outline-primary w-100 add_to_cart" id="'.$row["id"].'">Add to Cart</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			';
		}
		echo $output;
	}
?>