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
			$add_address =  preg_replace('/[^A-Za-z0-9. -]/', '',$_POST['add_address']);
			$add_o_name = preg_replace('/[^A-Za-z0-9. -]/', '',$_POST['add_o_name']);
			$add_o_address = preg_replace('/[^A-Za-z0-9. -]/', '',$_POST['add_o_address']);
            $add_o_mobile = preg_replace('/[^A-Za-z0-9. -]/', '',$_POST['add_o_mobile']);
			$add_o_phone = preg_replace('/[^A-Za-z0-9. -]/', '',$_POST['add_o_phone']);
			$add_tl_num = preg_replace('/[^A-Za-z0-9. -]/', '',$_POST['add_tl_num']);
			$add_agree_num= preg_replace('/[^A-Za-z0-9. -]/', '',$_POST['add_agree_num']);
			$add_rating= preg_replace('/[^A-Za-z0-9. -]/', '',$_POST['add_rating']);
			$add_territory_list= preg_replace('/[^A-Za-z0-9. -]/', '',$_POST['add_territory_list']);
			$add_distri_type= preg_replace('/[^A-Za-z0-9. -]/', '',$_POST['add_distri_type']);
            $add_status = preg_replace('/[^A-Za-z0-9. -]/', '', $_POST['add_status']);
			$add_is_approve = preg_replace('/[^A-Za-z0-9. -]/', '', $_POST['add_is_approve']);



			if(isset($_FILES['add_image1']['name']) && isset($_FILES['add_image2']['name'])){
				$errors = array();

				$array1 = explode('.', $_FILES['add_image1']['name']);
				$extension1 = end($array1);
				$add_tl_image = uniqid(rand()).'.'.$extension1;
				$file_ext_1 = pathinfo($add_tl_image, PATHINFO_EXTENSION);
				$location1 = '../assets/uploads/distributors/trade_license_image/'.$add_tl_image;

				$array2 = explode('.', $_FILES['add_image2']['name']);
				$extension2 = end($array2);
				$add_agree_image = uniqid(rand()).'.'.$extension2;
				$file_ext_2 = pathinfo($add_agree_image, PATHINFO_EXTENSION);
				$location2 = '../assets/uploads/distributors/agreement_image/'.$add_agree_image;

				$array3 = explode('.', $_FILES['add_rental_deed']['name']);
				$extension3 = end($array3);
				$add_rental_deed_image = uniqid(rand()).'.'.$extension3;
				$file_ext_3 = pathinfo($add_rental_deed_image, PATHINFO_EXTENSION);
				$location3 = '../assets/uploads/distributors/rental_deed_image/'.$add_rental_deed_image;

				// add image1,  add image2, add image3
				if(isset($_FILES['add_image1']) && isset($_FILES['add_image2']) && isset($_FILES['add_rental_deed'])) {
					$maxsize = 512000;
					$allowed_image_extension = array("png", "jpg", "jpeg");

					// Validate image file size
					if((($_FILES["add_image1"]["size"] > $maxsize) || ($_FILES['add_image2']['size'] > $maxsize) || ($_FILES['add_rental_deed']['size'] > $maxsize)) || (($_FILES["add_image1"]["size"] == 0) || ($_FILES["add_image2"]["size"] == 0) || ($_FILES["add_rental_deed"]["size"] == 0))) {

						$errors[] = 'File too large. File size must be less than 500 KB.';
					}

					// Validate file input to check if is with valid extension
					if((!in_array($file_ext_1, $allowed_image_extension)) && (!empty($file_ext_1)) 
					|| (!in_array($file_ext_2, $allowed_image_extension)) && (!empty($file_ext_2))
					|| (!in_array($file_ext_3, $allowed_image_extension)) && (!empty($file_ext_3))) {
						
						$errors[] = 'Invalid file type. Only JPEG, JPG and PNG types are accepted.';
					}
				}

				if(count($errors) === 0) {
					//image upload
					if (isset($_FILES['add_image2']['name']) && isset($_FILES['add_image2']['name']) && isset($_FILES['add_rental_deed']['name'])) {
						move_uploaded_file($_FILES['add_image1']['tmp_name'], $location1);
						move_uploaded_file($_FILES['add_image2']['tmp_name'], $location2);
						move_uploaded_file($_FILES['add_rental_deed']['tmp_name'], $location3);
					}
				} else {
					foreach($errors as $error) {
						echo json_encode($error);
					}
					die(); //Ensure no more processing is done
				}
			}
			
			
		    $sql = "INSERT INTO `distributors`(
		            `code`, `name`, `address`, `o_name`, `o_address`, `o_mobile`, `o_phone`, `tl_num`, `tl_image`,
					`rental_deed`, `agree_num`,  `agree_image`,`rating`, `territory`, `distri_type`, `created_by`, `is_active`,`is_approve`
		        ) 
		        VALUES (
		            '$add_code', '$add_name', '$add_address', '$add_o_name', '$add_o_address', '$add_o_mobile', '$add_o_phone',
					'$add_tl_num', '$add_tl_image', '$add_rental_deed_image', '$add_agree_num', '$add_agree_image', '$add_rating', 
					'$add_territory_list', '$add_distri_type', '$uid', '1', '$add_is_approve'
		        )";

			$stmt = $con->prepare($sql);
			// execute the query
			$result = $stmt->execute();

			if($result == true){
				echo 'true';
				// echo $stmt->rowCount() . " records Added successfully";
			}
		}


		elseif($oper == 'edit'){
			$edit_id = $_POST['edit_id'];
			
			$edit_code =  preg_replace('/[^A-Za-z0-9. -]/', '',$_POST['edit_code']);
			$edit_name =  preg_replace('/[^A-Za-z0-9. -]/', '',$_POST['edit_name']);
			$edit_address =  preg_replace('/[^A-Za-z0-9. -]/', '',$_POST['edit_address']);
			$edit_o_name = preg_replace('/[^A-Za-z0-9. -]/', '',$_POST['edit_o_name']);
			$edit_o_address = preg_replace('/[^A-Za-z0-9. -]/', '',$_POST['edit_o_address']);
            $edit_o_mobile = preg_replace('/[^A-Za-z0-9. -]/', '',$_POST['edit_o_mobile']);
			$edit_o_phone = preg_replace('/[^A-Za-z0-9. -]/', '',$_POST['edit_o_phone']);
			$edit_tl_num = preg_replace('/[^A-Za-z0-9. -]/', '',$_POST['edit_tl_num']);
			$edit_agree_num = preg_replace('/[^A-Za-z0-9. -]/', '',$_POST['edit_agree_num']);
			$edit_rating = preg_replace('/[^A-Za-z0-9. -]/', '',$_POST['edit_rating']);
			$edit_territory_list = preg_replace('/[^A-Za-z0-9. -]/', '',$_POST['edit_territory_list']);
			$edit_distri_type = preg_replace('/[^A-Za-z0-9. -]/', '',$_POST['edit_distri_type']);
            $edit_status = preg_replace('/[^A-Za-z0-9. -]/', '', $_POST['edit_status']);
			$edit_is_approve = preg_replace('/[^A-Za-z0-9. -]/', '', $_POST['edit_is_approve']);


			// ALL three images edit (together)
			if( ($_FILES['edit_image1']['name']) != null && ($_FILES['edit_image2']['name']) != null && ($_FILES['edit_rental_deed']['name']) != null) {
				$errors = array();

				$array1 = explode('.', $_FILES['edit_image1']['name']);
				$extension1 = end($array1);
				$image_1 = uniqid(rand()).'.'.$extension1;
				$file_ext_1 = pathinfo($image_1, PATHINFO_EXTENSION);
				$location1 = '../assets/uploads/distributors/trade_license_image/'.$image_1;

				$array2 = explode('.', $_FILES['edit_image2']['name']);
				$extension2 = end($array2);
				$image_2 = uniqid(rand()).'.'.$extension2;
				$file_ext_2 = pathinfo($image_2, PATHINFO_EXTENSION);
				$location2 = '../assets/uploads/distributors/agreement_image/'.$image_2;

				$array3 = explode('.', $_FILES['edit_rental_deed']['name']);
				$extension3 = end($array3);
				$image_3 = uniqid(rand()).'.'.$extension3;
				$file_ext_3 = pathinfo($image_3, PATHINFO_EXTENSION);
				$location3 = '../assets/uploads/distributors/rental_deed_image/'.$image_3;

				// add image1,  add image2, add image3
				if(isset($_FILES['edit_image1']) && isset($_FILES['edit_image2']) && isset($_FILES['edit_rental_deed'])) {
					$maxsize = 512000;
					$allowed_image_extension = array("png", "jpg", "jpeg");

					// Validate image file size
					if((($_FILES["edit_image1"]["size"] > $maxsize) || ($_FILES['edit_image2']['size'] > $maxsize) || ($_FILES['edit_rental_deed']['size'] > $maxsize)) || (($_FILES["edit_image1"]["size"] == 0) || ($_FILES["edit_image2"]["size"] == 0) || ($_FILES["edit_rental_deed"]["size"] == 0))) {
						$errors[] = 'File too large. File size must be less than 500 KB.';
					}

					// Validate file input to check if is with valid extension
					if((!in_array($file_ext_1, $allowed_image_extension)) && (!empty($file_ext_1)) 
					|| (!in_array($file_ext_2, $allowed_image_extension)) && (!empty($file_ext_2))
					|| (!in_array($file_ext_3, $allowed_image_extension)) && (!empty($file_ext_3))) {
						$errors[] = 'Invalid file type. Only JPEG, JPG and PNG types are accepted.';
					}
				}

				if(count($errors) === 0) {
					//image upload
					if (($_FILES['edit_image1']['name']) && ($_FILES['edit_image2']['name']) && ($_FILES['edit_rental_deed']['name'])) {
						
						$query = "SELECT tl_image, rental_deed, agree_image FROM distributors WHERE id = ".$edit_id;
						$stmt = $con->prepare($query, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
						// execute the query
						$result  = $stmt->execute();

						while($row = $stmt->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT))
						{
							$tl_image = $row['tl_image'];
							unlink('../assets/uploads/distributors/trade_license_image/'.$tl_image);
							
							$agree_image = $row['agree_image'];
							unlink('../assets/uploads/distributors/agreement_image/'.$agree_image);
							
							$rental_deed_image = $row['rental_deed'];
							unlink('../assets/uploads/distributors/rental_deed_image/'.$rental_deed_image);
							
						}
						move_uploaded_file($_FILES['edit_image1']['tmp_name'], $location1);
						move_uploaded_file($_FILES['edit_image2']['tmp_name'], $location2);
						move_uploaded_file($_FILES['edit_rental_deed']['tmp_name'], $location3);
					}
				} else {
					foreach($errors as $error) {
						echo json_encode($error);
					}
					die(); //Ensure no more processing is done
				}

				$query = "UPDATE `distributors` SET 
				`tl_image`='$image_1', `rental_deed`='$image_3', `agree_image`='$image_2' WHERE `id` = '$edit_id' ";
				// echo $query;
				$stmt = $con->prepare($query);
				// execute the query
				$result  = $stmt->execute();
			}

			// ====================================================================

			// only trade license image and agreement image edit
			else if( ($_FILES['edit_image1']['name']) != null && ($_FILES['edit_image2']['name']) != null) {
				$errors = array();

				$array1 = explode('.', $_FILES['edit_image1']['name']);
				$extension1 = end($array1);
				$image_1 = uniqid(rand()).'.'.$extension1;
				$file_ext_1 = pathinfo($image_1, PATHINFO_EXTENSION);
				$location1 = '../assets/uploads/distributors/trade_license_image/'.$image_1;

				$array2 = explode('.', $_FILES['edit_image2']['name']);
				$extension2 = end($array2);
				$image_2 = uniqid(rand()).'.'.$extension2;
				$file_ext_2 = pathinfo($image_2, PATHINFO_EXTENSION);
				$location2 = '../assets/uploads/distributors/agreement_image/'.$image_2;

				// add image1,  add image2
				if(isset($_FILES['edit_image1']) && isset($_FILES['edit_image2'])) {
					$maxsize = 512000;
					$allowed_image_extension = array("png", "jpg", "jpeg");

					// Validate image file size
					if((($_FILES["edit_image1"]["size"] > $maxsize) || ($_FILES['edit_image2']['size'] > $maxsize)) || (($_FILES["edit_image1"]["size"] == 0) || ($_FILES["edit_image2"]["size"] == 0))) {
						$errors[] = 'File too large. File size must be less than 500 KB.';
					}

					// Validate file input to check if is with valid extension
					if((!in_array($file_ext_1, $allowed_image_extension)) && (!empty($file_ext_1)) 
					|| (!in_array($file_ext_2, $allowed_image_extension)) && (!empty($file_ext_2))) {
						$errors[] = 'Invalid file type. Only JPEG, JPG and PNG types are accepted.';
					}
				}

				if(count($errors) === 0) {
					//image upload
					if (($_FILES['edit_image1']['name']) && ($_FILES['edit_image2']['name'])) {
						
						$query = "SELECT tl_image, agree_image FROM distributors WHERE id = ".$edit_id;
						$stmt = $con->prepare($query, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
						// execute the query
						$result  = $stmt->execute();

						while($row = $stmt->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT))
						{
							$tl_image = $row['tl_image'];
							unlink('../assets/uploads/distributors/trade_license_image/'.$tl_image);
							
							$agree_image = $row['agree_image'];
							unlink('../assets/uploads/distributors/agreement_image/'.$agree_image);
						}
						move_uploaded_file($_FILES['edit_image1']['tmp_name'], $location1);
						move_uploaded_file($_FILES['edit_image2']['tmp_name'], $location2);
					}
				} else {
					foreach($errors as $error) {
						echo json_encode($error);
					}
					die(); //Ensure no more processing is done
				}

				$query = "UPDATE `distributors` SET 
				`tl_image`='$image_1', `agree_image`='$image_2' WHERE `id` = '$edit_id' ";
				// echo $query;
				$stmt = $con->prepare($query);
				// execute the query
				$result  = $stmt->execute();
			}

			// ====================================================================

			// agreement image and rental deed image edit
			else if( ($_FILES['edit_image2']['name']) != null && ($_FILES['edit_rental_deed']['name']) != null) {
				$errors = array();

				$array2 = explode('.', $_FILES['edit_image2']['name']);
				$extension2 = end($array2);
				$image_2 = uniqid(rand()).'.'.$extension2;
				$file_ext_2 = pathinfo($image_2, PATHINFO_EXTENSION);
				$location2 = '../assets/uploads/distributors/agreement_image/'.$image_2;

				$array3 = explode('.', $_FILES['edit_rental_deed']['name']);
				$extension3 = end($array3);
				$image_3 = uniqid(rand()).'.'.$extension3;
				$file_ext_3 = pathinfo($image_3, PATHINFO_EXTENSION);
				$location3 = '../assets/uploads/distributors/rental_deed_image/'.$image_3;

				// add image2, add image3
				if(isset($_FILES['edit_image2']) && isset($_FILES['edit_rental_deed'])) {
					$maxsize = 512000;
					$allowed_image_extension = array("png", "jpg", "jpeg");

					// Validate image file size
					if( ($_FILES['edit_image2']['size'] > $maxsize) || ($_FILES['edit_rental_deed']['size'] > $maxsize) || ($_FILES["edit_image2"]["size"] == 0) || ($_FILES["edit_rental_deed"]["size"] == 0)) {
						$errors[] = 'File too large. File size must be less than 500 KB.';
					}

					// Validate file input to check if is with valid extension
					if((!in_array($file_ext_2, $allowed_image_extension)) && (!empty($file_ext_2))
					|| (!in_array($file_ext_3, $allowed_image_extension)) && (!empty($file_ext_3))) {
						$errors[] = 'Invalid file type. Only JPEG, JPG and PNG types are accepted.';
					}
				}

				if(count($errors) === 0) {
					//image upload
					if (($_FILES['edit_image2']['name']) && ($_FILES['edit_rental_deed']['name'])) {
						
						$query = "SELECT rental_deed, agree_image FROM distributors WHERE id = ".$edit_id;
						$stmt = $con->prepare($query, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
						// execute the query
						$result  = $stmt->execute();

						while($row = $stmt->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT))
						{
							$agree_image = $row['agree_image'];
							unlink('../assets/uploads/distributors/agreement_image/'.$agree_image);
							
							$rental_deed_image = $row['rental_deed'];
							unlink('../assets/uploads/distributors/rental_deed_image/'.$rental_deed_image);
						}
						move_uploaded_file($_FILES['edit_image2']['tmp_name'], $location2);
						move_uploaded_file($_FILES['edit_rental_deed']['tmp_name'], $location3);
					}
				} else {
					foreach($errors as $error) {
						echo json_encode($error);
					}
					die(); //Ensure no more processing is done
				}

				$query = "UPDATE `distributors` SET 
				`rental_deed`='$image_3', `agree_image`='$image_2' WHERE `id` = '$edit_id' ";
				// echo $query;
				$stmt = $con->prepare($query);
				// execute the query
				$result  = $stmt->execute();
			}

			// ====================================================================

			// Any trade license image and rental deed image edit
			else if( ($_FILES['edit_image1']['name']) != null && ($_FILES['edit_rental_deed']['name']) != null) {
				$errors = array();

				$array1 = explode('.', $_FILES['edit_image1']['name']);
				$extension1 = end($array1);
				$image_1 = uniqid(rand()).'.'.$extension1;
				$file_ext_1 = pathinfo($image_1, PATHINFO_EXTENSION);
				$location1 = '../assets/uploads/distributors/trade_license_image/'.$image_1;

				$array3 = explode('.', $_FILES['edit_rental_deed']['name']);
				$extension3 = end($array3);
				$image_3 = uniqid(rand()).'.'.$extension3;
				$file_ext_3 = pathinfo($image_3, PATHINFO_EXTENSION);
				$location3 = '../assets/uploads/distributors/rental_deed_image/'.$image_3;

				// add image1,  add image2
				if(isset($_FILES['edit_image1']) && isset($_FILES['edit_rental_deed'])) {
					$maxsize = 512000;
					$allowed_image_extension = array("png", "jpg", "jpeg");

					// Validate image file size
					if((($_FILES["edit_image1"]["size"] > $maxsize) || ($_FILES['edit_rental_deed']['size'] > $maxsize)) || (($_FILES["edit_image1"]["size"] == 0) || ($_FILES["edit_rental_deed"]["size"] == 0))) {
						$errors[] = 'File too large. File size must be less than 500 KB.';
					}

					// Validate file input to check if is with valid extension
					if((!in_array($file_ext_1, $allowed_image_extension)) && (!empty($file_ext_1)) 
					|| (!in_array($file_ext_3, $allowed_image_extension)) && (!empty($file_ext_3))) {
						$errors[] = 'Invalid file type. Only JPEG, JPG and PNG types are accepted.';
					}
				}

				if(count($errors) === 0) {
					//image upload
					if (($_FILES['edit_image1']['name']) && ($_FILES['edit_rental_deed']['name'])) {
						
						$query = "SELECT tl_image, rental_deed FROM distributors WHERE id = ".$edit_id;
						$stmt = $con->prepare($query, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
						// execute the query
						$result  = $stmt->execute();

						while($row = $stmt->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT))
						{
							$tl_image = $row['tl_image'];
							unlink('../assets/uploads/distributors/trade_license_image/'.$tl_image);
							
							$rental_deed = $row['rental_deed'];
							unlink('../assets/uploads/distributors/rental_deed_image/'.$rental_deed);
						}
						move_uploaded_file($_FILES['edit_image1']['tmp_name'], $location1);
						move_uploaded_file($_FILES['edit_rental_deed']['tmp_name'], $location3);
					}
				} else {
					foreach($errors as $error) {
						echo json_encode($error);
					}
					die(); //Ensure no more processing is done
				}

				$query = "UPDATE `distributors` SET 
				`tl_image`='$image_1', `rental_deed`='$image_3' WHERE `id` = '$edit_id' ";
				// echo $query;
				$stmt = $con->prepare($query);
				// execute the query
				$result  = $stmt->execute();
			}

			// ====================================================================

			//trade license image EDIT
			else if(($_FILES['edit_image1']['name'] != null)) {
				$errors = array();

				$array1 = explode('.', $_FILES['edit_image1']['name']);
				$extension1 = end($array1);
				$image_1 = uniqid(rand()).'.'.$extension1;
				$file_ext_1 = pathinfo($image_1, PATHINFO_EXTENSION);
				$location1 = '../assets/uploads/distributors/trade_license_image/'.$image_1;

				// add image1
				if(isset($_FILES['edit_image1'])) {
					$maxsize = 512000;
					$allowed_image_extension = array("png", "jpg", "jpeg");

					// Validate image file size
					if(($_FILES["edit_image1"]["size"] > $maxsize) || ($_FILES["edit_image1"]["size"] == 0)) {
						$errors[] = 'File too large. File size must be less than 500 KB.';
					}

					// Validate file input to check if is with valid extension
					if((!in_array($file_ext_1, $allowed_image_extension)) && (!empty($file_ext_1))) {
						$errors[] = 'Invalid file type. Only JPEG, JPG and PNG types are accepted.';
					}
				}

				if(count($errors) === 0) {
					$query = "SELECT tl_image FROM distributors WHERE id = ".$edit_id;
					$stmt = $con->prepare($query, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
					// execute the query
					$result  = $stmt->execute();

					while($row = $stmt->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT))
					{
						$tl_image = $row['tl_image'];
						unlink('../assets/uploads/distributors/trade_license_image/'.$tl_image);
					}
					//image upload
					move_uploaded_file($_FILES['edit_image1']['tmp_name'], $location1);
				} 
				else {
					foreach($errors as $error) {
							echo json_encode($error);
					}
					die(); //Ensure no more processing is done
				}
					
				$query = "UPDATE `distributors` SET `tl_image`='$image_1' WHERE `id` = '$edit_id' ";
				// echo $query;
				$stmt = $con->prepare($query);
				// execute the query
				$result  = $stmt->execute();

				// if($result == true){
                // echo "true";
                // // echo $stmt->rowCount() . " records Added successfully";
				// }
			}

			// ====================================================================

			//agreement image EDIT
			else if(($_FILES['edit_image2']['name'] != null)){
				$errors = array();
				
				$array2 = explode('.', $_FILES['edit_image2']['name']);
				$extension2 = end($array2);
				$image_2 = uniqid(rand()).'.'.$extension2;
				$file_ext_2 = pathinfo($image_2, PATHINFO_EXTENSION);
				$location2 = '../assets/uploads/distributors/agreement_image/'.$image_2;

				// add image2
				if(isset($_FILES['edit_image2'])) {
					$maxsize = 512000;
					$allowed_image_extension = array("png", "jpg", "jpeg");

					// Validate image file size
					if(($_FILES['edit_image2']['size'] > $maxsize ) || ($_FILES["edit_image2"]["size"] == 0)) {
						$errors[] = 'File too large. File size must be less than 500 KB.';
					}

					// Validate file input to check if is with valid extension
					if(!in_array($file_ext_2, $allowed_image_extension) && !empty($file_ext_2)) {
						$errors[] = 'Invalid file type. Only JPEG, JPG and PNG types are accepted.';
					}
				}

				if(count($errors) === 0) {
					$query = "SELECT agree_image FROM distributors WHERE id = ".$edit_id;
					$stmt = $con->prepare($query, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
					// execute the query
					$result  = $stmt->execute();

					while($row = $stmt->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT))
					{
						$agree_image = $row['agree_image'];
						unlink('../assets/uploads/distributors/agreement_image/'.$agree_image);
					}
					//image upload
					move_uploaded_file($_FILES['edit_image2']['tmp_name'], $location2);
				} 
				else {
					foreach($errors as $error) {
							echo json_encode($error);
					}
					die(); //Ensure no more processing is done
				}
				
				$query = "UPDATE `distributors` SET `agree_image`='$image_2' WHERE `id` = '$edit_id' ";
				// echo $query;
				$stmt = $con->prepare($query);
				// execute the query
				$result  = $stmt->execute();
				
				// if($result == true){
                // echo "true";
                // // echo $stmt->rowCount() . " records Added successfully";
				// }
			}

			// ===========================================================

			//rental deed image EDIT
			else if(($_FILES['edit_rental_deed']['name'] != null)){
				$errors = array();

				$array3 = explode('.', $_FILES['edit_rental_deed']['name']);
				$extension3 = end($array3);
				$image_3 = uniqid(rand()).'.'.$extension3;
				$file_ext_3 = pathinfo($image_3, PATHINFO_EXTENSION);
				$location3 = '../assets/uploads/distributors/rental_deed_image/'.$image_3;

				// add image3
				if(isset($_FILES['edit_rental_deed'])) {
					$maxsize = 512000;
					$allowed_image_extension = array("png", "jpg", "jpeg");

					// Validate image file size
					if(($_FILES['edit_rental_deed']['size'] > $maxsize) || ($_FILES["edit_rental_deed"]["size"] == 0)) {
						$errors[] = 'File too large. File size must be less than 500 KB.';
					}

					// Validate file input to check if is with valid extension
					if(!in_array($file_ext_3, $allowed_image_extension) && !empty($file_ext_3)) {
						$errors[] = 'Invalid file type. Only JPEG, JPG and PNG types are accepted.'; 
					}
				}

				if(count($errors) === 0) {
					$query = "SELECT rental_deed FROM distributors WHERE id = ".$edit_id;
					$stmt = $con->prepare($query, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
					// execute the query
					$result  = $stmt->execute();

					while($row = $stmt->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT))
					{
						$rental_deed_image = $row['rental_deed'];
						unlink('../assets/uploads/distributors/rental_deed_image/'.$rental_deed_image);
					}
					//image upload
					move_uploaded_file($_FILES['edit_rental_deed']['tmp_name'], $location3);
				} 
				else {
					foreach($errors as $error) {
							echo json_encode($error);
					}
					die(); //Ensure no more processing is done
				}

				$query = "UPDATE `distributors` SET `rental_deed`='$image_3' WHERE `id` = '$edit_id' ";
				// echo $query;
				$stmt = $con->prepare($query);
				// execute the query
				$result  = $stmt->execute();

				// if($result == true){
                // echo "true";
                // // echo $stmt->rowCount() . " records Added successfully";
				// }
			}

			// ====================================================================

			else {
				$query = "SELECT tl_image, agree_image, rental_deed FROM distributors WHERE id = ".$edit_id;
				$stmt = $con->prepare($query, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
				// execute the query
				$result  = $stmt->execute();

				$image_1 = ''; $image_2 = ''; $image_3='';
				while($row = $stmt->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT))
				{
					$image_1 = $row['tl_image'];
					$image_2 = $row['agree_image'];
					$image_3 = $row['rental_deed'];
				}
				
				$query = "UPDATE `distributors` SET 
				`tl_image`='$image_1', `rental_deed`='$image_3', `agree_image`='$image_2' WHERE `id` = '$edit_id' ";
				// echo $query;
				$stmt = $con->prepare($query);
				// execute the query
				$result  = $stmt->execute();
				
				// if($result == true){
                // echo "true";
                // // echo $stmt->rowCount() . " records Added successfully";
            	// }
			}

			// ====================================================================

			$query = "UPDATE `distributors` SET 
			`code`='$edit_code', `name`='$edit_name', `address`='$edit_address', `o_name`='$edit_o_name', `o_address`='$edit_o_address', `o_mobile`='$edit_o_mobile', `o_phone`='$edit_o_phone', `tl_num`='$edit_tl_num', `agree_num`='$edit_agree_num', `rating`='$edit_rating', `territory`='$edit_territory_list', `distri_type`='$edit_distri_type', `is_active`='$edit_status',`is_approve`='$edit_is_approve' WHERE `id` = '$edit_id' ";

			// echo $query;
			$stmt = $con->prepare($query);
			// execute the query
			$result  = $stmt->execute();
			
			if($result == true){
			echo "true";
			// echo $stmt->rowCount() . " records Added successfully";
			}
		}
	}

?>