<?php 
	session_start();
	$uid = $_SESSION["userId"];
	$org_id = $_SESSION["org_id"];

	if($_SERVER['REQUEST_METHOD'] == "POST") {


		include('connection.php');

		//get operation
		$oper = $_POST['oper'];

		if($oper == 'add'){


			//check duplicate invoice ref no

			$sql_chk = 'SELECT id FROM invoices WHERE inv_ref_no = "'.$_POST["inv_ref_no"].'"';

			$sth = $con->prepare($sql_chk);
			$sth->execute();


			$number_of_rows = $sth->fetchColumn(); 

			if($number_of_rows > 0){
				$err = 'Duplicate Invoice Refference Number';
			}


			if (empty($err)){

				$inv_date =  preg_replace('/[^A-Za-z0-9. -]/', '',$_POST['inv_date']);
				$inv_number =  preg_replace('/[^A-Za-z0-9. -]/', '',$_POST['inv_number']);
				$demand_id =  0;
				$sales_ref_number =  preg_replace('/[^A-Za-z0-9. -]/', '',$_POST['sales_ref_no']);
				$challan_number =  preg_replace('/[^A-Za-z0-9. -]/', '',$_POST['challan_number']);
				$distri =  preg_replace('/[^A-Za-z0-9. -]/', '',$_POST['distri']);
				$grand_tot =  preg_replace('/[^A-Za-z0-9. -]/', '',$_POST['grand_tot']);
				$discount =  preg_replace('/[^A-Za-z0-9. -]/', '',$_POST['discount']);
				$cash_com =  preg_replace('/[^A-Za-z0-9. -]/', '',$_POST['cash_com']);
				$dsr_com =  preg_replace('/[^A-Za-z0-9. -]/', '',$_POST['dsr_com']);
				$total_payable =  preg_replace('/[^A-Za-z0-9. -]/', '',$_POST['total_payable']);
				$is_active =  1;
				$pay_status =  'Due';
				$dlv_status =  'Pending';
				if(isset($_POST['route'])) $route = preg_replace('/[^A-Za-z0-9. -]/', '',$_POST['route']); else $route = 0;
				if(isset($_POST['outlet'])) $outlet = preg_replace('/[^A-Za-z0-9. -]/', '',$_POST['outlet']); else $outlet = 0;
				if(isset($_POST['store_id'])) $store_id = preg_replace('/[^A-Za-z0-9. -]/', '',$_POST['store_id']); else $store_id = 0;
				$notes =  preg_replace('/[^A-Za-z0-9. -]/', '',$_POST['notes']);
				$inv_ref_no =  preg_replace('/[^A-Za-z0-9. -]/', '',$_POST['inv_ref_no']);


			    $query = "INSERT INTO `invoices`(`inv_date`, `inv_number`, `demand_id`, `sales_ref_number`, `challan_number`, `distri`, `grand_tot`, `discount`, `cash_com`, `dsr_com`, `total_payable`, `created_by`, `is_active`, `pay_status`, `dlv_status`, `route`, `outlet`, `notes`, `inv_ref_no`, `store_id`) 
			    	VALUES ('$inv_date','$inv_number','$demand_id','$sales_ref_number','$challan_number','$distri','$grand_tot','$discount','$cash_com','$dsr_com','$total_payable','$uid','$is_active','$pay_status','$dlv_status','$route','$outlet','$notes','$inv_ref_no','$store_id')";



			        $stmt = $con->prepare($query);

					// execute the query
					$result  = $stmt->execute();
					$inv_ref = $con->lastInsertId();

					if($result  == true){

						$product_id =  preg_replace('/[^A-Za-z0-9. -]/', '',$_POST['product_id']);
						$vol =  preg_replace('/[^A-Za-z0-9. -]/', '',$_POST['vol']);
						$ctnsz =  preg_replace('/[^A-Za-z0-9. -]/', '',$_POST['ctnsz']);
						$price_type =  preg_replace('/[^A-Za-z0-9. -]/', '',$_POST['price_type']);
						$ctn_price =  preg_replace('/[^A-Za-z0-9. -]/', '',$_POST['ctn_price']);
						$pc_price =  preg_replace('/[^A-Za-z0-9. -]/', '',$_POST['pc_price']);
						$pqty_in_ctn =  preg_replace('/[^A-Za-z0-9. -]/', '',$_POST['pqty_in_ctn']);
						$pqty_in_pcs =  preg_replace('/[^A-Za-z0-9. -]/', '',$_POST['pqty_in_pcs']);
						$a_qty_ctn =  preg_replace('/[^A-Za-z0-9. -]/', '',$_POST['a_qty_ctn']);
						$a_qty_pcs =  preg_replace('/[^A-Za-z0-9. -]/', '',$_POST['a_qty_pcs']);
						$compl_ctn =  preg_replace('/[^A-Za-z0-9. -]/', '',$_POST['compl_ctn']);
						$compl_pcs =  preg_replace('/[^A-Za-z0-9. -]/', '',$_POST['compl_pcs']);
						$line_total =  preg_replace('/[^A-Za-z0-9. -]/', '',$_POST['line_total']);


						foreach( $product_id as $key => $id ) 
						{
							$sql= "INSERT INTO `inv_details`(`inv_id`, `product_id`, `vol`, `ctnsz`, `price_type`, `ctn_price`, `pc_price`, `pqty_in_ctn`, `pqty_in_pcs`,`a_qty_ctn`,`a_qty_pcs`,`compl_ctn`,`compl_pcs`,`line_total`) VALUES ('$inv_ref','$id','$vol[$key]','$ctnsz[$key]','$price_type[$key]','$ctn_price[$key]','$pc_price[$key]','$pqty_in_ctn[$key]','$pqty_in_pcs[$key]','$a_qty_ctn[$key]','$a_qty_pcs[$key]','$compl_ctn[$key]','$compl_pcs[$key]','$line_total[$key]')";
								$sth = $con->prepare($sql);
								$sth->execute();
						}

					  $err = 'true';
					}
			}

		}


		elseif($oper == 'edit'){

			$edit_code =  preg_replace('/[^A-Za-z0-9. -]/', '',$_POST['edit_code']);
			$edit_name =  preg_replace('/[^A-Za-z0-9. -]/', '',$_POST['edit_name']);
			$edit_defination =  preg_replace('/[^A-Za-z0-9. -]/', '',$_POST['edit_defination']);
			$edit_status = $_POST['edit_status'];
			$edit_id = $_POST['edit_id'];


		    $query = "UPDATE regions SET code = '$edit_code', name = '$edit_name', definition = '$edit_defination', is_active = '$edit_status' WHERE id = '$edit_id'";

		    // echo $query;


		        $stmt = $con->prepare($query);

				// execute the query
				$result  = $stmt->execute();

				if($result  == true){
				  echo 'true';
			      // echo $stmt->rowCount() . " records Added successfully";
				}

		}
	    

	    echo($err);
		

}


?>