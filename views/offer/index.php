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
    <style>
        .combined_select{
            position: relative;
            border: 1px solid #e3ebf6;
        }
        /* The container */
        .checkbox-area {
            display: block;
            position: relative;
            padding-left: 35px;
            margin-bottom: 12px;
            cursor: pointer;
            font-size: 22px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        .checkbox-area-header{
            top: 11px;
        }

        /* Hide the browser's default checkbox */
        .checkbox-area input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
            height: 0;
            width: 0;
        }

        /* Create a custom checkbox */
        .checkmark {
            position: absolute;
            top: -3px;
            left: 8px;
            height: 15px;
            width: 15px;
            background-color: #eee;
        }
        .checkmark-item{
            left: 10px !important;
        }

        /* On mouse-over, add a grey background color */
        .checkbox-area:hover input ~ .checkmark {
            background-color: #ccc;
        }

        /* When the checkbox is checked, add a blue background */
        .checkbox-area input:checked ~ .checkmark {
            background-color: #38086f;
        }
        .checkbox-area input:checked ~ .checkmark-item {
            background-color: #56189d !important;
        }

        /* Create the checkmark/indicator (hidden when not checked) */
        .checkmark:after {
            content: "";
            position: absolute;
            display: none;
        }

        /* Show the checkmark when checked */
        .checkbox-area input:checked ~ .checkmark:after {
            display: block;
        }

        /* Style the checkmark/indicator */
        .checkbox-area .checkmark:after {
            left: 5px;
            top: 2px;
            width: 4px;
            height: 10px;
            border: solid white;
            border-width: 0 3px 3px 0;
            -webkit-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            transform: rotate(45deg);
        }
        .prod_table th{
            background-color: #324b68;
            color: #ffffff;
            text-align: center;
        }
        .custom-field{
            border: 0px solid transparent;
            border-radius: 0px !important;
        }
    </style>
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
                                <h4 class="page-title">Offers</h4>
                            </div><!--end col-->
                            <div class="col-md-4">
                                <div class="input-group">
                                    <button class="btn btn-secondary" type="button" id="button-addon1"><i class="fas fa-search"></i></button>
                                    <input type="text" class="form-control search" name="search" id="search" placeholder="Search Offers">
                                </div>
                            </div>
                            <div class="col-md-5 text-end mt-1">
                                <a  data-bs-toggle="modal" data-bs-target="#create_new" href="#" class="btn btn-sm btn-outline-primary">
                                    <i class="align-self-center fa fa-plus icon-xs"></i> Create New
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
                                <th>Name</th>
                                <th>Validity</th>
                                <th>Cash/Product</th>
                                <th>Applicable For</th>
                                <th>Lists</th>
                                <th>Invoice Amount</th>
                                <th>Retailer</th>
                                <th>Excluded Items</th>
                                <th>Status</th>
                                <th class="text-end">Action</th>
                            </tr>
                            </thead>
                            <tbody id="offer_table">
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

<div class="modal fade bd-example-modal-lg" id="create_new" tabindex="-1" aria-labelledby="myLargeModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title m-0" id="myLargeModalLabel">Create Offer</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div><!--end modal-header-->
            <div class="modal-body" id="offer_body">

                <form  id="add_offer_form" method="POST">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="add_offer_name">Offer Name:</label>
                                <input type="text" class="form-control" id="add_offer_name" name="add_offer_name" placeholder="Offer Name" data-parsley-required>
                            </div>
                            <div class="col-md-2">
                                <label for="valid_from">Valid From:</label>
                                <input type="date" class="form-control" id="valid_from" name="valid_from" required>
                            </div>
                            <div class="col-md-2">
                                <label for="valid_to">Valid Till:</label>
                                <input type="date" class="form-control" name="valid_to" id="valid_to">
                            </div>
                            <div class="col-md-2">
                                <label for="offer_type">Cash/Product</label>
                                <select name="offer_type" id="offer_type" class="form-control" required>

                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-3" id="amount_group" style="display: none;">
                                <label for="amount">Amount</label>
                                <div class="input-group">
                                    <input type="text" onkeyup="amountCheck()" class="form-control amount" name="amount" id="amount">
                                    <select onchange="amountCheck()" name="amount_type" id="amount_type" class="combined_select btn btn-sm btn-default">
                                        <option value="BDT">BDT</option>
                                        <option value="Percent">%</option>
                                    </select>
                                </div>
                                <div id="amount_error" style="color: red; font-size: 12px; display: none;">Maximum Percentage Value 100.</div>
                            </div>
                            <div class="row" id="prod_cat_group" style="display: none;">
                                <div class="col-md-8">
                                    <div class="table-responsive">
                                        <table class="table table-bordered data-field-table prod_table">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        <label class="checkbox-area checkbox-area-header" for="all-raw" style="padding-left: 30px!important;margin-bottom: 2px!important;">
                                                            <input @click="SelectAllRawFunc" type="checkbox" name="all" id="all-raw">&nbsp;
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </th>
                                                    <th>Product Category</th>
                                                    <th>Product</th>
                                                    <th>Ctn</th>
                                                    <th>Pcs</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr v-for="(i, index) in rawItem" :id="'raw-row-id'+i" class="row-item">
                                                    <td width="5%">
                                                        <label class="checkbox-area">
                                                            <input type="checkbox" name="raw-check-item" class="checkbox-raw-item " :id="'raw-checkbox-id'+i" :data-id="i">
                                                            <span class="checkmark checkmark-item"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <select name="prod_cat[]" @change="getProductByCat" :id="'prod_cat'+i" class="form-control custom-field prod_cat" :data-id="i">

                                                        </select>
                                                    </td>
                                                    <td style="width:150px;">
                                                        <select name="product[]" :id="'product'+i" class="form-control custom-field product" :data-id="i">

                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input type="number" class="form-control custom-field" value="0" name="ctn[]" :id="'ctn'+i" :data-id="i">
                                                    </td>
                                                    <td>
                                                        <input type="number" class="form-control custom-field" value="0" name="pcs[]" :id="'pcs'+i" :data-id="i">
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <td colspan="5">
                                                    <span @click="AddMoreRaw" @click="getProdCat" style="padding: 0px 5px 0px 5px" class="btn  btn-sm btn-success"><i class="fa fa-plus"></i></span>
                                                    <span @click="removeItemRaw" style="padding: 0px 5px 0px 5px" class="btn  btn-sm btn-danger"><i class="fa fa-trash"></i></span>
                                                </td>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="region">Select Region</label>
                                <select class="js-example-basic-multiple mb-3" name="region[]" id="region" style="width: 100%" multiple="multiple" data-placeholder="Choose">

                                </select>
                            </div>
                            <div class="col-md-3" id="depot_grp" style="display: none;">
                                <label for="depot">Select Depot</label>
                                <select class="js-example-basic-multiple mb-3" name="depot[]" id="depot" style="width: 100%" multiple="multiple" data-placeholder="Choose">

                                </select>
                            </div>
                            <div class="col-md-3" id="area_grp" style="display: none;">
                                <label for="area">Select Area</label>
                                <select class="js-example-basic-multiple mb-3" name="area[]" id="area" style="width: 100%" multiple="multiple" data-placeholder="Choose">

                                </select>
                            </div>
                            <div class="col-md-3" id="territory_grp" style="display: none;">
                                <label for="territory">Select Territory</label>
                                <select class="js-example-basic-multiple mb-3" name="territory[]" id="territory" style="width: 100%" multiple="multiple" data-placeholder="Choose">

                                </select>
                            </div>
                            <div class="col-md-3" id="distributor_grp" style="display: none;">
                                <label for="distributor">Select Distributor</label>
                                <select class="js-example-basic-multiple mb-3" name="distributor[]" id="distributor" style="width: 100%" multiple="multiple" data-placeholder="Choose">

                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="applicable_for">Applicable for</label>
                                <select name="applicable_for" id="applicable_for" class="form-control">
                                    <option value="1">Single Invoice</option>
                                    <option value="0">Date Range</option>
                                </select>
                            </div>
                            <div class="col-md-3 invoice_date_range" style="display: none;">
                                <label for="invoice_date_from">From</label>
                                <input type="date" class="form-control" name="invoice_date_from" id="invoice_date_from">
                            </div>
                            <div class="col-md-3 invoice_date_range" style="display: none;">
                                <label for="invoice_date_to">To</label>
                                <input type="date" class="form-control" name="invoice_date_to" id="invoice_date_to">
                            </div>
                            <div class="col-md-3">
                                <label for="invoice_amount">Invoice Amount</label>
                                <input type="number" class="form-control" name="invoice_amount" id="invoice_amount">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-check" style="margin-top: 1.5rem !important;">
                                    <input class="form-check-input" type="checkbox" value="1" id="retailer_include" name="retailer_include" checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Retailer Included
                                    </label>
                                </div>
                                <div class="mt-2" id="retail_grp" style="display: none;">
                                    <label for="retail_offer_id">Retail Offer</label>
                                    <select name="retail_offer_id" id="retail_offer_id" class="form-control">

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-check" style="margin-top: 1.5rem !important;">
                                    <input class="form-check-input" type="checkbox" value="0" id="is_excluded" name="is_excluded">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Items Excluded
                                    </label>
                                </div>
                                <div id="itmExclude_grp" class="mt-2" style="display: none;">
                                    <label for="excluded_items">Excluded Items</label>
                                    <select class="js-example-basic-multiple mb-3" name="excluded_items[]" id="excluded_items" style="width: 100%" multiple="multiple" data-placeholder="Choose">
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-check" style="margin-top: 1.5rem !important;">
                                    <input class="form-check-input" type="checkbox" value="1" id="is_active" name="is_active" checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Is active
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12  mt-3">
                            <input type="text" name="oper" value="add" hidden />
                            <button type="submit" class="btn btn-primary btn-square btn-outline-dashed" id="submit_offer_add">Save</button>
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

<div class="modal fade bd-example-modal-lg" id="modal_edit" tabindex="-1" aria-labelledby="myLargeModalLabel3" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title m-0" id="myLargeModalLabel3">Edit Region</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div><!--end modal-header-->
            <div class="modal-body">

                <form  id="edit_region_form" method="POST">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Region Code</label>
                                <input type="hidden" id="edit_id" name="edit_id">
                                <input type="text" class="form-control" id="edit_code" name="edit_code" placeholder="Region Code" maxlength="10" required>
                            </div>
                            <div class="col-md-6">
                                <label>Region Name</label>
                                <input type="text" class="form-control" id="edit_name" name="edit_name" placeholder="Region Name" maxlength="100" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12  mt-3">
                                <label>Definition</label>
                                <textarea type="text" class="form-control" id="edit_defination" name="edit_defination" placeholder="Region Definition" required></textarea>
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

<!--VUE CDN-->
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
<!-- jQuery  -->
<script src="../../assets/js/jquery.min.js"></script>
<script src="../../assets/js/bootstrap.bundle.min.js"></script>
<script src="../../assets/js/metismenu.min.js"></script>
<script src="../../assets/js/waves.js"></script>
<script src="../../assets/js/feather.min.js"></script>
<script src="../../assets/js/simplebar.min.js"></script>
<script src="../../assets/js/moment.js"></script>
<script src="../../plugins/daterangepicker/daterangepicker.js"></script>

<!-- Plugins js -->

<script src="../../plugins/select2/select2.min.js"></script>
<!-- <script src="../../plugins/huebee/huebee.pkgd.min.js"></script>-->
<script src="../../plugins/timepicker/bootstrap-material-datetimepicker.js"></script>
<script src="../../plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
<script src="../../plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js"></script>

<!-- <script src="../../assets/js/jquery.forms-advanced.js"></script>-->
<script src="../../assets/js/parsley.min.js"></script>
<script src="../../plugins/sweet-alert2/sweetalert2.min.js"></script>
<!-- App js -->
<script src="../../assets/js/app.js"></script>
<script src="../../assets/js/pagejs/offer.js"></script>
<script>
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });
</script>
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