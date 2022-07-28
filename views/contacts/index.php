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

       .results {
            display: flex;
          }

      .results p {
            flex: 1;
          }
      .employee_list p {
          font-size: 11px;
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
                <div class="col-md-3">
                   <input id="filter" placeholder="Search" type="text" class="form-control mb-2">
                </div>
                <div class="row" id="wrapper">
                </div>
              </div>
            </div> 
          </div>
          <?php include('../../include/footer.php') ?>
          <!-- jQuery  -->
           <script src="../../assets/js/jquery.min.js"></script>
          <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script> -->
           <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
           <script src="https://code.jquery.com/jquery-3.1.1.min.js"> </script>
           <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
        
          <!-- App js -->
          <script src="../../assets/js/app.js"></script>
          <!-- <script src="../../assets/js/paging.js?speed=1" defer></script> -->
          <script src="../../assets/js/pagejs/contacts.js"></script>
          <script type="text/javascript">
            $("#filter").keyup(function() {

              // Retrieve the input field text and reset the count to zero
              var filter = $(this).val(),
                count = 0;

              // Loop through the comment list
              $('#results div').each(function() {


                // If the list item does not contain the text phrase fade it out
                if ($(this).text().search(new RegExp(filter, "i")) < 0) {
                  $(this).hide();

                  // Show the list item if the phrase matches and increase the count by 1
                } else {
                  $(this).show();
                  count++;
                }

              });

            });

        </script>
    </body>
</html>
