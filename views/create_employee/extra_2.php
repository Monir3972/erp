<?php include ('../../controller/sessions.php'); ?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>AIR - <?php echo $get_title; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="../../assets/images/favicon.ico">
        <!--Form Wizard-->
        <!-- <link href="../../assets/css/jquery.steps.css" rel="stylesheet" type="text/css" /> -->

        <!-- Plugins css -->
      
        <!-- <script type="text/javascript" src="../../assets/js/pagejs/parsley.min.js"></script> -->
        <script src="../../assets/js/jquery.min.js"></script>
       
        <link rel="stylesheet"  type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">

        <link href="../../plugins/select2/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="../../plugins/huebee/huebee.min.css" rel="stylesheet" type="text/css" />
        <link href="../../plugins/timepicker/bootstrap-material-datetimepicker.css" rel="stylesheet">
        <link href="../../plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

        <!-- App css -->
        <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../../assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
        <link href="../../plugins/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />>
        <link href="../../assets/css/app.min.css" rel="stylesheet" type="text/css" />
        <!-- <link href="../../assets/css/form.css" rel="stylesheet" type="text/css" /> -->
        <style type="text/css">
          .accordion {
          color: #423d3d!!important;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 11px;
            transition: 0.4s;
          }
          .accordion-item {
                background-color: #fff;
                border-bottom: 1px solid #e3ebf6!important;
                border-top: none!important;
                border-left: none!important;
                border-right: none!important;
            }

            .accordion-button {
             
                padding: 4px 6px!important;
                font-size: 11px!important;
                
            }

            .accordion-button:not(.collapsed) {
                  color: #423d3d!!important;
                   background-color: #fff!important; 
              }

             label{
              font-size: 10px!important;
             }
           .form-control, .form-select{
            font-size:10px!important;
           }
        </style>


      
    </head>
    <body>
        <!-- start left-sidenav-->
    <?php include ('../../include/left_sidebar.php') ?>
        <!--   end left-sidenav-->
   <div class="page-wrapper">
            <!-- Top Bar Start -->
    <?php include ('../../include/top_bar.php'); ?>
            <!-- Top Bar End -->
            <!-- Page Content-->
   <div class="page-content mt-2">
    <div class="container-fluid">

          <!-- Button trigger modal -->
     <a href="" class="float-end" data-bs-toggle="modal" data-bs-target="#exampleModal"> <i data-feather="user-plus"></i></a>
              <!-- Modal -->
     <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
      <div class="modal-content">
      <div class="modal-header rounded-0">
        <h5 class="modal-title" id="exampleModalLabel">Employee Information</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
     </div>
     <div class="modal-body rounded-0 mt-0 pt-0">
     <!-- Start Form Area -->
      <div class="accordion m-0 p-0" id="accordionExample">
        <form action="" method="POST" id="msform">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="color: #423d3d!important;">
               Basic Information
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <div class="container">
                  <div class="row">
                    <div class="col-4">
                       <label for="empfName">First Name</label>
                       <input type="text" class="form-control" id="empfName" name="empfName" required="" />
                    </div>
                    <div class="col-4">
                      <label for="emplName">Last Name</label>
                      <input type="text" class="form-control" name="emplName" id="emplName" required="" />
                    </div>
                     <div class="col-4">
                      <label for="empcode">Employee Code</label>
                     <input type="text" id="empcode" class="form-control" name="empcode" required="" />
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-4">
                      <label for="emppassword">Password</label>
                      <input type="text" class="form-control" id="emppassword" name="emppassword" required=""  />
                    </div>
                    <div class="col-4">
                      <label for="empjobtitle">Job Title</label>
                      <input type="text" class="form-control" id="empjobtitle" name="empjobtitle" required=""  />
                    </div>
                     <div class="col-4">
                      <label for="empdesig">Designation</label>
                      <select id="empdesig" class="form-control" name="empdesig" required="">
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-4">
                      <label for="empdept">Department</label>
                       <select id="empdept" class="form-control" name="empdept" required="">
                                     
                      </select>
                     </div>
                      <div class="col-4">
                      <label for="empwloc">Work Location</label>
                       <select id="empwloc" class="form-control" name="empwloc" required="">
                                     
                      </select>
                       </div>
                      <div class="col-4">
                      <label for="empsalary">Gross Salary</label>
                      <input id="empsalary" class="form-control" name="empsalary" type="text" required="" />
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-4">
                      <label for="empjoindate">Joing Date</label>
                       <input id="empjoindate" class="form-control" name="empjoindate" type="date" required="" />
                    </div>
                    <div class="col-4">
                      <label for="empemail">Email</label>
                       <input id="empemail" class="form-control" name="empemail" type="email" required="" />
                    </div>
                    <div class="col-4">
                      <label for="empcontact">Mobile</label>
                      <input id="empcontact" name="empcontact" class="form-control" type="text" required="" />
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-4">
                      <label for="empip">IP Phone</label>
                    <input id="empip" name="empip" class="form-control" type="text"/ required="">
                    </div>
                    <div class="col-4">
                      <label for="empref">Referrence</label>
                      <input id="empref" name="empref" class="form-control" type="text"/>
                    </div>
                    <div class="col-4">
                      <label for="emleaveR">Reason for Leave Previous Job</label>
                      <input id="emleaveR" name="emleaveR" class="form-control" type="text"/>
                    </div>
                    <div class="col-4">
                      <select class="form-select" id="emporg" name="emporg" aria-label="Default select example">
                                                                     
                    </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="color: #423d3d!important;">
               Personal Information
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="accordion-body">
               <div class="container">
                 <div class="row">
                   <div class="col-4">
                     <label for="emphomedist">Home District</label>
                      <select id="emphomedist" class="form-select" name="emphomedist" required="">
                            <option value="1" selected="">Cumilla</option>
                            <option value="2">Dhaka</option>
                      </select>
                   </div>
                   <div class="col-4">
                    <textarea id="empPstAdd" class="form-control" name="empPstAdd" placeholder="Present Address" required=""></textarea>
                   </div>
                   <div class="col-4">
                      <textarea id="empPreAdd" name="empPreAdd" class="form-control" placeholder="Permanent Address" required=""></textarea>
                   </div>
                 </div>
                 <div class="row">
                   <div class="col-4">
                    <label for="emphomecont">Home Mobile No.</label>
                        <input id="emphomecont" class="form-control" name="emphomecont" required="" type="text"/>
                   </div>
                   <div class="col-4">
                     <label for="empdob">Date of Birth</label>
                       <input id="empdob" class="form-control" name="empdob" required="" type="data"/>
                   </div>
                   <div class="col-4">
                    <label for="empmarital">Marital Status</label>
                     <select id="empmarital" class="form-select" name="empmarital">
                        <option value="1" selected="">Married</option>
                        <option value="2">UnMarried</option>
                    </select>
                   </div>
                 </div>
                 <div class="row">
                   <div class="col-4">
                     <label for="emTolExperi">Total Experience</label>
                       <input id="emTolExperi" class="form-control" required="" name="emTolExperi" type="text"/>
                   </div>
                   <div class="col-4">
                     <label for="empBld">Blood Group</label>
                      <select class="form-select" id="empBld" name="empBld">
                        <option value="1">A+</option>
                        <option value="2">B+</option>
                      </select>
                   </div>
                   <div class="col-4">
                     <label for="empNid">NID</label>
                       <input id="empNid" name="empNid" class="form-control" type="text" required="" />
                   </div>
                 </div>
                 <div class="row">
                   <div class="col-4">
                     <label for="empdrilice">Driving License</label>
                       <input id="empdrilice" class="form-control" name="empdrilice" type="text"/>
                   </div>
                   <div class="col-4">
                     <label for="empPassport">Passport</label>
                     <input id="empPassport" class="form-control" name="empPassport" type="text"/>
                   </div>
                   <div class="col-4">
                     <label for="empcont1">Mobile 1</label>
                      <input id="empcont1" class="form-control" name="empcont1" type="text" required="" />
                   </div>
                 </div>
                 <div class="row">
                   <div class="col-4">
                     <label for="empcont2">Mobile 2</label>
                      <input id="empcont2" class="form-control" name="empcont2" type="text" required="" />
                   </div>
                   <div class="col-4">
                     <label for="empPerEmail">Personal Email</label>
                       <input id="empPerEmail" class="form-control" name="empPerEmail" type="email" required="" />
                   </div>
                   <div class="col-4">
                      <input id="empPhoto" name="empPhoto" class="dropify" type="file" data-height="100" required="" />
                   </div>
                 </div>
                 <div class="row">
                   <div class="col-4">
                     <label for="empAnni">Anniversary</label>
                      <input id="empAnni" name="empAnni" class="form-control" type="text"/>
                   </div>
                   <div class="col-4">
                     <label for="empBank">Bank</label>
                        <input id="empBank" class="form-control" name="empBank" type="text"/>
                   </div>
                   <div class="col-4">
                      <label for="empBankAc">Bank Account</label>
                      <input id="empBankAc" name="empBankAc" class="form-control" type="text"/>
                   </div>
                 </div>
               </div>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="color: #423d3d!important;">
                Other Information
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <h5 class="fw-bold">Emergency Contact</h5>
                 <div class="container">
                   <div class="row">
                     <div class="col-4">
                       <label for="empEgName">Name</label>
                        <input id="empEgName" name="empEgName" class="form-control" type="text" required="" />
                     </div>
                     <div class="col-4">
                       <label for="empEgRela">Relationship</label>
                        <input id="empEgRela" name="empEgRela" class="form-control" type="text" required="" />
                     </div>
                     <div class="col-4">
                       <textarea id="empEgAdd" class="form-control" placeholder="Address" name="empEgAdd"></textarea>
                     </div>
                   </div>
                   <div class="row">
                     <div class="col-4">
                       <label for="empEgOccu">Occupation</label>
                        <input id="empEgOccu" class="form-control" name="empEgOccu" type="text"/>
                     </div>
                      <div class="col-4">
                       <label for="empEgcontact1">Mobile 1</label>
                        <input id="empEgcontact1" class="form-control" name="empEgcontact1" type="text" required="" />
                     </div>
                       <div class="col-4">
                       <label for="empEgcontact2">Mobile 2</label>
                        <input id="empEgcontact2" class="form-control" name="empEgcontact2" type="text" required="" />
                     </div>
                   </div>
                 </div>
                 <h5 class="fw-bold">Employee Relative</h5>
                 <div class="container">
                   <div class="row">
                     <div class="col-4">
                       <label for="empReName">Name</label>
                         <input id="empReName" name="empReName" class="form-control" type="text" required="" />
                     </div>
                     <div class="col-4">
                       <label for="empReRela">Relationship</label>
                         <input id="empReRela" name="empReRela" class="form-control" type="text" required="" />
                     </div>
                     <div class="col-4">
                       <textarea id="empReAdd" name="empReAdd" class="form-control" placeholder="Address"></textarea>
                     </div>
                   </div>
                   <div class="row">
                     <div class="col-4">
                       <label for="empReOccu">Occupation</label>
                        <input id="empReOccu" name="empReOccu" class="form-control" type="text"/>
                     </div>
                      <div class="col-4">
                       <label for="empRecontact1">Mobile 1</label>
                        <input id="empRecontact1" name="empRecontact1" class="form-control" type="text" required="" />
                     </div>
                      <div class="col-4">
                       <label for="empRecontact2">Mobile 2</label>
                        <input id="empRecontact2" name="empRecontact2" class="form-control" type="text" required="" />
                     </div>
                   </div>
                 </div>
                 <h5 class="fw-bold">Employee Spouse</h5>
                 <div class="container">
                   <div class="row">
                      <div class="col-4">
                       <label for="empSpName">Name </label>
                        <input id="empSpName" class="form-control" name="empSpName" type="text" required="" />
                     </div>
                      <div class="col-4">
                       <label for="empSpName">Occupation</label>
                         <input id="empSgOccu" class="form-control" name="empSgOccu" type="text"/>
                     </div>
                     <div class="col-4">
                       <label for="empSpCont">Mobile</label>
                         <input id="empSpCont" class="form-control" name="empSpCont" type="text" required="" />
                     </div>
                    </div>
                     <div class="row">
                        <div class="col-4">
                         <label for="empSgNid">NID</label>
                         <input id="empSgNid" class="form-control" name="empSgNid" type="text" required="" />
                       </div>
                        <div class="col-4">
                         <label for="empSgFather">Father Name</label>
                         <input id="empSgFather" class="form-control" name="empSgFather" type="text" required="" />
                       </div>
                        <div class="col-4">
                         <label for="empEgFatherOcc">Father Occupation</label>
                         <input id="empEgFatherOcc" class="form-control" name="empEgFatherOcc" type="text" />
                       </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                         <label for="empEgFatherCont">Father Mobile No.</label>
                         <input id="empEgFatherCont" class="form-control" name="empEgFatherCont" type="text"/>
                       </div>
                       <div class="col-4">
                           <label for="empEgMother">Mother Name</label>
                           <input id="empEgMother" class="form-control" name="empEgMother" type="text"/>
                       </div>
                         <div class="col-4">
                           <label for="empEgMotherOccu">Mother Occupation</label>
                           <input id="empEgMotherOccu" class="form-control" name="empEgMotherOccu" type="text"/>
                       </div>
                        <div class="col-4">
                           <label for="empEgMotherCont">Mother Mobile No.</label>
                           <input id="empEgMotherCont" class="form-control" name="empEgMotherCont" type="text"/>
                       </div>
                    </div>
                 </div>
              </div>
            </div>
          </div>
           <input type="submit" name="" class="btn btn-primary btn-sm mt-1" value="Save">
        </form>
        </div>
      </div>
    </div>
                      
                        
</div>
          
</div> <!-- End Modal -->
                   
  <?php include ('../../include/footer.php') ?>
</div><!-- End container -->
</div> <!-- end page content -->

        <!-- end page-wrapper -->
        <!-- jQuery  -->
      
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
     
        <script src="../../assets/js/metismenu.min.js"></script>
        <script src="../../assets/js/waves.js"></script>
        <script src="../../assets/js/feather.min.js"></script>
        <script src="../../assets/js/simplebar.min.js"></script>
        <script src="../../assets/js/moment.js"></script>
        <!-- <script src="../../plugins/daterangepicker/daterangepicker.js"></script> -->

        <!-- Plugins js -->
        <script src="../../assets/js/bootstrap.bundle.min.js"></script>
        <script src="../../plugins/select2/select2.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!-- <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script> -->


        <!-- not necessary for select 2 option -->
       <!--  <script src="../../plugins/huebee/huebee.pkgd.min.js"></script>
        <script src="../../plugins/timepicker/bootstrap-material-datetimepicker.js"></script>
        <script src="../../plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
        <script src="../../plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js"></script> -->
       <!-- not necessary for select 2 option -->

       <!-- <script src="../../assets/js/jquery.forms-advanced.js"></script> -->
       <!-- <script src="../../assets/js/jquery.steps.min.js"></script> -->
       <!-- <script src="../../assets/js/jquery.form-wizard.init.js"></script> -->
        <!-- <script src="vendor/jquery/jquery.min.js"></script> -->
        <!-- <script src="../../assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script> -->
        <!-- <script src="../../assets/vendor/jquery-validation/dist/additional-methods.min.js"></script> -->
        <!-- <script src="vendor/jquery-steps/jquery.steps.min.js"></script> -->
        <!-- <script src="../../assets/vendor/minimalist-picker/dobpicker.js"></script> -->
        <!-- <script src="../../assets/vendor/jquery.pwstrength/jquery.pwstrength.js"></script> -->
        <!-- <script src="../../assets/js/main.js"></script> -->

        <!-- App js -->
        
         <script src="../../assets/js/app.js"></script>
         <script src="../../assets/js/pagejs/employee.js"></script>
       
    </body>

</html>