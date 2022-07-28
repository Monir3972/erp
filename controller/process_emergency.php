<?php 
	session_start();
	 $uid = $_SESSION["userId"];
	if($_SERVER['REQUEST_METHOD'] == "POST") {
	include('connection.php');
	// Table: emp_emergency_contact
    $em_emergencyName = $_POST['em_emergencyName'];
    $em_emergencyRel = $_POST['em_emergencyRel'];
	$em_emergencyAddr = $_POST['em_emergencyAddr'];
	$em_emergencyCont1 = $_POST['em_emergencyCont1'];
	$em_emergencyCont2 = $_POST['em_emergencyCont2'];

	$sql = "INSERT INTO `emp_emergency_contact`(`emp_id`, `name`, `relationship`, `address`, `mobile_01`,`mobile_02`) VALUES ('5','$em_emergencyName','$em_emergencyRel','$em_emergencyAddr','$em_emergencyCont1','$em_emergencyCont2')";

	$stmt = $con->prepare($sql);

  // execute the query
   $stmt->execute();

	echo $stmt->rowCount() . " records UPDATED successfully";
}


?>