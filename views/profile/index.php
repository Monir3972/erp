<?php include ('../../controller/sessions.php');?>

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
      <link href="../../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
      <link href="../../assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
      <link href="../../plugins/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

      <link href="../../assets/css/app.min.css" rel="stylesheet" type="text/css" />
      <style type="text/css">
        
        .nav.nav-pills {
        background-color:#fff!important; 
          }

        .nav-pills .nav-item.show .nav-link, .nav-pills .nav-link.active {
                background: #fff!important;
                color: #0e75df!important;
            }
        .nav-pills .nav-item.show .nav-link, .nav-pills .nav-link {
               
                color:#484141!important;
            }
         label{
         font-size: .875em!important;
         }
         .form-label {
         margin-bottom: 0px!important; 
         }
         .left-sidenav-menu li>a i {
         display: none!important;
         }
       /*  .form-control-sm {
         margin-bottom:  12px!important;
         }*/
        .cus-form-control{
         border-top: 0px!important;
         border-left: 0px!important;
         border-right: 0px!important;
         border-style: dashed!important;
         color: #333334!important;
         border-radius: 0!important;
         font-size: 11px!important;
         }
         .profileUpdate .form-select:focus, .form-control:focus {
         border-color: #ddd!important; 
         }
        .select2-container--default .select2-selection--single {
            /* border: 1px solid #e3ebf6; */
            height: 29px!important;
            background-color: #fff!important;
            border-top: none!important;
            border-right: none!important;
            border-left: none!important;
            border-radius: 0!important;
            border-style: dashed; 
            font-size: 11px;
        }
        .select2-container--default .select2-selection--single .select2-selection__rendered {
              color: #303e67;
              line-height: 29px!important;
          } 

         .accordion-button:not(.collapsed) {
                color: #1557e4;
                 background-color: #fff!important; 
                 box-shadow: none!important; 
            }
         .accordion-button::after {
             
                 background-image: none!important; 
              }
        #process_relative_data, #process_emer_data, .form-control-sm{
            margin-bottom: 2px!important;
         }

         .no_border::last-of-type{
            border-right: 3px solid red;
         }
          


    .editLink {
            position:absolute;
            bottom :3%;
            opacity:0;
            transition: all 0.3s ease-in-out 0s;
            -mox-transition: all 0.3s ease-in-out 0s;
            -webkit-transition: all 0.3s ease-in-out 0s;
            left: 38%;    
        }
        .img-relative:hover .editLink{opacity:1;}
        .overlay{
            position: absolute;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            z-index: 2;
            background: rgba(255,255,255,0.7);
        }
        .overlay-content {
            position: absolute;
            transform: translateY(-50%);
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            top: 50%;
            left: 0;
            right: 0;
            text-align: center;
            color: #555;
        }
        .uploadProcess img{
            max-width: 207px;
            border: none;
            box-shadow: none;
            -webkit-border-radius: 0;
            display: inline;
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
        
     <!-- start nav tab  -->

         <div class="page-content">
            <ul class="nav nav-pills mb-0" id="pills-tab" role="tablist">
               <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills_home_tab" data-bs-toggle="pill" data-bs-target="#pills_home" type="button" role="tab" aria-controls="pills_home" aria-selected="true"><i class="fa fa-user" aria-hidden="true"></i></button>
               </li>
               <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills_edit_tab" data-bs-toggle="pill" data-bs-target="#pills_edit" type="button" role="tab" aria-controls="pills_edit" aria-selected="false"><i class="fa-solid fa-pen"></i></button>
               </li>
               <!-- <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills_reset" data-bs-toggle="pill" data-bs-target="#pills_reset_password" type="button" role="tab" aria-controls="pills_reset_password" aria-selected="false"><i class="fa-solid fa-key"></i></button>
               </li> -->
            </ul>
            <div class="tab-content" id="pills-tabContent">
               <!-- start fetch employee data   -->
               <div class="tab-pane fade show active" id="pills_home" role="tabpanel" aria-labelledby="pills_home_tab" tabindex="0">
                  <div class="section" id="">
                     <!-- start fetch information -->
                     <!--   Start Profile Summary including photo -->
                     <hr class="m-1">
                     <div class="container-fluid">
                        <div class="row">
                           <!-- <div class="col-md-6" id="userSummary">  -->
                            <div class="col-md-2">
                              <li class="list-group-item img-relative  list-group-item-action d-flex p-0 border-0">
                                   <!-- <img class="img-fluid" src="<?php echo $photo1; ?>" alt=""> -->

                                   <div class="overlay uploadProcess" style="display: none;">
                                      <div class="overlay-content"></div>
                                   </div>
                                                <!-- Hidden upload form -->
                                   <form method="post" action="../../controller/profile_pic_update.php?admin_id=<?php echo $u_id ?>" enctype="multipart/form-data" id="picUploadForm" target="uploadTarget">
                                      <input type="file" name="picture" id="fileInput"  style="display:none"/>
                                   </form>
                                   <iframe id="uploadTarget" name="uploadTarget" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
                                    <!-- Image update link -->
                                   <a class="editLink" wid href="javascript:void(0);"><img style="opacity: 0.8; width: 50px" src="../../assets/images/upload.png"/></a>
                                    <!-- Profile image -->
                                   <img style="width: 200px" class="img-fluid rounded-circle" src="../<?php echo $user_photo ?>" id="imagePreview">
                               </li>

                           </div>
                        </div>
                 
                     </div>
                  <!--   End Profile Summary including photo -->
                     <!--   Start Profile Identity -->
                     <hr class="m-1">
                     <div class="container-fluid mt-1">
                        <div class="row">

                           <h6 class="text-uppercase mb-1">Identity</h6>
                           <div class="col-md-4">
                              <p class="small mb-0">
                                 <span class="fw-bold">Name:</span> 
                                 <r id="first_name"></r>
                                 <r id="last_name"></r>
                              </p>
                              <p class="small mb-0">
                                 <span class="fw-bold">Email:</span>  
                                 <r id="email"></r>
                              </p>
                              <p class="small mb-0">
                                 <span class="fw-bold">Employee Code:</span> 
                                 <r id="emp_code"></r>
                              </p>
                           </div>
                           <div class="col-md-4">
                              <p class="small mb-0">
                                 <span class="fw-bold" >Contact: </span> 
                                 <r id="mobile_no"></r>
                              </p>
                              <p class="small mb-0">
                                 <span class="fw-bold">IP Phone :</span>
                                 <r id="ip_phone_ext"></r>
                              </p>
                           </div>
                        </div>
                     </div>
                      <!--   End Profile Identity -->

                     <!--   Start Job Informations -->
                     <hr class="m-1">
                     <div class="container-fluid mt-1">
                        <div class="row">
                           <h6 class="text-uppercase mb-1">Job info </h6>
                           <div class="col-md-4">
                              <p class="small mb-0">
                                 <span class="fw-bold">Department: </span> 
                                 <r id="department"></r>
                              </p>
                              <p class="small mb-0">
                                 <span class="fw-bold">Job Title:</span> 
                                 <r id="job_title"></r>
                              </p>
                              <p class="small mb-0">
                                 <span class="fw-bold">Designation:</span> 
                                 <r id="designation"></r>
                              </p>
                           </div>
                           <div class="col-md-4">
                              <p class="small mb-0">
                                 <span class="fw-bold">Company:</span> 
                                 <r id="company"></r>
                              </p>
                              <p class="small mb-0">
                                 <span class="fw-bold">Location:</span> 
                                 <r id="work_loc"></r>
                              </p>
                           </div>
                        </div>
                     </div>
                     <!-- end job information -->

                     <!-- Start Personal Information  -->
                     <hr class="m-1">
                     <div class="container-fluid mt-1">
                        <div class="row">
                           <h6 class="text-uppercase mb-1">Personal Information </h6>
                           <div class="col-md-4">
                              <p class="small mb-0">
                                 <span class="fw-bold">Present Address:</span> 
                                 <r id="present_address"></r>
                              </p>
                              <p class="small mb-0">
                                 <span class="fw-bold">Parmanent Address:</span> 
                                 <r id="parmanent_address"></r>
                              </p>
                              <p class="small mb-0">
                                 <span class="fw-bold">Blood Group:</span> 
                                 <r id="blood_group"></r>
                              </p>
                           </div>
                           <div class="col-md-4">
                              <p class="small mb-0">
                                 <span class="fw-bold">Home Contact:</span> 
                                 <r id="home_contact"></r>
                              </p>
                              <p class="small mb-0">
                                 <span class="fw-bold">Date Of Birth:</span> 
                                 <r id="dob"></r>
                              </p>
                              <p class="small mb-0">
                                 <span class="fw-bold">Marital Status:</span> 
                                 <r id="marital_status"></r>
                              </p>
                              <p class="small mb-0">
                                 <span class="fw-bold">Total Experience:</span> 
                                 <r id="total_Experience"></r>
                              </p>
                              <p class="small mb-0">
                                 <span class="fw-bold">Bank Name:</span> 
                                 <r id="bank_name"></r>
                              </p>
                           </div>
                           <div class="col-md-4">
                              <p class="small mb-0">
                                 <span class="fw-bold">NID:</span> 
                                 <r id="nid"></r>
                              </p>
                              <p class="small mb-0">
                                 <span class="fw-bold">Contact 1:</span> 
                                 <r id="contact_01"></r>
                              </p>
                              <p class="small mb-0">
                                 <span class="fw-bold">Contact 2:</span> 
                                 <r id="contact_02"></r>
                              </p>
                              <p class="small mb-0">
                                 <span class="fw-bold">Personal Email:</span> 
                                 <r id="personal_email"></r>
                              </p>
                              <p class="small mb-0">
                                 <span class="fw-bold">Bank Account:</span> 
                                 <r id="bank_account"></r>
                              </p>
                           </div>
                        </div>
                     </div>
                     <!-- End personal information -->

                    
                     <!--  Start Emergency Contacts -->
                     <hr class="m-1">
                     <div class="container-fluid mt-1">
                        <div class="row">
                           <h6 class="text-uppercase mb-1">Emergency Contact     
                             <a href="" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                 <i class="fa-solid fa-circle-plus"></i>
                             </a>
                               
                           </h6>
                               <!-- Start accordian section -->
                               <div class="accordion accordion-flush" id="accordionFlushExample">
                             <div class="accordion-item">
                               <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                 <div class="accordion-body">
                                    <div class="container">
                                       <div class="row">
                                          <div class="col-md-6">
                                          <form class="row" action="" method="POST" id="process_emer_data">
                                            <div class="col-md-6">
                                              <label for="em_emergencyName" class="form-label">Name</label>
                                              <input type="text" class="form-control form-control-sm"  required="" name="em_emergencyName" id="em_emergencyName">
                                            </div>
                                            <div class="col-md-6">
                                              <label for="em_emergencyRel" class="form-label">Relationship</label>
                                              <input type="text" class="form-control form-control-sm"  required="" name="em_emergencyRel" id="em_emergencyRel">
                                            </div>
                                            <div class="col-12">
                                              <label for="em_emergencyAddr" class="form-label">Address</label>
                                              <input type="text" class="form-control form-control-sm"  required="" name="em_emergencyAddr" id="em_emergencyAddr">
                                            </div>
                                          
                                            <div class="col-md-6">
                                              <label for="em_emergencyCont1" class="form-label">Contact 1</label>
                                              <input type="text" class="form-control form-control-sm"  required="" name="em_emergencyCont1" id="em_emergencyCont1">
                                            </div>
                                            <div class="col-md-6">
                                              <label for="em_emergencyCont2" class="form-label">Contact 2</label>
                                              <input type="text" class="form-control form-control-sm" required=""  name="em_emergencyCont2" id="em_emergencyCont2">
                                            </div>
                                          
                                            <div class="col-12">
                                              <button type="submit" class="btn btn-primary btn-sm">Save</button>
                                            </div>
                                          </form>
                                          </div>
                                    
                                       </div>
                                    </div>
                                   
                                 </div>
                               </div>
                             </div>
                           </div>
                            <!-- End accordian section -->

                        </div>
                        <div class="row" id="employee_emergency_infos">
                        
                        </div>
                     </div>
                     <!--  End Emergency Contacts -->

                     <hr class="m-1">
                     <!-- Start Employee realtives infos -->
                     <div class="container-fluid mt-1">
                        <h6 class="text-uppercase mb-1">Employee Relatives 
                      <a href="" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne1" aria-expanded="false" aria-controls="flush-collapseOne1">
                         <i class="fa-solid fa-circle-plus"></i>
                     </a>
                       </h6>
                         <!-- Start accordian section -->
                               <div class="accordion accordion-flush" id="accordionFlushExample1">
                             <div class="accordion-item">
                               <div id="flush-collapseOne1" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample1">
                                 <div class="accordion-body">
                                    <div class="container">
                                       <div class="row">
                                          <div class="col-md-6">
                                          <form class="row" action="" method="POST" id="process_relative_data">
                                            <div class="col-md-6">
                                              <label for="em_realtiveName" class="form-label">Name</label>
                                              <input type="text" class="form-control form-control-sm" required name="em_realtiveName" id="em_realtiveName">
                                            </div>
                                            <div class="col-md-6">
                                              <label for="em_relative_occu" class="form-label">Occupation</label>
                                              <input type="text" class="form-control form-control-sm" required name="em_relative_occu" id="em_relative_occu">
                                            </div>
                                            <div class="col-6">
                                              <label for="em_realtive_rel" class="form-label">Relationship</label>
                                              <input type="text" class="form-control form-control-sm" required name="em_realtive_rel" id="em_realtive_rel">
                                            </div>
                                          
                                            <div class="col-md-6">
                                              <label for="em_realtive_cont_01" class="form-label">Contact 1</label>
                                              <input type="text" class="form-control form-control-sm" require name="em_realtive_cont_01" id="em_realtive_cont_01">
                                            </div>
                                            <div class="col-md-6">
                                              <label for="em_realtive_cont_02" class="form-label">Contact 2</label>
                                              <input type="text" class="form-control form-control-sm" required name="em_realtive_cont_02" id="em_realtive_cont_02">
                                            </div>
                                          
                                            <div class="col-12">
                                              <button type="submit" id="" class="btn btn-primary btn-sm">Save</button>
                                            </div>
                                          </form>
                                          </div>
                                    
                                       </div>
                                    </div>
                                   
                                 </div>
                               </div>
                             </div>
                           </div>
                            <!-- End accordian section -->

                        <div class="row" id="employee_relatives"> 
                         
                        </div>
                     </div>

                      <!-- End Employee realtives infos -->

                     <!-- Start Employee Spouse -->
                     <hr class="m-1">
                     <div class="container-fluid mt-1">
                        <div class="row">
                           <h6 class="text-uppercase mb-1">Employee Spouse </h6>
                           <div class="col-md-4">
                              <p class="small mb-0">
                                 <span class="fw-bold">Name:</span> 
                                 <r id="spouse_name"></r>
                              </p>
                              <p class="small mb-0">
                                 <span class="fw-bold">Occupation:</span> 
                                 <r id="spouse_occu"></r>
                              </p>
                              <p class="small mb-0">
                                 <span class="fw-bold">Contact:</span> 
                                 <r id="spouse_contact"></r>
                              </p>
                              <p class="small mb-0">
                                 <span class="fw-bold">NID:</span> 
                                 <r id="spouse_nid"></r>
                              </p>
                           </div>
                           <div class="col-md-4">
                              <p class="small mb-0">
                                 <span class="fw-bold">Father Name</span> 
                                 <r id="spouse_fater"></r>
                              </p>
                              <p class="small mb-0">
                                 <span class="fw-bold">Father Occupation:</span> 
                                 <r id="spouse_father_occu"></r>
                              </p>
                              <p class="small mb-0">
                                 <span class="fw-bold">Father Contact:</span> 
                                 <r id="spouse_father_contact"></r>
                              </p>
                           </div>
                           <div class="col-md-4">
                              <p class="small mb-0">
                                 <span class="fw-bold">Mother Name:</span> 
                                 <r id="spouse_mother"></r>
                              </p>
                              <p class="small mb-0">
                                 <span class="fw-bold">Mother Contact:</span> 
                                 <r id="spouse_mother_contact"></r>
                              </p>
                              <p class="small mb-0">
                                 <span class="fw-bold">Mother Occupation:</span> 
                                 <r id="spouse_mother_occu"></r>
                              </p>
                           </div>
                        </div>
                     </div>
                     <!-- End Employee Spouse -->
                  </div>
               </div>

               <!-- end fetch employee data   -->



               
               <!--  start edit part -->
               <div class="tab-pane fade" id="pills_edit" role="tabpanel" aria-labelledby="pills_edit-tab" tabindex="0">
                  <div class="container-fluid">
               <!-- Start edit/update form here -->
                  <form id="profileUpdate" method="POST" class="profileUpdate">
                     <!-- //make it change option -->
                      <div class="section" id="">
                    
                     <hr class="m-1">
                       <!-- Start edit identity -->
                     <div class="container-fluid mt-2">
                        <div class="row">
                           <h6 class="text-uppercase mb-1">Identity</h6>
                           <div class="col-md-3">
                             <label for="edit_name" class="form-label small">First Name</label>
                                 <input type="text" class="form-control form-control-sm cus-form-control" name="edit_fname" id="edit_fname">
                             <label for="edit_name" class="form-label small">Last Name</label>
                                 <input type="text" class="form-control form-control-sm cus-form-control" name="edit_lname" id="edit_lname">
                             <label for="edit_contact" class="form-label">Contact 1</label>
                                 <input type="text" class="form-control form-control-sm cus-form-control" name="edit_contact" id="edit_contact">
                           </div>
                           <div class="col-md-3 offset-md-1">
                                <label for="edit_employeeCode" class="form-label">Employee Code</label>
                                 <input type="text" class="form-control form-control-sm cus-form-control" name="edit_employeeCode" id="edit_employeeCode">
                              <label for="edit_ip_phone" class="form-label">Ip Phone</label>
                                 <input type="text" class="form-control form-control-sm cus-form-control" name="edit_ip_phone" id="edit_ip_phone">
                           </div>
                        </div>
                     </div>
                     <!-- End edit identity -->

                     <!--   Start Edit Job Informations -->
                     <hr class="m-1">
                     <div class="container-fluid mt-1">
                        <div class="row">
                           <h6 class="text-uppercase mb-1">Job info </h6>
                           <div class="col-md-3">
                                <label for="edit_job_tiltle" class="form-label">Job Title</label>
                                 <input type="text" class="form-control form-control-sm cus-form-control" id="edit_job_tiltle" name="edit_job_tiltle">
                                <label for="edit_company" class="form-label">Company</label>
                                 <select class="select2 form-control form-control-sm cus-form-control"  id="edit_company" name="edit_company">
                                 </select>
                                <label for="edit_department" class="form-label">Department</label>
                                 <select class="select2 form-control form-control-sm cus-form-control" id="edit_department" name="edit_department" aria-label=".form-select-sm example">
                                 </select>
                           </div>
                           <div class="col-md-3 offset-md-1">
                                <label for="edit_designation" class="form-label">Designation</label>
                                 <select class="select2 form-control form-control-sm cus-form-control" id="edit_designation" name="edit_designation">
                                 </select>
                              <label for="edit_company_loc" class="form-label">Company Location</label>
                                 <select class="select2 form-control form-control-sm cus-form-control" id="edit_company_loc" name="edit_company_loc">
                                 </select>
                           </div>
                        </div>
                     </div>
                     <!-- End Edit Job Information -->

                     <!-- Start Edit Personal Information  -->
                     <hr class="m-1">
                     <div class="container-fluid mt-1">
                        <div class="row">
                           <h6 class="text-uppercase mb-1">Personal Information </h6>
                           <div class="col-md-4 border-end">
                               <label for="edit_present_address" class="form-label">Present Address</label>
                               <textarea class="form-control form-control-sm cus-form-control" rows="4" name="edit_present_address" id="edit_present_address"></textarea>
                               <label for="edit_permanent_address" class="form-label">Permanent Address</label>
                                 <textarea class="form-control form-control-sm cus-form-control" rows="4" name="edit_permanent_address" id="edit_permanent_address"></textarea>
                            
                           </div>
                           <div class="col-md-4 border-end">
                                 <label for="edit_home_contact" class="form-label">Home Contact</label>
                                 <input type="text" class="form-control form-control-sm cus-form-control" name="edit_home_contact" id="edit_home_contact">
                             
                                 <label for="edit_totlal_experience" class="form-label">Total Experience</label>
                                 <input type="text" class="form-control form-control-sm cus-form-control" name="edit_totlal_experience" id="edit_totlal_experience">
                                 <label for="edit_bank" class="form-label">Bank Name</label>
                                 <input type="text" class="form-control form-control-sm cus-form-control" name="edit_bank" id="edit_bank">
                                 <label for="edit_bank_account" class="form-label">Bank Account</label>
                                 <input type="text" class="form-control form-control-sm cus-form-control" name="edit_bank_account" id="edit_bank_account">
                           </div>
                           <div class="col-md-4">
                                <label for="edit_contact_01" class="form-label">Contact 1</label>
                                 <input type="text" class="form-control form-control-sm cus-form-control" name="edit_contact_01" id="edit_contact_01">
                             
                                <label for="edit_contact_02" class="form-label">Contact 2</label>
                                 <input type="text" class="form-control form-control-sm cus-form-control" name="edit_contact_02" id="edit_contact_02">
                               <label for="edit_personal_email" class="form-label">Personal Email</label>
                                 <input type="text" class="form-control form-control-sm cus-form-control" name="edit_personal_email" id="edit_personal_email">
                           </div>
                        </div>
                     </div>
                   <!-- End Edit Personal Information -->

                     <!--   Start Edit Emergency Contacts -->
                     <hr class="m-1">
                     <div class="container-fluid mt-1">
                        <h6 class="text-uppercase mb-1">Emergency Contact </h6>
                        <div class="row" id="edit_employee_emergency">
                          
                        </div>
                     </div>
                     <!-- End Edit Emergency Contacts -->

                       <!--Start Edit Employee Relatives -->
                     <hr class="m-1">
                      <div class="container-fluid mt-1">
                        <h6 class="text-uppercase mb-1">Employee Relatives </h6>
                        <div class="row" id="edit_employee_relatives"> 
                         
                        </div>
                      </div>
                      <!-- End Employee realtives infos -->

                     <!-- Start Edit Employee Spouse -->
                     <hr class="m-1">
                     <div class="container-fluid mt-1">
                        <div class="row">
                           <h6 class="text-uppercase mb-1">Employee Spouse </h6>
                           <div class="col-md-4 border-end">
                              <label for="edit_spouse_name" class="form-label">Name</label>
                                 <input type="text" class="form-control form-control-sm cus-form-control" name="edit_spouse_name" id="edit_spouse_name">
                              <label for="edit_spouse_occu" class="form-label">Occupation</label>
                                 <input type="text" class="form-control form-control-sm cus-form-control" name="edit_spouse_occu" id="edit_spouse_occu">
                              <label for="edit_spouse_contact" class="form-label">Contact</label>
                                 <input type="text" class="form-control form-control-sm cus-form-control" name="edit_spouse_contact" id="edit_spouse_contact">
                               <!--  <label for="edit_spouse_nid" class="form-label">NID</label>
                                 <input type="text" class="form-control form-control-sm cus-form-control" name="edit_spouse_nid" id="edit_spouse_nid"> -->
                           </div>
                           <div class="col-md-4 border-end">
                                 <label for="edit_spouse_father" class="form-label">Father</label>
                                 <input type="text" class="form-control form-control-sm cus-form-control" name="edit_spouse_father" id="edit_spouse_father">
                                 <label for="edit_spouse_father_occu" class="form-label">Father Occupation</label>
                                 <input type="text" class="form-control form-control-sm cus-form-control" name="edit_spouse_father_occu" id="edit_spouse_father_occu">
                                <label for="edit_spouse_father_contact" class="form-label">Father Contact</label>
                                 <input type="text" class="form-control form-control-sm cus-form-control" name="edit_spouse_father_contact" id="edit_spouse_father_contact">
                           </div>
                           <div class="col-md-4">
                                 <label for="edit_spouse_mother" class="form-label">Mother</label>
                                 <input type="text" class="form-control form-control-sm cus-form-control" name="edit_spouse_mother" id="edit_spouse_mother">
                                 <label for="edit_spouse_mother_occu" class="form-label">Mother Occupation</label>
                                 <input type="text" class="form-control form-control-sm cus-form-control" name="edit_spouse_mother_occu" id="edit_spouse_mother_occu">
                                 <label for="edit_spouse_mother_contact" class="form-label">Mother Contact</label>
                                 <input type="text" class="form-control form-control-sm cus-form-control" name="edit_spouse_mother_contact" id="edit_spouse_mother_contact">
                           </div>
                        </div>
                     </div>
                     <!-- End Edit employe spouse -->

                    <button type="submit" class="btn btn-primary btn-sm mb-2">Save</button>
                  </div>
                </form>
               <!-- End edit/update form here -->
               </div>
               </div>
               <!--   end edit part -->
               
               <!-- Start reset password part  -->
             <!--   <div class="tab-pane fade" id="pills_reset_password" role="tabpanel" aria-labelledby="pills_reset" tabindex="0">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-4 mx-auto">

                           <form class="form" method="POST" action="" id="changePasswordForm">
                              <div class="card card-login card-hidden rounded-0">
                                 <div class="card-header card-header-rose text-center">
                                    <h4 class="card-title">Change Password</h4>
                                 </div>
                                 <div class="card-body">
                                    <span class="bmd-form-group">
                                       <div class="input-group">
                                          <div class="input-group-prepend">
                                          </div>
                                          <input type="password" name="oldPassword" class="form-control cus-form-control" placeholder="Old Password...">
                                       </div>
                                       <small class="text-danger ml-5" id="oldPasswordError"></small>
                                    </span>
                                    <span class="bmd-form-group">
                                       <div class="input-group">
                                          <div class="input-group-prepend">
                                          </div>
                                          <input type="password" name="password" class="form-control cus-form-control" placeholder="New Password...">
                                       </div>
                                       <small class="text-danger ml-5" id="passwordError"></small>
                                    </span>
                                    <span class="bmd-form-group">
                                       <div class="input-group">
                                          <div class="input-group-prepend">
                                          </div>
                                          <input type="password" name="cPassword" class="form-control cus-form-control" placeholder="Confirm New Password...">
                                       </div>
                                       <small class="text-danger ml-5" id="cPasswordError"></small>
                                    </span>
                                 </div>
                                 <div class="card-footer justify-content-center">
                                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div> -->
               <!-- end reset password part -->
            </div>
            <?php include ('../../include/footer.php') ?>
         </div>
         <!-- end page content -->
      </div>
      <!-- end page-wrapper -->
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
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <!-- <script src="../../plugins/huebee/huebee.pkgd.min.js"></script> -->
      <!-- <script src="../../plugins/timepicker/bootstrap-material-datetimepicker.js"></script> -->
      <!-- <script src="../../plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script> -->
      <!-- <script src="../../plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js"></script> -->
      <script src="../../assets/js/jquery.forms-advanced.js"></script>
      <!-- App js -->
      <script src="../../assets/js/app.js"></script>
      <script src="../../assets/js/pagejs/profile.js"></script> 

      <script type="text/javascript">
        $(document).ready(function () {
            //If image edit link is clicked
            $(".editLink").on('click', function(e){
                e.preventDefault();
                $("#fileInput:hidden").trigger('click');
            });

            //On select file to upload
            $("#fileInput").on('change', function(){
                var image = $('#fileInput').val();
                var img_ex = /(\.jpg|\.jpeg|\.png|\.gif)$/i;

                //validate file type
                if(!img_ex.exec(image)){
                    alert('Please upload only .jpg/.jpeg/.png/.gif file.');
                    $('#fileInput').val('');
                    return false;
                }else{
                    $('.uploadProcess').show();
                    $('#uploadForm').hide();
                    $( "#picUploadForm" ).submit();
                }
            });
        });

        //After completion of image upload process
        function completeUpload(success, fileName) {
            if(success == 1){
                $('#imagePreview').attr("src", "");
                $('#imagePreview').attr("src", fileName);
                $('#fileInput').attr("value", fileName);
                $('.uploadProcess').hide();
            }else{
                $('.uploadProcess').hide();
                alert('There was an error during file upload!');
            }
            return true;
        }
        </script>
     
      <!--  <script type="text/javascript">
         function deptchange(id)
         {
           var comapny_id = $('#edit_company').val();
             $.ajax({
                 type: 'post',
                 data:{'req': '8','param': '14','data':comapny_id},
                 url: "../../apis/api_m/api.php",
                 dataType: 'json',
                 success: function(res){
                    // alert(id);
                    // console.log(res)
                 },
                 // error: function(res){
                 //     $('#message').text('Error!');
                 //     $('.dvLoading').hide();
                 // }
             });
         }
         </script>  --> 
   </body>
</html>
