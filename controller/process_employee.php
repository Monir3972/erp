<?php
session_start();
$uid = $_SESSION["userId"];
if ($_SERVER['REQUEST_METHOD'] == "POST")
{
    include ('connection.php');

    // Table: employees

    $empfName = $_POST['empfName'];
    $emplName = $_POST['emplName'];
    $empUser = $_POST['empUser'];
    $empcode = $_POST['empcode'];
    $emppassword = $_POST['emppassword'];
    $empjobtitle = $_POST['empjobtitle'];
    $empdesig = $_POST['empdesig'];
    $empdept = $_POST['empdept'];
    $emporg = $_POST['emporg'];
    $empwloc = $_POST['empwloc'];
    $empjoindate = $_POST['empjoindate'];
    $empsalary = $_POST['empsalary'];
    $empemail = $_POST['empemail'];
    $empcontact = $_POST['empcontact'];
    $empip = $_POST['empip'];
    $empref = $_POST['empref'];
    $emleaveR = $_POST['emleaveR'];

    
    // Table: emp_emergency_contact

    $empEgName = $_POST['empEgName'];
    $empEgRela = $_POST['empEgRela'];
    $empEgAdd = $_POST['empEgAdd'];
    $empEgcontact1 = $_POST['empEgcontact1'];
    $empEgcontact2 = $_POST['empEgcontact2'];

    // Table: emp_relatives

    $empReName = $_POST['empReName'];
    $empReOccu = $_POST['empReOccu'];
    $empReRela = $_POST['empReRela'];
    $empRecontact1 = $_POST['empRecontact1'];
    $empRecontact2 = $_POST['empRecontact2'];

    // Table: emp_spouse

    $empSpName = $_POST['empSpName'];
    $empSgOccu = $_POST['empSgOccu'];
    $empSpCont = $_POST['empSpCont'];
    $empSgNid = $_POST['empSgNid'];
    $empSgFather = $_POST['empSgFather'];
    $empEgFatherOcc = $_POST['empEgFatherOcc'];
    $empEgFatherCont = $_POST['empEgFatherCont'];
    $empEgMother = $_POST['empEgMother'];
    $empEgMotherOccu = $_POST['empEgMotherOccu'];
    $empEgMotherCont = $_POST['empEgMotherCont'];


    $sql = "INSERT INTO `employees`(`first_name`, `last_name`, `hash`, `emp_code`, `secret`, `job_title`,`desig_id`,`dept_id`, `org_id`, `wloc_id`, `joining_date`, `gross_salary`,  `email`, `mobile_no`, `ip_phone_ext`, `in_office_reference`, `cause_for_leave_last_job`, `created_by`) VALUES (' $empfName','$emplName', '$empUser','$empcode','$emppassword','$empjobtitle','$empdesig','$empdept','$emporg', '$empwloc', '$empjoindate', '$empsalary', '$empemail', '$empcontact', '$empip', '$empref', '$emleaveR','$uid')";

     $stmt = $con->prepare($sql);

     // execute the query
     $stmt->execute();

     echo $stmt->rowCount() . " records UPDATED successfully";

     $last_id = $con->lastInsertId();



     // Table: emp_personal_info

    $emphomedist = $_POST['emphomedist'];
    $empPstAdd = $_POST['empPstAdd'];
    $empPreAdd = $_POST['empPreAdd'];
    $emphomecont = $_POST['emphomecont'];
    $empdob = $_POST['empdob'];
    $empmarital = $_POST['empmarital'];
    $emTolExperi = $_POST['emTolExperi'];
    $empBld = $_POST['empBld'];
    $empNid = $_POST['empNid'];
    $empdrilice = $_POST['empdrilice'];
    $empPassport = $_POST['empPassport'];
    $empcont1 = $_POST['empcont1'];
    $empcont2 = $_POST['empcont2'];
    $empPerEmail = $_POST['empPerEmail'];
    $empAnni = $_POST['empAnni'];
    $empBank = $_POST['empBank'];
    $empBankAc = $_POST['empBankAc'];
    $empPhoto=  $_FILES["empPhoto"]["name"];

    // // get the image extension
    // $extension = substr($empPhoto,strlen($empPhoto)-4,strlen($empPhoto));
    // // allowed extensions
    // $allowed_extensions = array(".jpg","jpeg",".gif");
    // // Validation for allowed extensions .in_array() function searches an array for a specific value.
    // if(!in_array($extension,$allowed_extensions))
    // {
    // echo "<script>alert('Invalid format. Only jpg / jpeg /gif format allowed');</script>";
    // }
    // else
    // {
    //rename the image file
     $imgnewfile= date('dmYHis').str_replace(" ", "", basename($_FILES["empPhoto"]["name"]));

    
    // Code for move image into directory
      move_uploaded_file($_FILES["empPhoto"]["tmp_name"],"../assets/uploads/employee/".$imgnewfile);
   
      $sql2 = "INSERT INTO `emp_personal_info`(`emp_id`,`home_dist_id`, `present_address`, `permanent_address`, `home_phone`, `dob`, `marital_status`, `total_years_of_experience`, `blood_gp`, `nid`, `drivers_license`, `passport_no`, `mobile_no_01`, `mobile_no_02`, `personal_email`, `photograph`, `anniversary_date`, `bank_ac_no`, `bank_name`, `created_by`) VALUES ('$last_id', '$emphomedist', '$empPstAdd','$empPreAdd','$emphomecont','$empdob','$empmarital','$emTolExperi','$empBld','$empNid','$empdrilice','$empPassport','$empcont1','$empcont2','$empPerEmail', '$imgnewfile', '$empAnni','$empBank','$empBankAc','$uid')";

        $stmt2 = $con->prepare($sql2);

      // execute the query
       $stmt2->execute();

        echo $stmt2->rowCount() . " records UPDATED successfully";
// }

       $sql3 ="INSERT INTO `emp_emergency_contact`( `emp_id`, `name`, `relationship`, `address`, `mobile_01`, `mobile_02`) VALUES ('$last_id','$empEgName','$empEgRela','$empEgAdd','$empEgcontact1','$empEgcontact2')";
       $stmt3 = $con->prepare($sql3);

      // execute the query
        $stmt3->execute();

        echo $stmt3->rowCount() . " records UPDATED successfully";

        $sql4 ="INSERT INTO `emp_relatives`(`emp_id`,`full_name`, `occupation`, `mobile_01`, `mobile_02`, `relation`) VALUES ('$last_id','$empReName','$empReOccu','$empRecontact1','$empRecontact2','$empReRela')";
         $stmt4 = $con->prepare($sql4);

         // execute the query
         $stmt4->execute();

        echo $stmt4->rowCount() . " records UPDATED successfully";

        $sql5 ="INSERT INTO `emp_spouse`(`emp_id`,`name`, `occupation`, `mobile`, `nid`, `father_name`, `father_occupation`, `father_mobile`, `mother_name`, `mother_mobile`, `mother_occupation`) VALUES ('$last_id','$empSpName','$empSgOccu','$empSpCont','$empSgNid','$empSgFather','$empEgFatherOcc','$empEgFatherCont','$empEgMother','$empEgMotherOccu','$empEgMotherCont')";

         $stmt5 = $con->prepare($sql5);

        // execute the query
         $stmt5->execute();

        echo $stmt5->rowCount() . " records UPDATED successfully";

      }

  	?>
