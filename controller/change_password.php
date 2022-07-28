<?php

session_start();
if (isset($_SESSION['userId'])) {
  if (isset($_POST['action']) == 'changePassword') {
    include 'connection.php';

    $oldPassword = $_POST['oldPassword'];
    $password = $_POST['password'];
    $cPassword = $_POST['cPassword'];

    // validation
    $error = array(
      'error_status' => 0
    );
    if (empty($oldPassword)) {
      $error['error_status'] = 1;
      $error['oldPassword'] = 'Old Password is required!';
    }
    if (empty($password)) {
      $error['error_status'] = 1;
      $error['password'] = 'Password is required!';
    }
    if (!empty($password)) {
      if (strlen($password) < 5) {
        $error['error_status'] = 1;
        $error['password'] = 'Password must be at least 5 characters!';
      }
    }
    if (!empty($password)) {
      if (empty($cPassword)) {
        $error['error_status'] = 1;
        $error['cPassword'] = 'Confirm Password is required!';
      }
    }
    if (!empty($password) && !empty($cPassword)) {
      if ($password != $cPassword) {
        $error['error_status'] = 1;
        $error['cPassword'] = 'Password and Confirm Password are not the same';
      }
    }
    if ($error['error_status'] > 0) {
      echo json_encode($error);
      exit();
    }

    // if validation is successful

    $qry = "Select * from employees where id = '".$_SESSION['userId']."'";
    // echo $qry;
    // $result = $con->query($qry);
    // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);



     $result = $con->prepare($qry, array(
            PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL
        ));
        $result->execute();

        $row = $result->fetchAll(PDO::FETCH_ASSOC);
      

    // $count = mysqli_num_rows($result);
    $count =$row[0]['secret'];
    if ($count == $oldPassword) {
      // user exists we will update the password
      $qry = "Update employees set secret = '" . $password . "' where id = '".$_SESSION['userId']."'";
      $result = $con->query($qry);
      if ($result) {
     
        // destroy the user session
        session_destroy();
        $response = array(
          'status' => 1,
          'msg' => 'password changed'
        );
      } else {
        $response = array(
          'status' => 0,
          'msg' => 'Changing password failed!'
        );
      }
    } else {
      $error['error_status'] = 1;
      $error['oldPassword'] = 'Invalid Old Password';
      if ($error['error_status'] > 0) {
        echo json_encode($error);
        exit();
      }
    }
    echo json_encode($response);
    exit();
  }
} 
// }
?>