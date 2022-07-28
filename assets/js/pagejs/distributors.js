! function($) {

    //*****************************************************************
    //*********************Fetch area Table**************************
    //*****************************************************************

    //Fetch Distributor table data 
    $.ajax({
        url: "../../apis/apis_n/api.php",
        type: "post",
        data: { 'req': '5', 'param': '10', 'get': 'body' },
        dataType: "json",
        success: function(result) {
            $("#distribution_table").html(result);
            $("#distribution_table1").html(result);
        }
    });


    //********************************************************************
    //*********************Add Distributors data**************************
    //********************************************************************


    //Error validation message while adding and uploading trade license image
    $("#add_image1").change(function(event) {
        if (event.target.files[0].size > 512000) {
            $(".add_tl_image").text("Image File too large, must be less than 500 KB.");
        } else {
            $(".add_tl_image").text("");
        }
    });

    //Error validation message while adding and uploading aggrement image
    $("#add_image2").change(function(event) {
        if (event.target.files[0].size > 512000) {
            $(".add_ag_image").text("Image File too large, must be less than 500 KB.");
        } else {
            $(".add_ag_image").text("");
        }
    });

    //Error validation message while editing and uploading rental deed image
    $("#add_rental_deed").change(function(event) {
        if (event.target.files[0].size > 512000) {
            $(".add_rd_image").text("Image File too large, must be less than 500 KB.");
        } else {
            $(".add_rd_image").text("");
        }
    });


    // region, depot ,area & territory dropdown lists --> for distributor
    $("#create_new").on('show.bs.modal', function(e) {
        // Get org_id from session
        var org_id = $("#org_id_add").data('value');

        $.ajax({
            url: "../../apis/apis_n/api.php",
            type: "post",
            data: { 'req': '2', 'param': '3', 'get': 'body', 'filter': 'org_id = ' + org_id },
            dataType: "json",
            success: function(result) {
                $("#region_list").html(result);

                //Dynamic dependable dropdown depots list with respect to a paticular region
                $("#region_list").on("change", function() {
                    //GET this region ID
                    var region_id = $(this).val();

                    $.ajax({
                        url: "../../apis/apis_n/api.php",
                        type: "POST",
                        dataType: "json",
                        data: { 'req': '1', 'param': '6', 'data': region_id },
                        success: function(response) {
                            $("#depot_list").html(response);

                            // Dynamic dependable dropdown areas list with respect to paticular depot
                            $("#depot_list").on("change", function() {
                                var depot_id = $(this).val();
                                $.ajax({
                                    url: "../../apis/apis_n/api.php",
                                    type: "POST",
                                    dataType: "json",
                                    data: { 'req': '3', 'param': '9', 'data': depot_id },
                                    success: function(response) {
                                        $("#area_list").html(response);

                                        // Dynamic dependable dropdown territory list with respect to paticular area
                                        $("#area_list").on("change", function() {
                                            var area_id = $(this).val();
                                            $.ajax({
                                                url: "../../apis/apis_n/api.php",
                                                type: "POST",
                                                dataType: "json",
                                                data: { 'req': '4', 'param': '12', 'data': area_id },
                                                success: function(response) {
                                                    $("#add_territory_list").html(response);
                                                }
                                            });
                                        });

                                    }
                                });
                            });
                        }
                    });
                });
            }
        });
    });

    // //add image
    $("#add_distributors_form").on('submit', (function(e) {
        e.preventDefault();
        var form_data = new FormData(this);

        $.ajax({
            url: "../../controller/process_distributors_data.php", //php page URL where we post this data to save in database
            type: "post",
            data: form_data,
            dataType: "json",
            processData: false,
            contentType: false,
            cache: false,
            success: function(result_1) {
                $.ajax({
                    url: "../../apis/apis_n/api.php",
                    type: "post",
                    data: { 'req': '5', 'param': '10', 'get': 'body' },
                    dataType: "json",
                    success: function(result) {
                            if (result_1 == true) {
                                Swal.fire({
                                    position: 'top-end',
                                    icon: 'success',
                                    title: 'Distributor has been saved',
                                    showConfirmButton: false,
                                    timer: 1500
                                })
                                $("#distribution_table").html(result);
                                $("#add_distributors_form")[0].reset();
                                $("#create_new").modal('hide');
                            } else {
                                Swal.fire({
                                    position: 'top-end',
                                    icon: 'error',
                                    title: 'Image File too large. <br> Image file size must be less than 500 KB.',
                                    showConfirmButton: false,
                                    timer: 7000
                                })
                                $("#distribution_table").html(result);
                            }
                        }
                        //     });
                        // }
                });
            }
        });
    }));



    //*****************************************************************
    //**********************Search From Table**************************
    //*****************************************************************


    // Search Distributor Table
    $("#search_input").on("keyup", function() {
        var search_input = $(this).val().toLowerCase();
        var search_territory_category_value = $('#search_distributor').val();
        var search_territory_category = parseInt(search_territory_category_value) + 1;

        $("#distribution_table tr td:nth-child(" + search_territory_category + ")").each(function() {
            $(this).parent().toggle($(this).text().toLowerCase().indexOf(search_input) > -1)
        });
    });



    //*****************************************************************
    //********************Edit Distributor Data************************
    //*****************************************************************


    //Error validation message while editing and uploading trade license image
    $("#edit_image1").change(function(event) {
        if (event.target.files[0].size > 512000) {
            $(".edit_tl_image").text("Image File too large, must be less than 500 KB.");
        } else {
            $(".edit_tl_image").text("");
        }
    });

    //Error validation message while editing and uploading aggrement image
    $("#edit_image2").change(function(event) {
        if (event.target.files[0].size > 512000) {
            $(".edit_ag_image").text("Image File too large, must be less than 500 KB.");
        } else {
            $(".edit_ag_image").text("");
        }
    });

    //Error validation message while editing and uploading rental deed image
    $("#edit_rental_deed").change(function(event) {
        if (event.target.files[0].size > 512000) {
            $(".edit_rd_image").text("Image File too large, must be less than 500 KB.");
        } else {
            $(".edit_rd_image").text("");
        }
    });

    //Fetch attributes on click edit buttons
    $("#distribution_table").on('click', '#btn_edit', function(e) {
        var ds_data = $(this).attr('data-id');
        $("#edit_id").val(ds_data);

        var territory_id = $(this).attr('t-id');
        $("#territory_id").val(territory_id);

        var org_id = $(this).attr('match-org-id');
        $("#org_id").val(org_id);

        $("#modal_edit").modal('show');
    });

    //Get id's of the attributes
    $("#modal_edit").on('show.bs.modal', function(event) {
        // Get Distributor ID
        var ds_id = $("#edit_id").val();

        // // Get Territory ID
        var t_id = $("#territory_id").val();

        //Get org_id (match-org-id)
        var org_id = $("#org_id").val();

        $.ajax({
            url: "../../apis/apis_n/api.php",
            type: "post",
            data: { 'req': '5', 'param': '11', 'data': ds_id },
            dataType: "json",
            success: function(result) {
                $("#edit_code").val(result['code']);
                $("#edit_name").val(result['name']);
                $("#edit_address").val(result['address']);
                $("#edit_o_name").val(result['o_name']);
                $("#edit_o_address").val(result['o_address']);
                $("#edit_o_mobile").val(result['o_mobile']);
                $("#edit_o_phone").val(result['o_phone']);
                $("#edit_tl_num").val(result['tl_num']);

                $('#edit_view_img1').attr('src', "../../assets/uploads/distributors/trade_license_image/" + result['tl_image']);
                $('#old_image1').attr('value', result['tl_image']);
                console.log('old_image1 = ' + result['tl_image']);

                $('#edit_view_rd').attr('src', "../../assets/uploads/distributors/rental_deed_image/" + result['rental_deed']);
                $('#old_image3').attr('value', result['rental_deed']);
                console.log('old_image3 = ' + result['rental_deed']);

                $("#edit_agree_num").val(result['agree_num']);

                $('#edit_view_img2').attr('src', "../../assets/uploads/distributors/Agreement_image/" + result['agree_image']);
                $('#old_image2').attr('value', result['agree_image']);
                console.log("old_image2 = " + result['agree_image']);

                $("#edit_rating").val(result['rating']);
                $("#edit_territory_list").val(result['territory']);
                $("#edit_distri_type").val(result['distri_type']);

                $("#edit_distri_type > [value=" + result['distri_type'] + "]").attr("selected", "true");
                $("#edit_distri_type").trigger("change");

                $("#edit_status > [value=" + result['is_active'] + "]").attr("selected", "true");
                $("#edit_status").trigger("change");

                $("#edit_is_approve > [value=" + result['is_approve'] + "]").attr("selected", "true");
                $("#edit_is_approve").trigger("change");

                // GET region id from distributor table(using sub queries)
                var r_id = result['region_id'];

                // GET depot id from distributor table(using sub queries)
                var d_id = result['depot_id'];

                // GET depot id from distributor table(using sub queries)
                var a_id = result['area_id'];


                //using region ID to find region list --> to show region list in edit distributor modal
                $.ajax({
                    url: "../../apis/apis_n/api.php",
                    type: "post",
                    data: { 'req': '2', 'param': '3', 'match': r_id, 'filter': 'org_id = ' + org_id },
                    dataType: "json",
                    success: function(result_1) {
                        $("#edit_region_list").html(result_1);

                        //using region ID to find depot list --> to show depot list in edit distributor modal
                        $.ajax({
                            url: "../../apis/apis_n/api.php",
                            type: "POST",
                            dataType: "json",
                            data: { 'req': '1', 'param': '3', 'match': d_id, 'filter': 'region = ' + r_id },
                            success: function(result_2) {
                                $("#edit_depot_list").html(result_2);

                                //using depot ID to find area list --> to show area list in edit distributor modal
                                $.ajax({
                                    url: "../../apis/apis_n/api.php",
                                    type: "POST",
                                    dataType: "json",
                                    data: { 'req': '3', 'param': '3', 'match': a_id, 'filter': 'depot = ' + d_id },
                                    success: function(result_3) {
                                        $("#edit_area_list").html(result_3);

                                        //using depot ID to find territory list --> to show territory list in edit distributor modal
                                        $.ajax({
                                            url: "../../apis/apis_n/api.php",
                                            type: "POST",
                                            dataType: "json",
                                            data: { 'req': '4', 'param': '3', 'match': t_id, 'filter': 'area = ' + a_id },
                                            success: function(result_4) {
                                                $("#edit_territory_list").html(result_4);
                                            }
                                        });
                                    }
                                });
                            }
                        });

                        // Dynamic dependable depot dropdown list with respect to paticular region
                        $("#edit_region_list").on("change", function() {

                            var region_id = $(this).val();
                            $.ajax({
                                url: "../../apis/apis_n/api.php",
                                type: "POST",
                                dataType: "json",
                                data: { 'req': '1', 'param': '3', 'filter': 'region = ' + region_id },
                                success: function(result) {
                                    $("#edit_depot_list").html(result);

                                    // Dynamic dependable dropdown areas list with respect to paticular depot
                                    $("#edit_depot_list").on("change", function() {

                                        var depot_id = $(this).val();
                                        $.ajax({
                                            url: "../../apis/apis_n/api.php",
                                            type: "POST",
                                            dataType: "json",
                                            data: { 'req': '3', 'param': '3', 'filter': 'depot = ' + depot_id },
                                            success: function(result) {
                                                $("#edit_area_list").html(result);

                                                // Dynamic dependable dropdown territory list with respect to paticular depot
                                                $("#edit_area_list").on("change", function() {

                                                    var area_id = $(this).val();
                                                    $.ajax({
                                                        url: "../../apis/apis_n/api.php",
                                                        type: "POST",
                                                        dataType: "json",
                                                        data: { 'req': '4', 'param': '3', 'filter': 'area = ' + area_id },
                                                        success: function(result) {
                                                            $("#edit_territory_list").html(result);
                                                        }
                                                    });
                                                });
                                            }
                                        });
                                    });
                                }
                            });
                        });
                    }
                });
            }
        });
    });

    // edit distributor form submit on save --> updating the database & fetch results on table
    $('#edit_distributors_form').submit(function(event) {
        event.preventDefault();

        var form_data = new FormData(this);

        $.ajax({
            url: "../../controller/process_distributors_data.php", //php page URL where we post this data to save in database
            type: "POST",
            data: form_data,
            dataType: "json",
            processData: false,
            contentType: false,
            cache: false,
            success: function(result_1) {
                $.ajax({
                    url: "../../apis/apis_n/api.php",
                    type: "post",
                    data: { 'req': '5', 'param': '10', 'get': 'body' },
                    dataType: "json",
                    success: function(result) {
                        if (result_1 == true) {
                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'Distributor has been edited',
                                showConfirmButton: false,
                                timer: 1500
                            })
                            $("#distribution_table").html(result);
                            $("#edit_distributors_form")[0].reset();
                            $('#modal_edit').modal('hide');
                        } else {
                            Swal.fire({
                                position: 'top-end',
                                icon: 'error',
                                title: 'Image File too large. <br> Image file size must be less than 500 KB.',
                                // Something Went Wrong. Please Try Again
                                showConfirmButton: false,
                                timer: 7000
                            })
                        }
                    }
                });
            }
        });
    });


}(window.jQuery);