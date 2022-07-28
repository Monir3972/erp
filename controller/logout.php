<?php 
session_start();
$_SESSION["user_id"] = "";
session_destroy();

include('connection.php');
date_default_timezone_set("Asia/Dhaka");

            $login_time = date("Y-m-d H:i:s");


               $u_id = $_SESSION["userId"];
               $u_name = $_SESSION["name"];
               $dept_id = $_SESSION["dept_id"];
               $dept = $_SESSION["dept"];
               $org_id = $_SESSION["org_id"];
               $org = $_SESSION["org"];
               $emp_code = $_SESSION["emp_code"];
               $job_title = $_SESSION["job_title"];
               $desig_id = $_SESSION["desig_id"];
               $desig = $_SESSION["desig"];
               $wloc_id = $_SESSION["wloc_id"];
               $loc = $_SESSION["loc"];
               $role = $_SESSION["role"];
               $app_list = $_SESSION["apps"];
               $func_list = $_SESSION["funcs"];
               $photo = 'controller/'.$_SESSION["photo"];


            $log_status = 'logout';


            $sql= 'INSERT INTO `login_out_action`(log_time,log_status,emp_id,emp_code,emp_name,dept_id,dept,org_id,org,desig_id,desig) VALUES ("'.$login_time.'","'.$log_status.'","'.$u_id.'","'.$emp_code.'","'.$u_name.'","'.$dept_id.'","'.$dept.'","'.$org_id.'","'.$org.'","'.$desig_id.'","'.$desig.'")';

                              
                              
                              

                            $sth = $con->prepare($sql);
                            $sth->execute();
                            $sal_ref = $con->lastInsertId();



header("Location: ../index");