

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>AIR</title>
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
        <!-- Left Sidenav -->
        <div class="left-sidenav">
            <!-- LOGO -->
            <div class="brand">
                <a href="index.html" class="logo">
                    <span>
                        <img src="assets/images/logo-sm.png" alt="logo-small" class="logo-sm">
                    </span>
                    <span>
                        <img src="assets/images/logo.png" alt="logo-large" class="logo-lg logo-light">
                        <img src="assets/images/logo-dark.png" alt="logo-large" class="logo-lg logo-dark">
                    </span>
                </a>
            </div>
            <!--end logo-->
            <div class="menu-content h-100" data-simplebar>
                <ul class="metismenu left-sidenav-menu">
                    <li class="menu-label mt-0">Main</li>
                    <li>
                        <a href="javascript: void(0);"> <i data-feather="home" class="align-self-center menu-icon"></i><span>Dashboard</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="index.html"><i class="ti-control-record"></i>Analytics</a></li>
                            <li class="nav-item"><a class="nav-link" href="sales-index.html"><i class="ti-control-record"></i>Sales</a></li> 
                        </ul>
                    </li>
    
                    <li>
                        <a href="javascript: void(0);"><i data-feather="grid" class="align-self-center menu-icon"></i><span>Apps</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li>
                                <a href="javascript: void(0);"><i class="ti-control-record"></i>Email <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="apps-email-inbox.html">Inbox</a></li>
                                    <li><a href="apps-email-read.html">Read Email</a></li>
                                </ul>
                            </li>  
                            <li class="nav-item"><a class="nav-link" href="apps-chat.html"><i class="ti-control-record"></i>Chat</a></li>
                            <li class="nav-item"><a class="nav-link" href="apps-contact-list.html"><i class="ti-control-record"></i>Contact List</a></li>
                            <li class="nav-item"><a class="nav-link" href="apps-calendar.html"><i class="ti-control-record"></i>Calendar</a></li>
                            <li class="nav-item"><a class="nav-link" href="apps-files.html"><i class="ti-control-record"></i>File Manager</a></li>
                            <li class="nav-item"><a class="nav-link" href="apps-invoice.html"><i class="ti-control-record"></i>Invoice</a></li>
                            <li class="nav-item"><a class="nav-link" href="apps-tasks.html"><i class="ti-control-record"></i>Tasks</a></li>
                            <li>
                                <a href="javascript: void(0);"><i class="ti-control-record"></i>Projects <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="apps-project-overview.html">Overview</a></li>                                    
                                    <li><a href="apps-project-projects.html">Projects</a></li>
                                    <li><a href="apps-project-board.html">Board</a></li>
                                    <li><a href="apps-project-teams.html">Teams</a></li>
                                    <li><a href="apps-project-files.html">Files</a></li>
                                    <li><a href="apps-new-project.html">New Project</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);"><i class="ti-control-record"></i>Ecommerce <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="apps-ecommerce-products.html">Products</a></li>                                    
                                    <li><a href="apps-ecommerce-product-list.html">Product List</a></li>
                                    <li><a href="apps-ecommerce-product-detail.html">Product Detail</a></li>
                                    <li><a href="apps-ecommerce-cart.html">Cart</a></li>
                                    <li><a href="apps-ecommerce-checkout.html">Checkout</a></li>                                    
                                </ul>
                            </li>
                        </ul>
                    </li> 
    
                    <li>
                        <a href="javascript: void(0);"><i data-feather="lock" class="align-self-center menu-icon"></i><span>Authentication</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="auth-login.html"><i class="ti-control-record"></i>Log in</a></li>
                            <li class="nav-item"><a class="nav-link" href="auth-register.html"><i class="ti-control-record"></i>Register</a></li>
                            <li class="nav-item"><a class="nav-link" href="auth-recover-pw.html"><i class="ti-control-record"></i>Recover Password</a></li>
                            <li class="nav-item"><a class="nav-link" href="auth-lock-screen.html"><i class="ti-control-record"></i>Lock Screen</a></li>
                            <li class="nav-item"><a class="nav-link" href="auth-404.html"><i class="ti-control-record"></i>Error 404</a></li>
                            <li class="nav-item"><a class="nav-link" href="auth-500.html"><i class="ti-control-record"></i>Error 500</a></li>
                        </ul>
                    </li> 
    
                    <hr class="hr-dashed hr-menu">
                    <li class="menu-label my-2">Components & Extra</li>
    
                    <li>
                        <a href="javascript: void(0);"><i data-feather="box" class="align-self-center menu-icon"></i><span>UI Kit</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li>
                                <a href="javascript: void(0);"><i class="ti-control-record"></i>UI Elements <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="ui-alerts.html">Alerts</a></li>                                    
                                    <li><a href="ui-avatar.html">Avatar</a></li>
                                    <li><a href="ui-buttons.html">Buttons</a></li>
                                    <li><a href="ui-badges.html">Badges</a></li>
                                    <li><a href="ui-cards.html">Cards</a></li>
                                    <li><a href="ui-carousels.html">Carousels</a></li>
                                    <li><a href="ui-check-radio.html"><span>Check & Radio</span></a></li>
                                    <li><a href="ui-dropdowns.html">Dropdowns</a></li>
                                    <li><a href="ui-grids.html">Grids</a></li> 
                                    <li><a href="ui-images.html">Images</a></li>
                                    <li><a href="ui-list.html">List</a></li>                                   
                                    <li><a href="ui-modals.html">Modals</a></li>
                                    <li><a href="ui-navs.html">Navs</a></li>
                                    <li><a href="ui-navbar.html">Navbar</a></li> 
                                    <li><a href="ui-offcanvas.html">Offcanvas <span class="badge badge-soft-success ms-auto">New</span></a></li> 
                                    <li><a href="ui-paginations.html">Paginations</a></li>   
                                    <li><a href="ui-popover-tooltips.html">Popover & Tooltips</a></li>                                
                                    <li><a href="ui-progress.html">Progress</a></li>
                                    <li><a href="ui-spinners.html">Spinners</a></li>
                                    <li><a href="ui-tabs-accordions.html">Tabs & Accordions</a></li>
                                    <li><a href="ui-toasts.html">Toasts</a></li>
                                    <li><a href="ui-typography.html">Typography</a></li>
                                    <li><a href="ui-videos.html">Videos</a></li>
                                </ul>
                            </li>  
                            <li>
                                <a href="javascript: void(0);"><i class="ti-control-record"></i>Advanced UI <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="advanced-animation.html">Animation</a></li>
                                    <li><a href="advanced-clipboard.html">Clip Board</a></li>
                                    <li><a href="advanced-highlight.html">Highlight</a></li>
                                    <li><a href="advanced-idle-timer.html">Idle Timer</a></li>
                                    <li><a href="advanced-kanban.html">Kanban</a></li>
                                    <li><a href="advanced-lightbox.html">Lightbox</a></li> 
                                    <li><a href="advanced-nestable.html">Nestable List</a></li>
                                    <li><a href="advanced-rangeslider.html">Range Slider</a></li>
                                    <li><a href="advanced-ratings.html">Ratings</a></li>
                                    <li><a href="advanced-ribbons.html">Ribbons</a></li>
                                    <li><a href="advanced-session.html">Session Timeout</a></li>
                                    <li><a href="advanced-sweetalerts.html">Sweet Alerts</a></li>                                    
                                </ul>
                            </li>  
                            <li>
                                <a href="javascript: void(0);"><i class="ti-control-record"></i>Forms <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="forms-advanced.html">Advance Elements</a></li>
                                    <li><a href="forms-elements.html">Basic Elements</a></li>
                                    <li><a href="forms-editors.html">Editors</a></li>
                                    <li><a href="forms-uploads.html">File Upload</a></li>
                                    <li><a href="forms-repeater.html">Repeater</a></li>
                                    <li><a href="forms-validation.html">Validation</a></li>
                                    <li><a href="forms-wizard.html">Wizard</a></li>
                                    <li><a href="forms-x-editable.html">X Editable</a></li>
                                    
                                </ul>
                            </li>  
                            <li>
                                <a href="javascript: void(0);"><i class="ti-control-record"></i>Charts <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="charts-apex.html">Apex</a></li>
                                    <li><a href="charts-chartjs.html">Chartjs</a></li>
                                    <li><a href="charts-flot.html">Flot</a></li>
                                    <li><a href="charts-morris.html">Morris</a></li>
                                </ul>
                            </li>  
                            <li>
                                <a href="javascript: void(0);"><i class="ti-control-record"></i>Tables <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="tables-basic.html">Basic</a></li>
                                    <li><a href="tables-datatable.html">Datatables</a></li>
                                    <li><a href="tables-editable.html">Editable</a></li>
                                    <li><a href="tables-responsive.html">Responsive</a></li>
                                    
                                </ul>
                            </li>  
                            <li>
                                <a href="javascript: void(0);"><i class="ti-control-record"></i>Icons <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    
                                    <li><a href="icons-dripicons.html">Dripicons</a></li>
                                    <li><a href="icons-feather.html">Feather</a></li>
                                    <li><a href="icons-fontawesome.html">Font awesome</a></li>
                                    <li><a href="icons-materialdesign.html">Material Design</a></li>
                                    <li><a href="icons-themify.html">Themify</a></li>
                                    <li><a href="icons-typicons.html">Typicons</a></li>
                                </ul>
                            </li>  
                            <li>
                                <a href="javascript: void(0);"><i class="ti-control-record"></i>Maps <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="maps-google.html">Google Maps</a></li>
                                    <li><a href="maps-leaflet.html">Leaflet Maps</a></li>
                                    <li><a href="maps-vector.html">Vector Maps</a></li>  
                                </ul>
                            </li>  
                            <li>
                                <a href="javascript: void(0);"><i class="ti-control-record"></i>Email Template <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="email-templates-alert.html">Alert Email</a></li>
                                    <li><a href="email-templates-basic.html">Basic Action Email</a></li>                                    
                                    <li><a href="email-templates-billing.html">Billing Email</a></li>
                                </ul>
                            </li>   
                        </ul>                        
                    </li>
    
                    <li>
                        <a href="widgets.html"><i data-feather="layers" class="align-self-center menu-icon"></i><span>Widgets</span><span class="badge badge-soft-success menu-arrow">New</span></a>
                    </li>
    
                    <li>
                        <a href="javascript: void(0);"><i data-feather="file-plus" class="align-self-center menu-icon"></i><span>Pages</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="pages-blogs.html"><i class="ti-control-record"></i>Blogs</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages-faqs.html"><i class="ti-control-record"></i>FAQs</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages-pricing.html"><i class="ti-control-record"></i>Pricing</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages-profile.html"><i class="ti-control-record"></i>Profile</a></li>   
                            <li class="nav-item"><a class="nav-link" href="pages-starter.html"><i class="ti-control-record"></i>Starter Page</a></li>                         
                            <li class="nav-item"><a class="nav-link" href="pages-timeline.html"><i class="ti-control-record"></i>Timeline</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages-treeview.html"><i class="ti-control-record"></i>Treeview</a></li>
                        </ul>
                    </li>           
                </ul>
    
                <div class="update-msg text-center">
                    <a href="javascript: void(0);" class="float-end close-btn text-muted" data-dismiss="update-msg" aria-label="Close" aria-hidden="true">
                        <i class="mdi mdi-close"></i>
                    </a>
                    <h5 class="mt-3">Mannat Themes</h5>
                    <p class="mb-3">We Design and Develop Clean and High Quality Web Applications</p>
                    <a href="javascript: void(0);" class="btn btn-outline-warning btn-sm">Upgrade your plan</a>
                </div>
            </div>
        </div>
        <!-- end left-sidenav-->
        

        <div class="page-wrapper">
            <!-- Top Bar Start -->
            <div class="topbar">            
                <!-- Navbar -->
                <nav class="navbar-custom">    
                    <ul class="list-unstyled topbar-nav float-end mb-0">  
                        <li class="dropdown hide-phone">
                            <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-bs-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <i data-feather="search" class="topbar-icon"></i>
                            </a>
                            
                            <div class="dropdown-menu dropdown-menu-end dropdown-lg p-0">
                                <!-- Top Search Bar -->
                                <div class="app-search-topbar">
                                    <form action="#" method="get">
                                        <input type="search" name="search" class="from-control top-search mb-0" placeholder="Type text...">
                                        <button type="submit"><i class="ti-search"></i></button>
                                    </form>
                                </div>
                            </div>
                        </li>                      

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-bs-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <i data-feather="bell" class="align-self-center topbar-icon"></i>
                                <span class="badge bg-danger rounded-pill noti-icon-badge">2</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-lg pt-0">
                            
                                <h6 class="dropdown-item-text font-15 m-0 py-3 border-bottom d-flex justify-content-between align-items-center">
                                    Notifications <span class="badge bg-primary rounded-pill">2</span>
                                </h6> 
                                <div class="notification-menu" data-simplebar>
                                    <!-- item-->
                                    <a href="#" class="dropdown-item py-3">
                                        <small class="float-end text-muted ps-2">2 min ago</small>
                                        <div class="media">
                                            <div class="avatar-md bg-soft-primary">
                                                <i data-feather="shopping-cart" class="align-self-center icon-xs"></i>
                                            </div>
                                            <div class="media-body align-self-center ms-2 text-truncate">
                                                <h6 class="my-0 fw-normal text-dark">Your order is placed</h6>
                                                <small class="text-muted mb-0">Dummy text of the printing and industry.</small>
                                            </div><!--end media-body-->
                                        </div><!--end media-->
                                    </a><!--end-item-->
                                    <!-- item-->
                                    <a href="#" class="dropdown-item py-3">
                                        <small class="float-end text-muted ps-2">10 min ago</small>
                                        <div class="media">
                                            <div class="avatar-md bg-soft-primary">
                                                <img src="assets/images/users/user-4.jpg" alt="" class="thumb-sm rounded-circle">
                                            </div>
                                            <div class="media-body align-self-center ms-2 text-truncate">
                                                <h6 class="my-0 fw-normal text-dark">Meeting with designers</h6>
                                                <small class="text-muted mb-0">It is a long established fact that a reader.</small>
                                            </div><!--end media-body-->
                                        </div><!--end media-->
                                    </a><!--end-item-->
                                    <!-- item-->
                                    <a href="#" class="dropdown-item py-3">
                                        <small class="float-end text-muted ps-2">40 min ago</small>
                                        <div class="media">
                                            <div class="avatar-md bg-soft-primary">                                                    
                                                <i data-feather="users" class="align-self-center icon-xs"></i>
                                            </div>
                                            <div class="media-body align-self-center ms-2 text-truncate">
                                                <h6 class="my-0 fw-normal text-dark">UX 3 Task complete.</h6>
                                                <small class="text-muted mb-0">Dummy text of the printing.</small>
                                            </div><!--end media-body-->
                                        </div><!--end media-->
                                    </a><!--end-item-->
                                    <!-- item-->
                                    <a href="#" class="dropdown-item py-3">
                                        <small class="float-end text-muted ps-2">1 hr ago</small>
                                        <div class="media">
                                            <div class="avatar-md bg-soft-primary">
                                                <img src="assets/images/users/user-5.jpg" alt="" class="thumb-sm rounded-circle">
                                            </div>
                                            <div class="media-body align-self-center ms-2 text-truncate">
                                                <h6 class="my-0 fw-normal text-dark">Your order is placed</h6>
                                                <small class="text-muted mb-0">It is a long established fact that a reader.</small>
                                            </div><!--end media-body-->
                                        </div><!--end media-->
                                    </a><!--end-item-->
                                    <!-- item-->
                                    <a href="#" class="dropdown-item py-3">
                                        <small class="float-end text-muted ps-2">2 hrs ago</small>
                                        <div class="media">
                                            <div class="avatar-md bg-soft-primary">
                                                <i data-feather="check-circle" class="align-self-center icon-xs"></i>
                                            </div>
                                            <div class="media-body align-self-center ms-2 text-truncate">
                                                <h6 class="my-0 fw-normal text-dark">Payment Successfull</h6>
                                                <small class="text-muted mb-0">Dummy text of the printing.</small>
                                            </div><!--end media-body-->
                                        </div><!--end media-->
                                    </a><!--end-item-->
                                </div>
                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                                    View all <i class="fi-arrow-right"></i>
                                </a>
                            </div>
                        </li>

                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-bs-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <span class="ms-1 nav-user-name hidden-sm">Nick</span>
                                <img src="assets/images/users/user-5.jpg" alt="profile-user" class="rounded-circle thumb-xs" />                                 
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#"><i data-feather="user" class="align-self-center icon-xs icon-dual me-1"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i data-feather="settings" class="align-self-center icon-xs icon-dual me-1"></i> Settings</a>
                                <div class="dropdown-divider mb-0"></div>
                                <a class="dropdown-item" href="#"><i data-feather="power" class="align-self-center icon-xs icon-dual me-1"></i> Logout</a>
                            </div>
                        </li>
                    </ul><!--end topbar-nav-->
        
                    <ul class="list-unstyled topbar-nav mb-0">                        
                        <li>
                            <button class="nav-link button-menu-mobile">
                                <i data-feather="menu" class="align-self-center topbar-icon"></i>
                            </button>
                        </li> 
                        <li class="creat-btn">
                            <div class="nav-link">
                                <a class=" btn btn-sm btn-soft-primary" href="#" role="button"><i class="fas fa-plus me-2"></i>New Task</a>
                            </div>                                
                        </li>                           
                    </ul>
                </nav>
                <!-- end navbar-->
            </div>
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