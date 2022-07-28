$(document).ready(function() {
    //Offer table view script

    $.ajax({
        url: "../../apis/api_a/api.php",
        type: 'POST',
        data: {'req': '9', 'param': '5'},
        dataType: "json",
        success: function (result) {
            console.log(result)
        }
    });


    //Add form script
    $('#add_offer_form').parsley();
    $('#create_new').on('show.bs.modal', function(event)
    {
        $.ajax({
            url: "../../apis/api_a/api.php",
            type: 'POST',
            data: {'req': '1', 'param': '1'},
            dataType: "json",
            success: function (result) {
                $('#offer_type').html(result);
            }
        });
        $.ajax({
            url: "../../apis/api_a/api.php",
            type: 'POST',
            data: {'req': '4', 'param': '1'},
            dataType: "json",
            success: function (result) {
                $('#region').html(result);
            }
        });
    });

    $('#offer_type').on('change',function (event){
        var offerType = $('#offer_type').val();
        if (offerType == 1){
            $('#amount_group').show();
            $('#prod_cat_group').hide()
            $('.prod_cat').removeAttr('required');
            $('.product').removeAttr('required');
        }
        else{
            $('#amount_group').hide();
            $('#prod_cat_group').show()
            $('.prod_cat').attr('required',true);
            $('.product').attr('required',true);
            $.ajax({
                url: "../../apis/api_a/api.php",
                type: 'POST',
                data: {'req': '2', 'param': '2', get: 'name'},
                dataType: "json",
                success: function (result) {
                    $('#prod_cat1').html(result);
                }
            });
        }
    });


    $('#region').on('change',function (e){
        var region = $("#region").val();
        if (region == ''){
            $('#depot_grp').hide();
        }else{
            $('#depot_grp').show();
        }
        $.ajax({
            url: "../../apis/api_a/api.php",
            type: 'POST',
            data: {'req': '5', 'param': '4','data':region,'get':'region'},
            dataType: "json",
            success: function (result) {
                $('#depot').html(result);
            }
        });
    });

    $('#depot').on('change',function (e){
        var depotID = $('#depot').val();
        if (depotID ==''){
            $('#area_grp').hide();
        }else{
            $('#area_grp').show();
        }
        $.ajax({
            url: "../../apis/api_a/api.php",
            type: 'POST',
            data: {'req': '6', 'param': '4','data':depotID,'get':'depot'},
            dataType: "json",
            success: function (result) {
                $('#area').html(result)
            }
        });

    });

    $('#area').on('change',function (e){
        var areaID = $('#area').val();
        if (areaID ==''){
            $('#territory_grp').hide();
        }else{
            $('#territory_grp').show();
        }
        $.ajax({
            url: "../../apis/api_a/api.php",
            type: 'POST',
            data: {'req': '7', 'param': '4','data':areaID,'get':'area'},
            dataType: "json",
            success: function (result) {
                $('#territory').html(result);
            }
        });

    });
    $('#territory').on('change',function (e){
        var territoryID = $('#territory').val();
        if (territoryID ==''){
            $('#distributor_grp').hide();
        }else{
            $('#distributor_grp').show();
        }
        $.ajax({
            url: "../../apis/api_a/api.php",
            type: 'POST',
            data: {'req': '8', 'param': '4','data':territoryID,'get':'territory'},
            dataType: "json",
            success: function (result) {
                $('#distributor').html(result);
            }
        });
    });

    $('#applicable_for').on('change',function (e){
       var data = $('#applicable_for').val();
       if (data == '1'){
           $('.invoice_date_range').hide();
           $('#invoice_date_from').attr('disabled',true);
           $('#invoice_date_to').attr('disabled',true);
       }
       else{
           $('.invoice_date_range').show();
           $('#invoice_date_from').removeAttr('disabled');
           $('#invoice_date_to').removeAttr('disabled');
       }
    });

    $('#add_offer_form').submit(function (e){
        e.preventDefault();
        $.ajax({
            dataType: 'Json',
            data: $(this).serialize(),
            url: "../../controller/process_offer_data.php", //php page URL where we post this data to save in database
            type: 'POST',
            success: function (result) {
                console.log(result);
                if (result==true){
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Offer has been added.',
                        showConfirmButton: false,
                        timer: 1500
                    });
                }
                else{
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: 'Something Went Wrong. Please Try Again.',
                        showConfirmButton: false,
                        timer: 1500
                    });
                }
            }
        });
    });
    $('#retailer_include').on('click',function (e){
       var retailer_include = $('#retailer_include').is(':checked');
       if (retailer_include==false){
            $('#retailer_include').val(0);
            $('#retail_offer_id').attr('required',true);
            $('#retail_grp').show();
           $.ajax({
               url: "../../apis/api_a/api.php",
               type: 'POST',
               data: {'req': '9', 'param': '1','filter':' retails_include_status=0'},
               dataType: "json",
               success: function (result){
                   $('#retail_offer_id').html(result);
               }
           });
       }
       else{
           $('#retailer_include').val(1);
           $('#retail_grp').hide();
           $('#retail_offer_id').removeAttr('required');
       }
    });

    $('#is_excluded').on('click',function (e){
       var  is_excluded = $('#is_excluded').is(':checked');
       if (is_excluded == true){
            $('#itmExclude_grp').show();
            $('#excluded_items').attr('required',true);
            $('#is_excluded').val(1);
           $.ajax({
               url: "../../apis/api_a/api.php",
               type: 'POST',
               data: {'req': '3', 'param': '1'},
               dataType: "json",
               success: function (result){
                   $('#excluded_items').html(result);
               }
           });
       }
       else{
           $('#itmExclude_grp').hide();
           $('#excluded_items').removeAttr('required');
           $('#is_excluded').val(0);
       }
    });

    $('#is_active').on('click',function (e){
       var is_active = $('#is_active').is(':checked');
       if (is_active==true){
           $('#is_active').val(1);
       }
       else{
           $('#is_active').val(0);
       }
    });
});

//Amount validation
function amountCheck(e){
    var amountType = $('#amount_type').val();
    var amount =$('#amount').val();
    if (amount==''){
        $('#amount_error').text('This value is required');
        $('#amount_error').show();
    }
    else
    {
        $('#amount_error').hide();
        if (amountType == 'Percent'){
            if (amount >100){
                $('#amount_error').show();
            }
            else
            {
                $('#amount_error').hide();
            }
        }
        else{
            $('#amount_error').hide();
        }
    }
}


//Vue
var offer_body = new Vue({
    el: '#offer_body',
    data: {
        rawItem:1,
    },
    methods:{
        AddMoreRaw:function(){
            this.rawItem++;
            this.getProdCat();
        },
        SelectAllRawFunc:function(){
            var isAllSel = $('#all-raw').is( ":checked" )
            if(isAllSel){
                $('.checkbox-raw-item').each(function(){
                    if($('#'+this.id).is( ":checked" ) == false){
                        document.getElementById(this.id).checked = true;
                    }
                });
            }else{
                $('.checkbox-raw-item').each(function(){
                    if($('#'+this.id).is( ":checked" )){
                        document.getElementById(this.id).checked = false;
                    }
                });
            }
        },
        removeItemRaw:function(){
            $('.checkbox-raw-item').each(function(){
                if($('#'+this.id).is(":checked")){
                    var id = $('#'+this.id).attr('data-id');
                    $('#raw-row-id'+id).html('');
                }
            });
            document.getElementById('all-raw').checked = false;
            var isNotExistRow = true;
            $('.row-item').each(function(){
                var isText = $('#'+this.id).text();
                if(isText != ''){
                    isNotExistRow = false;
                }
            });
            if(isNotExistRow){
                this.rawItem++;
                this.getProdCat();
            }
        },
        getProdCat:function (){
           var id = this.rawItem;
            $.ajax({
                url: "../../apis/api_a/api.php",
                type: 'POST',
                data: {'req': '2', 'param': '2', get: 'name'},
                dataType: "json",
                success: function (result) {
                    $('#prod_cat'+id).html(result);
                }
            });
        },
        getProductByCat:function (e){
            var id = e.target.getAttribute('data-id');
            var catId = $('#prod_cat'+id).val();
            $.ajax({
                url: "../../apis/api_a/api.php",
                type: 'POST',
                data: {'req': '3', 'param': '3','data':catId},
                dataType: "json",
                success: function (result) {
                    $('#product'+id).html(result);
                }
            });
        }
    },
    created:function(){
    }
});
