<?php
session_start();
if(empty($_SESSION['userId'])){
   header('location: ../../index');    
} else {
   

   $u_id = $_SESSION["userId"];
   $u_name = $_SESSION["name"];
   $dept_id = $_SESSION["dept_id"];
   $dept = $_SESSION["dept"];
   $org_id = $_SESSION["org_id"];
   $org = $_SESSION["org"];
   $org_address = $_SESSION["org_address"];
   $org_phone_no = $_SESSION["org_phone_no"];
   $emp_code = $_SESSION["emp_code"];
   $job_title = $_SESSION["job_title"];
   $desig_id = $_SESSION["desig_id"];
   $desig = $_SESSION["desig"];
   $wloc_id = $_SESSION["wloc_id"];
   $loc = $_SESSION["loc"];
   $loc_type = $_SESSION["loc_type"];
   $loc_sn = $_SESSION["loc_sn"];
   $role = $_SESSION["role"];
   $app_list = $_SESSION["apps"];
   $func_list = $_SESSION["funcs"];
   $photo = 'controller/'.$_SESSION["photo"];
   //print_r($_SESSION);
   session_write_close();
   $clr = getcwd();
   $callr = explode("\\", $clr);
   $caller = array_pop($callr);
   $appsMenu = get_menu_items();
   $get_title = get_title();
   include 'connection.php';


   $emp_ph_f = 'SELECT * FROM emp_personal_info WHERE emp_id = '.$u_id;
   $stmt55 = $con->prepare($emp_ph_f, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
   $stmt55->execute();
   $row55 = $stmt55->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT);

   $user_photo = $row55['photograph'];



   $today_date = date("Y-m-d"); 
}//end else
// print_r($app_list);
 function get_menu_items()
   {
      global $app_list, $caller;
      $retHtml = '';
      //print_r($app_list);
      

         

         
         if($caller == 'dashboard'){$active = 'nav-active';} else {$active = '';}

         $retHtml .= '
            <li class="active menues-bar '.$active.'">
               <a class="'.$active.'" href="../dashboard" target="_blank"> 
                  <i class="ti-arrow-right '.$active.'"></i>
                  <span class="active">Dashboard</span> 
               </a>
            </li>'; 

         if($caller == 'contacts'){$active = 'nav-active';} else {$active = '';}
      
         $retHtml .= '
            <li class="active menues-bar '.$active.'">
               <a class="'.$active.'" href="../contacts"> 
                  <i class="ti-arrow-right '.$active.'"></i>
                  <span class="active">Contacts</span> 
               </a>
            </li>'; 


      foreach($app_list as $ap)
      {
         //echo getcwd().' = '.$ap['name'];
         $highlight = ($ap['name'] == $caller) ? "nav-active" : "";


         $retHtml .= '
            <li class=" menues-bar '.$highlight.'">
               <a class="'.$highlight.'" href="'.$ap['link'].'">
                  <i class="ti-arrow-right '.$highlight.'"></i>
                  <span class="active">'.$ap['display_name'].'</span>
               </a>
            </li>';
      }

      return($retHtml);
           
      
   }


   //get title name
    function get_title()
   {
      global $app_list, $caller, $u_name;
      $title_name = '';
         $get_name_app_list = array_column($app_list,'name');
         $find_array_number_display_name = array_search($caller,$get_name_app_list);
         if($find_array_number_display_name == '' && $caller == 'dashboard'){
            $title_name = 'Dashboard';
         }
         elseif($find_array_number_display_name == '' && $caller == 'contacts'){
            $title_name = 'Contacts';
         }
         elseif($find_array_number_display_name == '' && $caller == 'profile'){
            $title_name = $u_name;
         }

        else {$title_name = $app_list[$find_array_number_display_name]['display_name'];}
        // echo $caller;
        // echo $title_name;
        return($title_name);
   }



?>
