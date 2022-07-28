<?php

	include '../../controller/connection.php';
	/*include 'auth.php';*/
	session_start();
	$uid = $_SESSION["userId"];
	$dept_id = $_SESSION["dept_id"];
	$wloc_id = $_SESSION["wloc_id"];
	$loc_type = $_SESSION["loc_type"];
	$loc_sn = $_SESSION["loc_sn"];
	$org_id = $_SESSION["org_id"];
	session_write_close();
	$return_data = array();
	
	$req = isset($_POST['req']) ? $_POST['req'] : 0; //database
	$param = isset($_POST['param']) ? $_POST['param'] : 7; //query 
	$data = isset($_POST['data']) ? $_POST['data'] : 0; //data value
	$field_list = isset($_POST['get']) ? $_POST['get'] : '*'; //requested field list
	$filter = isset($_POST['filter']) ? $_POST['filter'] : ''; // column conditions
	$multi_select = isset($_POST['msel']) ? $_POST['msel'] : 0;  
	$match_id = isset($_POST['match']) ? $_POST['match'] : 0; // selected value
	$order_by = isset($_POST['order_by']) ? $_POST['order_by'] : ''; // for order_by


	//------------------------------------------------------------------------------------------------
	//-------------------------------------------------req--------------------------------------------
	//------------------------------------------------------------------------------------------------


	switch($req)
	{
		case '1': // Request for region list
			$table = 'regions';
			break;

		case '2': // Request for fg_stor
			$table = 'fg_store';
			break;

		case '3': // Request for depots
			$table = 'depots';
			break;

		case '4': // Request for products_details
			$table = 'products_details';
			break;

		case '4': // Request for products_details
			$table = 'products_details';
			break;

		case '5': // Request for region_wise_distri (distributor)
			$table = 'region_wise_distri';
			break;

		case '6': // Request area
			$table = 'areas';
			break;

		case '7': // Request area
			$table = 'territories';
			break;

		case '8': // Request distributors
			$table = 'distributors';
			break;

		case '9': // Request inv_auto_gen_number
			$table = 'inv_auto_gen_number';
			break;

		case '10': // Request routes
			$table = 'routes';
			break;

		case '11': // Request outlets
			$table = 'outlets';
			break;

		case '12': // Request fg_store
			$table = 'fg_store';
			break;

		case '13': // Request region_wise_inv
			$table = 'region_wise_inv';
			break;

		case '14': // Request invoices
			$table = 'invoices';
			break;

		case '15': // Request inv_details
			$table = 'inv_details';
			break;
	}



	//------------------------------------------------------------------------------------------------
	//-----------------------------------------------param--------------------------------------------
	//------------------------------------------------------------------------------------------------


	switch($param)
	{
		case '1': // Request for region list
			$sql = 'SELECT `id`, `code`, `name`, `definition`, `is_active` FROM '.$table.' WHERE org_id = '.$org_id.'  ORDER BY `code` ASC';
			$return_data = getTableHTML_regions($sql,true);
			break;

		case '2': // Request to fetch region  data of specific id
			$sql = 'SELECT `id`, `code`, `name`, `definition`, `is_active` FROM '.$table.' WHERE id = '.$data.' ORDER BY `code` ASC';
			$return_data = getTableHTML_regions_SelectedID($sql,true);
			break;

		case '3': // Request for all region list
			$sql = 'SELECT `id`, `code`, `name`, `definition`, `is_active` FROM '.$table.' WHERE  org_id = '.$org_id.'  ORDER BY `code` ASC';
			$return_data = getTableHTML_regions_All($sql,true);
			break;

		case '4': // Request for all fg store list in table
			$sql = 'SELECT *,(SELECT name FROM depots WHERE id = `fg_store`.`depots`) AS depots_name FROM '.$table.' ORDER BY `code` ASC';
			$return_data = getTableHTML_fg_store($sql,true);
			break;

		case '5': // select all depneding on value pass in select
			$sql = 'SELECT * FROM '.$table.' WHERE `is_active` = 1';
			$sql .= ($filter!='')? ' AND '.$filter : '' ;
			$return_data = getSelectHTML($sql,$match_id,'',$multi_select,true);
			break;

		case '6': // GET All Form Data
			$sql = 'SELECT * FROM '.$table.' WHERE `is_active` = 1';
			$sql .= ($filter!='')? ' AND '.$filter : '' ;
			$return_data = getFormInptData($sql,$match_id,'',$multi_select,true);
			break;

		case '7': // GET products list
			$res = implode(", ", $data);
			$sql = 'SELECT *,ddp/ctn_size_in_pcs AS pc_price FROM '.$table.' WHERE org_id = '.$org_id.' AND id IN ('.$res.')';
			$sql .= ($filter!='')? ' AND '.$filter : '' ;
			$sql .= ($order_by!='')? $order_by : '' ;
			$return_data = getfgStoreTableInGoods($sql,true);
			break;

		case '8': // select all depneding on value pass in select
			if($loc_type == 'Depot'){
				$sql_m = 'SELECT GROUP_CONCAT(distri) AS c_dist FROM depot_wise_distri WHERE id =  '.$loc_sn;
				$stmt = $con->prepare($sql_m, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
				$stmt->execute();
				$row = $stmt->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT);

				$sql = 'SELECT * FROM '.$table.' WHERE `is_active` = 1 AND distri IN ( '.$row["c_dist"].')';
			}
			else {
				$sql = 'SELECT * FROM '.$table.' WHERE `is_active` = 1 AND org_id = '.$org_id;
				$sql .= ($filter!='')? ' AND '.$filter : '' ;
			}
			$return_data = getSelectHTMLDistri($sql,$match_id,'',$multi_select,true);
			break;


		case '9': // select distri owner info
			$sql = 'SELECT * FROM '.$table.' WHERE `is_active` = 1';
			$sql .= ($filter!='')? ' AND '.$filter : '' ;
			$return_data = getOwnerInfo($sql,true);
			break;

		case '10': // fetch auto generated inv number in invoices
			$sql = 'SELECT * FROM '.$table.' WHERE `is_active` = 1';
			$sql .= ($filter!='')? ' AND '.$filter : '' ;
			$return_data = getAutoGenInv($sql,$match_id,'',$multi_select,true);
			break;


		case '11': // inv list in inv table depending on loggedin
			if($loc_type == 'Depot'){
				$sql_m = 'SELECT GROUP_CONCAT(distri) AS c_dist FROM depot_wise_distri WHERE id =  '.$loc_sn;
				$stmt = $con->prepare($sql_m, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
				$stmt->execute();
				$row = $stmt->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT);

				$sql = 'SELECT * FROM '.$table.' WHERE `is_active` = 1 AND distri IN ( '.$row["c_dist"].')';
			}
			else {
				$sql = 'SELECT * FROM '.$table.' WHERE `is_active` = 1 AND org_id = '.$org_id;
				$sql .= ($filter!='')? ' AND '.$filter : '' ;
			}
			$return_data = getInvTable($sql,true);
			break;


		case '12': // fetch inv_details table in invoice
			$sql = 'SELECT * FROM '.$table.' WHERE `inv_id` != 0';
			$sql .= ($filter!='')? ' AND '.$filter : '' ;
			$return_data = getInvDet($sql,$match_id,'',$multi_select,true);
			break;


		case '13': // fetch inv_details table in invoice challan copy
			$sql = 'SELECT * FROM '.$table.' WHERE `inv_id` != 0';
			$sql .= ($filter!='')? ' AND '.$filter : '' ;
			$return_data = getInvDetCh($sql,$match_id,'',$multi_select,true);
			break;


	}

	//------------------------------------------------------------------------------------------------
	//------------------------------------------param ends--------------------------------------------
	//------------------------------------------------------------------------------------------------
	echo json_encode($return_data);



	//------------------------------------------------------------------------------------------------
	//--------------------------------------functions start-------------------------------------------
	//------------------------------------------------------------------------------------------------


	function getTableHTML_regions($sql,$bodyOnly=1)
	{
		global $con, $uid, $dept_id;
		try
		{
			$bHTML = ''; $btns = '';
			$stmt = $con->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
			$stmt->execute();
			$counter = 1;
			while ($row = $stmt->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT)) 
			{
				$bHTML .= ' <tr>
                                <td scope="row"><p>'.$counter++.'</td>
                                <td><p>'.$row["code"].'</td>
								<td><p>'.$row["name"].'</td> 
                                <td><p>'.$row["definition"].'</td>
                                <td><p>'.($row["is_active"]==0 ? "In Active" : "Active").'</td>
                                <td class="text-end">    
                                 	<a class="btn p-0"  data-toggle="tooltip" data-placement="bottom" title="Edit" data-id='.$row["id"].' id="btn_edit">
                                 		<i class="fas fa-pencil-alt font-13"></i>
                                 	</a>
                                </td>
                            </tr>';
			}
			
			
			$rHTML = $bHTML;
		}
		catch (PDOException $e) 
		{
			$rHTML = $e->getMessage();
		}
		
		return $rHTML;
	}


	function getTableHTML_regions_SelectedID($sql,$bodyOnly=1)
	{
		global $con, $uid, $dept_id;
		try
		{
			$bHTML = ''; 
			$stmt = $con->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
			$stmt->execute();
			$counter = 1;
			$row = $stmt->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT);
			
			$rHTML = $row;
		}
		catch (PDOException $e) 
		{
			$rHTML = $e->getMessage();
		}
		
		return $rHTML;
	}


	function getTableHTML_regions_All($sql,$bodyOnly=1)
	{
		global $con, $uid, $dept_id;
		try
		{
			$bHTML = '<option value="0">Select One</option>'; 
			$stmt = $con->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
			$stmt->execute();
			$counter = 1;
			while ($row = $stmt->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT)) 
			{
				$bHTML .= '<option value="'.$row["id"].'">'.$row["name"].'</option>';
			}
			$rHTML = $bHTML;
		}
		catch (PDOException $e) 
		{
			$rHTML = $e->getMessage();
		}
		
		return $rHTML;
	}



	function getTableHTML_fg_store($sql,$bodyOnly=1)
	{
		global $con, $uid, $dept_id;
		try
		{
			$bHTML = ''; $btns = '';
			$stmt = $con->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
			$stmt->execute();
			$counter = 1;
			while ($row = $stmt->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT)) 
			{
				$bHTML .= ' <tr>
                                <td scope="row"><p>'.$counter++.'</td>
                                <td><p>'.$row["code"].'</td>
								<td><p>'.$row["name"].'</td> 
								<td><p>'.$row["depots_name"].'</td> 
                                <td><p>'.$row["definition"].'</td>
                                <td><p>'.$row["address"].'</td>
                                <td><p>'.($row["is_active"]==0 ? "<span class='p-1 badge bg-danger'>In Active</span>" : "<span class='p-1 badge bg-success'>Active</span>").'</td>
                                <td class="text-end">    
                                 	<a class="btn p-0"  data-toggle="tooltip" data-placement="bottom" title="Edit" data-id='.$row["id"].' id="btn_edit">
                                 		<i class="fas fa-pencil-alt font-13"></i>
                                 	</a>
                                </td>
                            </tr>';
			}
			
			
			$rHTML = $bHTML;
		}
		catch (PDOException $e) 
		{
			$rHTML = $e->getMessage();
		}
		
		return $rHTML;
	}




	function getSelectHTML($sql, $matchID, $field_name, $multisel = FALSE, $optOnly = FALSE)
	{
		global $con, $filter, $req;
		try
		{

			$multi = ($multisel) ? 'multiple="multiple"' : '';
			$field_name = ($multisel) ? $field_name.'[]' : $field_name;
			$rHTML = '<select class="chosen-select sel2 width-100" '.$multi.' id="'.$field_name.'" name="'.$field_name.'">';
			$rHTML = ($optOnly) ? '' : $rHTML;
			$rHTML .= ($multisel) ? '<option value="-1">-- Select --</option>' : '<option value="0">-- Select --</option>';
			
			$stmt = $con->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
			$stmt->execute();
			while ($row = $stmt->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT)) 
			{

				//outlets
				($req == 11)? $details = $row['name'] .' ~~ '. $row['address'] : $details = $row['name'] ;


				if($row['id'] == $matchID)
					$rHTML = $rHTML . '<option value="'.$row['id'].'" selected>'.$details.'</option>';
				else
					$rHTML = $rHTML . '<option value="'.$row['id'].'">'.$details.'</option>';
			}
			$rHTML = ($optOnly) ? $rHTML : $rHTML . '</select>';
		}
		catch (PDOException $e) 
		{
			$rHTML = $e->getMessage();
		}
		
		return $rHTML;
	}



	function getFormInptData($sql,$bodyOnly=1)
	{
		global $con, $uid, $dept_id;
		try
		{
			$bHTML = ''; 
			$stmt = $con->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
			$stmt->execute();
			$counter = 1;
			$row = $stmt->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT);
			
			$rHTML = $row;
		}
		catch (PDOException $e) 
		{
			$rHTML = $e->getMessage();
		}
		
		return $rHTML;
	}


	function getfgStoreTableInGoods($sql,$item_id = 0)
	{
		global $con; global $cls;

		try
		{
			$bHTML = ''; 
			$stmt = $con->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
			$stmt->execute();
			$counter = 1;
			$row = $stmt->fetchall(PDO::FETCH_ASSOC);
			
			$rHTML = $row;
		}
		catch (PDOException $e) 
		{
			$rHTML = $e->getMessage();
		}
		
		return $rHTML;
	}


	function getSelectHTMLDistri($sql, $matchID, $field_name, $multisel = FALSE, $optOnly = FALSE)
	{
		global $con, $filter;
		try
		{
			$multi = ($multisel) ? 'multiple="multiple"' : '';
			$field_name = ($multisel) ? $field_name.'[]' : $field_name;
			$rHTML = '<select class="chosen-select sel2 width-100" '.$multi.' id="'.$field_name.'" name="'.$field_name.'">';
			$rHTML = ($optOnly) ? '' : $rHTML;
			$rHTML .= ($multisel) ? '<option value="-1">-- Select --</option>' : '<option value="0">-- Select --</option>';
			
			$stmt = $con->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
			$stmt->execute();
			while ($row = $stmt->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT)) 
			{
				if($row['distri'] == $matchID)
					$rHTML = $rHTML . '<option value="'.$row['distri'].'" selected>'.$row['dcode'].' - '.$row['dname'].'</option>';
				else
					$rHTML = $rHTML . '<option value="'.$row['distri'].'">~~ '.$row['dcode'].' - '.$row['dname'].' - ('.$row['region'].' ~ '.$row['depotname'].' ~ '.$row['areaname'].' ~ '.$row['terriname'].')</option>';
			}
			$rHTML = ($optOnly) ? $rHTML : $rHTML . '</select>';
		}
		catch (PDOException $e) 
		{
			$rHTML = $e->getMessage();
		}
		
		return $rHTML;
	}


	function getOwnerInfo($sql,$bodyOnly=1)
	{
		global $con;
		try
		{
			$bHTML = ''; $btns = '';
			$stmt = $con->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
			$stmt->execute();
			// $counter = 1;
			$row = $stmt->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT);
				$bHTML .= ' 
							<p class="mb-0" style="font-size: .8125rem;color: #303e67;"><b style="font-weight: 500;">Owner:</b> '.$row['o_name'].'</p>
                            <p class="mb-0" style="font-size: .8125rem;color: #303e67;"><b style="font-weight: 500;">Contact:</b> '.$row['o_mobile'].' - '.$row['o_phone'].' </p>
                            <p class="mb-0" style="font-size: .8125rem;color: #303e67;"><b style="font-weight: 500;">Address:</b> '.$row['o_address'].' </p>
						 ';
			
			
			$rHTML = $bHTML;
		}
		catch (PDOException $e) 
		{
			$rHTML = $e->getMessage();
		}
		
		return $rHTML;
	}



	function getAutoGenInv($sql,$item_id = 0)
	{
		global $con; global $cls; global $org_id;

		try
		{
			$bHTML = ''; 
			$stmt = $con->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
			$stmt->execute();
			$counter = 1;
			$row = $stmt->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT);


			$inv_number = $row['inv_number'];
			$sales_ref_number = $row['sales_ref_number'];
			$challan_number	 = $row['challan_number'];


			//define invoice number
			list($mem_prefix,$mem_num) = sscanf($inv_number,"%[A-Za-z,-]%[0-9]");
  			$inv_number = $mem_prefix . str_pad($mem_num + 1,8,'0',STR_PAD_LEFT);


  			//define sales reff number
			list($mem_prefix,$mem_num) = sscanf($sales_ref_number,"%[A-Za-z,-]%[0-9]");
  			$sales_ref_number = $mem_prefix . str_pad($mem_num + 1,8,'0',STR_PAD_LEFT);


  			//define sales reff number
			list($mem_prefix,$mem_num) = sscanf($challan_number,"%[A-Za-z,-]%[0-9]");
  			$challan_number = $mem_prefix . str_pad($mem_num + 1,8,'0',STR_PAD_LEFT);




			$rHTML = array('inv_number'=>$inv_number, 'sales_ref_number'=>$sales_ref_number, 'challan_number'=>$challan_number);
		}
		catch (PDOException $e) 
		{
			$rHTML = $e->getMessage();
		}
		
		return $rHTML;
	}



	function getInvTable($sql,$bodyOnly=1)
	{
		global $con, $uid, $dept_id;
		try
		{
			$bHTML = ''; $btns = '';
			$stmt = $con->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
			$stmt->execute();
			$counter = 1;
			while ($row = $stmt->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT)) 
			{
				$bHTML .= ' <tr>
                                <td scope="row"><p>'.$counter++.'</td>
                                <td><p>'.$row["inv_number"].'</td>
                                <td><p>'.$row["inv_ref_no"].'</td>
                                <td><p>'.$row["sales_ref_number"].'</td>
                                <td><p>'.$row["challan_number"].'</td>
								<td><p>'.$row["inv_date"].'</td> 
                                <td><p>'.$row["distri_name"].'</td>
                                <td><p>'.$row["distri"].'</td>
                                <td><p>'.$row["total_payable"].'</td>
                                <td><p>'.$row["dlv_status"].'</td>
                                
                                <td class="text-end">    
                                 	<a class="btn p-0" data-toggle="tooltip" data-bs-placement="left" title="View Details" data-id='.$row["id"].' id="btn_view">
                                 		<i class="fas fa-eye font-13"></i>
                                 	</a>
                                 	<a class="btn p-0 ml-2"  data-toggle="tooltip" data-bs-placement="top" title="Edit" data-id='.$row["id"].' id="btn_edit">
                                 		<i class="fas fa-pencil-alt font-13"></i>
                                 	</a>
                                </td>
                            </tr>';
			}
			
			
			$rHTML = $bHTML;
		}
		catch (PDOException $e) 
		{
			$rHTML = $e->getMessage();
		}
		
		return $rHTML;
	}



	function getInvDet($sql,$bodyOnly=1)
	{
		global $con, $uid, $dept_id;
		try
		{
			$bHTML = ''; $btns = '';
			$stmt = $con->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
			$stmt->execute();
			$counter = 1;
			while ($row = $stmt->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT)) 
			{
			 $product_id = $row['product_id'];
			 $inv_id = $row['inv_id'];

				$sql1 = "SELECT * FROM products WHERE id = ".$product_id;
				$stmt11 = $con->prepare($sql1, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
				$stmt11->execute();
				$row1 = $stmt11->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT);

				$bHTML .= ' <tr>
                                <td scope="row"><p>'.$counter++.'</td>
                                <td><p>'.$row1["name"].'</td>
                                <td class="text-center"><p>'.$row1["size_in_ml"].'</td>
                                <td class="text-center"><p>'.$row1["ctn_size_in_pcs"].'</td>
                                <td class="text-end"><p>&#2547; '.$row["ctn_price"].'</td>
                                <td class="text-center"><p>'.$row["pqty_in_ctn"].'</td>
                                <td class="text-center"><p>'.$row["pqty_in_pcs"].'</td>
                                <td class="text-center"><p>'.$row["a_qty_ctn"].'</td>
                                <td class="text-center"><p>'.$row["a_qty_pcs"].'</td>
                                <td class="text-center"><p>'.$row["compl_ctn"].'</td>
                                <td class="text-center"><p>'.$row["compl_pcs"].'</td>
                                <td class="text-end"><p>&#2547;  '.$row["line_total"].'</td>
                            </tr>';
			}


			$sql1 = "SELECT * FROM invoices WHERE id = ".$inv_id;
				$stmt111 = $con->prepare($sql1, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
				$stmt111->execute();
				$row2 = $stmt111->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT);



			$bHTML .= '

			<tr>
	                <th width="3%" rowspan="5" colspan="8"><p class="mb-0" style="font-weight: 400;">'.$row2["notes"].'</p></th>
	            </tr>

				<tr>
					<td class="text-end" colspan="3"><div class="fw-bold">Grand Total</div></td>
					<td class="text-end"><p>&#2547;  '.$row2["grand_tot"].'</p></td>
				</tr>

				<tr>
					<td class="text-end" colspan="3"><div class="fw-bold">Discount</div></td>
					<td class="text-end"><p>&#2547;  '.$row2["discount"].'</p></td>
				</tr>


				<tr>
					<td class="text-end" colspan="3"><div class="fw-bold">DSR Commision</div></td>
					<td class="text-end"><p>&#2547;  '.$row2["cash_com"].'</p></td>
				</tr>


				<tr>
					<td class="text-end" colspan="3"><div class="fw-bold">Total Payable</div></td>
					<td class="text-end"><p>&#2547;  '.$row2["total_payable"].'</p></td>
				</tr>



			';

			
			
			$rHTML = $bHTML;
		}
		catch (PDOException $e) 
		{
			$rHTML = $e->getMessage();
		}
		
		return $rHTML;
	}




	function getInvDetCh($sql,$bodyOnly=1)
	{
		global $con, $uid, $dept_id;
		try
		{
			$bHTML = ''; $btns = '';
			$stmt = $con->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
			$stmt->execute();
			$counter = 1;
			while ($row = $stmt->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT)) 
			{
			 $product_id = $row['product_id'];
			 $inv_id = $row['inv_id'];

				$sql1 = "SELECT * FROM products WHERE id = ".$product_id;
				$stmt11 = $con->prepare($sql1, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
				$stmt11->execute();
				$row1 = $stmt11->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT);

				$bHTML .= ' <tr>
                                <td scope="row"><p>'.$counter++.'</td>
                                <td><p>'.$row1["name"].'</td>
                                <td class="text-center"><p>'.$row1["size_in_ml"].'</td>
                                <td class="text-center"><p>'.$row1["ctn_size_in_pcs"].'</td>
                                <td class="text-end"><p>&#2547; '.$row["ctn_price"].'</td>
                                <td class="text-center"><p>'.$row["pqty_in_ctn"].'</td>
                                <td class="text-center"><p>'.$row["pqty_in_pcs"].'</td>
                                <td class="text-center"><p>'.$row["a_qty_ctn"].'</td>
                                <td class="text-center"><p>'.$row["a_qty_pcs"].'</td>
                                <td class="text-center"><p>'.$row["compl_ctn"].'</td>
                                <td class="text-center"><p>'.$row["compl_pcs"].'</td>
                            </tr>';
			}


			$sql1 = "SELECT * FROM invoices WHERE id = ".$inv_id;
				$stmt111 = $con->prepare($sql1, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
				$stmt111->execute();
				$row2 = $stmt111->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT);



			$bHTML .= '


			';

			
			
			$rHTML = $bHTML;
		}
		catch (PDOException $e) 
		{
			$rHTML = $e->getMessage();
		}
		
		return $rHTML;
	}


?>