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
        <script src="../../assets/js/jquery.min.js"></script>
        <script src="../../assets/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="../../assets/js/pagejs/parsley.min.js"></script>
       
        <link rel="stylesheet" defer="defer" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">

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
          @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');

        *{
            padding:0;
            margin:0;
        }
        label{
          font-size:11px!important;
        }

     
        .container .card .form{
            width:100%;
            height:100%;
            
            display:flex;
        }
        .container .card .left-side{
            width:35%;
            /*background-color:#304767;*/
            height:100%;
         /*border-top-left-radius:20px;*/
         /*border-bottom-left-radius:20px;*/
          padding:20px 30px;
          box-sizing:border-box;

        }
        /*left-side-start*/
        .left-heading{
            color:#fff;
           
        }
        .steps-content{
            margin-top:30px;
            color:#fff;
        }
        .steps-content p{
            font-size:12px;
            margin-top:15px;
        }
        .progress-bar{
            list-style:none;
            /*color:#fff;*/
            margin-top:30px;
            font-size:13px;
            font-weight:700;
            counter-reset:container 0;
        }
        .progress-bar li{
               position:relative;
               margin-left:40px;
               margin-top:50px;
               counter-increment:container 1;
              color:#4f6581;
        }
        .progress-bar li::before{
            content:counter(container);
            line-height:25px;
            text-align:center;
            position:absolute;
            height:25px;
            width:25px;
            border:1px solid #4f6581;
            border-radius:50%;
            left:-40px;
            top:-5px;
            z-index:10;
            background-color:#304767;
        }
        
        .form-select{
          font-size:11px!important;
        }

        .progress-bar li::after{
            content: '';
            position: absolute;
            height: 90px;
            width: 2px;
            background-color: #4f6581;
            z-index: 1;
            left: -27px;
            top: -70px;
        }
       /* .progress-bar{
            background-color: #304767!important;
        }*/
     .progress-bar {
       background-color: #fff!important;
        }

      .progress-bar li.active::after{
            background-color: #fff;

        }

        .progress-bar li:first-child:after{
          display:none;  
        }

        .progress-bar li:last-child:after{
         display:none; 
        }
        .progress-bar li.active::before{
            color:#fff;
              border:1px solid #fff;
        }
        .progress-bar li.active{
            color:red;
        }
        .d-none{
           display:none;   
        }

        /*left-side-end*/
        .container .card .right-side{
            width:95%;
            background-color:#fff;
            height:100%;
          border-radius:20px;
        }
        /*right-side-start*/
        .main{
            display:none;
        }
        .active{
            display:block;
        }
      
        .congrats{
            text-align:center;
        }
        .modal-body {
  
          padding: 4px!important;
           }
        .text p{
            margin-top:10px;
            font-size:13px;
            font-weight:700;
            color:#cbced4;
        }
        .input-text{
            margin:16px 0;
             display:flex;
            gap:20px;
        }

        .input-text .input-div{
            width:100%;
            position:relative;
            
        }


        input[type="text"],input[type="date"], input[type="email"]{
            width:100%;
            height:28px;
            border:none;
            outline:0;
            border-radius:1px;
            border:1px solid #cbced4;
            gap:20px;
            box-sizing:border-box;
            padding:0px 10px;
        }

        textarea {
              width: 100%;
              height: 50px;
              padding: 12px 20px;
              box-sizing: border-box;
              border: 1px solid #ccc;
              border-radius: 1px;
             /* background-color: #f8f8f8;*/
              font-size: 11px;
              resize: none;
            }
        select{
            width:100%;
            height:28px;
            border:none;
            outline:0;
            border-radius:1px;
            border:1px solid #cbced4;
            gap:20px;
            box-sizing:border-box;
            padding:0px 10px;
            font-size:11px;
        }
        .card{
            border:none!important;
        }
        .input-text .input-div span{
            position:absolute;
            top:10px;
            left:10px;
            font-size:11px;
            transition:all 0.5s;
        }
        .input-div input:focus ~ span,.input-div input:valid ~ span  {
            top:-15px;
            left:6px;
            font-size:10px;
            font-weight:600; 
        }

        .input-div span{
            top:-15px;
            left:6px;
            font-size:10px;
        }
       .buttons button {
            height: 27px;
            width: 64px;
            border: none;
            border-radius: 1px;
            background-color: #0075ff;
            font-size: 11px;
            color: #fff;
            cursor: pointer;
        }
        .button_space{
            display:flex;
            gap:20px;
            
        }
        .button_space button:nth-child(1){
            background-color:#fff;
            color:#000;
            border:1px solid#000;
        }
        .user_card{
            margin-top:20px;
            margin-bottom:40px;
            height:200px;
            width:100%;
            border:1px solid #c7d3d9;
            border-radius:10px;
            display:flex;
            overflow:hidden;
            position:relative;
            box-sizing:border-box;
        }
        .user_card span{
            height:80px;
            width:100%;
            background-color:#dfeeff;
        }
        .circle{
            position:absolute;
            top:40px;
            left:60px;
        }
        .circle span{
            height:70px;
            width:70px;
            background-color:#fff;
            display:flex;
            justify-content:center;
            align-items:center;
            border:2px solid #fff;
            border-radius:50%;
        }
        .circle span img{
            width:100%;
            height:100%;
            border-radius:50%;
            object-fit:cover;
        }
        .social{
            display:flex;
            position:absolute;
            top:100px;
            right:10px;
        }
        .social span{
            height:30px;
            width:30px;
            border-radius:7px;
            background-color:#fff;
            border:1px solid #cbd6dc;
            display:flex;
            justify-content:center;
            align-items:center;
            margin-left:10px;
            color:#cbd6dc;

        }
        .social span i{
                cursor:pointer;
        }
        .heart{
            color:red !important;
        }
        .share{
                color:red !important;
        }
        .user_name{
            position:absolute;
            top:110px;
            margin:10px;
            padding:0 30px;
            display:flex;
            flex-direction:column;
            width:100%;
            
        } 
        .user_name h3{
            color:#4c5b68;
        }
        .detail{
            /*margin-top:10px;*/
           display:flex;
           justify-content:space-between;
           margin-right:50px;
        }
        .detail p{
            font-size:12px;
            font-weight:700;

        }
        .detail p a{
            text-decoration:none;
            color:blue;
        }

        .checkmark__circle {
          stroke-dasharray: 166;
          stroke-dashoffset: 166;
          stroke-width: 2;
          stroke-miterlimit: 10;
          stroke: #7ac142;
          fill: none;
          animation: stroke 0.6s cubic-bezier(0.65, 0, 0.45, 1) forwards;
        }

        .checkmark {
          width: 56px;
          height: 56px;
          border-radius: 50%;
          display: block;
          stroke-width: 2;
          stroke: #fff;
          stroke-miterlimit: 10;
          margin: 10% auto;
          box-shadow: inset 0px 0px 0px #7ac142;
          animation: fill .4s ease-in-out .4s forwards, scale .3s ease-in-out .9s both;
        }

        .checkmark__check {
          transform-origin: 50% 50%;
          stroke-dasharray: 48;
          stroke-dashoffset: 48;
          animation: stroke 0.3s cubic-bezier(0.65, 0, 0.45, 1) 0.8s forwards;
        }

        @keyframes stroke {
          100% {
            stroke-dashoffset: 0;
          }
        }
        @keyframes scale {
          0%, 100% {
            transform: none;
          }
          50% {
            transform: scale3d(1.1, 1.1, 1);
          }
        }
        @keyframes fill {
          100% {
            box-shadow: inset 0px 0px 0px 30px #7ac142;
          }
        }


        .warning{
            border:1px solid red !important;
        }


        /*right-side-end*/
        @media (max-width:750px) {
            .container{
                height:scroll;
               
                
            }
            .container .card {
                max-width: 350px;
                height:auto !important;
                margin:30px 0;
            }
            .container .card .right-side {
             width:100%;
                    
            }
             .input-text{
                 display:block;
             }
             
             .input-text .input-div{
          margin-top:20px;
            
        }

            .container .card .left-side {
                   
             display: none;
            }
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
    <div class="modal-body rounded-0">
     <!-- Start Form Area -->
    <div class="container">
        <div class="card mb-0 rounded-0">
            <form action="" method="POST" id="msform" enctype="multipart/form-data">

                <div class="form">
        
                <div class="right-side">
                  <div class="main active">
                     
                      <div class="text">
                          <h5 class="fw-bold m-0 p-0">Basic Information</h5>
                      </div>
                     
                      <div class="input-text">
                          <div class="input-div">
                          <label>First Name</label>
                              <input type="text" id="empfName" name="empfName" required="" require  />
                              <!-- <span>First Name</span> -->
                              
                          </div>
                        
                          <div class="input-div"> 
                            <label>Last Name</label>
                              <input type="text" name="emplName" id="emplName"   />
                              
                          </div>
                           <div class="input-div"> 
                            <label>User Name</label>
                              <input type="text" name="empUser" id="empUser" />
                              
                          </div>
                          <div class="input-div">
                            <label>Employee Code</label>
                              <input type="text" id="empcode" name="empcode"   />
                            
                          </div>
                      </div>
                      <div class="input-text">
                          
                          <div class="input-div">
                            <label>Password</label>
                              <input type="text" value="savoy123" id="emppassword" name="emppassword"    />
                             
                          </div>

                           <div class="input-div">
                            <label>Job Title</label>
                             <input id="empjobtitle" name="empjobtitle" type="text"   />
                            
                            </div>

                            <div class="input-div">
                              <label>Select Organization</label>
                                <select class="form-select" id="emporg" name="emporg"    >
                                                                     
                                </select>
                            </div>

                             <div class="input-div">
                                <label>Select Department</label>
                                  <select id="empdept" name="empdept"    >
                                     
                                  </select>

                             </div>
                      </div>
                      
                      <div class="input-text">
                              <div class="input-div">
                              <label>Select Designation</label>
                              <select id="empdesig" name="empdesig"   >
                                 
                              </select>
                              
                            </div>

                             <div class="input-div">
                                 <label>Select Location</label>
                                  <select id="empwloc" name="empwloc"  >
                                                                    
                                  </select>

                             </div>

                             <div class="input-div">
                              <label>Gross Salary</label>
                                <input id="empsalary" name="empsalary" type="text"   />
                               
                             </div>

                      </div>

                      <div class="input-text">

                          <div class="input-div">
                            <label>Joining Date</label>
                             <input id="empjoindate" name="empjoindate" placeholder="Joining Date" class="textbox-n" type="text" id="date" onfocus="(this.type='date')" onblur="(this.type='text')"    />
                          </div>

                          <div class="input-div">
                            <label>Email</label>
                              <input id="empemail" name="empemail" type="text"   />
                          </div>

                          <div class="input-div">
                            <label>Mobile No</label>
                               <input id="empcontact" name="empcontact" type="text"   />
                          </div>

                      </div>

                      <div class="input-text">

                          <div class="input-div">
                            <label>IP Phone</label>
                              <input id="empip" name="empip" type="text"   />
                          </div>

                          <div class="input-div">
                            <label>Employee Referrence</label>
                             <select id="empref"  name="empref"  >
                                                                    
                              </select>
                              
                          </div>

                          <div class="input-div">
                              <label>Reason for Leave Previous Job</label>
                              <input id="emleaveR" name="emleaveR" type="text"   />
                              
                          </div>
                      </div>
                      <div class="buttons">
                          <button class="next_button">Next Step</button>
                      </div>
                  </div>
                  <div class="main">
                      <div class="text">

                          <h5 class="fw-bold m-0 p-0">Personal Information</h5>
                         
                      </div>
                      <div class="input-text">

                          <div class="input-div">
                            <label>Select Home District</label>
                            <select id="emphomedist" name="emphomedist" required="" require  >
                              
                           </select>
                             
                          </div>


                          <div class="input-div"> 
                            

                              <textarea id="empPstAdd" name="empPstAdd" placeholder="Present Address"  ></textarea>
                             
                          </div>

                          <div class="input-div">
                               <textarea id="empPreAdd" name="empPreAdd" placeholder="Permanent Address"  ></textarea>
                              
                          </div>

                      </div>

                      <div class="input-text">

                          <div class="input-div">
                             <label>Home Phone</label>
                             <input id="emphomecont" name="emphomecont" type="text"   />
                             
                          </div>

                          <div class="input-div">
                             <label>Date of Birth</label>
                              <input id="empdob" name="empdob" placeholder="Date of Birth" class="textbox-n" type="text" onfocus="(this.type='date')" onblur="(this.type='text')"   />
                             
                          </div>

                          <div class="input-div">
                               <label>Marital Status</label>
                                <select id="empmarital" name="empmarital" >
                                    <option value="1" selected="">Single</option>
                                    <option value="2">Married</option>
                                    <option value="3">Widowed</option>
                                    <option value="4">Seperated</option>
                                    <option value="5">Unmarried</option>
                                </select>
                          </div>
                      </div>

                      <div class="input-text">
                          <div class="input-div">
                                  <label>Total Experience</label>
                                  <input id="emTolExperi" name="emTolExperi" type="text"   />   
                          </div>
                          <div class="input-div">
                                 <label>Select Blood Group</label>
                                 <select class="form-select" id="empBld" name="empBld"  >
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                 </select> 
                          </div>

                          <div class="input-div">
                               <label>NID</label>
                               <input id="empNid" name="empNid" type="text"   />
                              
                          </div>


                      </div>

                      <div class="input-text">

                          <div class="input-div">
                                <label>Driving License</label>
                                <input id="empdrilice" name="empdrilice" type="text"  />
                          </div>

                          <div class="input-div">
                              <label>Passport</label>
                               <input id="empPassport" name="empPassport" type="text"  />
                             
                          </div>

                          <div class="input-div">
                              <label>Mobile 1</label>
                               <input id="empcont1" name="empcont1" type="text"   />
                          </div>

                      </div>

                      <div class="input-text">
                          
                          <div class="input-div">
                              <label>Mobile 2</label>
                               <input id="empcont2" name="empcont2" type="text"  />
                          </div>

                          <div class="input-div">
                               <label>Personal Email</label>
                                <input id="empPerEmail" name="empPerEmail" type="email"  />
                          </div>

                          <div class="input-div" id="removeImg">
                              <input id="empPhoto" name="empPhoto" class="dropify" type="file" data-height="80"  data-allowed-file-extensions="jpg jpeg gif png" data-max-file-size="500k" />
                          </div>

                      </div>

                      <div class="input-text">
                          
                          <div class="input-div">
                            <label>Anniversary</label>
                             <input id="empAnni" name="empAnni" placeholder="Anniversary" class="textbox-n" type="text" onfocus="(this.type='date')" onblur="(this.type='text')"  />
                          </div>

                          <div class="input-div">
                              <label>Bank</label>
                              <input id="empBank" name="empBank" type="text"  />
                             
                          </div>

                          <div class="input-div">
                               <label>Bank Account</label>
                               <input id="empBankAc" name="empBankAc" type="text"  />
                          </div>
                      </div>

                      <div class="buttons button_space">
                          <button class="back_button">Back</button>
                          <button class="next_button">Next Step</button>
                      </div>
                  </div>
                  <div class="main">
                      <!-- <small><i class="fa fa-smile-o"></i></small> -->
                      <div class="text">
                          <h5 class="fw-bold m-0 p-0">Emergency Contact</h5>
                      </div>
                      <div class="input-text">

                          <div class="input-div">
                            <label>Name</label>
                              <input id="empEgName" name="empEgName" type="text" required="" require  />
                             
                          </div>

                          <div class="input-div"> 
                               <label>Relationship</label>
                               <input id="empEgRela" name="empEgRela" type="text"  />
                          </div>

                          <div class="input-div">
                               <textarea id="empEgAdd" name="empEgAdd" placeholder="Address" ></textarea>
                              
                          </div>

                      </div>

                      <div class="input-text">

                            <div class="input-div">
                              <label>Occupation</label>
                             <input id="empEgOccu" name="empEgOccu" type="text"  />
                             
                          </div>

                          <div class="input-div">
                            <label>Mobile 1</label>
                             <input id="empEgcontact1" name="empEgcontact1" type="text"   />
                             
                          </div>

                          <div class="input-div">
                            <label>Mobile 2</label>
                             <input id="empEgcontact2" name="empEgcontact2" type="text"   />
                             
                          </div>

                      </div>

                    <div class="text">
                          <h5 class="fw-bold m-0 p-0">Employee Relative</h5>
                    </div>

                      <div class="input-text">

                          <div class="input-div">
                              <label>Name</label>
                               <input id="empReName" name="empReName" type="text"   />
                            
                          </div>

                          <div class="input-div">
                             <label>Relationship</label>
                              <input id="empReRela" name="empReRela" type="text"   />
                             
                          </div>

                          <div class="input-div">
                               <textarea id="empReAdd" name="empReAdd" placeholder="Address" ></textarea>
                              
                          </div>

                      </div>

                      <div class="input-text">
                          
                          <div class="input-div">
                              <label>Occupation</label>
                               <input id="empReOccu" name="empReOccu" type="text"  />
                          </div>

                          <div class="input-div">
                            <label>Mobile 1</label>
                                <input id="empRecontact1" name="empRecontact1" type="text"  />
                                
                          </div>


                          <div class="input-div">
                               <label>Mobile 2</label>
                                <input id="empRecontact2" name="empRecontact2" type="text" />
                              
                          </div>

                      </div>

                        <div class="text">
                          <h5 class="fw-bold m-0 p-0">Employee Spouse</h5>
                        </div>

                        <div class="input-text">

                            <div class="input-div">
                               <label>Name</label>
                                <input id="empSpName" name="empSpName" type="text"  />
                               
                            </div>

                            <div class="input-div">
                              <label>Occupation</label>
                                <input id="empSgOccu" name="empSgOccu" type="text"  />
                               
                            </div>

                            <div class="input-div">
                              <label>Mobile</label>
                                <input id="empSpCont" name="empSpCont" type="text"  />
                               
                            </div>

                        </div>

                        <div class="input-text">
                            
                            <div class="input-div">
                              <label>NID</label>
                                 <input id="empSgNid" name="empSgNid" type="text"  />
                                 
                            </div>

                            <div class="input-div">
                                <label>Father Name</label>
                                 <input id="empSgFather" name="empSgFather" type="text"  />
                               
                            </div>

                            <div class="input-div">
                                 <label>Father Occupation</label>
                                  <input id="empEgFatherOcc" name="empEgFatherOcc" type="text"  />
                                 
                            </div>

                        </div>

                        <div class="input-text">

                           <div class="input-div">
                               <label>Father Mobile</label>
                                <input id="empEgFatherCont" name="empEgFatherCont" type="text"  />
                               
                           </div>


                            <div class="input-div">
                              <label>Mother Name</label>
                                <input id="empEgMother" name="empEgMother" type="text"  />
                                <span></span>
                            </div>

                            <div class="input-div">
                              <label>Mother Occupation</label>
                                  <input id="empEgMotherOccu" name="empEgMotherOccu" type="text"  />
                                 
                            </div>
                             <div class="input-div">
                              <label>Mother Phone</label>
                                  <input id="empEgMotherCont" name="empEgMotherCont" type="text"  />
                                 
                            </div>

                       </div>


                      <div class="buttons button_space">
                          <button class="back_button">Back</button>
                          <button class="submit_button" id="submit_button" type="submit">Submit</button>
                      </div>
                  </div>
          

              </div>
          </div>
        </form>
        
        </div>
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
         <script  src="../../assets/js/pagejs/validate.js" defer="defer"></script>
         <script src="../../assets/js/app.js"></script>
         <script src="../../assets/js/pagejs/employee.js"></script>
       
    </body>

</html>