<?php include('../../controller/sessions.php'); ?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>AIR - <?php echo $get_title; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="../../assets/images/favicon.ico">

        <!-- Plugins css -->
        <link href="../../plugins/select2/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="../../plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
        <link href="../../plugins/huebee/huebee.min.css" rel="stylesheet" type="text/css" />
        <link href="../../plugins/timepicker/bootstrap-material-datetimepicker.css" rel="stylesheet">
        <link href="../../plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />

        <!-- App css -->
        <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../../assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
        <link href="../../plugins/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
        <link href="../../assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body>

        
        <!-- start left-sidenav-->
        <?php include('../../include/left_sidebar.php') ?>
        <!--   end left-sidenav-->
        

        <div class="page-wrapper">
            <!-- Top Bar Start -->
            <?php include('../../include/top_bar.php'); ?>
            <!-- Top Bar End -->

            <!-- Page Content-->
            <div class="page-content">
                <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box pb-1">
                                <div class="row">
                                    <div class="col-md-3">
                                        <h4 class="page-title">FG Store</h4>
                                    </div><!--end col-->
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <button class="btn btn-secondary" type="button" id="button-addon1"><i class="fas fa-search"></i></button>
                                            <input type="text" class="form-control search" name="search" id="search" placeholder="Search Store">
                                        </div>
                                    </div>
                                    <div class="col-md-5 text-end mt-1">
                                        <a  data-bs-toggle="modal" data-bs-target="#create_new" href="#" class="btn btn-sm btn-outline-primary">
                                            <i class="align-self-center fa fa-plus icon-xs"></i>
                                        </a>

                                        <a  data-bs-toggle="modal" data-bs-target="#add_goods" title="Add Goods To Store" href="#" class="ms-2 btn btn-sm btn-outline-primary">
                                            <i class="align-self-center fas fa-plus-square icon-xs"></i>
                                        </a>

                                    </div><!--end col-->  

                                </div><!--end row-->                                                              
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div><!--end row-->
                    <!-- end page title end breadcrumb -->


                    <!-- ----------------------------------------------------------------------------------------------------- -->
                    <!-- ---------------------------------------------Table Start--------------------------------------------- -->
                    <!-- ----------------------------------------------------------------------------------------------------- -->
                    <div class="card border-0">
                        <div class="card-body p-1">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered mb-0">
                                    <thead  style="border: 1px solid #eaf0f9;background: #ebebeb;">
                                    <tr>
                                        <th>#</th>
                                        <th>Code</th>
                                        <th>Name</th>
                                        <th>Depot</th>
                                        <th>Defination</th>
                                        <th>Address</th>
                                        <th>Status</th>
                                        <th class="text-end">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody id="fg_store_table">
                                    </tbody>
                                </table><!--end /table-->
                            </div><!--end /tableresponsive-->
                        </div>
                    </div>
                    <!-- ----------------------------------------------------------------------------------------------------- -->
                    <!-- ---------------------------------------------Table Start--------------------------------------------- -->
                    <!-- ----------------------------------------------------------------------------------------------------- -->


                </div><!-- container -->

                <?php include('../../include/footer.php') ?>
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->

        <!-- ****************************************************************************** -->
        <!-- ********************************* Add Form *********************************** -->
        <!-- ****************************************************************************** -->

        <div class="modal fade bd-example-modal-lg" id="create_new" aria-labelledby="myLargeModalLabel" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title m-0" id="myLargeModalLabel">Create FG Store</h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div><!--end modal-header-->
                    <div class="modal-body">
                            
                        <form  id="add_fg_store_form" method="POST">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>FG Store Code</label>
                                        <input type="text" class="form-control" id="add_code" name="add_code" placeholder="FG Store Code" maxlength="10" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label>FG Store Name</label>
                                        <input type="text" class="form-control" id="add_name" name="add_name" placeholder="FG Store Name" maxlength="100" required>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <label>Regions</label>
                                        <select class="select2 form-control mb-3 js-example-basic-single" id="region_list" name="add_region" required style="width: 100%; height:36px;">
                                            
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Depots</label>
                                        <select class="select2 form-control mb-3 js-example-basic-single" id="depots_list" name="add_depots" required style="width: 100%; height:36px;">
                                            
                                        </select>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <label>Definition</label>
                                        <textarea type="text" class="form-control" id="add_defination" name="add_defination" placeholder="Definition" required></textarea>
                                    </div>

                                    <div class="col-md-12 mt-3">
                                        <label>Address</label>
                                        <textarea type="text" class="form-control" id="add_address" name="add_address" placeholder="Address" required></textarea>
                                    </div>

                                    <div class="col-md-12  mt-3">
                                        <input type="text" name="oper" value="add" hidden />
                                        <button type="submit" class="btn btn-primary btn-square btn-outline-dashed" id="add_fg_store">Save</button>
                                    </div>
                                </div>

                                
                            </div>    
                        </form>
                        
                    </div><!--end modal-body-->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-soft-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                    </div><!--end modal-footer-->
                </div><!--end modal-content-->
            </div><!--end modal-dialog-->
        </div>  





        <!-- ****************************************************************************** -->
        <!-- ********************************* Edit Form *********************************** -->
        <!-- ****************************************************************************** -->

        <div class="modal fade bd-example-modal-lg" id="modal_edit"  aria-labelledby="myLargeModalLabel3" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title m-0" id="myLargeModalLabel3">Edit Fg Store</h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div><!--end modal-header-->
                    <div class="modal-body">
                            
                        <form  id="edit_fg_store_form" method="POST">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>FG Store Code</label>
                                        <input type="hidden" id="edit_id" name="edit_id">
                                        <input type="text" class="form-control" id="edit_code" name="edit_code" placeholder="FG Store Code" maxlength="10" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label>FG Store Name</label>
                                        <input type="text" class="form-control" id="edit_name" name="edit_name" placeholder="FG Store Name" maxlength="100" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12  mt-3">
                                        <label>Definition</label>
                                        <textarea type="text" class="form-control" id="edit_defination" name="edit_defination" placeholder="FG Store Definition" required></textarea>
                                    </div>

                                    <div class="col-md-12  mt-3">
                                        <label>Address</label>
                                        <textarea type="text" class="form-control" id="edit_address" name="edit_address" placeholder="FG Store Address" required></textarea>
                                    </div>


                                    <div class="col-md-5  mt-3">
                                        <label>Region</label>
                                        <select name="edit_region" id="edit_region" class="select2 form-control mb-3 js-example-basic-single" style="width: 100%; height:36px;">
                                        </select>
                                    </div>

                                    <div class="col-md-5  mt-3">
                                        <label>Depots</label>
                                        <select name="edit_depot" id="edit_depot" class="select2 form-control mb-3 js-example-basic-single" style="width: 100%; height:36px;">
                                        </select>
                                    </div>


                                    <div class="col-md-2  mt-3">
                                        <label>Status</label>
                                        <select name="edit_status" id="edit_status" class="form-control">
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>

                                    <div class="col-md-12  mt-3">
                                        <input type="text" name="oper" value="edit" hidden />
                                        <button type="submit" class="btn btn-primary btn-square btn-outline-dashed" id="edit_region">Save</button>
                                    </div>
                                </div>

                                
                            </div>    
                        </form>
                        
                    </div><!--end modal-body-->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-soft-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                    </div><!--end modal-footer-->
                </div><!--end modal-content-->
            </div><!--end modal-dialog-->
        </div>      





        <!-- ****************************************************************************** -->
        <!-- ********************************* Add Good *********************************** -->
        <!-- ****************************************************************************** -->

        <div class="modal fade bd-example-modal-xl" id="add_goods" aria-labelledby="myLargeModalLabel" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title m-0" id="myLargeModalLabel">Add Goods to Store</h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div><!--end modal-header-->
                    <div class="modal-body">
                            
                        <form  id="add_fg_store_form" method="POST">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>FG Store Code</label>
                                        <input type="text" class="form-control" id="add_code" name="add_code" placeholder="FG Store Code" maxlength="10" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label>FG Store Name</label>
                                        <input type="text" class="form-control" id="add_name" name="add_name" placeholder="FG Store Name" maxlength="100" required>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-11">
                                        <label>Goods</label>
                                        <select multiple class="select2 form-control mb-3 js-example-basic-single" id="goods_list" name="" required style="width: 100%; height:36px;">
                                            
                                        </select>
                                    </div>
                                    <div class="col-md-1">
                                       <button type="button" id="add_goods_table" class="ms-2 mt-4 btn btn-sm btn-outline-primary"><i class="fa fa-plus"></i></button>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th width="30%" rowspan="2">Item</th>
                                                    <th width="10%" rowspan="2">Vol(ml)</th>
                                                    <th width="10%" rowspan="2">Ctn Size(pcs)</th>
                                                    <th width="15%" rowspan="2">Price/ctn</th>
                                                    <th width="10%" colspan="2">Quantity</th>
                                                    <th width="10%" rowspan="2"></th>
                                                </tr>
                                                <tr>
                                                    <th width="10%">CTN</th>
                                                    <th width="10%">PCS</th>
                                                </tr>
                                            </thead>
                                            <tbody id="fg_store_goods_table"></tbody>
                                        </table>

                                    </div>

                                    

                                    <div class="col-md-12  mt-3">
                                        <input type="text" name="oper" value="add" hidden />
                                        <button type="submit" class="btn btn-primary btn-square btn-outline-dashed" id="add_fg_store">Save</button>
                                    </div>
                                </div>

                                
                            </div>    
                        </form>
                        
                    </div><!--end modal-body-->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-soft-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                    </div><!--end modal-footer-->
                </div><!--end modal-content-->
            </div><!--end modal-dialog-->
        </div>  


        <!-- jQuery  -->
        <script src="../../assets/js/jquery.min.js"></script>
        <script src="../../assets/js/bootstrap.bundle.min.js"></script>
        <script src="../../assets/js/metismenu.min.js"></script>
        <script src="../../assets/js/waves.js"></script>
        <script src="../../assets/js/feather.min.js"></script>
        <script src="../../assets/js/simplebar.min.js"></script>
        <script src="../../assets/js/moment.js"></script>
        <!-- <script src="../../plugins/daterangepicker/daterangepicker.js"></script> -->

        <!-- Plugins js -->
      
        <script src="../../plugins/select2/select2.min.js"></script>
        <!-- <script src="../../plugins/huebee/huebee.pkgd.min.js"></script> -->
        <!-- <script src="../../plugins/timepicker/bootstrap-material-datetimepicker.js"></script> -->
        <!-- <script src="../../plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script> -->
        <!-- <script src="../../plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js"></script> -->

        <!-- <script src="../../assets/js/jquery.forms-advanced.js"></script> -->

        <!-- App js -->
        <script src="../../assets/js/app.js"></script>
        <script src="../../plugins/sweet-alert2/sweetalert2.min.js"></script>
        <script src="../../assets/js/pagejs/fg_store.js"></script>
        
    </body>

</html>




<style>
    td {
       height: 24px;
       font-size: 12px;
       padding: 0px  4px!important;
    }
    td p {
        margin-bottom: 0px!important;
        font-size:  11px;
        color: #000000;
    }
    .modal {
        z-index: 1050!important;
    }
    .select2-container--default .select2-selection--single .select2-selection__rendered {
        line-height: 31px!important;
    }
    .select2-container--default .select2-selection--single .select2-selection__arrow {
        height: 32px!important;
    }
    .select2-container--default .select2-selection--single {
        height: 33.5px!important;
    }
</style>


<script>
$(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>