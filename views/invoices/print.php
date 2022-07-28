<?php include('../../controller/sessions.php'); ?>

<?php 
    if(isset($_GET['inv_id'])){
        $inv_id = $_GET['inv_id'];
        $wh = $_GET['wh'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>AIR - <?php echo $get_title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="../../assets/images/favicon.ico">

    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"  media='all'/>

</head>

<body>

    <div class="<?php if($wh == 'challan') {echo 'd-none';} ?> bg-text" class="" data-bg-text="<?php echo $org ?>" style="page-break-before:always">
        <!--end modal-header-->
        <div class=" p-2 pe-4 ps-4 mt-4">

            <input type="hidden" id="invoice_id" name="invoice_id" value="<?php echo $_GET['inv_id'] ?>">
            <input type="hidden" id="view_distri_id" name="distri_id">
            <div class="card-body p-0">

                <div class="row">

                   
                    <div class="col-4">
                        <h5 class="mb-0"><?php echo $org ?></h5>
                        <p class="mb-0"><?php echo $org_address ?></p>
                        <p class="mb-3">Phone: <?php echo $org_phone_no ?></p>
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

        </div>
        <!--end modal-body-->
    </div>
    <!--end modal-content-->



    <div class="<?php if($wh == 'invoice') {echo 'd-none';} ?> bg-text" class="" data-bg-text="<?php echo $org ?>" style="page-break-before:always">
        <!--end modal-header-->
        <div class=" p-2 pe-4 ps-4 mt-4">

            <input type="hidden" id="invoice_id1" name="invoice_id" value="<?php echo $_GET['inv_id'] ?>">
            <input type="hidden" id="view_distri_id1" name="distri_id">
            <div class="card-body p-0">

                <div class="row">

                   
                    <div class="col-4">
                        <h5 class="mb-0"><?php echo $org ?></h5>
                        <p class="mb-0"><?php echo $org_address ?></p>
                        <p class="mb-3">Phone: <?php echo $org_phone_no ?></p>
                    </div>

                    <div class="col-4 text-center mt-3">
                        <h4 class="mt-3"><u>Challan</u></h4>
                    </div>

                    <div class="col-4 text-end">
                        <h5 class="mb-0"><b>Challan No:</b> <span id="view_challan_number1" class="text-custom"> </span></h5>
                        <h6 class="mb-0 mt-2"><b>Invoice  No:</b> <span id="view_inv_number1" class="text-custom"> </span></h6>
                        <h6 class="mb-0 mt-0"><b>Invoice Date:</b> <span id="view_inv_date1" class="text-custom"> </span></h6>
                        <h6 class="mb-0 mt-0"><b>Sales Ref. No:</b> <span id="view_sales_ref_number1" class="text-custom"> </span></h6>
                    </div>



                    <div class="row">
                        <div class="col-4">
                            <div class="card card-body pt-1 pb-1">
                                <h6 class="mb-1 text-primary">Bill To:</h6>
                                <h5 class="text-custom mb-1 h5" id="view_o_name1"></h5>
                                <p class="text-custom mb-0" id="view_o_address1"></p>
                                <p class="text-custom mb-0" id="view_o_mobile1"></p>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="card card-body pt-1 pb-1">
                                <h6 class="mb-1 text-primary">Shipp To:</h6>
                                <h5 class="text-custom mb-1 h5" id="view_distri_name1"></h5>
                                <p class="text-custom mb-0" id="view_distri_address1"></p>
                            </div>
                        </div>



                        <div class="col-4">
                            <div class="card card-body pt-1 pb-1">
                                <h6 class="mb-1 text-primary">Other Details:</h6>
                                <p class="text-custom mb-0 mt-2" id="view_route1"></p>
                                <p class="text-custom mb-0" id="view_outlet1"></p>
                                <p class="text-custom mb-0" id="view_store1"></p>
                            </div>
                        </div>


                        
                    </div>


                    <div class="row">
                        <table class="table table-bordered mt-3" id="itemAppendTable1">
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
                            <tbody id="view_inv_item_details1">
                                
                            </tbody>
                        </table>
                    </div>




                </div>


            </div>

        </div>
        <!--end modal-body-->
    </div>
    <!--end modal-content-->


    

    <!-- jQuery  -->
    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/js/pagejs/print.js"></script>



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

    td {
        font-size: 12px;
        padding: 2px 4px !important;
    }

    td p {
        margin-bottom: 0px !important;
        font-size: 11px;
        color: #000000;
    }

    .table th {
        font-size: 11.5px!important;
        vertical-align: middle;
    }

    @page { margin: 0; }

    .bg-text {
        position: relative;
    }
    .bg-text::after {
        color: #000;
        content: attr(data-bg-text);
        display: block;
        font-size: 90px;
        line-height: 1;
        position: absolute;
        left: 11%;
        top: 50%;
        opacity: 0.1;
        transform: rotate(310deg);
    }

    </style>

    </body>
</html>
<script>
   
    // window.print();

</script>
<?php } ?>
