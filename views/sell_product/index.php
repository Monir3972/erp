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

        <link href="../../plugins/select2/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="../../plugins/huebee/huebee.min.css" rel="stylesheet" type="text/css" />
        <link href="../../plugins/timepicker/bootstrap-material-datetimepicker.css" rel="stylesheet">
        <link href="../../plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
        <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
        <!-- <link href="../../assets/css/jquery.sortableTable.css" rel="stylesheet" type="text/css" /> -->
        <link href="../../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../../assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
        <link href="../../plugins/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
        <link href="../../assets/css/app.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/brands.min.css" integrity="sha512-OivR4OdSsE1onDm/i3J3Hpsm5GmOVvr9r49K3jJ0dnsxVzZgaOJ5MfxEAxCyGrzWozL9uJGKz6un3A7L+redIQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <style type="text/css">

          tfoot {
              position:fixed!important;
              background-color:#000!important;
              color:#fff!important;
              width: 100%;
           }
           tfoot {bottom:0!important;}
          .btn-group-sm>.btn, .btn-sm {
              padding: 2px 5px!important;
              font-size: 11px!important;
              line-height: 1.5!important;
              border-radius: 0!important;
          }
          .btn-success {
              color: #fff!important;
              background-color: #17393f!important;
              border-color: #17393f!important;
          }

         .table td {
              font-size: 16px;
          }
          .table th {
                font-size: 15px!important;
            }
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
          .global-footer {
              position: fixed;
              /*max-width: 83.3%;*/
              /* width: 100%; */
              bottom: 0;
              /* left: 0; */
               padding: 1em; 
              /*height: 30px;*/
          }
          .product_image{
                  width: 106px;
              }
          .product_name{
              width: 250px;
            }
         /* .product_quantity, .tot_price, .price{
            width: 180px
          }*/
          .footer {
             border-top: 0!important;
              color: #fff!important;
          }
          .text-muted {
            color: #fff!important;
        }
        .card {
          
            border: none!important;
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
           @media(max-width: 820px){
           .global-footer {
              position: fixed;
              max-width: 86%!important;
              /* width: 100%; */
              bottom: 0;
              /* left: 0; */
               padding: 1em; 
              /*height: 30px;*/
          }
          .responsive_table{
            margin-top: 47px;
          }
          }
            @media(max-width: 1180px){
           .global-footer {
              position: fixed;
              max-width: 80%;
              /* width: 100%; */
              bottom: 0;
              /* left: 0; */
               padding: 1em; 
              /*height: 30px;*/
          }
          .responsive_table{
            margin-top: 47px;
          }
           #myInput{
             position: relative;
              top: 43px;
              left: -176%;
          }
          }
            @media(max-width: 1024px){
           .global-footer {
              position: fixed;
              max-width: 92%;
              /* width: 100%; */
              bottom: 0;
              /* left: 0; */
               padding: 1em; 
              /*height: 30px;*/
          }
          .responsive_table{
            margin-top: 47px;
          }
          #myInput{
             position: relative;
              top: 42px;
              left: -184%;
          }
          }
          @media(max-width: 768px){
          .card{
          width: 70%;
          }
        
           .responsive_table{
            margin-top: 47px;
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
            .input-counter {
                max-width: 150px;
                min-width: 150px;
                text-align: center;
                position: relative;
              }
              .input-counter span {
                top: 0;
                width: 40px;
                height: 100%;
                font-size: 15px;
                cursor: pointer;
                line-height: 50px;
                position: absolute;
                color: var(--paragraphColor);
                background-color: transparent;
                -webkit-transition: var(--transition);
                transition: var(--transition);
              }
              .input-counter span.minus-btn {
                left: 0;
                border-right: 1px solid #eeeeee;
              }
              .input-counter span.plus-btn {
                right: 0;
                border-left: 1px solid #eeeeee;
              }
              .input-counter span:hover {
                color: var(--primaryColor);
              }
              .input-counter input {
                outline: 0;
                width: 100%;
                height: 47px;
                display: block;
                text-align: center;
                color: var(--blackColor);
                border: 1px solid #eeeeee;
                background-color: var(--whiteColor);
                font-size: 16px!important;
                font-weight: 600;
              }
              .input-counter input::placeholder {
                color: var(--blackColor);
              }
                .input-counter1 {
                max-width: 150px;
                min-width: 150px;
                text-align: center;
                position: relative;
              }
              .input-counter1 span {
                top: 0;
                width: 40px;
                height: 100%;
                font-size: 15px;
                cursor: pointer;
                line-height: 50px;
                position: absolute;
                color: var(--paragraphColor);
                background-color: transparent;
                -webkit-transition: var(--transition);
                transition: var(--transition);
              }
              .input-counter1 span.minus-btn1 {
                left: 0;
                border-right: 1px solid #eeeeee;
              }
              .input-counter1 span.plus-btn1 {
                right: 0;
                border-left: 1px solid #eeeeee;
              }
              .input-counter1 span:hover {
                color: var(--primaryColor);
              }
              .input-counter1 input {
                outline: 0;
                width: 100%;
                height: 47px;
                display: block;
                text-align: center;
                color: var(--blackColor);
                border: 1px solid #eeeeee;
                background-color: var(--whiteColor);
                font-size: 16px!important;
                font-weight: 600;
              }
              .input-counter1 input::placeholder {
                color: var(--blackColor);
              }

              .input-counter2 {
                max-width: 150px;
                min-width: 150px;
                text-align: center;
                position: relative;
              }
              .input-counter2 span {
                top: 0;
                width: 40px;
                height: 100%;
                font-size: 15px;
                cursor: pointer;
                line-height: 50px;
                position: absolute;
                color: var(--paragraphColor);
                background-color: transparent;
                -webkit-transition: var(--transition);
                transition: var(--transition);
              }
              .input-counter2 span.minus-btn2 {
                left: 0;
                border-right: 1px solid #eeeeee;
              }
              .input-counter2 span.plus-btn2 {
                right: 0;
                border-left: 1px solid #eeeeee;
              }
              .input-counter2 span:hover {
                color: var(--primaryColor);
              }
              .input-counter2 input {
                outline: 0;
                width: 100%;
                height: 47px;
                display: block;
                text-align: center;
                color: var(--blackColor);
                border: 1px solid #eeeeee;
                background-color: var(--whiteColor);
                font-size: 16px!important;
                font-weight: 600;
              }
              .input-counter2 input::placeholder {
                color: var(--blackColor);
              }
              /* Medium devices (landscape tablets, 768px and up) */
            @media only screen and (max-width: 768px) {
              .left-sidenav{
                display: none;
              }
             .card {
                  width: 100%!important;
              }
            }
              @media only screen and (max-width: 820px) {
              .left-sidenav{
                display: none;
              }
             .card {
                  width: 100%!important;
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
             
                <div class="container">
                    <div class="row">
                    <div class="col-md-12 p-2">
                      <div class="card rounded-0">
                        <div class="card-body p-0 m-0">
                          <div class="col-md-3 mx-auto">
                            <input id="myInput" type="text" class="m-2 form-control responsive_search" placeholder="Search Product"> 
                          </div>
                          <form action="" method="POST">  
                          <div class="table-responsive">  
                            <table id="myTable" class="table table-bordered responsive_table">
                              <thead>
                                <tr>
                                  <th>Product Image</th>
                                  <th>Name & Price</th>
                                  <th>Carton</th>
                                  <th>Pieces</th>
                                  <th>Total</th>
                                </tr>
                              </thead>
                              <tbody> 
                              <?php
                                $sql = "SELECT * FROM cat_wise_products_list";
                                // $sql = "SELECT * FROM products";
                                $stmt = $con->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
                                $stmt->execute();
                                // $c = 1;
                              
                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT)) 
                                  { ?>
                             
                                   <tr> 
                                        <td class="product_image"><img  src="../../assets/images/istockphoto-1147544807-612x612.jpg" align = "center" class="img-fluid"></td>
                                        <td class="product_name"><?= $row['prod_name'] ?>
                                        <br>
                                          <span class="price"><?= $row['ddp'] ?></span>
                                        </td>
                                        <td class="">
                                        <div class="input-counter1">
                                         <span class="minus-btn1"><i class="fa fa-minus"></i></span>
                                         <input type="text" class="quantity1" name="quantity1[]" value="0">
                                         <span class="plus-btn1"><i class="fa fa-plus"></i></span>
                                       </div>
                                        </td>
                                        <td class="">
                                        <div class="input-counter2">
                                         <span class="minus-btn2"><i class="fa fa-minus"></i></span>
                                         <input type="text" class="quantity2" name="quantity2[]" value="0">
                                         <span class="plus-btn2"><i class="fa fa-plus"></i></span>
                                       </div>
                                        </td>

                                        <td class="tot_price">0</td>
                                     </tr>
                                     <?php
                                      // $c++;
                                     }

                                    ?>
                              <tfoot class="">
                              <tr>
                               <th colspan="4"  class="p-3">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                               </th>
                              </tr>
                            </tfoot>
                              </tbody>
                           
                            </table>
                             <!--  <div class="container global-footer bg-secondary text-white small align-items-center">
                                  <div class="row">
                                    <div class="col-md-2">
                                      <a href="" class="btn btn-success btn-sm">View Offer</a>
                                    </div>
                                   <div class="col-md-3 offset-md-7" style="padding-left: 60px">
                                      <div class="small">
                                        <p>In Total: <span id="in_total">0</span></p>
                                        <button type="submit"  class="btn btn-success btn-sm">Order</button>
                                     </div>
                                    </div>
                                  </div>
                                </div>   -->
                           <!--    <div class="container-fluid global-footer bg-secondary text-white small">
                                <div class="row">
                                  <div class="col-md-3">
                                    <a href="" class="btn btn-primary btn-sm">View Offer</a>
                                  </div>
                                 <div class="col-md-3 offset-md-6">
                                    <div class="small">
                                      <p>In Total <span id="in_total">0</span></p>
                                      <button type="submit" class="btn btn-primary btn-sm" name="submit">Order</button>
                                   </div>
                                  </div>
                                </div>
                              </div>   -->
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>   
              <!--   <div class="container-fluid global-footer bg-secondary text-white small p-2">
                  <div class="row">
                    <div class="col-md-3">
                      <a href="" class="btn btn-primary btn-sm">View Offer</a>
                    </div>
                   <div class="col-md-3 offset-md-6">
                      <div class="small">
                        <p>In Total <span id="in_total">0</span></p>
                        <button type="submit" class="btn btn-primary btn-sm" name="submit">Order</button>
                     </div>
                    </div>
                  </div>
                </div>  -->   
               
            </div>
          </div>
        <?php include('../../include/footer.php') ?>
          <!-- jQuery  -->
            <!-- Plugins css -->
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->
          <script src="../../assets/js/jquery.min.js"></script>
          <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script> -->
          <script src="../../assets/js/bootstrap.bundle.min.js"></script>
          <script src="../../assets/js/metismenu.min.js"></script>
          <script src="../../assets/js/waves.js"></script>
          <script src="../../assets/js/feather.min.js"></script>
          <script src="../../assets/js/simplebar.min.js"></script>
          <script src="../../assets/js/moment.js"></script>
          <script src="../../plugins/daterangepicker/daterangepicker.js"></script>

          <!-- Plugins js -->
        
          <script src="../../plugins/select2/select2.min.js"></script>

          <!-- not necessary for select 2 option -->
          <script src="../../plugins/huebee/huebee.pkgd.min.js"></script>
          <script src="../../plugins/timepicker/bootstrap-material-datetimepicker.js"></script>
          <script src="../../plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
          <script src="../../plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js"></script>
          <script src="../../assets/js/jquery.forms-advanced.js"></script>
          <script src="../../assets/js/app.js"></script>

        <script>
          $('.quantity').change(function() {
            var in_total = 0;
            
            var row = $(this).closest('tr');
            var price = Number(row.find('.price').text());
            var quantity = Number(row.find('.quantity').val());
            // alert(quantity);
            var tot_price = quantity * price;
            row.find('.tot_price').text(tot_price);
            in_total += tot_price;
            row.siblings().each(function() {
                in_total += Number($(this).find('.tot_price').text());
            });   
            $('#in_total').text(in_total);
        });
        </script>
        <script type="text/javascript">
             $('.input-counter').each(function() {
              var spinner = jQuery(this),
              input = spinner.find('input[type="text"]'),
              btnUp = spinner.find('.plus-btn'),
              btnDown = spinner.find('.minus-btn'),
              min = input.attr('min'),
              max = input.attr('max');
              btnUp.on('click', function() {
                var oldValue = parseFloat(input.val());
                if (oldValue >= max) {
                  var newVal = oldValue;
                } else {
                  var newVal = oldValue + 1;
                 }
                 spinner.find("input").val(newVal);
                 spinner.find("input").trigger("change");
                });
                btnDown.on('click', function() {
                  var oldValue = parseFloat(input.val());
                  if (oldValue <= min) {
                    var newVal = oldValue;
                  } else {
                    var newVal = oldValue - 1;
                  }
                  spinner.find("input").val(newVal);
                  spinner.find("input").trigger("change");
               });
            });

        </script>
         <script type="text/javascript">
             $('.input-counter1').each(function() {
              var spinner = jQuery(this),
              input = spinner.find('input[type="text"]'),
              btnUp = spinner.find('.plus-btn1'),
              btnDown = spinner.find('.minus-btn1'),
              min = input.attr('min'),
              max = input.attr('max');
              btnUp.on('click', function() {
                var oldValue = parseFloat(input.val());
                if (oldValue >= max) {
                  var newVal = oldValue;
                } else {
                  var newVal = oldValue + 1;
                 }
                 spinner.find("input").val(newVal);
                 spinner.find("input").trigger("change");
                });
                btnDown.on('click', function() {
                  var oldValue = parseFloat(input.val());
                  if (oldValue <= min) {
                    var newVal = oldValue;
                  } else {
                    var newVal = oldValue - 1;
                  }
                  spinner.find("input").val(newVal);
                  spinner.find("input").trigger("change");
               });
            });

        </script>
         <script type="text/javascript">
             $('.input-counter2').each(function() {
              var spinner = jQuery(this),
              input = spinner.find('input[type="text"]'),
              btnUp = spinner.find('.plus-btn2'),
              btnDown = spinner.find('.minus-btn2'),
              min = input.attr('min'),
              max = input.attr('max');
              btnUp.on('click', function() {
                var oldValue = parseFloat(input.val());
                if (oldValue >= max) {
                  var newVal = oldValue;
                } else {
                  var newVal = oldValue + 1;
                 }
                 spinner.find("input").val(newVal);
                 spinner.find("input").trigger("change");
                });
                btnDown.on('click', function() {
                  var oldValue = parseFloat(input.val());
                  if (oldValue <= min) {
                    var newVal = oldValue;
                  } else {
                    var newVal = oldValue - 1;
                  }
                  spinner.find("input").val(newVal);
                  spinner.find("input").trigger("change");
               });
            });

        </script>
      <script>
      $(document).ready(function(){
        $("#myInput").on("keyup", function() {
          var value = $(this).val().toLowerCase();
          $("#myTable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
          });
        });
      });
      </script>
    </body>

</html>

