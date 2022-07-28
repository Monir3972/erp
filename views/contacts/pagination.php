<?php include('../../controller/sessions.php'); ?>
<?php echo $user = get_current_user(); ?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>AIR - <?php echo $get_title; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="../../assets/images/favicon.ico">

        <!-- App css -->
        <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

     
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

         .employee_img {
              width: 130px;
              height: 140px;
          }
          .employee_details{
                position: absolute;
                top: 13px;
                left: 34%;
            }
          ul{
          list-style-type: none;
         /* padding: 31px;*/
          }
          li{
          font-weight: 500;
         /* padding-bottom: 5px;*/
          }
          li span{
          font-weight: 300;
          padding-left: 5px;
          }
        
          @media(max-width: 992px){
          .card{
          width: 70%;
          }
          }
          @media(max-width: 768px){
          .card{
          width: 70%;
          }
        /*  .container{
          max-width: 100%;
          }*/
          img{
          display: flex;
          }
          }
          @media(max-width: 615px){
            ul{
                padding: 1px;
              }
            li{
            font-size: 11px;
            }
            .card{
              width: 100%;
            }
             .employee_details{
                  position: relative;
                  top: 3px;
                  left: -10px;
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
                <div class="container t1">
                    <!--  <div class="row">
                      <div class="col-md-2">
                        <div class="input-group mb-3">
                          <input style="height: 30px" type="text" class="form-control search" name="search" id="search" placeholder="Search ">       
                        </div>
                      </div>
                      <div class="col-md-2">
                        
                          <select class="select2 form-control form-control-sm" aria-label="" id="organization">
                                 
                          </select>
                      </div>
                      <div class="col-md-2 mx-auto">
                         <span class="float-end"><i class="dripicons-print"></i></span>
                      </div>
                    </div> -->

                    <div class="row" id="employee_details">
                      <!-- <div class="col-sm-4 col-6">  -->
                        <!-- <div class="card">
                           <div class="card-body"> -->
                           <!--  <div class="employee_img">
                               <img src="../../assets/images/img1.jpg" class="img-fluid employee_img">
                            </div>
                             <div class="employee_details">
                                <ul>
                                <li>Full Name :-<span>John Doe Willam</span></li>
                                <li>Professional :-<span>Consultant</span></li>
                                <li>Country :-<span>United Kingdom</span></li>
                                <li>Phone :-<span>+012 3654 789</span></li>
                                <li>Emails :-<span>Jone.dee@mail.com</span></li>
                              </ul>
                             </div> -->
                           <!--  </div>
                          </div> -->
                      
                       <!--   <div class="col-sm-4 col-6"> 
                        <div class="card">
                           <div class="card-body">
                            <div class="employee_img">
                               <img src="../../assets/images/img1.jpg" class="img-fluid employee_img">
                            </div>
                             <div class="employee_details" id="employee_details">
                                <ul>
                                <li>Full Name :-<span>John Doe Willam</span></li>
                                <li>Professional :-<span>Consultant</span></li>
                                <li>Country :-<span>United Kingdom</span></li>
                                <li>Phone :-<span>+012 3654 789</span></li>
                                <li>Emails :-<span>Jone.dee@mail.com</span></li>
                              </ul>
                             </div>
                            </div>
                          </div>
                        </div> -->
                        <!--  <div class="col-sm-4 col-6"> 
                        <div class="card">
                           <div class="card-body" id="employee_details">
                            <div class="employee_img">
                               <img src="../../assets/images/img1.jpg" class="img-fluid employee_img">
                            </div>
                             <div class="employee_details">
                                <ul>
                                <li>Full Name :-<span>John Doe Willam</span></li>
                                <li>Professional :-<span>Consultant</span></li>
                                <li>Country :-<span>United Kingdom</span></li>
                                <li>Phone :-<span>+012 3654 789</span></li>
                                <li>Emails :-<span>Jone.dee@mail.com</span></li>
                              </ul>
                             </div>
                            </div>
                          </div>
                        </div> -->
                        <!--Pagination red-->
                       
                      <!--/Pagination red-->
                     </div>


                      
                   
                   <!--  <div class="row">
                        <div class="col-md-10">
                        <div class="table-responsive fixed-thead">
                          <table class="table table-bordered small ui-sortable-table" style="color: #7a7a7a!important">
                            <thead>
                              <tr class="">
                                <th scope="col">SL</th>
                                <th scope="col">Photo</th>
                                <th scope="col">Name</th>
                                <th scope="col">Department</th>
                                <th scope="col">Designation</th>
                                <th scope="col">Organization</th>
                                <th scope="col">Email</th>
                                <th scope="col">IP Phone</th>
                                <th scope="col">Mobile</th>
                              </tr>
                          </thead>
                          <tbody id="contactData">
                                       
                          </tbody>
                      </table>
                    </div>
                  </div>
                  </div> -->
            </div> <!-- end container -->

            </div><!-- end page content -->
                <?php include('../../include/footer.php') ?>
            </div> <!-- end page-wrapper -->
            
      
       
          <!-- jQuery  -->
        <script src="../../assets/js/jquery.min.js"></script>
        
        <!-- App js -->
        <script src="../../assets/js/app.js"></script>
        <script src="../../assets/js/pagejs/contacts.js" defer></script>
        <script src="../../assets/js/hip.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
            $("#employee_details").hip({itemHeight:'200px',itemsPerPage:9,itemsPerRow:3,itemGaps:'20px',filter:true,filterPos:'center',paginationPos:'left'});
             });
       </script>
        
    </body>

</html>
