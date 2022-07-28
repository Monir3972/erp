  <?php 
      $file = '../../assets/images/2.jpg';
      if(file_exists($file))
      {
      echo "<img src='$file' class='img-fluid'>";
      }else{
      echo "<img src='https://via.placeholder.com/150C/O https://placeholder.com/'>";
      }
  ?>