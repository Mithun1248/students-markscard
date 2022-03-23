<head>

    <title>Status</title>
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
                                <h2 class=" mb-0 flex-grow-1">Status</h2>
								<input type="hidden" name="" class="current_wallet" value="<?=$get_data['current_wallet']?>">
                                
                            </div>
                            <div class="card-body">
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade active show" >
									<?php
									if(isset($_REQUEST['status']) && $_REQUEST['status']=='success')
									{
									?>
                                        <div class="alert alert-success alert-dismissible alert-label-icon label-arrow fade show" role="alert">
											<i class="mdi mdi-check-all label-icon"></i><strong>Success</strong> - Successfull
											<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
										</div>
									<?php
									}else{
									?>
										<div class="alert alert-danger alert-dismissible alert-label-icon label-arrow fade show" role="alert">
											<i class="mdi mdi-block-helper label-icon"></i><strong>Danger</strong> - Something Went Wrong
											<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
										</div>
									<?php
									}
									?>	
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