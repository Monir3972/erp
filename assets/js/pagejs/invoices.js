! function($) {



    //*****************************************************************
    //*********************Fetch invoice Table*************************
    //*****************************************************************
    
    $.ajax({
        url: "../../apis/apis_s/api.php",
        type: "post",
        data: { 'req': '13', 'param': '11', 'get': 'body' },
        dataType: "json",
        success: function(result) {
            $("#invoice_table").html(result);
            $('#tableData').paging({limit:18});
            destroy : true
        }
    });





    //*****************************************************************
    //***********************Open Create Modal*************************
    //*****************************************************************

    $("#create_new").on('show.bs.modal', function(event) {



        //*****************************************************************
        //***********************Fetch Region List*************************
        //*****************************************************************
        $.ajax({
            url: "../../apis/apis_s/api.php",
            type: "post",
            data: { 'req': '1', 'param': '3', 'get': 'body' },
            dataType: "json",
            success: function(result) {
                $("#region_list").html(result);
            }
        });

        //*****************************************************************
        //**************Fetch Depot List Depending On Region***************
        //*****************************************************************
        $('#region_list').on('change', function(){
            var region_id = $(this).val();
            $.ajax({
                url: "../../apis/apis_s/api.php",
                type: "post",
                data: { 'req': '3', 'param': '5', 'filter': 'region = ' +region_id },
                dataType: "json",
                success: function(result) {
                    $("#depot_list").html(result);
                }
            });

            //*****************************************************************
            //*************Fetch Distri List Depending On Region***************
            //*****************************************************************
            $.ajax({
                url: "../../apis/apis_s/api.php",
                type: "post",
                data: { 'req': '5', 'param': '8', 'filter': 'id IN (' +region_id+ ')' },
                dataType: "json",
                success: function(result) {
                    $("#distributor_list").html(result);
                }
            });

        });

        

        //*****************************************************************
        //***************Fetch Area List Depending On Depots***************
        //*****************************************************************
        $('#depot_list').on('change', function(){
            var depot_id = $(this).val();
            $.ajax({
                url: "../../apis/apis_s/api.php",
                type: "post",
                data: { 'req': '6', 'param': '5', 'filter': 'depot = ' +depot_id },
                dataType: "json",
                success: function(result) {
                    $("#area_list").html(result);
                }
            });

            //*****************************************************************
            //*************Fetch Distri List Depending On depots***************
            //*****************************************************************
            $.ajax({
                url: "../../apis/apis_s/api.php",
                type: "post",
                data: { 'req': '5', 'param': '8', 'filter': 'depot IN (' +depot_id+ ')' },
                dataType: "json",
                success: function(result) {
                    $("#distributor_list").html(result);
                }
            });

        });


        //*****************************************************************
        //************Fetch Territory List Depending On Area***************
        //*****************************************************************
        $('#area_list').on('change', function(){
            var area_id = $(this).val();
            $.ajax({
                url: "../../apis/apis_s/api.php",
                type: "post",
                data: { 'req': '7', 'param': '5', 'filter': 'area = ' +area_id },
                dataType: "json",
                success: function(result) {
                    $("#territory_list").html(result);
                }
            });

            //*****************************************************************
            //*************Fetch Distri List Depending On areas****************
            //*****************************************************************
            $.ajax({
                url: "../../apis/apis_s/api.php",
                type: "post",
                data: { 'req': '5', 'param': '8', 'filter': 'depot IN (' +area_id+ ')' },
                dataType: "json",
                success: function(result) {
                    $("#distributor_list").html(result);
                }
            });


        });


        //*****************************************************************
        //***********Fetch Distri List Depending On territories************
        //*****************************************************************
        $('#territory_list').on('change', function(){
            var territory_id = $(this).val();
            $.ajax({
                url: "../../apis/apis_s/api.php",
                type: "post",
                data: { 'req': '5', 'param': '8', 'filter': 'terri = ' +territory_id },
                dataType: "json",
                success: function(result) {
                    $("#distributor_list").html(result);
                }
            });
        });




        //*****************************************************************
        //********************Fetch Distributor List***********************
        //*****************************************************************
        $.ajax({
            url: "../../apis/apis_s/api.php",
            type: "post",
            data: { 'req': '5', 'param': '8', 'get': 'body' },
            dataType: "json",
            success: function(result) {
                $("#distributor_list").html(result);
            }
        });



        //*****************************************************************
        //**********************Clear selection List***********************
        //*****************************************************************
        $("#reset").on("click", function () {

            //*****************************************************************
            //***********************Fetch distri List*************************
            //*****************************************************************

            $.ajax({
                url: "../../apis/apis_s/api.php",
                type: "post",
                data: { 'req': '5', 'param': '8', 'get': 'body' },
                dataType: "json",
                success: function(result) {
                    $("#distributor_list").html(result);
                }
            });

            //*****************************************************************
            //***********************Fetch Region List*************************
            //*****************************************************************
            $.ajax({
                url: "../../apis/apis_s/api.php",
                type: "post",
                data: { 'req': '1', 'param': '3', 'get': 'body' },
                dataType: "json",
                success: function(result) {
                    $("#region_list").html(result);
                }
            });

            $('#depot_list').empty();
            $('#area_list').empty();
            $('#territory_list').empty();

        });



        //*****************************************************************
        //********Fetch Distri Owner Info Depending On territories*********
        //*****************************************************************
        $('#distributor_list').on('change', function(){
            var distributor_id = $(this).val();
            var org_id = $('#c_org_id').val();
            $.ajax({
                url: "../../apis/apis_s/api.php",
                type: "post",
                data: { 'req': '8', 'param': '9', 'filter': 'id = ' +distributor_id },
                dataType: "json",
                success: function(result) {
                    $("#owner_info").html(result);
                }
            });
            //fetching auto generated inv number, ref challan
            $.ajax({
                url: "../../apis/apis_s/api.php",
                type: "post",
                data: { 'req': '9', 'param': '10', 'filter': 'org_id = ' +org_id },
                dataType: "json",
                success: function(result) {
                    $("#c_inv_number").val(result['inv_number']);
                    $("#c_sales_ref_no").val(result['sales_ref_number']);
                    $("#c_challan_number").val(result['challan_number']);
                }
            });

            //fetching routes list depending on distributor
            $.ajax({
                url: "../../apis/apis_s/api.php",
                type: "post",
                data: { 'req': '10', 'param': '5', 'filter': 'distributor = ' +distributor_id },
                dataType: "json",
                success: function(result) {
                    $("#c_routes_list").html(result);
                }
            });

            //fetching store list depending on distributor
            var depot_id = $('#c_depot_id').val();
            $.ajax({
                url: "../../apis/apis_s/api.php",
                type: "post",
                data: { 'req': '12', 'param': '5', 'filter': 'depots = ' +depot_id },
                dataType: "json",
                success: function(result) {
                    $("#c_store_list").html(result);
                }
            });

            //*****************************************************************
            //**************Fetch Products all detailed list ******************
            //*****************************************************************
            var org_id = $('#c_org_id').val();
            $.ajax({
                url: "../../apis/apis_s/api.php",
                type: "post",
                data: { 'req': '4', 'param': '5', 'filter': 'org_id = ' +org_id },
                dataType: "json",
                success: function(result) {
                    $("#c_sel_item").html(result);
                }
            });


        });


        //*****************************************************************
        //**************Fetch outlet Info Depending On routes*************
        //*****************************************************************
        $('#c_routes_list').on('change', function(){
            var route_id = $(this).val();
            $.ajax({
                url: "../../apis/apis_s/api.php",
                type: "post",
                data: { 'req': '11', 'param': '5', 'filter': 'routes = ' +route_id },
                dataType: "json",
                success: function(result) {
                    $("#c_outlet_list").html(result);
                }
            });
        });



        
        //*****************************************************************
        //********Maintain the serial of products list in select2**********
        //*****************************************************************
        $("#c_sel_item").on("select2:select", function (evt) {
          var element = evt.params.data.element;
          var $element = $(element);
          
        $element.detach();
          $(this).append($element);
          $(this).trigger("change");
        });
        var thing = $("#c_sel_item").select2({
            closeOnSelect: false,
            }).on("change", function(e){
        });



        //*****************************************************************
        //***********Append table of selected items with details***********
        //*****************************************************************

        $('#c_add_inv_prod').on('click',function(){

            var item = $('#c_sel_item').val();

            //clear selection
            $("#c_sel_item").val(null).trigger("change");

            // alert(s);
            $.ajax({
               url:"../../apis/apis_s/api.php", 
               type: "post", //request type,
               data: {'req': '4', 'param': '7', 'data': item, 'order_by': ' ORDER BY FIELD (`id`, '+item+')'},
               dataType:"json",
               success:function(result)
               { 
                  
                  var item_count = result.length;
                  var ht ='';
                  for(i=0; i<item_count; i++)
                  {
                    ht += '<tr><td>'+result[i]['name']+'<input type="text" name="product_id[]" value="'+result[i]['id']+'" hidden /></td><td>'+result[i]['size_in_ml']+'<input type="text" name="vol[]" value="'+result[i]['size_in_ml']+'" hidden /></td><td>'+result[i]['ctn_size_in_pcs']+'<input type="text" name="ctnsz[]" value="'+result[i]['ctn_size_in_pcs']+'" hidden /></td><td>'+result[i]['ddp']+'<input type="text" class="ctn_price" name="ctn_price[]" value="'+result[i]['ddp']+'"  hidden/><input type="text" class="pc_price" name="pc_price[]" value="'+result[i]['pc_price']+'" hidden /><input type="text" name="price_type[]" value="DP" hidden /></td>';
                    ht += '<td><input type="number" style="width: 80px;height: 18px" min="0" step="1" class="pqty_in_ctn form-control" name="pqty_in_ctn[]" value="0"  /></td><td><input type="number" style="width: 80px;height: 18px" class="form-control pqty_in_pcs" min="0" step="1" name="pqty_in_pcs[]" value="0"  /></td>';
                    ht +='<td><input type="number" style="width: 80px;height: 18px" class="form-control" min="0" step="1" class="a_qty_ctn" name="a_qty_ctn[]" value="0"  /></td><td><input type="number" style="width: 80px;height: 18px" class="form-control" min="0" step="1" class="a_qty_pcs" name="a_qty_pcs[]" value="0"  /></td>';
                    ht += '<td><input type="number" style="width: 80px;height: 18px" class="form-control" min="0" step="1" class="compl_ctn" name="compl_ctn[]" value="0"  /></td><td><input type="number" style="width: 80px;height: 18px" class="form-control" min="0" step="1" class="compl_pcs" name="compl_pcs[]" value="0"  /></td>';
                    ht += '<td><p style="font-size: 11px" class="mb-0 itm_tot_p">0.00</p><input type="hidden" style="width: 120px;" class="itm_tot" id="c_itm_tot" name="line_total[]" /></td><td><button class="btn text-danger" style="padding: 1px 5px;" type="button" id="delete_table_row"><i class="fa fa-trash"></i></button></td></tr>';
                  }
                  $("#c_inv_items_list").append(ht);
               }
            }); 
  
            
        });





        //**************************************************************************
        //*******************Remove appended row from table*************************
        //**************************************************************************
        $("#add_invoice_form").on('click', '#delete_table_row', function(e) 
        {
            var el2rem = $(this).closest('tr');

            var c_grand_total = parseFloat(parseFloat($('#c_grand_total').val())-parseFloat(el2rem.find('.itm_tot').val())).toFixed(2);

            // changing total payable value
            $('#c_grand_total').val(c_grand_total);
            var c_grand_total = $('#c_grand_total').val();
            var c_cash_com = $('#c_cash_com').val();
            var c_discount = $('#c_discount').val();

            $('#c_after_discount').val(parseFloat(c_grand_total - c_discount).toFixed(2));
            var c_after_discount = parseFloat(c_grand_total - c_discount).toFixed(2);
            $('#c_dsr_com').val(parseFloat(parseFloat(parseFloat(c_after_discount))*parseFloat(c_cash_com)/100).toFixed(2));
            $('#c_total_payable').val(parseFloat($('#c_grand_total').val() - $('#c_dsr_com').val() - c_discount).toFixed(2));

            el2rem.remove();

            var rowcountTable = $('#itemAppendTable tbody').find('tr').length;
            if(rowcountTable == 0){
                alert(rowcountTable);
                $('#c_cash_com').val(0);
                $('#c_discount').val(0);
                $('#c_after_discount').val(0);
                $('#c_dsr_com').val(0);
                $('#c_total_payable').val(0); 
            }

        });





        //**************************************************************************
        //*******************Calculation Of live table data*************************
        //**************************************************************************
        $("#c_inv_items_list").on("change", "input", function () {  
          var tableRow = $(this).closest("tr");  
          //ctn in total
          var pqty_in_ctn = Number(tableRow.find(".pqty_in_ctn").val()); 
          var ctn_price   = Number(tableRow.find(".ctn_price").val());  
          var total_ctn   = pqty_in_ctn * ctn_price;  //calculate total of ctn


          //pcs in total
          var pqty_in_pcs = Number(tableRow.find(".pqty_in_pcs").val()); 
          var pc_price    = Number(tableRow.find(".pc_price").val());  
          var total_pcs   = pqty_in_pcs * pc_price;  //calculate total of pcs


          var line_total = parseFloat(total_ctn + total_pcs).toFixed(2);


          tableRow.find(".itm_tot").val(line_total);  //set value of item total 
          tableRow.find(".itm_tot_p").html(line_total);  //set value of item total 


          var gd_total = 0;
            $(".itm_tot").each(function(){
                gd_total += +$(this).val();
                grand_total = parseFloat(gd_total).toFixed(2);
            });
            $("#c_grand_total").val(grand_total);


            // changing total payable value
            var c_grand_total = $('#c_grand_total').val();
            var c_cash_com = $('#c_cash_com').val();
            var c_discount = $('#c_discount').val();

            $('#c_after_discount').val(parseFloat(c_grand_total - c_discount).toFixed(2));
            var c_after_discount = parseFloat(c_grand_total - c_discount).toFixed(2);
            $('#c_dsr_com').val(parseFloat(parseFloat(parseFloat(c_after_discount))*parseFloat(c_cash_com)/100).toFixed(2));
            $('#c_total_payable').val(parseFloat($('#c_grand_total').val() - $('#c_dsr_com').val() - c_discount).toFixed(2));


        });




        //**************************************************************************
        //*********Calculation Of live table data while changing dsr_com************
        //**************************************************************************

        $('#c_cash_com').on('input',function()
        {
            var c_grand_total = $('#c_grand_total').val();
            var c_cash_com = $('#c_cash_com').val();
            var c_discount = $('#c_discount').val();

            $('#c_after_discount').val(parseFloat(c_grand_total - c_discount).toFixed(2));
            var c_after_discount = parseFloat(c_grand_total - c_discount).toFixed(2);
            $('#c_dsr_com').val(parseFloat(parseFloat(parseFloat(c_after_discount))*parseFloat(c_cash_com)/100).toFixed(2));
            $('#c_total_payable').val(parseFloat($('#c_grand_total').val() - $('#c_dsr_com').val() - c_discount).toFixed(2));
        });



        //**************************************************************************
        //*********Calculation Of live table data while changing discount***********
        //**************************************************************************

        $('#c_discount').on('input',function()
        {
            var c_grand_total = $('#c_grand_total').val();
            var c_cash_com = $('#c_cash_com').val();
            var c_discount = $('#c_discount').val();

            $('#c_after_discount').val(parseFloat(c_grand_total - c_discount).toFixed(2));
            var c_after_discount = parseFloat(c_grand_total - c_discount).toFixed(2);
            $('#c_dsr_com').val(parseFloat(parseFloat(parseFloat(c_after_discount))*parseFloat(c_cash_com)/100).toFixed(2));
            $('#c_total_payable').val(parseFloat($('#c_grand_total').val() - $('#c_dsr_com').val() - c_discount).toFixed(2));
        });





    });




    //*****************************************************************
    //**********************Add Invoice data***************************
    //*****************************************************************


    $('#add_invoice_form').submit(function(event) {
        event.preventDefault();
        $.ajax({
            data: $(this).serialize(),
            url: "../../controller/process_invoice_data.php", //php page URL where we post this data to save in database
            type: 'POST',
            success: function(result_1) {
                $.ajax({
                    url: "../../apis/apis_s/api.php",
                    type: "post",
                    data: { 'req': '1', 'param': '1', 'get': 'body' },
                    dataType: "json",
                    success: function(result) {
                        if (result_1 == 'true') {
                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'Invoice has been created',
                                showConfirmButton: false,
                                timer: 1500
                            })
                            $("#invoice_table").html(result);
                            $("#add_invoice_form")[0].reset();
                            $('#distributor_list').val('0').trigger('change');
                            $('#c_routes_list').val('0').trigger('change');
                            $('#c_outlet_list').val('0').trigger('change');
                            $('#c_store_list').val('0').trigger('change');
                            $('#c_inv_items_list').empty();
                            $("#c_inv_number").val('');
                            $("#c_sales_ref_no").val('');
                            $("#c_challan_number").val('');
                            $("#owner_info").hide();

                        } else {
                            Swal.fire({
                                position: 'top-end',
                                icon: 'error',
                                title: result_1,
                                showConfirmButton: false,
                                timer: 1500
                            })
                            // $("#owner_info").html(result);
                            // $("#add_region_form")[0].reset();
                        }

                    }
                });
            }
        });
    });





    // -------------------------------------------------------------------------------------------------------------------------------------
    // -------------------------------------------------------------------------------------------------------------------------------------
    // -------------------------------------------------------------------------------------------------------------------------------------
    // -------------------------------------------------------------------------------------------------------------------------------------
    // -------------------------------------------------------------------------------------------------------------------------------------
    // -------------------------------------------------------------------------------------------------------------------------------------
    // -------------------------------------------------------------------------------------------------------------------------------------



    //*****************************************************************
    //***********************Open Created Modal*************************
    //*****************************************************************

    $("#invoice_table").on('click', '#btn_view', function(e) {
        var invoice_id = $(this).attr('data-id');
        $("#invoice_id").val(invoice_id);
        $("#modal_view").modal('show');
    });



    $("#modal_view").on('show.bs.modal', function(event) {
    var invoice_id = $("#invoice_id").val();

    $.ajax({
        url: "../../apis/apis_s/api.php",
        type: "post",
        data: { 'req': '14', 'param': '6', 'filter': 'id = '+invoice_id },
        dataType: "json",
        success: function(result) {
            $('#view_inv_number').html(result['inv_number']);
            $('#view_inv_date').html(result['inv_date']);
            $('#view_sales_ref_number').html(result['sales_ref_number']);
            $('#view_challan_number').html(result['challan_number']);

            $('#print').html('<a style="padding: 2px 10px;" class="btn btn-sm btn-outline-primary printButton" href="print?inv_id='+invoice_id+'&&wh=invoice" target="_blank"><i class="fa fa-print"></i> Print</a> <a style="padding: 2px 10px;" class="btn btn-sm btn-outline-primary printButton" href="print?inv_id='+invoice_id+'&&wh=challan" target="_blank"><i class="fa fa-print"></i> Challan</a> <a style="padding: 2px 10px;" class="btn btn-sm btn-outline-primary printButton" href="print?inv_id='+invoice_id+'&&wh=all" target="_blank"><i class="fa fa-print"></i> Both</a>');


            var distri_id = result['distri'];
            var route_id = result['route'];
            var outlet_id = result['outlet'];
            var store_id = result['store_id'];


            //owner details
            $.ajax({
                url: "../../apis/apis_s/api.php",
                type: "post",
                data: { 'req': '8', 'param': '6', 'filter': 'id = '+distri_id },
                dataType: "json",
                success: function(result_1) {
                    $('#view_o_name').html(result_1['o_name']);
                    $('#view_o_address').html(result_1['o_address']);
                    $('#view_o_mobile').html(result_1['o_mobile']);

                    $('#view_distri_name').html(result_1['name']);
                    $('#view_distri_address').html(result_1['address']);
                }
            });


            //invoice item details
            $.ajax({
                url: "../../apis/apis_s/api.php",
                type: "post",
                data: { 'req': '15', 'param': '12', 'filter': 'inv_id = '+invoice_id },
                dataType: "json",
                success: function(result_2) {
                    $('#view_inv_item_details').html(result_2);
                }
            });


            //route
            if(route_id == 0){
                $('#view_route').html('<b>Route: </b><r class="text-danger">No Route</r>');
            }
            else {
                $.ajax({
                    url: "../../apis/apis_s/api.php",
                    type: "post",
                    data: { 'req': '10', 'param': '6', 'filter': 'id = '+route_id },
                    dataType: "json",
                    success: function(result_3) {
                        $('#view_route').html('<b>Route: </b>' +result_3['name']);
                    }
                });
            }


            //outlet
            if(outlet_id == 0){
                $('#view_outlet').html('<b>Outlet: </b><r class="text-danger">No Outlet</r>');
            }
            else {
                $.ajax({
                    url: "../../apis/apis_s/api.php",
                    type: "post",
                    data: { 'req': '11', 'param': '6', 'filter': 'id = '+outlet_id },
                    dataType: "json",
                    success: function(result_4) {
                        $('#view_outlet').html('<b>Outlet: </b>' +result_4['name']);
                    }
                });
            }



            //store
            if(store_id == 0){
                $('#view_store').html('<b>Store: </b><r class="text-danger">No Store</r>');
            }
            else {
                $.ajax({
                    url: "../../apis/apis_s/api.php",
                    type: "post",
                    data: { 'req': '12', 'param': '6', 'filter': 'id = '+store_id },
                    dataType: "json",
                    success: function(result_5) {
                        $('#view_store').html('<b>Store: </b>' +result_5['name']);
                    }
                });
            }


            }
        });
  
    });



}(window.jQuery);