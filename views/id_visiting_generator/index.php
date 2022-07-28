<?php include('../../controller/sessions.php'); ?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>AIR - <?php echo $get_title; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="../../assets/images/favicon.ico">

        <!-- Plugins css -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="../../plugins/select2/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="../../plugins/huebee/huebee.min.css" rel="stylesheet" type="text/css" />
        <link href="../../plugins/timepicker/bootstrap-material-datetimepicker.css" rel="stylesheet">
        <link href="../../plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />

        <!-- App css -->
        <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../../assets/css/jquery.sortableTable.css" rel="stylesheet" type="text/css" />
        <link href="../../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../../assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
        <link href="../../plugins/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
        <link href="../../assets/css/app.min.css" rel="stylesheet" type="text/css" />

        <style type="text/css">
          .form-select {
                padding: 7px 11px !important;
                line-height: 1.2 !important;
                border-radius: 1px !important;
                font-size: 12px;
                background-image: none!important;
            }
      
          td {
             height: 24px;
             font-size: 12px;
             padding: 0px  4px!important;
          }
          td p {
              margin-bottom: 0px!important;
              font-size:  11px!important;
              /*color: #000000;*/
            }

          @media print {    
          .no-print, .no-print * {
            display: none !important;
          }
        }

        </style>
    </head>

    <body>
        <!-- start left-sidenav-->
      <?php include('../../include/left_sidebar.php') ?>
        <!--   end left-sidenav-->
      <div class="page-wrapper">
            <!-- Top Bar Start -->
         <?php include('../../include/top_bar.php'); ?>
            <!-- Top Bar End -->

            <!-- Page Content-->
      <div class="page-content mt-2">
       <div class="container-fluid">
        <form action="" id="printData" method="POST">
           <div class="row">
             <div class="col-md-2">
               <div class="input-group mb-3">
                <input style="height: 30px" type="text" class="form-control search" name="search" id="search" placeholder="Search ">       
               </div>
             </div>
             <div class="col-md-2">
                <!-- //select organizations -->
              <select class="select2 form-control form-control-sm" aria-label="" id="organization">               
              </select>
             </div>
            <div class="col-md-2 offset-md-1">
              <input type="checkbox" name="" id="id_Card"  class="" value="Id_Card" onclick="viewId()" checked /> <label style="padding-right: 14px" for="idCard">ID</label> 
              <input type="checkbox"  class="" id="visitingCard" value="Visiting_Card" onclick="viewVisiting()" /> <label for="visitingCard">Visiting Card</label> 
            </div>         
         </div>

        <div class="row">
              <div class="col-md-12">
                <div class="table-responsive">
                  <table class="table table-bordered small">
                    <thead>
                     <tr>
                        <th scope="col">Select</th>
                        <th scope="col">SL</th>
                        <th scope="col">Photo</th>
                        <th scope="col">Name</th>
                        <th scope="col">Department</th>
                        <th scope="col">Designation</th>
                        <th scope="col">Organization</th>
                        <th scope="col">Email</th>
                        <th scope="col">Mobile</th>
                    </tr>
                  </thead>
               <tbody id="contactData">
               </tbody>
             </table>
            <input type="submit" class="btn btn-success btn-sm mb-1"  id="printDoc" value="Print">
          </div>
        </div>
      </div>
      </form>  
     </div> <!-- end container -->
     </div><!-- end page content -->
      <?php include('../../include/footer.php') ?>
    </div> <!-- end page-wrapper -->
            
      
       
        <!-- jQuery  -->
        <script src="../../assets/js/jquery.min.js"></script>
        <script src="../../assets/js/bootstrap.bundle.min.js"></script>
        <script src="../../assets/js/metismenu.min.js"></script>
        <script src="../../assets/js/waves.js"></script>
        <script src="../../assets/js/feather.min.js"></script>
        <script src="../../assets/js/simplebar.min.js"></script>
        <script src="../../assets/js/moment.js"></script>
        <script src="../../plugins/daterangepicker/daterangepicker.js"></script>
        <!-- Plugins js -->
        <script src="../../plugins/select2/select2.min.js"></script>
       <script src="../../assets/js/jquery.forms-advanced.js"></script>
        <!-- App js -->
        <script src="../../assets/js/app.js"></script>
        <script src="../../assets/js/pagejs/contacts.js"></script>
    </body>

</html>
