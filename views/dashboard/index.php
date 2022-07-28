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
        <link href="../../plugins/select2/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="../../plugins/huebee/huebee.min.css" rel="stylesheet" type="text/css" />
        <link href="../../plugins/timepicker/bootstrap-material-datetimepicker.css" rel="stylesheet">
        <link href="../../plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />

        <!-- App css -->
        <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../../assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
        <link href="../../plugins/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
        <link href="../../assets/css/app.min.css" rel="stylesheet" type="text/css" />

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
            <div class="page-content">
                <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="row">
                                    <div class="col">
                                        <h4 class="page-title">Form Advanced</h4>
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="javascript:void(0);">Dastone</a></li>
                                            <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                                            <li class="breadcrumb-item active">Form Advanced</li>
                                        </ol>
                                    </div><!--end col-->
                                    <div class="col-auto align-self-center">
                                        <a href="#" class="btn btn-sm btn-outline-primary" id="Dash_Date">
                                            <span class="day-name" id="Day_Name">Today:</span>&nbsp;
                                            <span class="" id="Select_date">Jan 11</span>
                                            <i data-feather="calendar" class="align-self-center icon-xs ms-1"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-outline-primary">
                                            <i data-feather="download" class="align-self-center icon-xs"></i>
                                        </a>
                                    </div><!--end col-->  
                                </div><!--end row-->                                                              
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div><!--end row-->
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Select2 Components</h4>
                                    <p class="text-muted mb-0">Select2 is a jQuery based replacement for select boxes. 
                                        It supports searching, remote data sets, and infinite scrolling of results. 
                                    </p>
                                </div><!--end card-header-->
                                <div class="card-body bootstrap-select-1">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="mb-3">Single select</label>
                                            <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;">
                                                <option>Select</option>
                                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                                    <option value="AK">Alaska</option>
                                                    <option value="HI">Hawaii</option>
                                                </optgroup>
                                                <optgroup label="Pacific Time Zone">
                                                    <option value="CA">California</option>
                                                    <option value="NV">Nevada</option>
                                                    <option value="OR">Oregon</option>
                                                    <option value="WA">Washington</option>
                                                </optgroup>
                                                <optgroup label="Mountain Time Zone">
                                                    <option value="AZ">Arizona</option>
                                                    <option value="CO">Colorado</option>
                                                    <option value="ID">Idaho</option>
                                                    <option value="MT">Montana</option>
                                                    <option value="NE">Nebraska</option>
                                                    <option value="NM">New Mexico</option>
                                                    <option value="ND">North Dakota</option>
                                                    <option value="UT">Utah</option>
                                                    <option value="WY">Wyoming</option>
                                                </optgroup>
                                                <optgroup label="Central Time Zone">
                                                    <option value="AL">Alabama</option>
                                                    <option value="AR">Arkansas</option>
                                                    <option value="IL">Illinois</option>
                                                    <option value="IA">Iowa</option>
                                                    <option value="KS">Kansas</option>
                                                    <option value="KY">Kentucky</option>
                                                    <option value="LA">Louisiana</option>
                                                    <option value="MN">Minnesota</option>
                                                    <option value="MS">Mississippi</option>
                                                    <option value="MO">Missouri</option>
                                                    <option value="OK">Oklahoma</option>
                                                    <option value="SD">South Dakota</option>
                                                    <option value="TX">Texas</option>
                                                    <option value="TN">Tennessee</option>
                                                    <option value="WI">Wisconsin</option>
                                                </optgroup>
                                                <optgroup label="Eastern Time Zone">
                                                    <option value="CT">Connecticut</option>
                                                    <option value="DE">Delaware</option>
                                                    <option value="FL">Florida</option>
                                                    <option value="GA">Georgia</option>
                                                    <option value="IN">Indiana</option>
                                                    <option value="ME">Maine</option>
                                                    <option value="MD">Maryland</option>
                                                    <option value="MA">Massachusetts</option>
                                                    <option value="MI">Michigan</option>
                                                    <option value="NH">New Hampshire</option>
                                                    <option value="NJ">New Jersey</option>
                                                    <option value="NY">New York</option>
                                                    <option value="NC">North Carolina</option>
                                                    <option value="OH">Ohio</option>
                                                    <option value="PA">Pennsylvania</option>
                                                    <option value="RI">Rhode Island</option>
                                                    <option value="SC">South Carolina</option>
                                                    <option value="VT">Vermont</option>
                                                    <option value="VA">Virginia</option>
                                                    <option value="WV">West Virginia</option>
                                                </optgroup>
                                            </select>
                                        </div><!-- end col -->                                     
                                        <div class="col-md-6">
                                            <label class="mb-3">Multiple Select</label>
                                            <select class="select2 mb-3 select2-multiple" style="width: 100%" multiple="multiple" data-placeholder="Choose">
                                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                                    <option value="AK">Alaska</option>
                                                    <option value="HI">Hawaii</option>
                                                </optgroup>
                                                <optgroup label="Pacific Time Zone">
                                                    <option value="CA">California</option>
                                                    <option value="NV">Nevada</option>
                                                    <option value="OR">Oregon</option>
                                                    <option value="WA">Washington</option>
                                                </optgroup>
                                                <optgroup label="Mountain Time Zone">
                                                    <option value="AZ">Arizona</option>
                                                    <option value="CO">Colorado</option>
                                                    <option value="ID">Idaho</option>
                                                    <option value="MT">Montana</option>
                                                    <option value="NE">Nebraska</option>
                                                    <option value="NM">New Mexico</option>
                                                    <option value="ND">North Dakota</option>
                                                    <option value="UT">Utah</option>
                                                    <option value="WY">Wyoming</option>
                                                </optgroup>
                                                <optgroup label="Central Time Zone">
                                                    <option value="AL">Alabama</option>
                                                    <option value="AR">Arkansas</option>
                                                    <option value="IL">Illinois</option>
                                                    <option value="IA">Iowa</option>
                                                    <option value="KS">Kansas</option>
                                                    <option value="KY">Kentucky</option>
                                                    <option value="LA">Louisiana</option>
                                                    <option value="MN">Minnesota</option>
                                                    <option value="MS">Mississippi</option>
                                                    <option value="MO">Missouri</option>
                                                    <option value="OK">Oklahoma</option>
                                                    <option value="SD">South Dakota</option>
                                                    <option value="TX">Texas</option>
                                                    <option value="TN">Tennessee</option>
                                                    <option value="WI">Wisconsin</option>
                                                </optgroup>
                                                <optgroup label="Eastern Time Zone">
                                                    <option value="CT">Connecticut</option>
                                                    <option value="DE">Delaware</option>
                                                    <option value="FL">Florida</option>
                                                    <option value="GA">Georgia</option>
                                                    <option value="IN">Indiana</option>
                                                    <option value="ME">Maine</option>
                                                    <option value="MD">Maryland</option>
                                                    <option value="MA">Massachusetts</option>
                                                    <option value="MI">Michigan</option>
                                                    <option value="NH">New Hampshire</option>
                                                    <option value="NJ">New Jersey</option>
                                                    <option value="NY">New York</option>
                                                    <option value="NC">North Carolina</option>
                                                    <option value="OH">Ohio</option>
                                                    <option value="PA">Pennsylvania</option>
                                                    <option value="RI">Rhode Island</option>
                                                    <option value="SC">South Carolina</option>
                                                    <option value="VT">Vermont</option>
                                                    <option value="VA">Virginia</option>
                                                    <option value="WV">West Virginia</option>
                                                </optgroup>
                                            </select> 
                                        </div> <!-- end col -->                                                
                                    </div><!-- end row --> 
                                </div><!-- end card-body --> 
                            </div> <!-- end card -->                               
                        </div> <!-- end col -->
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Huebee Color</h4>
                                    <p class="text-muted mb-0">Huebee is a JavaScript library for creating user-centric color pickers. </p>
                                </div><!--end card-header-->
                                <div class="card-body bootstrap-select-1">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="mb-3">Simple mode</label> 
                                            <input class="form-control color-input" value="#228" />  
                                        </div>  <!-- end row -->                                  
                                        <div class="col-md-4">
                                            <label class="mb-3">RGB mode</label>                                            
                                            <input class="form-control " value="#024" data-huebee />
                                        </div><!-- end row -->
                                        <div class="col-md-4">
                                            <label class="mb-3">HSL mode</label>                                           
                                            <input class="form-control " value="#f7f8f9" data-huebee='{ "setBGColor": true, "saturations": 2 }' /> 
                                        </div><!-- end row -->
                                    </div><!-- end row -->
                                </div> <!-- end card-body -->
                            </div> <!-- end card -->                               
                        </div> <!-- end col -->
                    </div> <!-- end row --> 

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Bootstrap Material Datetimepicker</h4>
                                    <p class="text-muted mb-0">An example of Bootstrap Material DatePicker.</p> 
                                </div><!--end card-header-->
                                <div class="card-body">
                                    <div class="form-material">
                                        <label class="mb-3">Default Material Date Picker</label>
                                        <input type="text" class="form-control" placeholder="2017-06-04" id="mdate">
                                        
                                        <label class="my-3">Default Material Date Timepicker</label>
                                        <input type="text" id="date-format" class="form-control" placeholder="Saturday 24 June 2017 - 21:44">

                                        <label class="my-3">Time Picker</label>
                                        <input class="form-control" id="timepicker" placeholder="Check time">
                                        
                                        <label class="my-3">Min Date set</label>
                                        <input type="text" class="form-control" placeholder="set min date" id="min-date">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="my-3">Start Date</label>
                                                <input type="text" class="form-control" placeholder="Start date" id="date-start">
                                            </div><!--end col-->
                                            <div class="col-md-6">
                                                <label class="my-3">End Date</label>
                                                <input type="text" class="form-control" placeholder="End date" id="date-end">
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div>       
                                </div><!--end card-body-->
                            </div><!--end card-->                                
                        </div> <!-- end col -->
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Date Range Picker</h4>
                                    <p class="text-muted mb-0">A JavaScript component for choosing date ranges, dates and times.</p> 
                                </div><!--end card-header-->
                                <div class="card-body">
                                    <label class="mb-3">Basic Example</label>                             
                                    <div class="input-group">                                            
                                        <input type="text" class="form-control" name="dates">
                                        <span class="input-group-text"><i class="ti ti-calendar font-16"></i></span>
                                    </div>
                                    <label class="my-3">Simple Date Range Picker With a Callback</label>
                                    <div class="input-group">                                            
                                        <input type="text" class="form-control" name="daterange">
                                        <span class="input-group-text"><i class="ti ti-calendar font-16"></i></span>
                                    </div>
                                    <label class="my-3">Date Range Picker With Times</label>
                                    <div class="input-group">                                            
                                        <input type="text" class="form-control" name="datetimes">
                                        <span class="input-group-text"><i class="ti ti-calendar font-16"></i></span>
                                    </div>
                                    <label class="my-3">Single Date Picker</label>
                                    <div class="input-group">                                            
                                        <input type="text" class="form-control" name="birthday" value="10/24/1984">
                                        <span class="input-group-text"><i class="ti ti-calendar font-16"></i></span>
                                    </div>
                                    <label class="my-3">Predefined Date Ranges</label>
                                    <div class="input-group">  
                                        <input type="text"  id="reportrange" class="form-control" value="10/24/1984">
                                        <span class="input-group-text"><i class="ti ti-calendar font-16"></i></span>
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->  
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Bootstrap MaxLength</h4>
                                    <p class="text-muted mb-0">This plugin integrates by default with
                                        Twitter bootstrap using badges to display the maximum lenght of the
                                        field where the user is inserting text. 
                                    </p>
                                </div><!--end card-header-->
                                <div class="card-body"> 
                                    <label class="mb-2">Default usage</label>
                                    <p class="text-muted mb-3 font-13">
                                        The badge will show up by default when the remaining chars are 10 or less:
                                    </p>

                                    <input type="text" class="form-control" maxlength="25" name="defaultconfig" id="defaultconfig" />            
                                    <div class="mt-3">
                                        <label class="mb-2">Threshold value</label>
                                        <p class="text-muted mb-3 font-13">
                                            Do you want the badge to show up when there are 20 chars or less? Use the <code>threshold</code> option:
                                        </p>
                                        <input type="text" maxlength="25" name="thresholdconfig" class="form-control" id="thresholdconfig" />
                                    </div>

                                    <div class="mt-3">
                                        <label class="mb-2">Position</label>
                                        <p class="text-muted  mb-3 font-13">
                                            All you need to do is specify the <code>placement</code> option, with one of those strings. If none
                                            is specified, the positioning will be defauted to 'bottom'.
                                        </p>
                                        <input type="text" class="form-control" maxlength="25" name="placement" id="placement" />
                                    </div>                                    
                                    <div class="mt-3">
                                        <label class="mb-2">All the options</label>
                                        <p class="text-muted  mb-3 font-13">
                                            Please note: if the <code>alwaysShow</code> option is enabled, the <code>threshold</code> option is ignored.
                                        </p>
                                        <input type="text" class="form-control" maxlength="25" name="alloptions" id="alloptions" />
                                    </div>

                                    <div class="mt-3">
                                        <label class="mb-2">textareas</label>
                                        <p class="text-muted  mb-3 font-13">
                                            Bootstrap maxlength supports textarea as well as inputs. Even on old IE.
                                        </p>
                                        <textarea id="textarea" class="form-control" maxlength="225" rows="3" placeholder="This textarea has a limit of 225 chars."></textarea>
                                    </div>                                    
                                </div> <!-- end card-body -->
                            </div> <!-- end card -->                                       
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Bootstrap TouchSpin</h4>
                                    <p class="text-muted  mb-0">A mobile and touch friendly input spinner component for Bootstrap</p>
                                </div><!--end card-header-->
                                <div class="card-body">                                               
                                    <form>
                                        <div class="form-group">
                                            <label class="mb-3">Using data attributes</label>
                                            <input id="demo0" type="text" value="55" name="demo0" data-bts-min="0" data-bts-max="100" data-bts-init-val="" data-bts-step="1" data-bts-decimal="0" data-bts-step-interval="100" data-bts-force-step-divisibility="round" data-bts-step-interval-delay="500" data-bts-prefix="" data-bts-postfix="" data-bts-prefix-extra-class="" data-bts-postfix-extra-class="" data-bts-booster="true" data-bts-boostat="10" data-bts-max-boosted-step="false" data-bts-mousewheel="true" data-bts-button-down-class="btn btn-default" data-bts-button-up-class="btn btn-default"/>
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-3">Init with empty value:</label>
                                            <input id="demo3" type="text" value="" name="demo3">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-3">Example with postfix (large)</label>
                                            <input id="demo1" type="text" value="55" name="demo1">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-3">Value attribute is not set (applying settings.initval)</label>
                                            <input id="demo3_21" type="text" value="" name="demo3_21">
                                        </div>
                                        <div class="form-group mb-2">
                                            <label class="mb-3">With prefix </label>
                                            <input id="demo2" type="text" value="0" name="demo2" class=" form-control">
                                        </div>
                                        <div class="form-group mb-0">
                                            <label class="mb-3">Value is set explicitly to 33 (skipping settings.initval) </label>
                                            <input id="demo3_22" type="text" value="33" name="demo3_22">
                                        </div>  
                                    </form>
                                </div> <!-- end card-body -->
                            </div> <!-- end card -->
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                </div><!-- container -->

                <footer class="footer text-center text-sm-start">
                    &copy; <script>
                        document.write(new Date().getFullYear())
                    </script> Dastone <span class="text-muted d-none d-sm-inline-block float-end">Crafted with <i
                            class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
                </footer><!--end footer-->
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
        <script src="../../plugins/huebee/huebee.pkgd.min.js"></script>
        <script src="../../plugins/timepicker/bootstrap-material-datetimepicker.js"></script>
        <script src="../../plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
        <script src="../../plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js"></script>

        <script src="../../assets/js/jquery.forms-advanced.js"></script>

        <!-- App js -->
        <script src="../../assets/js/app.js"></script>
        
    </body>

</html>