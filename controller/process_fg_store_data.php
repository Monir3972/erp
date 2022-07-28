<?php 
	session_start();
	$uid = $_SESSION["userId"];
	$org_id = $_SESSION["org_id"];

	if($_SERVER['REQUEST_METHOD'] == "POST") {


		include('connection.php');

		//get operation
		$oper = $_POST['oper'];

		if($oper == 'add'){

			$add_code =  preg_replace('/[^A-Za-z0-9. -]/', '',$_POST['add_code']);
			$add_name =  preg_replace('/[^A-Za-z0-9. -]/', '',$_POST['add_name']);
			$add_defination =  preg_replace('/[^A-Za-z0-9. -]/', '',$_POST['add_defination']);
			$add_address =  preg_replace('/[^A-Za-z0-9. -]/', '',$_POST['add_address']);
			$add_depots =  preg_replace('/[^A-Za-z0-9. -]/', '',$_POST['add_depots']);
			$add_region =  preg_replace('/[^A-Za-z0-9. -]/', '',$_POST['add_region']);


		    $query = "INSERT INTO `fg_store`(
		            `code`, 
		            `name`, 
		            `definition`, 
		            `address`, 
		            `depots`, 
		            `regions`, 
		            `created_by`, 
		            `is_active`
		        ) 
		        VALUES (
		            '$add_code',
		            '$add_name',
		            '$add_defination',
		            '$add_address',
		            '$add_depots',
		            '$add_region',
		            '$uid',
		            '1'
		        )";



		        $stmt = $con->prepare($query);

				// execute the query
				$result  = $stmt->execute();

				if($result  == true){
				  echo 'true';
			      // echo $stmt->rowCount() . " records Added successfully";
				}

		}


		elseif($oper == 'edit'){

			$edit_code =  preg_replace('/[^A-Za-z0-9. -]/', '',$_POST['edit_code']);
			$edit_name =  preg_replace('/[^A-Za-z0-9. -]/', '',$_POST['edit_name']);
			$edit_defination =  preg_replace('/[^A-Za-z0-9. -]/', '',$_POST['edit_defination']);
			$edit_address =  preg_replace('/[^A-Za-z0-9. -]/', '',$_POST['edit_address']);
			$edit_depot =  preg_replace('/[^A-Za-z0-9. -]/', '',$_POST['edit_depot']);
			$edit_region =  preg_replace('/[^A-Za-z0-9. -]/', '',$_POST['edit_region']);
			$edit_status = $_POST['edit_status'];
			$edit_id = $_POST['edit_id'];


		    $query = "UPDATE fg_store SET code = '$edit_code', name = '$edit_name', definition = '$edit_defination', address = '$edit_address', depots = '$edit_depot', regions = '$edit_region', is_active = '$edit_status' WHERE id = '$edit_id'";

		    // echo $query;


		        $stmt = $con->prepare($query);

				// execute the query
				$result  = $stmt->execute();

				if($result  == true){
				  echo 'true';
			      // echo $stmt->rowCount() . " records Added successfully";
				}

		}
	    
		

}


?>