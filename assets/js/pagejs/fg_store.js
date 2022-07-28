!function ($) {
	
	
	//*****************************************************************
	//*****************Fetch Region List In Modal**********************
	//*****************************************************************
	$("#create_new").on('show.bs.modal', function(event)
	{
		$.ajax({
		   url:"../../apis/apis_s/api.php", 
		   type: "post",
		   data: {'req': '1', 'param':'3', 'get':'body'},
		   dataType:"json",
		   success:function(result)
		   { 
			  $("#region_list").html(result);
		   }
		});
	});


	//*****************************************************************
	//******************Fetch fg_store_table Table*********************
	//*****************************************************************
	$.ajax({
	   url:"../../apis/apis_s/api.php", 
	   type: "post",
	   data: {'req': '2', 'param':'4', 'get':'body'},
	   dataType:"json",
	   success:function(result)
	   { 
		  $("#fg_store_table").html(result);
	   }
	});


	//*****************************************************************
	//****Fetch depots list depending on region selection Table********
	//*****************************************************************
	$('#region_list').on('change', function(){
        var region_id = $(this).val();
        if(region_id){
            $.ajax({
                type:'POST',
                url:'../../apis/apis_s/api.php',
                data: {'req': '3', 'param':'5', 'filter':'region = '+region_id},
                dataType:"json",
                success:function(result){
                    $('#depots_list').html(result);
                }
            }); 
        }else{
            $('#depots_list').html('<option value="">Select Region First</option>');
        }
    });




	//*****************************************************************
	//*********************Add FG store data***************************
	//*****************************************************************


	$('#add_fg_store_form').submit(function (event)
     {
         event.preventDefault();
         $.ajax({
             data: $(this).serialize(),
             url:"../../controller/process_fg_store_data.php", //php page URL where we post this data to save in database
             type: 'POST',
             success: function (result_1) {
                 $.ajax({
				   url:"../../apis/apis_s/api.php", 
				   type: "post",
				   data: {'req': '1', 'param':'1', 'get':'body'},
				   dataType:"json",
				   success:function(result)
				   { 
				   	  if(result_1 == 'true'){
					   	  Swal.fire({
							  position: 'top-end',
							  icon: 'success',
							  title: 'Store has been saved',
							  showConfirmButton: false,
							  timer: 1500
							})
						  $("#fg_store_table").html(result);
						  $("#add_fg_store_form")[0].reset();
						  $('#region_list').val('0').trigger('change');
						}
						else{ 
							Swal.fire({
							  position: 'top-end',
							  icon: 'error',
							  title: 'Something Went Wrong. Please Try Again',
							  showConfirmButton: false,
							  timer: 1500
							})
						  $("#fg_store_table").html(result);
						}
				   }
				});
             }
         });
     });


	//*****************************************************************
	//**********************Search From Table**************************
	//*****************************************************************
	$('#search').on('keyup',function(){
	   var searchTerm = $(this).val().toLowerCase();
	   $('#fg_store_table tr').each(function(){
		   var lineStr = $(this).text().toLowerCase();
		   if(lineStr.indexOf(searchTerm) === -1)
		   {
			  $(this).hide();
		   }
		   else
		   {
			  $(this).show();
		   }
	   });
	});



	//*****************************************************************
	//**********************Edit FG Store Data**************************
	//*****************************************************************

	$("#fg_store_table").on('click', '#btn_edit',function(e)
	{
		var did = $(this).attr('data-id');
		$("#edit_id").val(did);
		$("#modal_edit").modal('show');
	});
	
	$("#modal_edit").on('show.bs.modal', function(event)
	{  
		// Get region ID
		var did = $("#edit_id").val();
		$.ajax({
		   url:"../../apis/apis_s/api.php", 
		   type: "post",
		   data: {'req': '2', 'param': '6', 'filter': 'id = ' +did},
		   dataType:"json",
		   success:function(result)
		   { 

		   	
		   	  //fetch region list in edit modal
		   	  $.ajax({
				   url:"../../apis/apis_s/api.php", 
				   type: "post",
				   data: {'req': '1', 'param':'5', 'get':'body', 'match': +result['regions']},
				   dataType:"json",
				   success:function(region_result)
				   { 
					  $("#edit_region").html(region_result);
				   }
			  });


			  //fetch depot list in edit modal
		   	  $.ajax({
				   url:"../../apis/apis_s/api.php", 
				   type: "post",
				   data: {'req': '3', 'param':'5', 'get':'body', 'match': +result['depots']},
				   dataType:"json",
				   success:function(depot_result)
				   { 
					  $("#edit_depot").html(depot_result);
				   }
			  });


			  //*****************************************************************
			  //*****Fetch depots list depending on region selection Table*******
			  //*****************************************************************
				$('#edit_region').on('change', function(){
			        var region_id = $(this).val();
			        if(region_id){
			            $.ajax({
			                type:'POST',
			                url:'../../apis/apis_s/api.php',
			                data: {'req': '3', 'param':'5', 'filter':'region = '+region_id},
			                dataType:"json",
			                success:function(edit_depot_result){
			                    $('#edit_depot').html(edit_depot_result);
			                }
			            }); 
			        }else{
			            $('#edit_depot').html('<option value="">Select Region First</option>');
			        }
			    });


			    $('#edit_code').val(result['code']);
				$("#edit_name").val(result['name']);
				$("#edit_defination").val(result['definition']);
				$("#edit_address").val(result['address']);
				$("#edit_status > [value=" + result['is_active'] + "]").attr("selected", "true");
				$("#edit_status").trigger("change"); 
		   }
		}); 
	});

	// *************************************************************************************************
	// ************************************Edit Fg Store Data*******************************************
	// *************************************************************************************************
	$('#edit_fg_store_form').submit(function (event)
     {
         event.preventDefault();
         $.ajax({
             data: $(this).serialize(),
             url:"../../controller/process_fg_store_data.php", //php page URL where we post this data to save in database
             type: 'POST',
             success: function (result_1) {
                 $.ajax({
				   url:"../../apis/apis_s/api.php", 
				   type: "post",
				   data: {'req': '2', 'param':'4', 'get':'body'},
				   dataType:"json",
				   success:function(result)
				   { 
				   	  if(result_1 == 'true'){
					   	  Swal.fire({
							  position: 'top-end',
							  icon: 'success',
							  title: 'Store has been edited',
							  showConfirmButton: false,
							  timer: 1500
							})
						  $("#fg_store_table").html(result);
						  $("#edit_fg_store_form")[0].reset();
					  	  $('#modal_edit').modal('hide');
						}
						else{ 
							Swal.fire({
							  position: 'top-end',
							  icon: 'error',
							  title: 'Something Went Wrong. Please Try Again',
							  showConfirmButton: false,
							  timer: 1500
							})

						}

				   }
				});
             }
         });
     });




	//*****************************************************************
	//**********************ADD FG Store Data**************************
	//*****************************************************************

	
	$("#add_goods").on('show.bs.modal', function(event)
	{  
		$.ajax({
		   url:"../../apis/apis_s/api.php", 
		   type: "post",
		   data: {'req': '4', 'param':'5'},
		   dataType:"json",
		   success:function(result)
		   { 
			  $("#goods_list").html(result);

		   }
		});
	});






	//*****************************************************************
	//**********************ADD GOODs TO Table*************************
	//*****************************************************************
	$('#add_goods_table').on('click',function(){
    
		//alert("Adding Products");

		// var d= $('#sel_distri1 option:selected').val();
		var item = $('#goods_list').val();
		// alert(s);
		$.ajax({
		   url:"../../apis/apis_s/api.php", 
		   type: "post", //request type,
		   data: {'req': '4', 'param': '7', 'data': item},
		   dataType:"json",
		   success:function(result)
		   { 
			  
			  var item_count = result.length;
			  var ht ='';
			  for(i=0; i<item_count; i++)
			  {
			  	ht += '<tr><td>'+result[i]['name']+'<input type="text" name="product_id[]" value="'+result[i]['id']+'" hidden /></td><td>'+result[i]['size_in_ml']+'<input type="text" name="item_vol[]" value="'+result[i]['size_in_ml']+'" hidden /></td><td>'+result[i]['ctn_size_in_pcs']+'<input type="text" name="item_sz[]" value="'+result[i]['ctn_size_in_pcs']+'" hidden /></td><td>'+result[i]['ddp']+'<input type="text" class="ctn_price" name="ctn_price[]" value="'+result[i]['ddp']+'"  hidden/><input type="text" class="pc_price" name="pc_price[]" value="'+result[i]['pc_price']+'" hidden /><input type="text" name="inv_price_type[]" value="" hidden /></td><td><input type="number" style="width: 80px;height: 18px" min="0" step="1" class="p_qty" name="p_qty[]" value="0"  /></td><td><input type="number" style="width: 80px;height: 18px" min="0" step="1" class="p_qty_pcs" name="p_qty_pcs[]" value="0"  /></td><td><button class="btn btn-danger" style="padding: 1px 5px;" type="button" id="delete_table_row"><i class="fa fa-trash"></i></button></td></tr>';
			  }
			  $("#fg_store_goods_table").append(ht);
		   }
	}); 

	
		
		//**************************************************************************
		//*******************Calculation Of live table data*************************
		//**************************************************************************
		$("#add_goods").on('click', '#delete_table_row', function(e) 
		{
			var el2rem = $(this).closest('tr');
			el2rem.remove();
		});
		


});




}(window.jQuery);