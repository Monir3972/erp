<?php

	include '../../controller/connection.php';
	/*include 'auth.php';*/
	session_start();
	$uid = $_SESSION["userId"];
	$dept_id = $_SESSION["dept_id"];
	$wloc_id = $_SESSION["wloc_id"];
	$org_id = $_SESSION["org_id"];
	session_write_close();
	$return_data = array();
	
	$req = isset($_POST['req']) ? $_POST['req'] : 0;
	$param = isset($_POST['param']) ? $_POST['param'] : 0;
	$data = isset($_POST['data']) ? $_POST['data'] : 0;
	$field_list = isset($_POST['get']) ? $_POST['get'] : '*';
	$filter = isset($_POST['filter']) ? $_POST['filter'] : '';
	$multi_select = isset($_POST['msel']) ? $_POST['msel'] : 1; 
	$match_id = isset($_POST['match']) ? $_POST['match'] : 0;


	//------------------------------------------------------------------------------------------------
	//-------------------------------------------------req--------------------------------------------
	//------------------------------------------------------------------------------------------------


	switch($req)
	{
		case '1': // Request for depot table
			$table = 'depots';
			break;
        case '2': // Request for region table
            $table = 'regions';
            break;
		case '3': // Request for area table
			$table = 'areas';
			break;
		case '4': // Request for territory table
			$table = 'territories';
			break;
		case '5': // Request for distributor table
			$table = 'distributors';
			break;
	}


	//------------------------------------------------------------------------------------------------
	//-----------------------------------------------param--------------------------------------------
	//------------------------------------------------------------------------------------------------


	switch($param)
	{
		// ------------------------------------------------------------
		// ------------------ALL Cases for DEPOT TABLE-----------------
		// ------------------------------------------------------------

		case '1': // Request for depot list --> for table view purpose
			$sql = " SELECT depots.*,regions.name AS region_name, regions.org_id AS org_id FROM depots LEFT JOIN regions ON (depots.region = regions.id) WHERE org_id = ".$org_id;
			$return_data = getTableHTML_depots($sql,true);
			break;

		case '2': // Request for depot list --> regions table (name) selection --> [for modal edit purpose]
			$sql = "SELECT *,(SELECT `name` FROM `regions` WHERE id = `depots`.`region`) AS region_name FROM ".$table." WHERE id = ".$data." ORDER BY `code` ASC ";
			$return_data = getTableHTML_depots_SelectedID($sql,true);
			break;
            
        case '3': // [For modal add purpose, modal edit fetch purpose] --> [ Request for region list, Request for depot list, Request for area list] 
            $sql ='SELECT * FROM '.$table.' WHERE `is_active` = 1';
			$sql .= ($filter!='')? ' AND '.$filter : '' ;
			$return_data = getSelectedHTML_lists($sql,$match_id,'',$multi_select,true);
            break;

		// ------------------------------------------------------------
		// -------------------ALL Cases for Area TABLE----------------- 
		// ------------------------------------------------------------
		
		case '4': // Request for area list --> for table view purpose
		$sql = " SELECT areas.*, depots.name AS depot_name, regions.org_id AS org_id FROM areas LEFT JOIN depots ON (areas.depot = depots.id) LEFT JOIN regions ON (depots.region = regions.id) WHERE org_id = ".$org_id;
		$return_data = getTableHTML_areas($sql,true);
		break;

		case '5': // Request for area list --> depots table (name) selection --> [for modal edit purpose]
			$sql = "SELECT *,(SELECT `name` FROM `depots` WHERE id = `areas`.`depot`) AS depot_name, (SELECT id FROM region_wise_distri WHERE depot = `areas`.`depot` GROUP BY region_wise_distri.depot) AS region_id FROM ".$table." WHERE id = ".$data." ORDER BY `code` ASC" ;
			$return_data = getTableHTML_areas_SelectedID($sql,true);
			break;
            
        case '6': // Request for depot list --> depots table (name) selection --> [for modal add purpose]
            $sql ='SELECT * FROM '.$table.' WHERE region = '.$data.' AND `is_active` = "1" ';
            $return_data = getSelectedHTML_depots($sql,$data,true);
            break;

		// -------------------------------------------------------------------
		// -------------------ALL Cases for Territories TABLE----------------- 
		// -------------------------------------------------------------------
		
		case '7': // Request for territories list --> for table view purpose
			$sql = " SELECT territories.*, areas.name AS area_name, regions.org_id AS org_id FROM ".$table." LEFT JOIN areas ON (territories.area = areas.id) LEFT JOIN depots ON (areas.depot = depots.id) LEFT JOIN regions ON (depots.region = regions.id) WHERE org_id = ".$org_id;
			$return_data = getTableHTML_territories($sql,true);
			break;

		case '8': // Request for territories list --> areas table (name) selection --> [for modal edit purpose]
			$sql = " SELECT *, (SELECT `name` FROM `areas` WHERE id = `territories`.`area`) AS area_name , (SELECT depot FROM region_wise_distri WHERE area = `territories`.`area` GROUP BY region_wise_distri.area) AS depot_id, (SELECT id FROM region_wise_distri WHERE area = `territories`.`area` GROUP BY region_wise_distri.area) AS region_id FROM ".$table." WHERE id = ".$data." ORDER BY `code` ASC ";
			$return_data = getTableHTML_territories_SelectedID($sql,true);
			break;

        case '9': // Request for area list --> areas table (name) selection --> [for modal add & edit purpose]
            $sql ='SELECT * FROM '.$table.' WHERE depot = '.$data.' AND is_active = "1"';
            $return_data = getSelectedHTML_areas($sql,true);
            break;




		// -------------------------------------------------------------------
		// -------------------ALL Cases for Distributor TABLE----------------- 
		// -------------------------------------------------------------------
		
		case '10': // Request for Distributor list --> for table view purpose
			$sql = " SELECT distributors.*, territories.name As territory_name, territories.id As territory_id, areas.name AS area_name, areas.id AS area_id, depots.name AS depot_name, depots.id AS depot_id, regions.name As region_name ,regions.id AS region_id, regions.org_id AS org_id FROM  ".$table." Left JOIN territories ON (distributors.territory = territories.id) LEFT JOIN areas ON (territories.area = areas.id)  LEFT JOIN depots ON (areas.depot = depots.id) LEFT JOIN regions ON (depots.region = regions.id) WHERE org_id = ".$org_id;
			$return_data = getTableHTML_distributors($sql,true);
			break;

		case '11': // Request for Distributor list --> territories table (name) selection --> [for modal edit purpose]
			$sql = " SELECT distributors.*, territories.name As territory_name, territories.id As territory_id, areas.name AS area_name, areas.id AS area_id, depots.name AS depot_name, depots.id AS depot_id, regions.name As region_name , regions.id AS region_id, regions.org_id AS org_id FROM ".$table." Left JOIN territories ON (distributors.territory = territories.id) LEFT JOIN areas ON (territories.area = areas.id) LEFT JOIN depots ON (areas.depot = depots.id) LEFT JOIN regions ON (depots.region = regions.id) WHERE distributors.id = ".$data;
			$return_data = getTableHTML_distributors_SelectedID($sql,true);
			break;
			//SELECT * , (SELECT `name` FROM `territories` WHERE id = `distributors`.`territory`) AS territory_name , (SELECT depot FROM region_wise_distri WHERE area = `territories`.`area` GROUP BY region_wise_distri.area) AS depot_id, (SELECT id FROM region_wise_distri WHERE area = `territories`.`area` GROUP BY region_wise_distri.area) AS region_id FROM ".$table." WHERE id = ".$data." ORDER BY `code` ASC

        case '12': // Request for territories list --> areas table (name) selection --> [for modal add & edit purpose]
            $sql ='SELECT * FROM '.$table.' WHERE area = '.$data.' AND is_active = "1"';
            $return_data = getSelectedHTML_territories($sql,true);
            break;

	}


	//------------------------------------------------------------------------------------------------
	//------------------------------------------param ends--------------------------------------------
	//------------------------------------------------------------------------------------------------
	echo json_encode($return_data);



	//------------------------------------------------------------------------------------------------
	//--------------------------------------functions start-------------------------------------------
	//------------------------------------------------------------------------------------------------



	//---------------------------------------------------------------------------------
	//-----------------------Depot Table Functions start-------------------------------
	//---------------------------------------------------------------------------------

	// Depot_table_view -->[ main purpose is to fetch table data in the depot table ]
	function getTableHTML_depots($sql,$bodyOnly=1){
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
                                <td><p>'.$counter++.'</td>
                                <td><p>'.$row["code"].'</td>
                                <td><p>'.$row["name"].'</td>
                                <td><p>'.$row["definition"].'</td>
                                <td><p>'.$row["address"].'</td>
                                <td><p>'.$row["region_name"].'</td>
                                <td><p>'.($row["is_active"]==0 ? "Out Of Service" : "Active").'</td>
                                <td class="text-end">    
                                    <a class="btn p-0" data-toggle="tooltip" data-placement="bottom" title="Edit" data-id='.$row["id"].' match-org-id='.$row["org_id"].' id="btn_edit">
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

	// Depot_table_modal_edit_view -->[ main purpose is to fetch all the data of the input fields in the modal edit ]
	function getTableHTML_depots_SelectedID($sql,$bodyOnly=1){
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

	// Depot_table_modal_edit_view -->[ main purpose to find the selected region and display them in select tag in depot table modal edit ]
    function getSelectedHTML_lists($sql, $matchID, $field_name, $multisel = FALSE, $optOnly = FALSE)
	{
		global $con, $filter;
		try
		{
			$multi = ($multisel) ? 'multiple="multiple"' : '';
			$field_name = ($multisel) ? $field_name.'[]' : $field_name;
			$rHTML = '<select class="chosen-select sel2 width-100" '.$multi.' id="'.$field_name.'" name="'.$field_name.'">';
			$rHTML = ($optOnly) ? '' : $rHTML;
			$rHTML .= ($multisel) ? '<option value="-1">-- Select --</option>' : '<option value="0" disabled>-- Select --</option>';
			
			$stmt = $con->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
			$stmt->execute();
			while ($row = $stmt->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT)) 
			{
				if($row['id'] == $matchID)
					$rHTML = $rHTML . '<option value="'.$row['id'].'" selected>'.$row['name'].'</option>';
				else
					$rHTML = $rHTML . '<option value="'.$row['id'].'">'.$row['name'].'</option>';
			}
			$rHTML = ($optOnly) ? $rHTML : $rHTML . '</select>';
		}
		catch (PDOException $e) 
		{
			$rHTML = $e->getMessage();
		}
		
		return $rHTML;
	}


	
	//---------------------------------------------------------------------------------
	//-----------------------Area Table Functions start-------------------------------
	//---------------------------------------------------------------------------------
	
	// area_table_view -->[ main purpose is to fetch table data in the area table ]
	function getTableHTML_areas($sql,$bodyOnly=1){
		global $con, $uid, $dept_id;
		try
		{
			$bHTML = ''; 
			$btns = '';
			$stmt = $con->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
			$stmt->execute();
			$counter = 1;
			while ($row = $stmt->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT)) 
			{
				$bHTML .= ' <tr>
                                <td><p>'.$counter++.'</td>
                                <td><p>'.$row["code"].'</td>
                                <td><p>'.$row["name"].'</td>
                                <td><p>'.$row["definition"].'</td>
                                <td><p>'.$row["depot_name"].'</td>
                                <td><p>'.($row["is_active"]==0 ? "Out Of Service" : "Active").'</td>
                                <td class="text-end">
                                    <a class="btn p-0"  data-toggle="tooltip" data-placement="bottom" title="Edit" data-id='.$row["id"].' match-id ='.$row["depot"].' match-org-id='.$row["org_id"].' id="btn_edit">
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


	// area_table_modal_edit_view -->[ main purpose is to fetch all the data of the input fields in the modal edit ]
	function getTableHTML_areas_SelectedID($sql,$bodyOnly=1){
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


	// area_table_modal_edit_view -->[ main purpose to find the selected depot and display them in select tag in area table modal edit ]
    function getSelectedHTML_depots($sql,$data,$bodyOnly=1){
        global $con, $uid, $dept_id, $data;
		try
		{
			$bHTML = '';
			$bHTML .= '<option value="" selected disabled>-- Select --</option>';

			$stmt = $con->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
			$stmt->execute();

			while ($row = $stmt->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT)) 
			{
				// checking [depot table(region column) is equivalent to area table(region id coloumn by sub-query)] is selected
				if($row['region'] == $data){
					$bHTML = $bHTML . '<option value="'.$row['id'].'">'.$row['name'].'</option>';
				}
				else{
					$bHTML = $bHTML . '';
				}
			}
			$rHTML = $bHTML;
		}
		catch (PDOException $e) 
		{
			$rHTML = $e->getMessage();
		}
		
		return $rHTML;
    }
	


	//---------------------------------------------------------------------------------
	//-----------------------Territories Table Functions start-------------------------------
	//---------------------------------------------------------------------------------
	
	// area_table_view -->[ main purpose is to fetch table data in the area table ]
	function getTableHTML_territories($sql,$bodyOnly=1){
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
                                <td><p>'.$counter++.'</td>
                                <td><p>'.$row["code"].'</td>
                                <td><p>'.$row["name"].'</td>
                                <td><p>'.$row["definition"].'</td>
                                <td><p>'.$row["area_name"].'</td>
                                <td><p>'.($row["is_active"]==0 ? "Out Of Service" : "Active").'</td>
                                <td class="text-end">
                                    <a class="btn p-0"  data-toggle="tooltip" data-placement="bottom" title="Edit" data-id='.$row["id"].' a-id='.$row["area"].' match-org-id='.$row["org_id"].' id="btn_edit">
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


	// area_table_modal_edit_view -->[ main purpose is to fetch all the data of the input fields in the modal edit ]
	function getTableHTML_territories_SelectedID($sql,$bodyOnly=1){
		global $con, $uid, $dept_id;
		try
		{
	
			$bHTML = ''; 
			$stmt = $con->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
			$stmt->execute();
			$row = $stmt->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT);
			
			$rHTML = $row;
		}
		catch (PDOException $e) 
		{
			$rHTML = $e->getMessage();
		}
		
		return $rHTML;
	}


	// area_table_modal_edit_view -->[ main purpose to find the selected area and display them in select tag in area table modal edit ]
    function getSelectedHTML_areas($sql,$bodyOnly=1){
        global $con, $uid, $dept_id, $data;
		
		try
		{
			$bHTML = '';
			$bHTML .= '<option value="" selected disabled>-- Select --</option>';

			$stmt = $con->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
			$stmt->execute();

			while ($row = $stmt->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT)) 
			{
				// checking [depot table(id column) is equivalent to area table(depot coloumn)] is selected
				// If selected then fetch all the area table (name coloumn)
				if($row['depot'] == $data){
					$bHTML = $bHTML . '<option value="'.$row['id'].'">'.$row['name'].'</option>';
				}
				else{
					$bHTML = $bHTML . '';
				}
			}
			$rHTML = $bHTML;
		}
		catch (PDOException $e) 
		{
			$rHTML = $e->getMessage();
		}
		
		return $rHTML;
    }

	
	//---------------------------------------------------------------------------------
	//-----------------------Distributors Table Functions start-------------------------------
	//---------------------------------------------------------------------------------
	
	// area_table_view -->[ main purpose is to fetch table data in the area table ]
	function getTableHTML_distributors($sql,$bodyOnly=1){
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
                                <td><p>'.$counter++.'</td>
                                <td><p>'.$row["code"].'</td>
                                <td><p>'.$row["name"].'</td>
                                <td><p>'.$row["address"].'</td>
								<td><p>'.$row["region_name"].'</td>
								<td><p>'.$row["depot_name"].'</td>
                                <td><p>'.$row["area_name"].'</td>
								<td><p>'.$row["territory_name"].'</td>
                                <td><p>'.($row["is_active"]==0 ? "Out Of Service" : "Active").'</td>
								<td><p>'.($row["is_approve"]==0 ? "No" : "Yes").'</td>
                                <td class="text-end">
                                    <a class="btn p-0"  data-toggle="tooltip" data-placement="bottom" title="Edit" data-id='.$row["id"].' t-id='.$row["territory"].' match-org-id='.$row["org_id"].' id="btn_edit">
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


	// area_table_modal_edit_view -->[ main purpose is to fetch all the data of the input fields in the modal edit ]
	function getTableHTML_distributors_SelectedID($sql,$bodyOnly=1){
		global $con, $uid, $dept_id;
		try
		{
	
			$bHTML = ''; 
			$stmt = $con->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
			$stmt->execute();
			$row = $stmt->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT);
			
			$rHTML = $row;
		}
		catch (PDOException $e) 
		{
			$rHTML = $e->getMessage();
		}
		
		return $rHTML;
	}


	// area_table_modal_edit_view -->[ main purpose to find the selected area and display them in select tag in area table modal edit ]
    function getSelectedHTML_territories($sql,$bodyOnly=1){
        global $con, $uid, $dept_id, $data;
		
		try
		{
			$bHTML = '';
			$bHTML .= '<option value="" selected disabled>-- Select --</option>';

			$stmt = $con->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
			$stmt->execute();

			while ($row = $stmt->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT)) 
			{
				// checking [areas table(id column) is equivalent to territories table(area coloumn)] is selected
				// If selected then fetch all the territory table (name coloumn)
				if($row['area'] == $data){
					$bHTML = $bHTML . '<option value="'.$row['id'].'">'.$row['name'].'</option>';
				}
				else{
					$bHTML = $bHTML . '';
				}
			}
			$rHTML = $bHTML;
		}
		catch (PDOException $e) 
		{
			$rHTML = $e->getMessage();
		}
		
		return $rHTML;
    }

	//------------------------------------------------------------------------------------------------
	//--------------------------------------functions end --------------------------------------------
	//------------------------------------------------------------------------------------------------
?>