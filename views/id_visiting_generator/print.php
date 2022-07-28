
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ID Card || Savoy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <style type="text/css">
      .employee_img{
        height: 36mm;
      }
      .job_title_dept{
        margin-left: 0.9px!important;
        margin-right: 0.9px!important;
      }
      .emp_name{
        padding: 2px;
      }
      .company_logo{
        width: 87px;
      }
      .employe_card{
        border:2px solid #000!important;
        height: 8.6cm;
        width: 5.4cm;

      }
      .company_name{
        color: #0C4DA2!important;
        font-size: 12px;
        font-weight: 650;
      }
      .back_company{
        font-size: 11px;
      }

      .id_no{
           font-size: 11px;
      }
     

      .emp_desig {
        font-size: 13px;
      }
      .emp_blood {
        font-size: 13px;
      }
     .company_address, .card_validity, .return_card {
          line-height: 1;
         }
      .bg_details{
          background: url(../../assets/images/iback.png);
          background-color: #cccccc;
          height: 8.6cm;
          background-position: center;
          background-repeat: no-repeat;
          background-size: auto 114%;
          position: relative;
          border:none!important;
          width:5.4cm;
      }
      .small{
        font-size: 9px!important;
      }
      .border_area {
            width: 85px;
            text-align: center;
            position: relative;
            left: 27%;
            top: -9px;
            margin-bottom: -8px;
           }
      .authorized_sign {
            position: relative;
            left: -4px;
        }
        @media print
        {
            .col-xs-12
            {
                width:50%;
                float:left;
            }
        }
      .fontpage {
          height: 2.15in;
          width: 3.37in;
          border: 2px solid #000;
          padding: 13px
      }
      .backpage {
          height: 2.15in;
          width: 3.37in;
          padding: 9px
      }
      .contact{
        font-size: 8px;
        line-height: 0;
      }
     .company_address_visiting p {
        font-size: 8px;
       }
     .contAddress {
       width: 100%;
       }
     .contact {
        width: 50%;
       }
    .company_address_visiting {
       position: relative;
       top: -50px;
       left: 47%;
     }

     .bg_img{
      background-image: url(../../assets/images/backpage.png);
      background-position: center;
      background-repeat: no-repeat;
      background-size: auto 100%;
      position: relative;
     }
     .svoy_logo{
      position: relative!important;
      left: 25%!important;
     }

   @media print {
        .svoy_logo img{
          position: relative;
          top: -5px;
          left:10%;
          width:90px;
        }
        .savoy_qr img{
          width: 35px
        }
        .nameDetails{
          position: relative;
          top: 5px;
        }
        .printView{
          position: relative;
          left:15%;
        }
      }
    
  </style>
      </head>
      <body>
        <?php  
         if(isset($_GET['id'])){
          $id = $_GET['id'];
          include('../../controller/connection.php');
          $sql = "SELECT * FROM emp_list WHERE id IN ($id)";
          $stmt = $con->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
          $stmt->execute();
         ?> 
        <?php
          while ($row = $stmt->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT)) 
            {
               $emp_name_char = strlen($row['name']);
               $emp_job_title_char = strlen($row['job_title']);
               $emp_dept_char = strlen($row['dept']);
             ?>
            <div class="container mt-5 px-5" id="displayId" style="height: 100vh">
              <div class="row" id="idCard">
                <div class="col-md-4 col-xs-12">
                  <div class="card employe_card">
                  <div class="text-center">
                    <img class="company_logo mt-3" src="../../assets/images/ilogo.png" class="card-img-top" alt="...">
                    <div class="card-body p-0">
                      <h6 class="card-title mt-1 company_name"><?=$row['org']?></h6>
                      <img class="employee_img" src="../../assets/uploads/employee/<?=$row['photo']?>">
                    </div>
                       <p id="emp_name" style="<?php if($emp_name_char < 20){echo 'font-size: 14px;padding: 0.60px';} else{echo 'font-size: 10px';} ?>" class="card-text bg-primary text-white text-uppercase text-cente emp_name"><?=$row['name']?>
                      </p>
                   </div>
                    <div class="emp_details text-center">
                       <p style="<?php if($emp_job_title_char < 20){echo 'font-size: 12px';} else{echo 'font-size: 10px';} ?>" class="emp_desig fw-bold p-0 m-0 job_title_dept mt-1"><?=$row['job_title'] ?>, <?=$row['dept']?> </p>
                       <p class="emp_blood fw-bold">Blood Group: <?=$row['blood_gp']?></p>
                    </div>
                  </div>
                </div>
                 <div class="col-md-4 col-xs-12">
                  <div class="card bg_details">
                  <div class="card-body text-white text-center small p-1">
                    <h6 class="mt-4 id_no">ID No: <?=$row['emp_code']?></h6>
                    <p class="p-0 mb-2">Emergency Contact No: <?= $row['mobile_no'] ?></p>
                    <p class="p-0 mb-2 card_validity">This card is valid for the person till <br> the employee is in the service</p>
                    <h6 class="p-0 mb-2 back_company"><?=$row['org']?></h6>
                    <p class="p-0 mb-1 company_address"><?=$row['org_address']?>
                    </p>
                    <p class="p-0 mb-1 back_phone">Phone: <?= $row['mobile_no'] ?></p>
                    <p class="p-0 mb-1">Email: <?=$row['email'] ?></p>
                    <p class="p-0 mb-1 return_card">If found, please return to <br> above mentioned address</p>
                    <img class="img-fluid mt-3" style="width: 50px" src="../../assets/images/isign.png">
                     <hr class="border_area p-0">
                     <p class="p-0 m-0 authorized_sign">Authorized Signature</p>
                     <img src="../../assets/images/iqr.png" style="width: 30px" class="img-fluid">
                  </div>
                 </div>
                </div>
               </div>
             </div>
             <div class="container" id="displayVisiting" style="height: 100vh">
              <div class="row" id="">
                <div class="col-md-4 col-sm-5">
                  <div class="fontpage">
                  <div class="row">
                    <div class="col-md-3">
                      <div class="savoy_qr">
                        <img class="img-fluid" src="../../assets/images/savoyqr.png">
                      </div>
                    </div>
                    <div class="col-md-4 offset-md-4">
                      <div class="svoy_logo">
                        <img class="img-fluid" src="../../assets/images/savoy.png">
                      </div> 
                    </div>
                  </div>
                  <div class="nameDetails">
                  <h3 class="mt-4 p-0 mb-0" style="font-size: 13px"><?=$row['name'] ?></h3>
                  <p class="p-0 mb-1" style="font-size: 9px;margin-top: -3px"><?=$row['job_title'] ?>, <?=$row['dept']?></p>
                  <hr class="p-0 m-0 divider">
                  <div class="contAddress">
                    <div class="contact mt-3">
                      <p class="" style="color:#000"><i class="fa-solid fa-mobile-screen p-0 mb-0" style="line-height: 0"></i>  <?= $row['mobile_no'] ?></p>
                      <p class="" style="margin-top: -5px"><i class="fa-solid fa-square-phone p-0 mb-0" style="line-height: 0"></i>  <?= $row['mobile_no'] ?></p>
                      <p class="" style="margin-top: -5px"><i class="fa-solid fa-envelope p-0 mb-0" style="line-height: 0"></i>  <?=$row['email'] ?></p>
                    </div>
                   <div class="company_address_visiting">
                      <h3 class="mb-0" style="font-size: 11px;font-weight: 400">Savoy Ice Cream Factory Limited</h3>
                      <p class="text-muted mb-0" style="margin-top: -2px">A Concern of Golden Group</p>
                      <p class="mb-0">Navana Tower (14th Floor), 45 Gulshan Avenue</p>
                      <p class="mb-0">Gulshan-1, Dhaka-1212, Bangladesh</p>
                   </div>
                </div>
                </div>
                </div>
                </div>
                <div class="col-md-4 col-sm-5 mx-auto printView">
                 <div class="backpage bg_img">
                 </div>
                </div>
               </div>
             </div>
              <?php
            }
          }
        ?>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
      <script src="../../assets/js/pagejs/contacts.js"></script>
  </body>
</html>

