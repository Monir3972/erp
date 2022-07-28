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

      

        <!-- App css -->
        <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">

       <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>



        <!-- <link href="../../plugins/select2/select2.min.css" rel="stylesheet" type="text/css" /> -->
        <!-- <link href="../../plugins/huebee/huebee.min.css" rel="stylesheet" type="text/css" /> -->
        <!-- <link href="../../plugins/timepicker/bootstrap-material-datetimepicker.css" rel="stylesheet"> -->
        <!-- <link href="../../plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" /> -->


        <!-- <link href="../../assets/css/jquery.sortableTable.css" rel="stylesheet" type="text/css" /> -->
        <link href="../../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- <link href="../../assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" /> -->
        <!-- <link href="../../plugins/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" /> -->
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
              width: 120px;
              height: 135px;
          }
        .employee_details {
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

            .smallestSize {
                font-size: 8px;
              }

              .mediumSize {
                font-size: 12px;
              }

              .largestSize {
                font-size: 16px;
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
                <!-- <div class="container t1"> -->
          <div class="container">
        <!--  <div class="row justify-content-center">
            <div class="col-md-4 mx-auto text-center">
               <h4 class="">Senzill-Pagination Demo</h4>
               <h5>
                 Check out <u>senzill-pagination</u> on <a href="https://github.com/yak0d3/senzill-pagination">GitHub</a>!
                                </h5>
            </div>
         </div> -->
         <div class="row justify-content-center" id="wrapper" style="visibility:hidden;">
            <div class="col-md-4 col-6">
                <div class="card">
                   <div class="card-body">
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
            </div>
            <div class="col-md-4">
               <img src="https://picsum.photos/200/300?image=1"/>
            </div>
            <div class="col-md-4">
              <img src="https://picsum.photos/200/300?image=239"/>
            </div>
            <div class="col-md-4">
               <img src="https://picsum.photos/200/300?image=341"/>
            </div>
            <div class="col-md-4">
               <img src="https://picsum.photos/200/300?image=301"/>
            </div>
            <div class="col-md-4">
               <img src="https://picsum.photos/200/300?image=521"/>
            </div>
           <div class="col-md-4">
              <img src="https://picsum.photos/200/300?image=600"/>
           </div>
           <div class="col-md-4">
              <img src="https://picsum.photos/200/300?image=67"/>
           </div>
           <div class="col-md-4">
              <img src="https://picsum.photos/200/300?image=88"/>
           </div>
           <div class="col-md-4">
            <img src="https://picsum.photos/200/300?image=96"/>
           </div>
           <div class="col-md-4">
               <img src="https://picsum.photos/200/300?image=510"/>
           </div>
           <div class="col-md-4">
             <img src="https://picsum.photos/200/300?image=110"/>
           </div>
           <div class="col-md-4">
              <img src="https://picsum.photos/200/300?image=12"/>
           </div>
           <div class="col-md-4">
             <img src="https://picsum.photos/200/300?image=321"/>
           </div>
           <div class="col-md-4">
              <img src="https://picsum.photos/200/300?image=104"/>
           </div>
         </div>
      <!--    <div class="row">
            <div class="col-md-4">
               <div class="form container-fluid">
                  <div class="row">
                     <label for="elPerPage">Elements Per Page:</label>
                  </div>
                  <div class="row">
                     <div class="col-md-8">
                        <input class="form-control" type="number" style="width:100%;" id="elPerPage" value="5">
                     </div>
                     <div class="col-md-2">
                        <button class="btn btn-primary"  style="" id="set_elems_per_page">Set</button>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <h5>Current Settings:</h5>
               <p>Number of pages: <span id='number_of_pages'></span></p>
               <p style="margin-top:0.2rem;">Elements per page: <span id='elements_per_page'></span></p>
            </div>
         </div> -->
      </div>
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
              
                   <!--  <div class="row">
                      <div class="col-sm-4 col-6"> 
                        <div class="card">
                           <div class="card-body">
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
                       </div>
                       <div class="col-sm-4 col-6"> 
                        <div class="card">
                           <div class="card-body">
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
                       </div>
                       <div class="col-sm-4 col-6"> 
                        <div class="card">
                           <div class="card-body">
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
                       </div>
                     </div>


                    <div class="row">
                      <div class="col-sm-4 col-6"> 
                        <div class="card">
                           <div class="card-body">
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
                       </div>
                       <div class="col-sm-4 col-6"> 
                        <div class="card">
                           <div class="card-body">
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
                       </div>
                       <div class="col-sm-4 col-6"> 
                        <div class="card">
                           <div class="card-body">
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
                       </div>
                     </div>

                    <div class="row">
                      <div class="col-sm-4 col-6"> 
                        <div class="card">
                           <div class="card-body">
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
                       </div>
                       <div class="col-sm-4 col-6"> 
                        <div class="card">
                           <div class="card-body">
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
                       </div>
                       <div class="col-sm-4 col-6"> 
                        <div class="card">
                           <div class="card-body">
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
                       </div>
                     </div>

                    <div class="row">
                      <div class="col-sm-4 col-6"> 
                        <div class="card">
                           <div class="card-body">
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
                       </div>
                       <div class="col-sm-4 col-6"> 
                        <div class="card">
                           <div class="card-body">
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
                       </div>
                       <div class="col-sm-4 col-6"> 
                        <div class="card">
                           <div class="card-body">
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
                       </div>
                     </div>

                    <div class="row">
                      <div class="col-sm-4 col-6"> 
                        <div class="card">
                           <div class="card-body">
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
                       </div>
                       <div class="col-sm-4 col-6"> 
                        <div class="card">
                           <div class="card-body">
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
                       </div>
                       <div class="col-sm-4 col-6"> 
                        <div class="card">
                           <div class="card-body">
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
                       </div>
                     </div>

                    <div class="row">
                      <div class="col-sm-4 col-6"> 
                        <div class="card">
                           <div class="card-body">
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
                       </div>
                       <div class="col-sm-4 col-6"> 
                        <div class="card">
                           <div class="card-body">
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
                       </div>
                       <div class="col-sm-4 col-6"> 
                        <div class="card">
                           <div class="card-body">
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
                       </div>
                     </div>
                     
                    <div class="row">
                      <div class="col-sm-4 col-6"> 
                        <div class="card">
                           <div class="card-body">
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
                       </div>
                       <div class="col-sm-4 col-6"> 
                        <div class="card">
                           <div class="card-body">
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
                       </div>
                       <div class="col-sm-4 col-6"> 
                        <div class="card">
                           <div class="card-body">
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
                       </div>
                     </div>
                   </div> -->
                      
                        <!--Pagination red-->
                       
                      <!--/Pagination red-->
                <!-- </div> -->


            </div> <!-- end container -->

            </div><!-- end page content -->
                <?php include('../../include/footer.php') ?>
            </div> <!-- end page-wrapper -->
            
      
       
          <!-- jQuery  -->
          <script src="../../assets/js/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <!-- Plugins css -->
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          <script src="../../assets/js/bootstrap.bundle.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
          <!-- senzill-pagination.js -->
          <script src="https://cdn.jsdelivr.net/gh/yak0d3/senzill-pagination@1.1.3-beta/senzill-pagination.js"></script>
          <script src="../../assets/js/metismenu.min.js"></script>
          <script src="../../assets/js/waves.js"></script>
          <script src="../../assets/js/feather.min.js"></script>
          <script src="../../assets/js/simplebar.min.js"></script>
          <script src="../../assets/js/moment.js"></script>
          <script src="../../plugins/daterangepicker/daterangepicker.js"></script>

          <!-- Plugins js -->
        
          <script src="../../plugins/select2/select2.min.js"></script>

         
          <script src="../../plugins/huebee/huebee.pkgd.min.js"></script>
          <script src="../../plugins/timepicker/bootstrap-material-datetimepicker.js"></script>
          <script src="../../plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
          <script src="../../plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js"></script>
         <!-- not necessary for select 2 option -->

         <script src="../../assets/js/jquery.forms-advanced.js"></script>
         <script src="../../assets/js/jquery.sortableTable.js"></script>

        <!-- App js -->
         <script src="../../assets/js/app.js"></script>
        <!-- <script src="../../assets/js/paging.js?speed=1" defer></script> -->
         <script src="../../assets/js/pagejs/contacts.js"></script>
    <!--     <script type="text/javascript">
          $(document).ready(function() {
              $('.t1').after('<div id="nav" class="text-center"></div>');
              var rowsShown = 3;
              var rowsTotal = $('.t1 .row').length;
              var numPages = rowsTotal / rowsShown;
              for (i = 0; i < numPages; i++) {
                var pageNum = i + 1;
                $('#nav').append('<a href="#" class="btn-outline-info" rel="' + i + '">&emsp;' + pageNum + '&emsp;</a> ');
              }
              $('.t1 .row').hide();
              $('.t1 .row').slice(0, rowsShown).show();
              $('#nav a:first').addClass('active');
              $('#nav a').bind('click', function(e) {
                e.preventDefault();
                $('#nav a').removeClass('active');
                $(this).addClass('active');
                var currPage = $(this).attr('rel');
                var startItem = currPage * rowsShown;
                var endItem = startItem + rowsShown;
                $('.t1 .row').css('opacity', '0').hide().slice(startItem, endItem).
                css('display', 'flex').animate({
                  opacity: 1
                }, 300);
              });
            });
        </script> -->
     <script type="text/javascript">
         $(document).ready(function(){
          var _elPerPage = 6;//We are going to use this later to set the number of elements to display per page
          var number_of_pages = Math.ceil($('img').length / _elPerPage); //This is used just for this demo to calculate the number of pages
          function stats(){//This is used just for this demo to display the current settings
            if($('#elPerPage').val() > 0)
             {
               _elPerPage = $('#elPerPage').val();
             }
             number_of_pages = Math.ceil($('img').length / _elPerPage);
             $('#number_of_pages').text(number_of_pages);
             $('#elements_per_page').text(_elPerPage);
          }
          var senzill =  $('#wrapper').senzill( //Start a new senzill-pagination instance
                {
                    elPerPage: _elPerPage //Number of elements to display per page
                }
            );
          stats();
          $('#set_elems_per_page').on('click',function(){
            if($('#elPerPage').val() > 0){//Check if the input is bigger than 0
               _elPerPage = $('#elPerPage').val(); //Assign the new number of element per page to the _elPerPage variable
             }      
             senzill.destroy();//Destroy the senzill-pagination instance
             senzill = undefined;
             senzill =  $('#wrapper').senzill(//Start a new senzill-pagination instance with the new number of elements per page
               {
                  elPerPage: _elPerPage
               });
             stats();
          });
        });
     </script>
  
        
    </body>

</html>
