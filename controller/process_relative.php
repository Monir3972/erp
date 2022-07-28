<?php 
	session_start();
	 $uid = $_SESSION["userId"];
	if($_SERVER['REQUEST_METHOD'] == "POST") {
	include('connection.php');
	// Table: emp_relatives
    $em_realtiveName = $_POST['em_realtiveName'];
    $em_relative_occu = $_POST['em_relative_occu'];
	$em_realtive_rel = $_POST['em_realtive_rel'];
	$em_realtive_cont_01 = $_POST['em_realtive_cont_01'];
	$em_realtive_cont_02 = $_POST['em_realtive_cont_02'];

	$sql = "INSERT INTO `emp_relatives`(`emp_id`, `full_name`, `occupation`, `relation`, `mobile_01`, `mobile_02`) VALUES ('5','$em_realtiveName','$em_relative_occu','$em_realtive_rel','$em_realtive_cont_01', '$em_realtive_cont_02')";

	$stmt = $con->prepare($sql);

  // execute the query
   $stmt->execute();

	echo $stmt->rowCount() . " records UPDATED successfully";
}


?>