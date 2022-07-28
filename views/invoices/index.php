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
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"  media='all'/>
    <link href="../../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
    <link href="../../plugins/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/css/app.min.css" rel="stylesheet" type="text/css"  media='all'/>

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
                                    <h4 class="page-title"><?php echo $get_title; ?></h4>
                                </div>
                                <!--end col-->
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <button class="btn btn-secondary" type="button" id="button-addon1">
                                            <i class="fas fa-search"></i>
                                        </button>
                                        <input type="text" class="form-control search" name="search_input" id="search_input" placeholder="Search">
                                        <select class="search_inv" name="search_select" id="search_select">
                                            <option value="">-- Choose Column --</option>
                                            <option value="1">INV</option>
                                            <option value="2">INV Ref. No.</option>
                                            <option value="3">Sales Ref. No.</option>
                                            <option value="4">Challan No.</option>
                                            <option value="5">INV. Date</option>
                                            <option value="6">Distributor</option>
                                            <option value="7">Payable</option>
                                            <option value="8">Payment</option>
                                            <option value="9">Delivery</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-5 text-end mt-1">
                                    <a title="Print This" class="btn btn-sm btn-outline-primary printButton" data-toggle="tooltip" data-bs-placement="left">
                                        <i class="align-self-center fa fa-print icon-xs"></i>
                                    </a>

                                    <a data-bs-toggle="modal" data-bs-target="#create_new" href="#" data-toggle="tooltip" data-bs-placement="top" title="Add New" class="btn btn-sm btn-outline-primary">
                                        <i class="align-self-center fa fa-plus icon-xs"></i>
                                    </a>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end page-title-box-->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
                <!-- end page title end breadcrumb -->


                <!-- ----------------------------------------------------------------------------------------------------- -->
                <!-- ---------------------------------------------Table Start--------------------------------------------- -->
                <!-- ----------------------------------------------------------------------------------------------------- -->
                <div class="card border-0">
                    <div class="card-body p-1">
                        <div class="table-responsive fixed-thead">

                            <table  class="table table-striped table-bordered mb-0 printArea" id="tableData">

                                <thead style="border: 1px solid #eaf0f9;background: #ebebeb; line-height: 0.8;">
                                    <tr>
                                        <th>#</th>
                                        <th >INV</th>
                                        <th >INV Ref. No.</th>
                                        <th >Sales Ref. No.</th>
                                        <th >Challan No.</th>
                                        <th >INV. Date</th>
                                        <th >Distributor</th>
                                        <th >Payable</th>
                                        <th >Payment</th>
                                        <th >Delivery</th>
                                        <th style="width: 3%;" class="text-end">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="invoice_table">
                                </tbody>
                            </table>
                            <!--end /table-->
                        </div>
                        <!--end /tableresponsive-->
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

    <div class="modal fade bd-example-modal-xl" id="create_new" aria-labelledby="myLargeModalLabel" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title m-0" id="myLargeModalLabel">Create Invoice</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!--end modal-header-->
                <div class="modal-body p-2 pe-4 ps-4">

                    <form id="add_invoice_form" method="POST">
                        <div class="card-body p-0">
                            <h6>General Information</h6>
                            <hr class="mt-0">    

                            <?php 
                                if($loc_type == 'Head Office'){
                            ?>
                            <div class="row">
                                <div class="col-md-2">
                                    <label>Region</label>
                                    <select class="select2 form-control mb-3 js-single-region" id="region_list" name="region_list" style="width: 100%; height:36px;">
                                            
                                    </select>
                                </div>

                                <div class="col-md-3">
                                    <label>Depot</label>
                                    <select class="select2 form-control mb-3 js-example-basic-single" id="depot_list" name="depot_list" style="width: 100%; height:36px;">
                                            
                                    </select>
                                </div>


                                <div class="col-md-3">
                                    <label>Area</label>
                                    <select class="select2 form-control mb-3 js-example-basic-single" id="area_list" name="area_list" style="width: 100%; height:36px;">
                                            
                                    </select>
                                </div>


                                <div class="col-md-3">
                                    <label>Territory </label>
                                    <select class="select2 form-control mb-3 js-example-basic-single" id="territory_list" name="territory_list" style="width: 100%; height:36px;">
                                            
                                    </select>
                                </div>
                                <div class="col-md-1 mt-3 pr-0">
                                    <button type="button" id="reset" class="btn btn-sm btn-outline-danger">Clear</button>
                                </div>

                                <div class="col-md-12" class="">
                                    <span class="line">
                                        <p><span>OR</span></p>
                                    </span>
                                </div>
                            </div>
                            <?php } ?>


                            <input type="hidden" name="depot_id" id="c_depot_id" value="<?php echo $loc_sn ?>">
                            <div class="row">
                                <div class="col-md-8 mt-2 mb-1">
                                    
                                    <label>Distributor</label>
                                    <select class="select2 form-control mb-3 js-example-basic-single" id="distributor_list" name="distri" required style="width: 100%; height:36px;">
                                            
                                    </select>

                                </div>
                                <div class="col-md-4 mt-2 mb-1">

                                    <div  id="owner_info">
                                        
                                    </div>

                                </div>


                                <div class="col-md-3 mt-4">

                                    <label>Routes</label>
                                    <select class="select2 form-control mb-3 js-example-basic-single" id="c_routes_list" name="route" style="width: 100%; height:36px;">
                                            
                                    </select>

                                </div>


                                <div class="col-md-6 mt-4">

                                    <label>outlet</label>
                                    <select class="select2 form-control mb-3 js-example-basic-single" id="c_outlet_list" name="outlet" style="width: 100%; height:36px;">
                                            
                                    </select>

                                </div>


                                <div class="col-md-3 mt-4">

                                    <label>Store</label>
                                    <select class="select2 form-control mb-3 js-example-basic-single" id="c_store_list" name="store" style="width: 100%; height:36px;">
                                            
                                    </select>

                                </div>


                            </div>

                            <hr>


                            <div class="row  mt-3">

                                <div class="col-md-2 ">
                                    <label>INV Date</label>
                                    <input type="date" name="inv_date" id="c_inv_date" class="form-control">
                                    <input type="hidden" name="org_id" id="c_org_id" class="form-control" value="<?php echo $org_id ?>">
                                </div>

                                <div class="col-md-2 ">
                                    <label>INV Ref. No.</label>
                                    <input type="text" name="inv_ref_no" id="c_inv_ref_no" class="form-control" required>
                                </div>

                                <div class="col-md-2 ">
                                    <label>INV No.</label>
                                    <input readonly name="inv_number" id="c_inv_number" class="form-control">
                                </div>

                                <div class="col-md-2 ">
                                    <label>Sales Ref. No.</label>
                                    <input readonly name="sales_ref_no" id="c_sales_ref_no" class="form-control">
                                </div>

                                <div class="col-md-2 ">
                                    <label>Challan. No.</label>
                                    <input readonly name="challan_number" id="c_challan_number" class="form-control">
                                </div>

                                <div class="col-md-2">
                                    <label>Cash Comm(%)</label>
                                    <input style="width: 48%" type="number" value="0.00" max="80" min="0" step="0.01" name="cash_com" id="c_cash_com" class="form-control" required>
                                </div>


                                <h6 class="mt-4">Add items to the invoice</h6>
                                <hr class="mt-0">


                                <div class="col-md-11">
                                    <select multiple="" class="select2 form-control mb-3 js-example-basic-single select2-hidden-accessible" id="c_sel_item" name="sel_item[]" style="width: 100%;" data-select2-id="select2-data-goods_list" tabindex="-1" aria-hidden="true">
                                    </select>
                                </div>

                                <div class="col-md-1">
                                    <button type="button" id="c_add_inv_prod" name="add_inv_prod" class="ms-2 mt-1 btn btn-sm btn-outline-primary"><i class="fa fa-plus"></i></button>
                                </div>



                                <div class="col-md-12">
                                        
                                    <table class="table table-bordered mt-3" id="itemAppendTable">
                                        <thead>
                                            <tr>
                                                <th width="20%" rowspan="2">Item</th>
                                                <th width="5%" rowspan="2">Vol(ml)</th>
                                                <th width="8%" rowspan="2">Ctn Size(pcs)</th>
                                                <th width="7%" rowspan="2">Price/ctn</th>
                                                <th width="8%" colspan="2">Quantity</th>
                                                <th width="8%" colspan="2">Additional Quantity</th>
                                                <th width="8%" colspan="2">COMP</th>
                                                <th width="15%" rowspan="2">Item Tot</th>
                                                <th width="5%" rowspan="2"></th>
                                            </tr>
                                            <tr>
                                                <th width="10%">CTN</th>
                                                <th width="10%">PCS</th>
                                                <th width="10%">CTN</th>
                                                <th width="10%">PCS</th>
                                                <th width="10%">CTN</th>
                                                <th width="10%">PCS</th>
                                            </tr>
                                        </thead>
                                        <tbody id="c_inv_items_list"></tbody>
                                    </table>

                                    <hr>

                                    <div class="row">

                                        <div class="col-md-7">
                                            <textarea id="c_notes" name="notes" class="form-control" rows="6" placeholder="Important Notes"></textarea>
                                        </div>

                                        <div class="col-md-5">
                                            <div class="row">

                                                <div class="col-md-7 text-end">Grand Total: </div>
                                                <div class="col-md-5">
                                                    <input style="height: 18px" type="number" readonly value="0" id="c_grand_total" alue="0" name="grand_tot" class="form-control">
                                                </div>

                                                <div class="col-md-7 text-end mt-2">Discount: </div>
                                                <div class="col-md-5 mt-2">
                                                    <input style="height: 18px" type="number" id="c_discount" value="0" min="0" step="0.01" name="discount" class="form-control">

                                                </div>

                                                <div class="col-md-7 text-end mt-2">After Discount: </div>
                                                <div class="col-md-5 mt-2">
                                                    <input style="height: 18px" type="number" id="c_after_discount" value="0" min="0" step="0.01" readonly name="c_after_discount" class="form-control">

                                                </div>

                                                <div class="col-md-7 text-end mt-2">Commision in Cash: </div>
                                                <div class="col-md-5 mt-2">
                                                    <input style="height: 18px" type="number" readonly id="c_dsr_com" value="0" name="dsr_com" class="form-control">
                                                </div>

                                                <div class="col-md-7 text-end  mt-2">Total Payable</div>
                                                <div class="col-md-5  mt-2">
                                                    <input style="height: 18px" type="number" readonly id="c_total_payable" value="0" name="total_payable" class="form-control">
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>



                                <div class="col-md-12 mt-3">
                                    <input type="text" name="oper" value="add" hidden />
                                    <button type="submit" class="btn btn-primary btn-square btn-outline-dashed"
                                        id="add_region">Save</button>
                                </div>
                            </div>


                        </div>
                    </form>

                </div>
                <!--end modal-body-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-soft-secondary btn-sm mt-3" data-bs-dismiss="modal">Close</button>
                </div>
                <!--end modal-footer-->
            </div>
            <!--end modal-content-->
        </div>
        <!--end modal-dialog-->
    </div>





    <!-- ****************************************************************************** -->
    <!-- ********************************* Edit Form ********************************** -->
    <!-- ****************************************************************************** -->

    <div class="modal fade bd-example-modal-xl" id="modal_edit" tabindex="-1" aria-labelledby="myLargeModalLabel3"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title m-0" id="myLargeModalLabel3">Edit Region</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!--end modal-header-->
                <div class="modal-body">

                    <form id="edit_region_form" method="POST">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Region Code</label>
                                    <input type="hidden" id="edit_id" name="edit_id">
                                    <input type="text" class="form-control" id="edit_code" name="edit_code"
                                        placeholder="Region Code" maxlength="10" required>
                                </div>
                                <div class="col-md-6">
                                    <label>Region Name</label>
                                    <input type="text" class="form-control" id="edit_name" name="edit_name"
                                        placeholder="Region Name" maxlength="100" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12  mt-3">
                                    <label>Definition</label>
                                    <textarea type="text" class="form-control" id="edit_defination"
                                        name="edit_defination" placeholder="Region Definition" required></textarea>
                                </div>

                                <div class="col-md-3  mt-3">
                                    <label>Status</label>
                                    <select name="edit_status" id="edit_status" class="form-control">
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>

                                <div class="col-md-12  mt-3">
                                    <input type="text" name="oper" value="edit" hidden />
                                    <button type="submit" class="btn btn-primary btn-square btn-outline-dashed"
                                        id="edit_region">Save</button>
                                </div>
                            </div>


                        </div>
                    </form>

                </div>
                <!--end modal-body-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-soft-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                </div>
                <!--end modal-footer-->
            </div>
            <!--end modal-content-->
        </div>
        <!--end modal-dialog-->
    </div>



    <!-- ****************************************************************************** -->
    <!-- ********************************* View Form ********************************** -->
    <!-- ****************************************************************************** -->

    <div class="modal fade bd-example-modal-xl" id="modal_view" aria-labelledby="myLargeModalLabel"
        style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title m-0" id="myLargeModalLabel">View Invoice</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!--end modal-header-->
                <div class="modal-body p-2 pe-4 ps-4">

                    <form id="add_invoice_form" method="POST">
                        <input type="hidden" id="invoice_id" name="invoice_id">
                        <input type="hidden" id="view_distri_id" name="distri_id">
                        <div class="card-body p-0">

                            <div class="row">

                                <div id="print" class="col-3 offset-9 mb-4 text-end">
                                    
                                </div>
                                
                                <div class="col-4">
                                    <h5 class="mb-0"><?php echo $org ?></h5>
                                    <p class="mb-0"><?php echo $org_address ?></p>
                                    <p class="mb-2">Phone: <?php echo $org_phone_no ?></p>
                                </div>

                                <div class="col-4 text-center mt-3">
                                    <h4 class="mt-3"><u>Invoice</u></h4>
                                </div>

                                <div class="col-4 text-end">
                                    <h5 class="mb-0"><b>Invoice No:</b> <span id="view_inv_number" class="text-custom"> </span></h5>
                                    <h6 class="mb-0 mt-0 mt-2"><b>Invoice Date:</b> <span id="view_inv_date" class="text-custom"> </span></h6>
                                    <h6 class="mb-0 mt-0"><b>Sales Ref. No:</b> <span id="view_sales_ref_number" class="text-custom"> </span></h6>
                                    <h6 class="mb-0 mt-0"><b>Challan No:</b> <span id="view_challan_number" class="text-custom"> </span></h6>
                                </div>



                                <div class="row">
                                    <div class="col-4">
                                        <div class="card card-body pt-1 pb-1">
                                            <h6 class="mb-1 text-primary">Bill To:</h6>
                                            <h5 class="text-custom mb-1 h5" id="view_o_name"></h5>
                                            <p class="text-custom mb-0" id="view_o_address"></p>
                                            <p class="text-custom mb-0" id="view_o_mobile"></p>
                                        </div>
                                    </div>


                                    <div class="col-4">
                                        <div class="card card-body pt-1 pb-1">
                                            <h6 class="mb-1 text-primary">Shipp To:</h6>
                                            <h5 class="text-custom mb-1 h5" id="view_distri_name"></h5>
                                            <p class="text-custom mb-0" id="view_distri_address"></p>
                                        </div>
                                    </div>


                                    <div class="col-4">
                                        <div class="card card-body pt-1 pb-1">
                                            <h6 class="mb-1 text-primary">Other Details:</h6>
                                            <p class="text-custom mb-0 mt-2" id="view_route"></p>
                                            <p class="text-custom mb-0" id="view_outlet"></p>
                                            <p class="text-custom mb-0" id="view_store"></p>
                                        </div>
                                    </div>


                                    
                                </div>


                                <div class="row">
                                    <table class="table table-bordered mt-3" id="itemAppendTable">
                                        <thead>
                                            <tr>
                                                <th width="3%" rowspan="2">#</th>
                                                <th width="30%" rowspan="2">Item</th>
                                                <th width="5%" rowspan="2">Vol(ml)</th>
                                                <th width="8%" rowspan="2">Ctn Size(pcs)</th>
                                                <th class="text-end" width="8%" rowspan="2">Price/ctn</th>
                                                <th class="text-center" width="8%" colspan="2">Quantity</th>
                                                <th class="text-center" width="8%" colspan="2">Additional Quantity</th>
                                                <th class="text-center" width="8%" colspan="2">COMP</th>
                                                <th class="text-end" width="15%" rowspan="2">Item Total</th>
                                            </tr>
                                            <tr>
                                                <th class="text-center" width="6%">CTN</th>
                                                <th class="text-center" width="6%">PCS</th>
                                                <th class="text-center" width="6%">CTN</th>
                                                <th class="text-center" width="6%">PCS</th>
                                                <th class="text-center" width="6%">CTN</th>
                                                <th class="text-center" width="6%">PCS</th>
                                            </tr>
                                        </thead>
                                        <tbody id="view_inv_item_details">
                                            
                                        </tbody>
                                    </table>
                                </div>



                            </div>


                        </div>
                    </form>

                </div>
                <!--end modal-body-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-soft-secondary btn-sm mt-3" data-bs-dismiss="modal">Close</button>
                </div>
                <!--end modal-footer-->
            </div>
            <!--end modal-content-->
        </div>
        <!--end modal-dialog-->
    </div>



    <!-- jQuery  -->
    <script src="../../assets/js/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <script src="../../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/js/metismenu.min.js"></script>
    <script src="../../assets/js/waves.js"></script>
    <script src="../../assets/js/feather.min.js"></script>
    <script src="../../assets/js/simplebar.min.js"></script>
    <script src="../../assets/js/moment.js"></script>
    <script src="../../plugins/daterangepicker/daterangepicker.js"></script>

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
    <script src="../../assets/js/paging.js?speed=1" defer></script>
    <script src="../../assets/js/pagejs/invoices.js" defer></script>

</body>

</html>




<style>



.line{display:block;}
.line p{font-size:15px; text-align:center; border-bottom:1px solid #ccd8ff; position:relative; }
.line p span { background-color: white;position: relative;top: 12px;padding: 0 10px;font-size: 12px;color: #303e67;font-weight: 600;}

.modal-content .modal-body p, .modal-content h4 {
    color: #606060!important;
    line-height: 1.3!important;
}

.text-custom {
    color:  #545454!important;
}


</style>


<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();   
    });
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
        $(".js-example-basic-single").on('select2:select', function (e) {
         $('.select2-search__field').val('');
        });
    });
    $(document).ready(function() {
        $('.js-single-region').select2();
    });

    $(document).ready(function () {
        $('#create_new').modal({
               backdrop: 'static',
               keyboard: false
        })
   });




</script>
