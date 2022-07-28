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

        $('#print').html('<a style="padding: 2px 10px;" class="btn btn-sm btn-outline-primary printButton" href="print?inv_id='+invoice_id+'&&wh=print" target="_blank"><i class="fa fa-print"></i> Print</a> <a style="padding: 2px 10px;" class="btn btn-sm btn-outline-primary printButton" href="print?inv_id='+invoice_id+'&&wh=challan" target="_blank"><i class="fa fa-print"></i> Challan</a> <a style="padding: 2px 10px;" class="btn btn-sm btn-outline-primary printButton" href="print" target="_blank"><i class="fa fa-print"></i> Both</a>');


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





//challan
var invoice_id = $("#invoice_id1").val();

$.ajax({
    url: "../../apis/apis_s/api.php",
    type: "post",
    data: { 'req': '14', 'param': '6', 'filter': 'id = '+invoice_id },
    dataType: "json",
    success: function(result) {
        $('#view_inv_number1').html(result['inv_number']);
        $('#view_inv_date1').html(result['inv_date']);
        $('#view_sales_ref_number1').html(result['sales_ref_number']);
        $('#view_challan_number1').html(result['challan_number']);



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
                $('#view_o_name1').html(result_1['o_name']);
                $('#view_o_address1').html(result_1['o_address']);
                $('#view_o_mobile1').html(result_1['o_mobile']);

                $('#view_distri_name1').html(result_1['name']);
                $('#view_distri_address1').html(result_1['address']);
            }
        });


        //invoice item details
        $.ajax({
            url: "../../apis/apis_s/api.php",
            type: "post",
            data: { 'req': '15', 'param': '13', 'filter': 'inv_id = '+invoice_id },
            dataType: "json",
            success: function(result_2) {
                $('#view_inv_item_details1').html(result_2);
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
                    $('#view_route1').html('<b>Route: </b>' +result_3['name']);
                }
            });
        }


        //outlet
        if(outlet_id == 0){
            $('#view_outlet1').html('<b>Outlet: </b><r class="text-danger">No Outlet</r>');
        }
        else {
            $.ajax({
                url: "../../apis/apis_s/api.php",
                type: "post",
                data: { 'req': '11', 'param': '6', 'filter': 'id = '+outlet_id },
                dataType: "json",
                success: function(result_4) {
                    $('#view_outlet1').html('<b>Outlet: </b>' +result_4['name']);
                }
            });
        }



        //store
        if(store_id == 0){
            $('#view_store1').html('<b>Store: </b><r class="text-danger">No Store</r>');
        }
        else {
            $.ajax({
                url: "../../apis/apis_s/api.php",
                type: "post",
                data: { 'req': '12', 'param': '6', 'filter': 'id = '+store_id },
                dataType: "json",
                success: function(result_5) {
                    $('#view_store1').html('<b>Store: </b>' +result_5['name']);
                }
            });
        }


    }
});