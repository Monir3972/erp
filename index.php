<?php 

    require_once 'controller/connection.php';
    $user = get_current_user(); 

    $length = strlen($user);

    if($length > 3){


        $error = array();
        $res = array();


        $sql = 'select * from emp_list where hash = "'.$user.'"';
        $stmt = $con->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
        $stmt->execute();
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if (count($row) > 0) {

            session_start();
            $uid = $_SESSION["userId"] = $row[0]["id"];
            $_SESSION["name"] = $row[0]["name"];
            $_SESSION["dept_id"] = $row[0]["dept_id"];
            $_SESSION["dept"] = $row[0]["dept"];
            $_SESSION["org_id"] = $row[0]["org_id"];
            $_SESSION["org"] = $row[0]["org"];
            $_SESSION["org_address"] = $row[0]["org_address"];
            $_SESSION["org_phone_no"] = $row[0]["org_phone_no"];
            $_SESSION["emp_code"] = $row[0]["emp_code"];
            $_SESSION["job_title"] = $row[0]["job_title"];
            $_SESSION["desig_id"] = $row[0]["desig_id"];
            $_SESSION["desig"] = $row[0]["desig"];
            $_SESSION["wloc_id"] = $row[0]["wloc_id"];
            $_SESSION["loc"] = $row[0]["loc"];
            $_SESSION["loc_type"] = $row[0]["loc_type"];
            $_SESSION["loc_sn"] = $row[0]["loc_sn"];
            $_SESSION["photo"] = $row[0]["photo"];
            $_SESSION["emp_code"] = $row[0]["emp_code"];
            $role = $_SESSION["role"] = $row[0]["role"];
            $_SESSION["photo"] = $row[0]["photo"];


            //sidebar menues
            $query = "SELECT p.`id`, p.`app`, a.name, a.display_name, a.link FROM `permissions` p LEFT JOIN apps a ON a.id = p.app WHERE p.emp_id = $uid OR p.emp_id = 0 GROUP BY p.app";


                $stmt = $con->prepare($query, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
                $stmt->execute();
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT)) 
                {
                    $memberApps[] = $row;
                }
                if(!empty($memberApps)) {
                    $_SESSION["apps"] = $memberApps;
                }



                $query1 = "SELECT p.`id`, p.`emp_id`, p.`app`,a.name, p.`func`, f.code FROM `permissions` p LEFT JOIN apps a ON a.id = p.app LEFT JOIN functions f ON f.id = p.func WHERE p.emp_id = $uid OR p.emp_id = 0 ";


                $stmt1 = $con->prepare($query1, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
                $stmt1->execute();
                while ($row1 = $stmt1->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT)) 
                {
                    $memberFuncs[] = $row;
                }
                if(!empty($memberFuncs)) {
                    $_SESSION["funcs"] = $memberFuncs;
                }



                //insert login history

                    date_default_timezone_set("Asia/Dhaka");

                    $login_time = date("Y-m-d H:i:s");


                    $u_id = $_SESSION["userId"];
                    $dept_id = $_SESSION["dept_id"];
                    $dept = $_SESSION["dept"];
                    $org_id = $_SESSION["org_id"];
                    $org = $_SESSION["org"];
                    $emp_code = $_SESSION["emp_code"];
                    $job_title = $_SESSION["job_title"];
                    $desig_id = $_SESSION["desig_id"];
                    $desig = $_SESSION["desig"];
                    $emp_code = $_SESSION["emp_code"];
                    $emp_name = $_SESSION["name"];
                    $log_status = 'login';

                    $sql= 'INSERT INTO `login_out_action`(log_time,log_status,emp_id,emp_code,emp_name,dept_id,dept,org_id,org,desig_id,desig) VALUES ("'.$login_time.'","'.$log_status.'","'.$u_id.'","'.$emp_code.'","'.$emp_name.'","'.$dept_id.'","'.$dept.'","'.$org_id.'","'.$org.'","'.$desig_id.'","'.$desig.'")';
                    $sth = $con->prepare($sql);
                    $sth->execute();
                    $sal_ref = $con->lastInsertId();


            //.redirect user 

            if($role == 'management'){
                $resp = "views/dashboard/";
            }
            
            header("Location: $resp");



        } 
    }


?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>AIR - Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="account-body accountbg">

        <!-- Log In page -->
        <div class="container">
            <div class="row vh-100 d-flex justify-content-center">
                <div class="col-12 align-self-center">
                    <div class="row">
                        <div class="col-lg-5 mx-auto">
                            <div class="card">
                                <div class="card-body p-0 auth-header-box bg-white">
                                    <div class="text-center p-1 mt-3">
                                        <img src="assets/images/logo.png" height="50" alt="logo" class="auth-logo">
                                        <!-- <h2 class="mt-3 mb-1 fw-semibold text-dark font-24">Air</h2>    -->
                                    </div>
                                </div>
                                <hr>
                                <div class="card-body p-0">
                                     <div id="error-msg" class="alert alert-danger" role="alert"></div>
                                     <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane active p-3" id="LogIn_Tab" role="tabpanel">                                        
                                            <form class="form-horizontal auth-form" id="login-form" method="POST">
                
                                                <div class="form-group mb-2">
                                                    <label class="form-label" for="username">Username</label>
                                                    <div class="input-group">                                                                                         
                                                        <input type="text" class="form-control" name="username" id="username" placeholder="Enter username">
                                                    </div>                                    
                                                </div><!--end form-group--> 
                    
                                                <div class="form-group mb-2">
                                                    <label class="form-label" for="password">Password</label>                                            
                                                    <div class="input-group">                                  
                                                        <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
                                                    </div>                               
                                                </div><!--end form-group--> 
                    
                                                <!-- <div class="form-group row my-3">
                                                    <div class="col-sm-6">
                                                        <div class="custom-control custom-switch switch-success">
                                                            <input type="checkbox" class="custom-control-input" id="customSwitchSuccess">
                                                            <label class="form-label text-muted" for="customSwitchSuccess">Remember me</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 text-end">
                                                        <a href="auth-recover-pw.html" class="text-muted font-13"><i class="dripicons-lock"></i> Forgot password?</a>                                    
                                                    </div>
                                                </div> -->
                                                <div class="form-group mb-0 row mt-4">
                                                    <div class="col-12">
                                                        <button class="btn btn-primary w-100 waves-effect waves-light" type="submit" id="login">Log In <i class="fas fa-sign-in-alt ms-1"></i></button>
                                                    </div><!--end col--> 
                                                </div>
                                             
                                            </form><!--end form-->
                                        </div>
                                    </div>
                                </div><!--end card-body-->
                                <div class="card-body bg-light-alt text-center">
                                    <span class="text-muted d-none d-sm-inline-block">AIR <script>
                                        document.write(new Date().getFullYear())
                                    </script></span>                                            
                                </div>
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
        <!-- End Log In page -->

        


        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/feather.min.js"></script>
        <script src="assets/js/simplebar.min.js"></script>
        <script src="assets/js/pagejs/login.js"></script>

        
    </body>

</html>


