<?php include('../../controller/sessions.php'); ?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>AIR - <?php echo $get_title; ?></title>
      <!--   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="../../plugins/select2/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="../../plugins/huebee/huebee.min.css" rel="stylesheet" type="text/css" />
        <link href="../../plugins/timepicker/bootstrap-material-datetimepicker.css" rel="stylesheet">
        <link href="../../plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" /> -->

        <!-- App css -->
        <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    

        <style type="text/css">

        .paging-nav {
          text-align: right;
          padding-top: 2px;
        }

        .paging-nav a {
          margin: auto 1px;
          text-decoration: none;
          display: inline-block;
          padding: 1px 7px;
          background: #91b9e6;
          color: white;
          border-radius: 3px;
        }

        .paging-nav .selected-page {
          background: #187ed5;
          font-weight: bold;
        }

        .paging-nav,
        #tableData {
        
        
         
        }
    </style>
        </head>
        <body>
        <table id="tableData" class="table table-bordered table-striped">
          <thead>
             <tr>
              <th>id</th>
              <th>first name</th>
              <th>surname</th>
              <th>number</th>
            </tr>
         </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Frank</td>
              <td>Shoulder</td>
              <td>1246</td>
            </tr>
            <tr>
              <td>2</td>
              <td>John</td>
              <td>Jameson</td>
              <td>4564</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Philip</td>
              <td>Jenkins</td>
              <td>4456</td>
            </tr>
            <tr>
              <td>4</td>
              <td>Maria</td>
              <td>Carlston</td>
              <td>4456</td>
            </tr>
            <tr>
              <td>5</td>
              <td>Julia</td>
              <td>Tampelton</td>
              <td>1246</td>
            </tr>
            <tr>
              <td>6</td>
              <td>Jane</td>
              <td>Conor</td>
              <td>4456</td>
            </tr>
            <tr>
              <td>7</td>
              <td>Susan</td>
              <td>Crane</td>
              <td>1246</td>
            </tr>
            <tr>
              <td>8</td>
              <td>Lucas</td>
              <td>Fenric</td>
              <td>4456</td>
            </tr>
            <tr>
              <td>8</td>
              <td>Mark</td>
              <td>Fenric</td>
              <td>4456</td>
            </tr>
            <tr>
              <td>9</td>
              <td>Hilde</td>
              <td>Mayer</td>
              <td>4456</td>
            </tr>
            <tr>
              <td>10</td>
              <td>John</td>
              <td>Tron</td>
              <td>1246</td>
            </tr>
            <tr>
              <td>11</td>
              <td>Hans</td>
              <td>Stark</td>
              <td>4564</td>
            </tr>
         </tbody>
        </table>
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> 
      <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
      <script type="text/javascript" src="paging.js"></script> 
      <script type="text/javascript">
            $(document).ready(function() {
                $('#tableData').paging({limit:5});
            });
        </script>

    </body>
 </html>