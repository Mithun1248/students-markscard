<head>

    <title>Pricing</title>
    <?php include 'layouts/head.php'; ?>
    <?php include 'layouts/head-style.php'; 
		include 'layouts/config.php';
		require 'layouts/function.php';
		session_start();
		$id=$_SESSION['id'];
		$get_data = select_single_data($link,'user','*',"id=$id");
	?>

</head>

<?php include 'layouts/body.php'; ?>

<!-- Begin page -->
<div id="layout-wrapper">

    <?php include 'layouts/menu.php'; ?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
				<div class="row">
                    <div class="col-lg-12">
                        <div class="card">
							<div class="card-header d-flex">
                                <!--<h2 class="card-title mb-0 flex-grow-1">Storage Plans</h2>-->
                                <h2 class=" mb-0 flex-grow-1">Checkout</h2>
								<input type="hidden" name="" class="current_wallet" value="<?=$get_data['current_wallet']?>"/>
                                
                            </div>
                            <div class="card-body">
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade active show" >
                                        <div class="" id="cart_details">

										</div>
										<div class="modal-footer">
											<a class="btn btn-primary" id="check_out_cart" onclick="checkout()">
											<span class=" fas fa-cart-plus"></span> Check out
											</a>
										</div>
                                        <!-- end row -->
                                    </div>
                                    
                                    <!-- end tab pane -->
                                </div>
                                <!-- end tab content -->
                            </div>
							<!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
			</div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


        <?php include 'layouts/footer.php'; ?>
    </div>
    <!-- end main content-->

</div>


<!-- Right Sidebar -->
<?php include 'layouts/right-sidebar.php'; ?>
<!-- /Right-bar -->

<!-- JAVASCRIPT -->

<?php include 'layouts/vendor-scripts.php'; ?>

<script src="assets/js/app.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>

</html>
<script>  
$(document).ready(function(){

	load_cart_data();
    
	function load_cart_data()
	{
		$.ajax({
			url:"fetch_cart.php",
			method:"POST",
			dataType:"json",
			data:{type:'checkout'},
			success:function(data)
			{//alert(data.cart_details)
				$('#cart_details').html(data.cart_details);
				$('.total_price').text(data.total_price);
				$('.badge_1').text(data.total_item);
			}
		});
	}


	$(document).on('click', '.delete', function(){
		var product_id = $(this).attr("id");
		var action = 'remove';
		if(confirm("Are you sure you want to remove this product?"))
		{
			$.ajax({
				url:"action.php",
				method:"POST",
				data:{product_id:product_id, action:action},
				success:function()
				{
					load_cart_data();
					$('#cart-popover').popover('hide');
					//alert("Item has been removed from Cart");
				}
			})
		}
		else
		{
			return false;
		}
	});

	$(document).on('click', '#clear_cart', function(){
		var action = 'empty';
		$.ajax({
			url:"action.php",
			method:"POST",
			data:{action:action},
			success:function()
			{
				load_cart_data();
				$('#cart-popover').popover('hide');
				//alert("Your Cart has been clear");
			}
		});
	}); 
});

function checkout()
{
	var total_price = $('.grand_total').val();
	var current_wallet = $('.current_wallet').val();
	
	if(parseFloat(total_price) > parseFloat(current_wallet))
	{
		alert("Your Current Wallet Balance Is Less");
		return false;
	}
	else
	{
		
		$.post('submit_ajax.php',{total_price:parseFloat(total_price),submit:'submit',pagetype:'update_wallet'},function(data){
			if(data!='')
			{
				if(data.status=='success')
				{
					empty_cart();
					window.location.href = "status.php?status=success";
				}
				else
				{
					window.location.href = "status.php?status=error";
				}
			}
			else
			{
				window.location.href = "status.php?status=erroe";
			}
		});
	}
}

function empty_cart()
{
	var action = 'empty';
	$.ajax({
		url:"action.php",
		method:"POST",
		data:{action:action},
		success:function()
		{
			//load_cart_data();
			//$('#cart-popover').popover('hide');
			//alert("Your Cart has been clear");
		}
	});
}
</script>