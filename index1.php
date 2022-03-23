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

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Pricing</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                                    <li class="breadcrumb-item active">Pricing</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
				<div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">
								<a id="cart-popover" class="btn" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg" title="Shopping Cart">
									<span class=" fas fa-cart-plus"></span>
									<span class="badge"></span>
									<div class="btn-group badge" role="group" aria-label="Third group">
                                        <button type="button" class="btn btn-sm btn-secondary badge_1">0</button>
                                    </div>
									<span class="total_price">0.00</span>
								</a>
							</h4>
                        </div>
                    </div>
                </div>
				<!--<div id="popover_content_wrapper" style="display: none">
					<span id="cart_details"></span>
					<div align="right">
						<a href="#" class="btn btn-primary" id="check_out_cart">
						<span class=" fas fa-cart-plus"></span> Check out
						</a>
						<a href="#" class="btn btn-danger" id="clear_cart">
						<span class="fas fa-trash"></span> Clear
						</a>
					</div>
				</div>
                end page title -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header d-flex">
                                <!--<h2 class="card-title mb-0 flex-grow-1">Storage Plans</h2>-->
                                <h2 class=" mb-0 flex-grow-1">Storage Plans</h2>
                                <div class="flex-shrink-0 align-self-end">
                                    <ul class="nav justify-content-end nav-tabs-custom rounded card-header-tabs" id="pills-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link px-3 rounded monthly active" id="monthly" data-bs-toggle="pill" href="#month" role="tab" aria-controls="month" aria-selected="true">Monthly</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link px-3 rounded yearly" id="yearly" data-bs-toggle="pill" href="#year" role="tab" aria-controls="year" aria-selected="false">Yearly</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade active show" id="month" role="tabpanel" aria-labelledby="monthly">
                                        <div class="row load_storage_plan_monthly">
                                            <div class="col-xl-3 col-sm-6">
                                                <div class="card mb-xl-0">
                                                    <div class="card-body">
                                                        <div class="p-2">
                                                            <h5 class="font-size-16">Stopper</h5>
                                                            <h1 class="mt-3">$2 <span class="text-muted font-size-16 fw-medium">/ Month</span></h1>
                                                            <p class="text-muted mt-3 font-size-15">For small teams trying out Minia for an unlimited
                                                                period of time</p>
                                                            <div class="mt-4 pt-2 text-muted">
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
                                                            </div>

                                                            <div class="mt-4 pt-2">
                                                                <a href="" class="btn btn-outline-primary w-100">Choose Plan</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end card body -->
                                                </div>
                                                <!-- end card -->
                                            </div>
                                            <!-- end col -->

                                            <div class="col-xl-3 col-sm-6">
                                                <div class="card mb-xl-0">
                                                    <div class="card-body">
                                                        <div class="p-2">
                                                            <h5 class="font-size-16">Professional</h5>
                                                            <h1 class="mt-3">$49 <span class="text-muted font-size-16 fw-medium">/ Month</span></h1>
                                                            <p class="text-muted mt-3 font-size-15">For larger businesses or those with onal administration needs</p>
                                                            <div class="mt-4 pt-2 text-muted">
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
                                                            </div>

                                                            <div class="mt-4 pt-2">
                                                                <a href="" class="btn btn-outline-primary w-100">Choose Plan</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end card body -->
                                                </div>
                                                <!-- end card -->
                                            </div>
                                            <!-- end col -->

                                            <div class="col-xl-3 col-sm-6">
                                                <div class="card bg-primary mb-xl-0">
                                                    <div class="card-body">
                                                        <div class="p-2">
                                                            <div class="pricing-badge">
                                                                <span class="badge">Featured</span>
                                                            </div>
                                                            <h5 class="font-size-16 text-white">Enterprise</h5>
                                                            <h1 class="mt-3 text-white">$79 <span class="text-white font-size-16 fw-medium">/ Month</span></h1>
                                                            <p class="text-white-50 mt-3 font-size-15">For extra large businesses or those in regulated industries</p>
                                                            <div class="mt-4 pt-2 text-white">
                                                                <p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-light font-size-18 me-2"></i>Verifide
                                                                    work and
                                                                    reviews</p>
                                                                <p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-light font-size-18 me-2"></i>Dedicated
                                                                    Ac managers</p>
                                                                <p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-light font-size-18 me-2"></i>Unlimited
                                                                    proposals</p>
                                                                <p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-light font-size-18 me-2"></i>Project
                                                                    tracking
                                                                </p>
                                                                <p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-light font-size-18 me-2"></i>Dedicated
                                                                    Ac managers</p>
                                                                <p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-light font-size-18 me-2"></i>Unlimited
                                                                    proposals</p>
                                                            </div>

                                                            <div class="mt-4 pt-2">
                                                                <a href="" class="btn btn-light w-100">Choose Plan</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end card body -->
                                                </div>
                                                <!-- end card -->
                                            </div>
                                            <!-- end col -->

                                            <div class="col-xl-3 col-sm-6">
                                                <div class="card mb-0">
                                                    <div class="card-body">
                                                        <div class="p-2">
                                                            <h5 class="font-size-16">Unlimited</h5>
                                                            <h1 class="mt-3">$99 <span class="text-muted font-size-16 fw-medium">/ Month</span></h1>
                                                            <p class="text-muted mt-3 font-size-15">For small teams trying out Minia for an unlimited
                                                                period of time</p>
                                                            <div class="mt-4 pt-2 text-muted">
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
                                                            </div>

                                                            <div class="mt-4 pt-2">
                                                                <a href="" class="btn btn-outline-primary w-100">Choose Plan</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end card body -->
                                                </div>
                                                <!-- end card -->
                                            </div>
                                            <!-- end col -->
                                        </div>
                                        <!-- end row -->
                                    </div>
                                    <!-- end tab pane -->
                                    <div class="tab-pane fade" id="year" role="tabpanel" aria-labelledby="yearly">
                                        <div class="row load_storage_plan_yearly">
                                            <div class="col-lg-3">
                                                <div class="card mb-0">
                                                    <div class="card-body">
                                                        <div class="p-2">
                                                            <h5 class="font-size-16">Starter</h5>
                                                            <h1 class="mt-3">$129 <span class="text-muted font-size-16 fw-medium">/ Yearly</span></h1>
                                                            <p class="text-muted mt-3 font-size-15">For small teams trying out Minia for an unlimited
                                                                period of time</p>
                                                            <div class="mt-4 pt-2 text-muted">
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
                                                            </div>

                                                            <div class="mt-4 pt-2">
                                                                <a href="" class="btn btn-outline-primary w-100">Choose Plan</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end card body -->
                                                </div>
                                                <!-- end card -->
                                            </div>
                                            <!-- end col -->

                                            <div class="col-lg-3">
                                                <div class="card mb-0">
                                                    <div class="card-body">
                                                        <div class="p-2">
                                                            <h5 class="font-size-16">Professional</h5>
                                                            <h1 class="mt-3">$149 <span class="text-muted font-size-16 fw-medium">/ Yearly</span></h1>
                                                            <p class="text-muted mt-3 font-size-15">For larger businesses or those with onal administration needs</p>
                                                            <div class="mt-4 pt-2 text-muted">
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
                                                            </div>

                                                            <div class="mt-4 pt-2">
                                                                <a href="" class="btn btn-outline-primary w-100">Choose Plan</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end card body -->
                                                </div>
                                                <!-- end card -->
                                            </div>
                                            <!-- end col -->

                                            <div class="col-lg-3">
                                                <div class="card bg-primary mb-0">
                                                    <div class="card-body">
                                                        <div class="p-2">
                                                            <div class="pricing-badge">
                                                                <span class="badge">Featured</span>
                                                            </div>
                                                            <h5 class="font-size-16 text-white">Enterprise</h5>
                                                            <h1 class="mt-3 text-white">$179 <span class="text-white font-size-16 fw-medium">/ Yearly</span></h1>
                                                            <p class="text-white-50 mt-3 font-size-15">For extra large businesses or those in regulated industries</p>
                                                            <div class="mt-4 pt-2 text-white">
                                                                <p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-light font-size-18 me-2"></i>Verifide
                                                                    work and
                                                                    reviews</p>
                                                                <p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-light font-size-18 me-2"></i>Dedicated
                                                                    Ac managers</p>
                                                                <p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-light font-size-18 me-2"></i>Unlimited
                                                                    proposals</p>
                                                                <p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-light font-size-18 me-2"></i>Project
                                                                    tracking
                                                                </p>
                                                                <p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-light font-size-18 me-2"></i>Dedicated
                                                                    Ac managers</p>
                                                                <p class="mb-3 font-size-15"><i class="mdi mdi-check-circle text-light font-size-18 me-2"></i>Unlimited
                                                                    proposals</p>
                                                            </div>

                                                            <div class="mt-4 pt-2">
                                                                <a href="" class="btn btn-light w-100">Choose Plan</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end card body -->
                                                </div>
                                                <!-- end card -->
                                            </div>
                                            <!-- end col -->

                                            <div class="col-lg-3">
                                                <div class="card mb-0">
                                                    <div class="card-body">
                                                        <div class="p-2">
                                                            <h5 class="font-size-16">Unlimited</h5>
                                                            <h1 class="mt-3">$199 <span class="text-muted font-size-16 fw-medium">/ Yearly</span></h1>
                                                            <p class="text-muted mt-3 font-size-15">For small teams trying out Minia for an unlimited
                                                                period of time</p>
                                                            <div class="mt-4 pt-2 text-muted">
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
                                                            </div>

                                                            <div class="mt-4 pt-2">
                                                                <a href="" class="btn btn-outline-primary w-100">Choose Plan</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end card body -->
                                                </div>
                                                <!-- end card -->
                                            </div>
                                            <!-- end col -->
                                        </div>
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
				
				<div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header d-flex">
                                <!--<h2 class="card-title mb-0 flex-grow-1">Storage Plans</h2>-->
                                <h2 class=" mb-0 flex-grow-1">Files Plans</h2>
                                <div class="flex-shrink-0 align-self-end">
                                    <ul class="nav justify-content-end nav-tabs-custom rounded card-header-tabs" id="pills-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link px-3 rounded monthly active" id="monthly_files" data-bs-toggle="pill" href="#monthfiles" role="tab" aria-controls="monthfiles" aria-selected="true">Monthly</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link px-3 rounded yearly" id="yearly_files" data-bs-toggle="pill" href="#yearfiles" role="tab" aria-controls="yearfiles" aria-selected="false">Yearly</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade active show" id="monthfiles" role="tabpanel" aria-labelledby="monthly_files">
                                        <div class="row load_files_plan_monthly">
                                            
                                        </div>
                                        <!-- end row -->
                                    </div>
                                    <!-- end tab pane -->
                                    <div class="tab-pane fade" id="yearfiles" role="tabpanel" aria-labelledby="yearly_files">
                                        <div class="row load_files_plan_yearly">
                                           
                                        </div>
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
                <!-- end row -->
				
				<div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header d-flex">
                                <!--<h2 class="card-title mb-0 flex-grow-1">Storage Plans</h2>-->
                                <h2 class=" mb-0 flex-grow-1">Web Hosting Service Plans</h2>
                                <div class="flex-shrink-0 align-self-end">
                                    <ul class="nav justify-content-end nav-tabs-custom rounded card-header-tabs" id="pills-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link px-3 rounded monthly active" id="monthly_webhosting" data-bs-toggle="pill" href="#monthwebhosting" role="tab" aria-controls="monthwebhosting" aria-selected="true">Monthly</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link px-3 rounded yearly" id="yearly_webhosting" data-bs-toggle="pill" href="#yearwebhosting" role="tab" aria-controls="yearwebhosting" aria-selected="false">Yearly</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade active show" id="monthwebhosting" role="tabpanel" aria-labelledby="monthly_webhosting">
                                        <div class="row load_webhosting_plan_monthly">
                                            
                                        </div>
                                        <!-- end row -->
                                    </div>
                                    <!-- end tab pane -->
                                    <div class="tab-pane fade" id="yearwebhosting" role="tabpanel" aria-labelledby="yearly_webhosting">
                                        <div class="row load_webhosting_plan_yearly">
                                           
                                        </div>
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
                <!-- end row -->
				
				<div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header d-flex">
                                <!--<h2 class="card-title mb-0 flex-grow-1">Storage Plans</h2>-->
                                <h2 class=" mb-0 flex-grow-1">Email Plans</h2>
                                <div class="flex-shrink-0 align-self-end">
                                    <ul class="nav justify-content-end nav-tabs-custom rounded card-header-tabs" id="pills-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link px-3 rounded monthly active" id="monthly_email" data-bs-toggle="pill" href="#monthemail" role="tab" aria-controls="monthemail" aria-selected="true">Monthly</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link px-3 rounded yearly" id="yearly_email" data-bs-toggle="pill" href="#yearmail" role="tab" aria-controls="yearmail" aria-selected="false">Yearly</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade active show" id="monthemail" role="tabpanel" aria-labelledby="monthly_email">
                                        <div class="row load_mail_plan_monthly">
                                            
                                        </div>
                                        <!-- end row -->
                                    </div>
                                    <!-- end tab pane -->
                                    <div class="tab-pane fade" id="yearmail" role="tabpanel" aria-labelledby="yearly_email">
                                        <div class="row load_mail_plan_yearly">
                                           
                                        </div>
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
                <!-- end row -->
				
				<div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header d-flex">
                                <!--<h2 class="card-title mb-0 flex-grow-1">Storage Plans</h2>-->
                                <h2 class=" mb-0 flex-grow-1">DB Plans</h2>
                                <div class="flex-shrink-0 align-self-end">
                                    <ul class="nav justify-content-end nav-tabs-custom rounded card-header-tabs" id="pills-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link px-3 rounded monthly active" id="monthly_db" data-bs-toggle="pill" href="#monthdb" role="tab" aria-controls="monthdb" aria-selected="true">Monthly</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link px-3 rounded yearly" id="yearly_db" data-bs-toggle="pill" href="#yeardb" role="tab" aria-controls="yeardb" aria-selected="false">Yearly</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade active show" id="monthdb" role="tabpanel" aria-labelledby="monthly_db">
                                        <div class="row load_db_plan_monthly">
                                            
                                        </div>
                                        <!-- end row -->
                                    </div>
                                    <!-- end tab pane -->
                                    <div class="tab-pane fade" id="yeardb" role="tabpanel" aria-labelledby="yearly_db">
                                        <div class="row load_db_plan_yearly">
                                           
                                        </div>
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
                <!-- end row -->
				
				<div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header d-flex">
                                <!--<h2 class="card-title mb-0 flex-grow-1">Storage Plans</h2>-->
                                <h2 class=" mb-0 flex-grow-1">Domains Plans</h2>
                                <div class="flex-shrink-0 align-self-end">
                                    <ul class="nav justify-content-end nav-tabs-custom rounded card-header-tabs" id="pills-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link px-3 rounded monthly " id="monthly_domain" data-bs-toggle="pill" href="#monthdomain" role="tab" aria-controls="monthdomain" aria-selected="true">Monthly</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link px-3 rounded yearly active" id="yearly_domain" data-bs-toggle="pill" href="#yeardomain" role="tab" aria-controls="yeardomain" aria-selected="false">Yearly</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade  " id="monthdomain" role="tabpanel" aria-labelledby="monthly_domain">
                                        <div class="row load_domain_plan_monthly">
                                            
                                        </div>
                                        <!-- end row -->
                                    </div>
                                    <!-- end tab pane -->
                                    <div class="tab-pane fade active show" id="yeardomain" role="tabpanel" aria-labelledby="yearly_domain">
                                        <div class="row load_domain_plan_yearly">
                                           
                                        </div>
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
                <!-- end row -->
				
				<div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header d-flex">
                                <!--<h2 class="card-title mb-0 flex-grow-1">Storage Plans</h2>-->
                                <h2 class=" mb-0 flex-grow-1">Unlimited  Plans</h2>
                                <div class="flex-shrink-0 align-self-end">
                                    <ul class="nav justify-content-end nav-tabs-custom rounded card-header-tabs" id="pills-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link px-3 rounded monthly active" id="monthly_ul" data-bs-toggle="pill" href="#monthul" role="tab" aria-controls="monthul" aria-selected="true">Monthly</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link px-3 rounded yearly" id="yearly_ul" data-bs-toggle="pill" href="#yearul" role="tab" aria-controls="yearul" aria-selected="false">Yearly</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade active show" id="monthul" role="tabpanel" aria-labelledby="monthly_ul">
                                        <div class="row load_ul_plan_monthly">
                                            
                                        </div>
                                        <!-- end row -->
                                    </div>
                                    <!-- end tab pane -->
                                    <div class="tab-pane fade" id="yearul" role="tabpanel" aria-labelledby="yearly_ul">
                                        <div class="row load_ul_plan_yearly">
                                           
                                        </div>
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
                <!-- end row -->

                <!--<div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Project Plans</h4>
                                <p class="card-title-desc">Call to action pricing table is really crucial to your for your business website.
                                    Make your bids stand-out with amazing options.
                                </p>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-3">
                                        <div class="nav flex-column nav-pills pricing-tab-box" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            <a class="nav-link mb-3 active" id="v-pills-tab-one" data-bs-toggle="pill" href="#v-price-one" role="tab" aria-controls="v-price-one" aria-selected="true">
                                                <div class="d-flex align-items-center">
                                                    <i class="bx bx-check-circle h3 mb-0 me-4"></i>
                                                    <div class="flex-1">
                                                        <h2 class="fw-medium">$29 <span class="text-muted font-size-15">/ Month Plans</span></h2>
                                                        <p class="fw-normal mb-0 text-muted">For small teams trying out Minia for an unlimited period of time</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="nav-link mb-3" id="v-pills-tab-two" data-bs-toggle="pill" href="#v-price-two" role="tab" aria-controls="v-price-two" aria-selected="false">
                                                <div class="d-flex align-items-center">
                                                    <i class="bx bx-check-circle h3 mb-0 me-4"></i>
                                                    <div class="flex-1">
                                                        <h2 class="fw-medium">$79 <span class="text-muted font-size-15">/ Month Plans</span></h2>
                                                        <p class="fw-normal mb-0 text-muted">For larger businesses or those with onal administration needs</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="nav-link" id="v-pills-tab-three" data-bs-toggle="pill" href="#v-price-three" role="tab" aria-controls="v-price-three" aria-selected="false">
                                                <div class="d-flex align-items-center">
                                                    <i class="bx bx-check-circle h3 mb-0 me-4"></i>
                                                    <div class="flex-1">
                                                        <h2 class="fw-medium">$99 <span class="text-muted font-size-15">/ Month Plans</span></h2>
                                                        <p class="fw-normal mb-0 text-muted">For extra large businesses or those in regulated industries</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-xl-9">
                                        <div class="tab-content text-muted mt-4 mt-xl-0" id="v-pills-tabContent">
                                            <div class="tab-pane fade show active" id="v-price-one" role="tabpanel" aria-labelledby="v-pills-tab-one">
                                                <div class="table-responsive text-center">
                                                    <table class="table table-bordered mb-0 table-centered">
                                                        <tbody>
                                                            <tr>
                                                                <td></td>
                                                                <td style="width: 20%;">
                                                                    <div class="py-3">
                                                                        <h5 class="font-size-16 mb-0">1 Month</h5>
                                                                    </div>
                                                                </td>
                                                                <td style="width: 20%;">
                                                                    <div class="py-3">
                                                                        <h5 class="font-size-16 mb-0">3 Month</h5>
                                                                    </div>
                                                                </td>
                                                                <td style="width: 20%;">
                                                                    <div class="py-3">
                                                                        <h5 class="font-size-16 mb-0">6 Month</h5>
                                                                    </div>
                                                                </td>
                                                                <td style="width: 20%;">
                                                                    <div class="py-3">
                                                                        <h5 class="font-size-16 mb-0">1 Year</h5>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Users</th>
                                                                <td>1</td>
                                                                <td>3</td>
                                                                <td>5</td>
                                                                <td>7</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Storage</th>
                                                                <td>1 GB</td>
                                                                <td>10 GB</td>
                                                                <td>20 GB</td>
                                                                <td>40 GB</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Domain</th>
                                                                <td>
                                                                    <div>
                                                                        <i class="mdi mdi-close-circle text-danger font-size-20"></i>
                                                                    </div>
                                                                </td>
                                                                <td>1</td>
                                                                <td>2</td>
                                                                <td>4</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Hidden Fees</th>
                                                                <td>Yes</td>
                                                                <td>Yes</td>
                                                                <td>No</td>
                                                                <td>No</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Support</th>
                                                                <td>
                                                                    <div>
                                                                        <i class="mdi mdi-close-circle text-danger font-size-20"></i>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        <i class="mdi mdi-check-circle text-success font-size-20"></i>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        <i class="mdi mdi-check-circle text-success font-size-20"></i>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        <i class="mdi mdi-check-circle text-success font-size-20"></i>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Update</th>
                                                                <td>
                                                                    <div>
                                                                        <i class="mdi mdi-close-circle text-danger font-size-20"></i>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        <i class="mdi mdi-close-circle text-danger font-size-20"></i>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        <i class="mdi mdi-check-circle text-success font-size-20"></i>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        <i class="mdi mdi-check-circle text-success font-size-20"></i>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="v-price-two" role="tabpanel" aria-labelledby="v-pills-tab-two">
                                                <div class="table-responsive text-center">
                                                    <table class="table table-bordered mb-0 table-centered">
                                                        <tbody>
                                                            <tr>
                                                                <td></td>
                                                                <td style="width: 20%;">
                                                                    <div class="py-3">
                                                                        <h5 class="font-size-16 mb-0">1 Month</h5>
                                                                    </div>
                                                                </td>
                                                                <td style="width: 20%;">
                                                                    <div class="py-3">
                                                                        <h5 class="font-size-16 mb-0">3 Month</h5>
                                                                    </div>
                                                                </td>
                                                                <td style="width: 20%;">
                                                                    <div class="py-3">
                                                                        <h5 class="font-size-16 mb-0">6 Month</h5>
                                                                    </div>
                                                                </td>
                                                                <td style="width: 20%;">
                                                                    <div class="py-3">
                                                                        <h5 class="font-size-16 mb-0">1 Year</h5>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Users</th>
                                                                <td>1</td>
                                                                <td>3</td>
                                                                <td>5</td>
                                                                <td>7</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Storage</th>
                                                                <td>5 GB</td>
                                                                <td>15 GB</td>
                                                                <td>25 GB</td>
                                                                <td>50 GB</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Domain</th>
                                                                <td>
                                                                    <div>
                                                                        <i class="mdi mdi-close-circle text-danger font-size-20"></i>
                                                                    </div>
                                                                </td>
                                                                <td>3</td>
                                                                <td>4</td>
                                                                <td>8</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Hidden Fees</th>
                                                                <td>Yes</td>
                                                                <td>No</td>
                                                                <td>No</td>
                                                                <td>No</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Support</th>
                                                                <td>
                                                                    <div>
                                                                        <i class="mdi mdi-check-circle text-success font-size-20"></i>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        <i class="mdi mdi-check-circle text-success font-size-20"></i>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        <i class="mdi mdi-check-circle text-success font-size-20"></i>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        <i class="mdi mdi-check-circle text-success font-size-20"></i>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Update</th>
                                                                <td>
                                                                    <div>
                                                                        <i class="mdi mdi-close-circle text-danger font-size-20"></i>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        <i class="mdi mdi-check-circle text-success font-size-20"></i>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        <i class="mdi mdi-check-circle text-success font-size-20"></i>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        <i class="mdi mdi-check-circle text-success font-size-20"></i>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="v-price-three" role="tabpanel" aria-labelledby="v-pills-tab-three">
                                                <div class="table-responsive text-center">
                                                    <table class="table table-bordered mb-0 table-centered align-middle">
                                                        <tbody>
                                                            <tr>
                                                                <td></td>
                                                                <td style="width: 20%;">
                                                                    <div class="py-3">
                                                                        <h5 class="font-size-16 mb-0">1 Month</h5>
                                                                    </div>
                                                                </td>
                                                                <td style="width: 20%;">
                                                                    <div class="py-3">
                                                                        <h5 class="font-size-16 mb-0">3 Month</h5>
                                                                    </div>
                                                                </td>
                                                                <td style="width: 20%;">
                                                                    <div class="py-3">
                                                                        <h5 class="font-size-16 mb-0">6 Month</h5>
                                                                    </div>
                                                                </td>
                                                                <td style="width: 20%;">
                                                                    <div class="py-3">
                                                                        <h5 class="font-size-16 mb-0">1 Year</h5>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Users</th>
                                                                <td>1</td>
                                                                <td>3</td>
                                                                <td>5</td>
                                                                <td>7</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Storage</th>
                                                                <td>5 GB</td>
                                                                <td>30 GB</td>
                                                                <td>50 GB</td>
                                                                <td>100 GB</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Domain</th>
                                                                <td>
                                                                    <div>
                                                                        <i class="mdi mdi-check-circle text-success font-size-20"></i>
                                                                    </div>
                                                                </td>
                                                                <td>3</td>
                                                                <td>5</td>
                                                                <td>10</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Hidden Fees</th>
                                                                <td>No</td>
                                                                <td>No</td>
                                                                <td>No</td>
                                                                <td>No</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Support</th>
                                                                <td>
                                                                    <div>
                                                                        <i class="mdi mdi-check-circle text-success font-size-20"></i>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        <i class="mdi mdi-check-circle text-success font-size-20"></i>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        <i class="mdi mdi-check-circle text-success font-size-20"></i>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        <i class="mdi mdi-check-circle text-success font-size-20"></i>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Update</th>
                                                                <td>
                                                                    <div>
                                                                        <i class="mdi mdi-check-circle text-success font-size-20"></i>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        <i class="mdi mdi-check-circle text-success font-size-20"></i>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        <i class="mdi mdi-check-circle text-success font-size-20"></i>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        <i class="mdi mdi-check-circle text-success font-size-20"></i>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


        <?php include 'layouts/footer.php'; ?>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->
<!--  Large modal example -->
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" data-toggle="modal" aria-labelledby="staticBackdropLabel" data-bs-backdrop="static" id="exampleModalCenter">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myLargeModalLabel">Enter Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="customer_form" method="post" name="sponsor" action="<?=$_SERVER['PHP_SELF'];?>" onsubmit="return validation(this);" enctype="multipart/form-data">
                            <div class="modal-body" id="cart_details">
                                
                            </div>
							
							<div class="modal-footer">
                                <a href="checkout.php" class="btn btn-primary" id="check_out_cart">
								<span class=" fas fa-cart-plus"></span> Check out
								</a>
								<a href="#" class="btn btn-danger" id="clear_cart">
								<span class="fas fa-trash"></span> Clear
								</a>
                            </div>
                        </form>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

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

	load_plans();

	load_cart_data();
    
	function load_plans()
	{
		$.ajax({
			url:"load_plans.php",
			method:"POST",
			data:{page:'staogea_plan_monthly'},
			success:function(data)
			{
				$('.load_storage_plan_monthly').html(data);
			}
		});
		
		$.ajax({
			url:"load_plans.php",
			method:"POST",
			data:{page:'staogea_plan_yearly'},
			success:function(data)
			{
				$('.load_storage_plan_yearly').html(data);
			}
		});
		
		$.ajax({
			url:"load_plans.php",
			method:"POST",
			data:{page:'load_files_plan_monthly'},
			success:function(data)
			{
				$('.load_files_plan_monthly').html(data);
			}
		});
		
		$.ajax({
			url:"load_plans.php",
			method:"POST",
			data:{page:'load_files_plan_yearly'},
			success:function(data)
			{
				$('.load_files_plan_yearly').html(data);
			}
		});
		
		$.ajax({
			url:"load_plans.php",
			method:"POST",
			data:{page:'load_webhosting_plan_monthly'},
			success:function(data)
			{
				$('.load_webhosting_plan_monthly').html(data);
			}
		});
		
		$.ajax({
			url:"load_plans.php",
			method:"POST",
			data:{page:'load_webhosting_plan_yearly'},
			success:function(data)
			{
				$('.load_webhosting_plan_yearly').html(data);
			}
		});
		
		$.ajax({
			url:"load_plans.php",
			method:"POST",
			data:{page:'load_mail_plan_monthly'},
			success:function(data)
			{
				$('.load_mail_plan_monthly').html(data);
			}
		});
		
		$.ajax({
			url:"load_plans.php",
			method:"POST",
			data:{page:'load_mail_plan_yearly'},
			success:function(data)
			{
				$('.load_mail_plan_yearly').html(data);
			}
		});
		
		$.ajax({
			url:"load_plans.php",
			method:"POST",
			data:{page:'load_db_plan_monthly'},
			success:function(data)
			{
				$('.load_db_plan_monthly').html(data);
			}
		});
		
		$.ajax({
			url:"load_plans.php",
			method:"POST",
			data:{page:'load_db_plan_yearly'},
			success:function(data)
			{
				$('.load_db_plan_yearly').html(data);
			}
		});
		
		$.ajax({
			url:"load_plans.php",
			method:"POST",
			data:{page:'load_domain_plan_monthly'},
			success:function(data)
			{
				$('.load_domain_plan_monthly').html(data);
			}
		});
		
		$.ajax({
			url:"load_plans.php",
			method:"POST",
			data:{page:'load_domain_plan_yearly'},
			success:function(data)
			{
				$('.load_domain_plan_yearly').html(data);
			}
		});
		
		$.ajax({
			url:"load_plans.php",
			method:"POST",
			data:{page:'load_ul_plan_monthly'},
			success:function(data)
			{
				$('.load_ul_plan_monthly').html(data);
			}
		});
		
		$.ajax({
			url:"load_plans.php",
			method:"POST",
			data:{page:'load_ul_plan_yearly'},
			success:function(data)
			{
				$('.load_ul_plan_yearly').html(data);
			}
		});
	}

	function load_cart_data()
	{
		$.ajax({
			url:"fetch_cart.php",
			method:"POST",
			dataType:"json",
			data:{type:'view'},
			success:function(data)
			{//alert(data.cart_details)
				$('#cart_details').html(data.cart_details);
				$('.total_price').text(data.total_price);
				$('.badge_1').text(data.total_item);
			}
		});
	}

	$('#cart-popover').popover({
		html : true,
        container: 'body',
        content:function(){
        	return $('#popover_content_wrapper').html();
        }
	});

	$(document).on('click', '.add_to_cart', function(){
		var product_id = $(this).attr("id");
		var product_name = $('#name'+product_id+'').val();
		var product_price = $('#price'+product_id+'').val();
		var product_quantity = $('#quantity'+product_id).val();
		var action = "add";
		if(product_quantity > 0)
		{
			$.ajax({
				url:"action.php",
				method:"POST",
				data:{product_id:product_id, product_name:product_name, product_price:product_price, product_quantity:product_quantity, action:action},
				success:function(data)
				{
					load_cart_data();
					//alert("Item has been Added into Cart");
				}
			});
		}
		else
		{
			alert("lease Enter Number of Quantity");
		}
	});

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

</script>