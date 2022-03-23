<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>
<?php
include 'layouts/config.php';
require 'layouts/function.php';

$tnc = select_data_array($link,'plans','*',"and category='UnlimitedPlans'",'','','','');
?>

<head>

    <title><?=THEME_TITLE?> | Master Sessing</title>
    <?php include 'layouts/head.php'; ?>

    <!-- DataTables -->
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <?php include 'layouts/head-style.php'; ?>

</head>

<?php include 'layouts/body.php'; ?>

<!-- Begin page -->
<div id="layout-wrapper">

    <?php include 'layouts/vertical-menu-admin.php'; ?>

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
                            <h4 class="mb-sm-0 font-size-18">Master Setting</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Master</a></li>
                                    <li class="breadcrumb-item active">Unlimited Plans</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div style="margin-left: 2%;margin-right: 2%;margin-top:1%;display:none;" class="alert alert-success alert-dismissible alert-label-icon label-arrow fade show succsdis" role="alert">

                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    <i class="mdi mdi-check-all label-icon"></i><strong>Success</strong> - <span class="loadsuc"><span>
                                </div>

                                <div style="margin-left: 2%;margin-right: 2%;margin-top:1%;display:none;" class="alert alert-danger alert-dismissible alert-label-icon label-arrow fade show errordis" role="alert">

                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    <i class="mdi mdi-block-helper label-icon"></i><strong>Danger</strong> - <span class="loaderr"><span>
                                </div>
                            </div>

                            <div class="card-body">
								<div class="row">
                                    <div class="col-md-10">
                                        <h4>Unlimited Plans</h4>
                                    </div>
                                    <div class="col-md-2">
                                        <a href="javascript:void(0)"  id="terms" class="btn btn-primary mb-3 terms">Add</a>
                                    </div>
                                </div>

                                <div class="row add_new_terms" id="add_new_terms" style="display:none">
                                <form>
                                    <table class="table table-bordered dt-responsive nowrap w-100">
                                        <tr>
                                            <td width="20%"><input type="text" class="form-control" id="title_t" placeholder="Add Title"></td>
                                            <td width="20%"><select name="type" id="type" class="form-control"><option value="Monthly">Monthly</option><option value="Yearly">Yearly</option></select></td>
                                            <td><input type="number" step="1" min ="0" class="form-control" id="price" placeholder="Add Price"></td>
                                            <td class="text-center"><button type="button" class="btn btn-success waves-effect btn-label waves-light" onclick="save_terms('title_t','type','price')"><i class="bx bx-check-double label-icon"></i> Save</button></td>
                                        </tr>
                                        </from>
                                    </table>
                                </div>

                                <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th class="text-center">S.No.</th>
                                            <th class="text-center">Title</th>
                                            <th class="text-center">Type</th>
                                            <th class="text-center">Price</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                        <?php 
                                        $i = 1;
                                        foreach ($tnc as $tnc) {?>
                                        <tr>
                                            <td class="text-center" width="10"><?php echo $i;?></td>
                                            <td class="text-center" width="20%"><div class="input-group"><input type="text" id="title_ts<?php echo $i;?>" class="form-control discount_pecentage" placeholder="Enter Title" value="<?php if(isset($tnc['name']) && $tnc['name']!=''){ echo $tnc['name']; } ?>"></div></td>
                                            <td class="text-center">
                                                <div class="input-group">
                                                    <select class="form-control" name="status_ts" id="type_ts<?php echo $i;?>">
                                                        <option value="Monthly" <?=$tnc['type'] == 'Monthly' ? ' selected="selected"' : '';?>>Monthly</option>
                                                        <option value="Yearly" <?=$tnc['type'] == 'Yearly' ? ' selected="selected"' : '';?> >Yearly</option>
													</select>
                                                </div>
                                            
                                            </td>
                                            <td class="text-center" width="10%"><div class="input-group"><input type="text"  id="price_ts<?php echo $i;?>" class="form-control" placeholder="Enter Order" value="<?php if(isset($tnc['price']) && $tnc['price']!=''){ echo $tnc['price']; } ?>"></div></td>



                                            <td class="text-center" width="10%">
                                                <div class="input-group">
                                                    <select class="form-control" name="status_ts" id="status_ts<?php echo $i;?>">
                                                        <option value="0" <?=$tnc['status'] == '0' ? ' selected="selected"' : '';?>>Active</option>
                                                        <option value="1" <?=$tnc['status'] == '1' ? ' selected="selected"' : '';?> >Inactive</option>
                                                
                                                    </select>
                                                </div>
                                            </td>




                                            <td width="20%" class="text-center"><button type="button" class="btn btn-success waves-effect btn-label waves-light" onclick="save_terms('title_ts<?php echo $i ;?>','type_ts<?php echo $i ;?>','price_ts<?php echo $i ;?>','status_ts<?php echo $i;?>',<?=$tnc['id']?>)"><i class="bx bx-check-double label-icon"></i> Save</button></td>
                                        </tr>
                                        <?php $i++; } ?> 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- end cardaa -->
                    </div> <!-- end col -->
                </div> <!-- end row -->
            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
        <!--  Large modal example -->
        <?php include 'layouts/footer.php'; ?>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->



<!-- Right Sidebar -->
<?php include 'layouts/right-sidebar.php'; ?>
<!-- /Right-bar -->

<!-- JAVASCRIPT -->

<?php include 'layouts/vendor-scripts.php'; ?>

<script src="assets/js/app.js"></script>
<script>


 $("body").on("click",'.terms',function(){
        $('#add_new_terms').show();
        
	});

function save_terms(test1,test2,test3,test4,test5) {
        var title = $("#"+test1).val();
        var type = $("#"+test2).val();
        var price = $("#"+test3).val();
        var status = $("#"+test4).val();
        var id = test5;
        $('#add_new_terms').hide();
        $('#title_t').val('');
        $('#detail_t').val('');
        $('#order_t').val('');
        $.post('submit_ajax.php',{title:title,type:type,price:price,status:status,id:id,submit:'submit',pagetype:'unlimited_plans'},function(response){
            if(response=='exist')
        {
            $('.errordis').show();
            $('.succsdis').hide();
            $('.loaderr').html('Details Already Exist');
            return false;
        }
        else if(response=='success'){
            $('.succsdis').show();
            $('.errordis').hide();
            $('.loadsuc').html('Detail Updated Successfully');
            location.reload(800);
            // getcount();
        }
        else if(response=='error' || response==''){
            $('.errordis').show();
            $('.succsdis').hide();
            $('.loaderr').html('Something Went Wrong');
            
            return false;
        }
        else
        {
            $('.errordis').show();
            $('.succsdis').hide();
            $('.loaderr').html('');
            $('.loaderr').html(response);
            return false;
        }

        })
        
}

</script>

</body>

</html>