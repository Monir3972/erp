<?php 

include 'connection.php';
	
if(isset($_GET['admin_id'])){
			$admin_id = $_GET['admin_id'];
			if(!empty($_FILES['picture']['name'])){

			    $result = 0;
			    $uploadDir = "../assets/uploads/employee/";
			    $uploadDir1 = "../../assets/uploads/employee/";
			    $fileName = time().'_'.basename($_FILES['picture']['name']);
			    $targetPath = $uploadDir. $fileName;
			    $targetPath1 = $uploadDir1. $fileName;

			    $rr = $uploadDir.$fileName;
			    
			    //Upload file to server
			    if(@move_uploaded_file($_FILES['picture']['tmp_name'], $targetPath)){
			        //Get current user ID from session
			        
			        //Update picture name in the database
			        $update = $con->query("UPDATE emp_personal_info SET photograph = '".$rr."' WHERE emp_id = '$admin_id'");
			        
			        //Update status
			        if($update){
			            $result = 1;
			        }
			    }
			    
			    //Load JavaScript function to show the upload status
			    echo '<script type="text/javascript">window.top.window.completeUpload(' . $result . ',\'' . $targetPath1 . '\');</script>  ';

			     echo ($targetPath1);
			}
		}

?>