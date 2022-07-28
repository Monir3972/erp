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

        /*.container .card{
            height:500px;
            width:800px;
            background-color:#fff;
            position:relative;
            box-shadow:0 15px 30px rgba(0,0,0,0.1);
            font-family: 'Poppins', sans-serif;
            border-radius:20px;
        }*/
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
        /*.progress-bar{
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

        /*.progress-bar li:last-child:after{*/
        /*  display:none;  */
        /*}*/
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
       /* .main{
            padding:40px;
        }*/
       /* .main small{
            display:flex;
            justify-content:center;
            align-items:center;
            margin-top:2px;
            height:30px;
            width:30px;
            background-color:#ccc;
            border-radius:50%;
            color:yellow;
            font-size:19px;
        }*/
       /* .text{
            margin-top:20px;
        }*/
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
            <form action="" method="POST" id="msform">

                <div class="form">
        
                <div class="right-side">
                  <div class="main active">
                     
                      <div class="text">
                          <h5 class="fw-bold m-0 p-0">Basic Information</h5>
                      </div>
                     
                      <div class="input-text">
                          <div class="input-div">
                         
                              <input type="text" id="empfName" name="empfName" require required="" />
                              <span>Name</span>
                              
                          </div>
                        
                          <div class="input-div"> 
                              <input type="text" name="emplName" id="emplName" require required />
                              <span>Last Name</span>
                          </div>
                          <div class="input-div">
                              <input type="text" id="empcode" name="empcode" require required />
                              <span>Employee Code</span>
                          </div>
                      </div>
                      <div class="input-text">
                          
                          <div class="input-div">
                              <input type="text" id="emppassword" name="emppassword" require required  />
                              <span>Password</span>
                          </div>

                           <div class="input-div">
                            <!-- <label>Job Title</label> -->
                             <input id="empjobtitle" name="empjobtitle" type="text" required require />
                             <span>Job Title</span>
                            </div>

                             <div class="input-div">
                              
                              <select id="empdesig" name="empdesig" required require  >
                                 
                              </select>
                              
                            </div>
                            <div class="input-div">
                                <select class="form-select" id="emporg" name="emporg" required >
                                                                     
                                </select>
                            </div>

                      </div>
                      
                      <div class="input-text">
                              <div class="input-div">
                                  <select id="empdept" name="empdept" required require >
                                     
                                  </select>
                             </div>

                             <div class="input-div">
                                  <select id="empwloc" name="empwloc" required require>
                                                                    
                                  </select>
                             </div>

                             <div class="input-div">
                                <input id="empsalary" name="empsalary" type="text" required="" require />
                                <span>Salary</span>
                             </div>

                      </div>

                      <div class="input-text">

                          <div class="input-div">
                              <input id="empjoindate" name="empjoindate" type="date" required="" require />
                              <span>Joining Date</span>
                          </div>

                          <div class="input-div">
                              <input id="empemail" name="empemail" type="text" required="" require />
                              <span>Email</span>
                          </div>

                          <div class="input-div">
                               <input id="empcontact" name="empcontact" type="text" required="" require />
                               <span>Mobile No</span>
                          </div>

                      </div>

                      <div class="input-text">

                          <div class="input-div">
                              <input id="empip" name="empip" type="text" required="" require />
                              <span>Ip Phone</span>
                          </div>

                          <div class="input-div">
                              <input id="empref" name="empref" type="text" required/>
                              <span>Employee Referrence</span>
                          </div>

                          <div class="input-div">
                              <input id="emleaveR" name="emleaveR" type="text"/>
                              <span>Reason for Leave Previous Job</span>
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
                            <select id="emphomedist" name="emphomedist" require required="">
                                <option value="1" selected="">Cumilla</option>
                                <option value="2">Dhaka</option>
                           </select>
                             
                          </div>


                          <div class="input-div"> 
                            

                              <textarea id="empPstAdd" name="empPstAdd" placeholder="Present Address" required="" require></textarea>
                             
                          </div>

                          <div class="input-div">
                               <textarea id="empPreAdd" name="empPreAdd" placeholder="Permanent Address" required="" require></textarea>
                              
                          </div>

                      </div>

                      <div class="input-text">

                          <div class="input-div">
                          
                             <input id="emphomecont" name="emphomecont" type="text" required="" require />
                              <span>Home Contact</span>
                          </div>

                          <div class="input-div">
                               <input id="empdob" name="empdob" type="text" require required="" />
                               <span>Date of Birth</span>
                          </div>

                          <div class="input-div">
                                <select id="empmarital" name="empmarital" require required="">
                                    <option value="1" selected="">Married</option>
                                    <option value="2">UnMarried</option>
                                </select>
                               
                          </div>

                      </div>


                      <div class="input-text">

                          <div class="input-div">
                                  <input id="emTolExperi" name="emTolExperi" type="text"/>
                                  <span>Total Experience</span>
                          </div>

                          <div class="input-div">
                                 <select class="form-select" id="empBld" name="empBld" require required="">
                                    <option value="1">A+</option>
                                    <option value="2">B+</option>
                                 </select>
                                
                          </div>

                          <div class="input-div">
                               <input id="empNid" name="empNid" type="text" required="" require />
                               <span>NID</span>
                          </div>


                      </div>

                      <div class="input-text">

                          <div class="input-div">
                                <input id="empdrilice" name="empdrilice" type="text" required="" />
                                <span>Driving Licence</span>
                          </div>

                          <div class="input-div">
                               <input id="empPassport" name="empPassport" type="text" required="" />
                               <span>Passport</span>
                          </div>

                          <div class="input-div">
                               <input id="empcont1" name="empcont1" type="text" required="" require />
                               <span>Contact 1</span>
                          </div>

                      </div>

                      <div class="input-text">
                          
                          <div class="input-div">
                               <input id="empcont2" name="empcont2" type="text" required="" require />
                               <span>Contact 2</span>
                          </div>

                          <div class="input-div">
                                <input id="empPerEmail" name="empPerEmail" type="email" required="" require />
                                <span>Personal Email</span>
                          </div>

                          <div class="input-div">
                              <input id="empPhoto" name="empPhoto" class="dropify" type="file" data-height="100"/>
                          </div>

                      </div>

                      <div class="input-text">
                          
                          <div class="input-div">
                               <input id="empAnni" name="empAnni" type="text" required=""  />
                               <span>Anniversary</span>
                          </div>

                          <div class="input-div">
                              <input id="empBank" name="empBank" type="text" required="" />
                              <span>Bank</span>
                          </div>

                          <div class="input-div">
                               <input id="empBankAc" name="empBankAc" type="text" required="" />
                               <span>Bank Account</span>
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
                              <input id="empEgName" name="empEgName" type="text" required="" require />
                              <span>Name</span>
                          </div>

                          <div class="input-div"> 
                               <input id="empEgRela" name="empEgRela" type="text" required="" require />
                              <span>Relationship</span>
                          </div>

                          <div class="input-div">
                               <textarea id="empEgAdd" name="empEgAdd" required=""></textarea>
                               <span>Address</span>
                          </div>

                      </div>

                      <div class="input-text">

                            <div class="input-div">
                             <input id="empEgOccu" name="empEgOccu" type="text" required="" />
                              <span>Occupation</span>
                          </div>

                          <div class="input-div">
                             <input id="empEgcontact1" name="empEgcontact1" type="text" required="" require />
                              <span>Contact 1</span>
                          </div>

                          <div class="input-div">
                             <input id="empEgcontact2" name="empEgcontact2" type="text" required="" require />
                              <span>Contact 2</span>
                          </div>

                      </div>

                    <div class="text">
                          <h5 class="fw-bold m-0 p-0">Employee Relative</h5>
                    </div>

                      <div class="input-text">

                          <div class="input-div">
                               <input id="empReName" name="empReName" type="text" required="" require />
                              <span>Name</span>
                          </div>

                          <div class="input-div">
                              <input id="empReRela" name="empReRela" type="text" required="" require />
                              <span>Relationship</span>
                          </div>

                          <div class="input-div">
                               <textarea id="empReAdd" name="empReAdd" required=""></textarea>
                               <span>Address</span>
                          </div>

                      </div>

                      <div class="input-text">
                          
                          <div class="input-div">
                               <input id="empReOccu" name="empReOccu" type="text" required="" />
                               <span>Occupation</span>
                          </div>

                          <div class="input-div">
                                <input id="empRecontact1" name="empRecontact1" type="text" required="" require />
                                <span>Contact 1</span>
                          </div>


                          <div class="input-div">
                                <input id="empRecontact2" name="empRecontact2" type="text" required="" require />
                                <span>Contact 2</span>
                          </div>

                      </div>

                        <div class="text">
                          <h5 class="fw-bold m-0 p-0">Employee Spouse</h5>
                        </div>

                        <div class="input-text">

                            <div class="input-div">
                                <input id="empSpName" name="empSpName" type="text" required="" require />
                                <span>Name</span>
                            </div>

                            <div class="input-div">
                                <input id="empSgOccu" name="empSgOccu" type="text" required="" />
                                <span>Occupation</span>
                            </div>

                            <div class="input-div">
                                <input id="empSpCont" name="empSpCont" type="text" required="" require />
                                <span>Contact</span>
                            </div>

                        </div>

                        <div class="input-text">
                            
                            <div class="input-div">
                                 <input id="empSgNid" name="empSgNid" type="text" required="" />
                                 <span>NID</span>
                            </div>

                            <div class="input-div">
                                 <input id="empSgFather" name="empSgFather" type="text" required="" require />
                                 <span>Father Name</span>
                            </div>

                            <div class="input-div">
                                  <input id="empEgFatherOcc" name="empEgFatherOcc" type="text" required="" />
                                  <span>Father Occupation</span>
                            </div>

                        </div>

                        <div class="input-text">

                           <div class="input-div">
                                <input id="empEgFatherCont" name="empEgFatherCont" type="text" required="" require />
                                <span>Father Contact</span>
                           </div>


                            <div class="input-div">
                                <input id="empEgMother" name="empEgMother" type="text" required="" />
                                <span>Mother Name</span>
                            </div>

                            <div class="input-div">
                                  <input id="empEgMotherOccu" name="empEgMotherOccu" type="text" required="" />
                                  <span>Mother Occupation</span>
                            </div>
                             <div class="input-div">
                                  <input id="empEgMotherCont" name="empEgMotherCont" type="text" required="" />
                                  <span>Mother Phone</span>
                            </div>

                       </div>


                      <div class="buttons button_space">
                          <button class="back_button">Back</button>
                          <button class="submit_button" type="submit">Submit</button>
                      </div>
                  </div>
                  
                  
                  
               <!--    <div class="main">
                      <small><i class="fa fa-smile-o"></i></small>
                      <div class="text">
                          <h2>User Photo</h2>
                          <p>Upload your profile picture and share yourself.</p>
                      </div>
                      <div class="user_card">
                          <span></span>
                          <div class="circle">
                              <span><img src="https://i.imgur.com/hnwphgM.jpg"></span>
                              
                          </div>
                          <div class="social">
                              <span><i class="fa fa-share-alt"></i></span>
                              <span><i class="fa fa-heart"></i></span>
                              
                          </div>
                          <div class="user_name">
                              <h3>Peter Hawkins</h3>
                              <div class="detail">
                                  <p><a href="#">Izmar,Turkey</a>Hiring</p>
                                  <p>17 last day . 94Apply</p>
                              </div>
                          </div>
                      </div>
                      <div class="buttons button_space">
                          <button class="back_button">Back</button>
                          <button class="submit_button">Submit</button>
                      </div>
                  </div> -->
          
                 <!--   <div class="main">
                       <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                           <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
                          <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                      </svg>
                       
                      <div class="text congrats">
                          <h2>Congratulations!</h2>
                          <p>Thanks Mr./Mrs. <span class="shown_name"></span> your information have been submitted successfully for the future reference we will contact you soon.</p>
                      </div>
                  </div> -->

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