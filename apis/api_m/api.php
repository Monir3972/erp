<?php
include ('../../controller/connection.php');

$return_data = array();

session_start();
$uid = $_SESSION["userId"];
$dept_id = $_SESSION["dept_id"];
$wloc_id = $_SESSION["wloc_id"];
// $id = $_SESSION["id"];
session_write_close();
$return_data = array();

$req = isset($_POST['req']) ? $_POST['req'] : 0;
$param = isset($_POST['param']) ? $_POST['param'] : 0;
$data = isset($_POST['data']) ? $_POST['data'] : 0;
$field_list = isset($_POST['get']) ? $_POST['get'] : '*';
$filter = isset($_POST['filter']) ? $_POST['filter'] : '';
$multi_select = isset($_POST['msel']) ? $_POST['msel'] : 0;
$match_id = isset($_POST['match']) ? $_POST['match'] : 0;

switch ($req)
{
        //  for employee list
        
    case '1':
        $table = 'emp_list';
    break;

        // for organization name
        
    case '2':
        $table = 'organizations';
    break;

        // for employees infos
        
    case '3':
        $table = 'employees';
    break;

        // for employee emergency table
        
    case '4':
        $table = 'emp_emergency_contact';
    break;

        // for employee personal infos table
        
    case '5':
        $table = 'emp_personal_info';
    break;

        // for employee relative infos table
        
    case '6':
        $table = 'emp_relatives';
    break;

        // for employee spouse infos table
        
    case '7':
        $table = 'emp_spouse';
    break;

        // for departments infos table
        
    case '8':
        $table = 'departments';
    break;

        // for organization infos table
        
    case '9':
        $table = 'organizations';
    break;

        // for location infos table
        
    case '10':
        $table = 'locations';
    break;

        // for designation infos table
        
    case '11':
        $table = 'designations';
    break;

    case '12':
        $table = 'districts';
    break;

    default:
        $table = '';

}

// parameter
// ------------------------------------------------------------------
switch ($param)
{

        // for contacts list
        
    case '1':
        $sql = 'SELECT * FROM ' . $table .  ' WHERE is_active = 1';
        // $sql = 'SELECT * FROM ' . $table . ' WHERE is_active = 1' 'LIMIT' .$limit ;
         // $sql ='SELECT * FROM emp_list WHERE is_active = 1 LIMIT 3;'
        // $sql .= 'Limit 3';
        $return_data = getHTML_contact_list($sql, true);
    break;

        // for organization list
        
    case '2':
        $sql = 'SELECT * FROM ' . $table . ' WHERE is_active = 1';
        $return_data = getHTML_organization_list_Table($sql, true);
    break;

        // for employees infos
        
    case '3':
        $sql = 'SELECT *,(SELECT name from organizations WHERE id=`org_id`) as company, (SELECT name from departments WHERE id = `dept_id`) AS department , (SELECT name from locations WHERE id = `wloc_id`) AS location , (SELECT name from designations WHERE id = `desig_id`) AS designation FROM employees WHERE id = "' . $uid . '"';
        $return_data = getHTML_profile_employees($sql, true);
    break;

        // for employee emergency table
        
    case '4':
        $sql = 'SELECT * FROM ' . $table . ' WHERE emp_id = ' . $uid;
        $return_data = getHTML_profile_emer_employees($sql, true);
    break;

        // for employee personal infos table
        
    case '5':
        $sql = 'SELECT * FROM ' . $table . ' WHERE emp_id = ' . $uid;
        $return_data = getHTML_profile_personal_employees($sql, true);
    break;

        // for employee relative infos table
        
    case '6':
        $sql = 'SELECT * FROM ' . $table . ' WHERE emp_id = ' . $uid;
        $return_data = getHTML_profile_relative_employees($sql, true);
    break;

        // for employee spouse infos table
        
    case '7':
        $sql = 'SELECT * FROM ' . $table . ' WHERE emp_id = ' . $uid;
        $return_data = getHTML_profile_spouse_employees($sql, true);
    break;

        // for profile list
        
    case '8':
        $sql = 'SELECT * FROM ' . $table . ' WHERE id = ' . $uid;
        $return_data = getHTML_profile_list_employees($sql, true);
    break;

        // for profile list
        
    case '9':
        $sql = 'SELECT * FROM ' . $table;
        // $sql .= ($filter!='')? ' AND '.$filter : '' ;
        $return_data = getSelectHTMLDept($sql, $match_id, '', $multi_select, true);
    break;

        // for location list
        
    case '10':
        $sql = 'SELECT * FROM ' . $table;
        // $sql .= ($filter!='')? ' AND '.$filter : '' ;
        $return_data = getSelectHTMLDept($sql, $match_id, '', $multi_select, true);
    break;

        // for designation list
        
    case '11':
        $sql = 'SELECT * FROM ' . $table;
        // $sql .= ($filter!='')? ' AND '.$filter : '' ;
        $return_data = getSelectHTMLDept($sql, $match_id, '', $multi_select, true);
    break;

    case '12':
        $sql = 'SELECT * FROM ' . $table;
        // $sql .= ($filter!='')? ' AND '.$filter : '' ;
        $return_data = getSelectHTMLDept($sql, $match_id, '', $multi_select, true);
    break;

    case '13': //department list
        $multi_level_select = '<option value="0">-- Select Department --</option>';
        if ($filter != '') getSelectMultilevel(0, '', $table, 'sub_of', 'id', 'id', $field_list, true, 0, true, $filter, $match_id,);
        else getSelectMultilevel(0, '', $table, 'sub_of', 'id', 'id', $field_list, true, $match_id);
        $return_data = $multi_level_select;
        break;

    case '14':

        $sql = 'SELECT * FROM ' . $table . ' WHERE is_active = 1';
        // echo $sql;
        $sql .= ($filter != '') ? ' AND ' . $filter : '';
        $return_data = getSelectHTMLDept($sql, $match_id, '', $multi_select, true);
        break;

    case '15':

        $sql = 'SELECT * FROM ' . $table . ' WHERE emp_id = ' . $uid;
        $return_data = getHTML_profile_relative_employees_edit($sql, true);
        break;

    case '16':

        $sql = 'SELECT * FROM ' . $table . ' WHERE emp_id = ' . $uid;
        $return_data = getHTML_profile_emergency_edit($sql, true);
        // echo $sql;
        break;

         case '17':
        $sql = 'SELECT * FROM ' . $table . ' WHERE is_active = 1';
        $return_data = getHTML_employeeRefference_list_Table($sql, true);
        break;

        case '18':
        $sql = 'SELECT * FROM ' . $table . ' WHERE is_active = 1';
        $return_data = getHTML_contact_list_Table($sql, true);
        break;

        case '19':
        $sql = 'SELECT * FROM ' . $table . ' WHERE is_active = 1';
        $return_data = getHTML_contact_emplist_Table($sql, true);
        break;
    }

    echo json_encode($return_data);

    //Start function for get contact list profile
    function getHTML_contact_list($sql)
    {
        global $con;
        try
        {
            $bHTML = '';
            $stmt = $con->prepare($sql, array(
                PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL
            ));
            $stmt->execute();
        
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT))
            {
                $bHTML .= '
        
                    <div class="col-md-4" id="results">
                       <div class="card">
                         <div class="card-body">
                          <div class="container">
                            <div class="row">
                              <div class="col-md-4 d-block">
                                 <img src="https://via.placeholder.com/150" class="img-fluid">
                              </div>
                              <div class="col-md-8 p-2 employee_list">
                                  <p class="m-0 p-0"> Name: '.$row['name'].'</p>
                                  <p class="m-0 p-0"> Department: '.$row['dept'].'</p>
                                  <p class="m-0 p-0"> Designation: '.$row['desig'].'</p>
                                  <p class="m-0 p-0"> Company: '.$row['org'].'</p>
                                  <p class="m-0 p-0"> Phone: '.$row['mobile_no'].'</p>
                                  <p class="m-0 p-0"> Email: '.$row['email'].'</p>
                              </div>
                            </div>
                          </div>
                            
                           
                         </div>
                       </div>
                      
                     </div>
                  
          ';
              
            }
        }
        catch(PDOException $e)
        {
            $bHTML = $e->getMessage();
        }
        return $bHTML;
    }

    //End function for get contact list

     //Start function for get contact list table
    function getHTML_contact_list_Table($sql)
    {
        global $con;

        try
        {   
            $bHTML = '';
            $c = 1;
            $stmt = $con->prepare($sql, array(
                PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL
            ));
            $stmt->execute();
        
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT))
            {

                $bHTML .= '
                <tr style="cursor: pointer" class="" id="bg_id'.$c.'" onclick="trBgChnage('.$c.')">
                    
                    <td class="d-print-none"><label><input class="form-check" name = "checkid[]" id="checkid'.$c.'" type="checkbox" value="'.$row['id'].'" ></label></td>

                    <th scope="row">'.$c.'</th>
                    <td>  <img src="../../assets/uploads/employee/' . $row['photo'] . '" class="img-fluid" width="100px" height="100px" ></td>
                    <td>'.$row['name'].'</td>
                    <td>'.$row['dept'].'</td>
                    <td>'.$row['desig'].'</td>
                    <td>'.$row['org'].'</td>
                    <td>'.$row['email'].'</td>
                    <td>'.$row['ip_phone_ext'].'</td>
                    <td>'.$row['org_phone_no'].'</td>
                </tr> 
          ';
                $c++;
            }
          
        }
        catch(PDOException $e)
        {
            $bHTML = $e->getMessage();
        }
        return $bHTML;
    }

    //End function for get contact list



     //Start function for get contact list table
    function getHTML_contact_emplist_Table($sql)
    {
        global $con;

        try
        {   
            $bHTML = '';
            $c = 1;
            $stmt = $con->prepare($sql, array(
                PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL
            ));
            $stmt->execute();
        
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT))
            {

                $bHTML .= '
                 <tr>

                    <td scope="row">'.$c.'</td>
                    <td>  <img src="../../assets/uploads/employee/' . $row['photo'] . '" class="img-fluid" width="100px" height="100px" ></td>
                    <td>'.$row['name'].'</td>
                    <td>'.$row['dept'].'</td>
                    <td>'.$row['desig'].'</td>
                    <td>'.$row['org'].'</td>
                    <td>'.$row['email'].'</td>
                    <td>'.$row['ip_phone_ext'].'</td>
                    <td>'.$row['org_phone_no'].'</td>
                </tr> 
          ';
                $c++;
            }
          
        }
        catch(PDOException $e)
        {
            $bHTML = $e->getMessage();
        }
        return $bHTML;
    }

    //End function for get contact list
    

    // Start function for get organizations name
    function getHTML_organization_list_Table($sql)
    {
        global $con;
        try
        {
            $bHTML = ' <option value="-1">All</option>';

            $stmt = $con->prepare($sql, array(
                PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL
            ));
            $stmt->execute();
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT))
            {
                $bHTML .= '
               
               <option value="' . $row['id'] . '">' . $row['name'] . '</option>
          ';

            }
        }
        catch(PDOException $e)
        {
            $bHTML = $e->getMessage();
        }
        return $bHTML;
    }

    // start fun for get employee list reason reference

     function getHTML_employeeRefference_list_Table($sql)
    {
        global $con;
        try
        {
           
            $bHTML = ' <option value="-1">Select Reference</option>';
            $stmt = $con->prepare($sql, array(
                PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL
            ));
            $stmt->execute();
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT))
            {
                $bHTML .= '
               
               <option value="' . $row['id'] . '">' . $row['name'] . '</option>
          ';

            }
        }
        catch(PDOException $e)
        {
            $bHTML = $e->getMessage();
        }
        return $bHTML;
    }

    // End fun for get employee list reason reference

    

    // End  function for get organizations name
    

    // start function for get profile data
    function getHTML_profile_employees($sql)
    {
        global $con;
        global $uid;
        try
        {
            $bHTML = '';
            $b1HTML = $sql;
            $stmt = $con->prepare($sql, array(
                PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL
            ));
            $stmt->execute();

            $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $bHTML = $row;
        }
        catch(PDOException $e)
        {
            $bHTML = $e->getMessage();
        }
        return $bHTML;
    }

    // for employee emergency table
    function getHTML_profile_emer_employees($sql)
    {
        global $con;
        try
        {
            $bHTML = '';
            $stmt = $con->prepare($sql, array(
                PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL
            ));
            $stmt->execute();
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT))
            {
                $bHTML .= '
                               <div class="col-md-3 mb-3 no_border">
                                  
                                   <p class="small mb-0"><span class="fw-bold">Name:</span> ' . $row['name'] . ' </p>
                                   <p class="small mb-0"><span class="fw-bold">Relationship:</span>' . $row['relationship'] . '</p>
                                   <p class="small mb-0"><span class="fw-bold">Address:</span>' . $row['address'] . '</p>
                                   <p class="small mb-0"><span class="fw-bold">Contact 1:</span>' . $row['mobile_01'] . '</p>
                                   <p class="small mb-0"><span class="fw-bold">Contact 2:</span> ' . $row['mobile_02'] . ' </p>
                                </div>  
                    
          ';

            }
        }
        catch(PDOException $e)
        {
            $bHTML = $e->getMessage();
        }
        return $bHTML;
    }
    // end employee emergency table
    

    // for employee personal table
    function getHTML_profile_personal_employees($sql)
    {
        global $con;
        try
        {
            $bHTML = '';
            $stmt = $con->prepare($sql, array(
                PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL
            ));
            $stmt->execute();

            $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $bHTML = $row;
        }
        catch(PDOException $e)
        {
            $bHTML = $e->getMessage();
        }
        return $row;
    }
    // end employee personal table
    

    function getHTML_profile_relative_employees($sql)
    {
        global $con;
        try
        {
            $bHTML = '';
            $stmt = $con->prepare($sql, array(
                PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL
            ));
            $stmt->execute();
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT))
            {
                $bHTML .= '
                               <div class="col-md-3 mb-3">
                                  
                                   <p class="small mb-0"><span class="fw-bold">Name:</span> ' . $row['full_name'] . ' </p>
                                   <p class="small mb-0"><span class="fw-bold">Occupation:</span>' . $row['occupation'] . '</p>
                                   <p class="small mb-0"><span class="fw-bold">Realtion:</span>' . $row['relation'] . '</p>
                                   <p class="small mb-0"><span class="fw-bold">Contact 1:</span>' . $row['mobile_01'] . '</p>
                                   <p class="small mb-0"><span class="fw-bold">Contact 2:</span> ' . $row['mobile_02'] . ' </p>
                                </div>  
                    
          ';

            }
        }
        catch(PDOException $e)
        {
            $bHTML = $e->getMessage();
        }
        return $bHTML;
    }

    function getHTML_profile_relative_employees_edit($sql)
    {
        global $con;
        try
        {
            $bHTML = '';
            $stmt = $con->prepare($sql, array(
                PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL
            ));
            $stmt->execute();
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT))
            {
                $bHTML .= '
                               <div class="col-3 border-end mb-3">
                                     <label for="edit_realtive_id" class="form-label">Name</label>
                                     <input type="hidden" class="form-control form-control-sm cus-form-control" value="' . $row['id'] . '"  name="edit_realtive_id[]" id="edit_realtive_id">

                                     <input type="text" class="form-control form-control-sm cus-form-control" value="' . $row['full_name'] . '"  name="edit_realtive_name[]" id="edit_realtive_name">

                                
                                
                                     <label for="edit_realtive_occu" class="form-label">Occupation</label>
                                     <input type="text" class="form-control form-control-sm cus-form-control" value="' . $row['occupation'] . '" name="edit_realtive_occu[]" id="edit_realtive_occu">
                                 
                                
                                     <label for="edit_realtive_relation" class="form-label">Realtion</label>
                                     <input type="text" class="form-control form-control-sm cus-form-control" value="' . $row['relation'] . '" name="edit_realtive_relation[]" id="edit_realtive_relation">
                                
                                 
                                     <label for="edit_realtive_contact_01" class="form-label">Contact 01</label>
                                     <input type="text" class="form-control form-control-sm cus-form-control" value="' . $row['mobile_01'] . '" name="edit_realtive_contact_01[]" id="edit_realtive_contact_01">
                                 
                                 
                                     <label for="edit_realtive_contact_02" class="form-label">Contact 02</label>
                                     <input type="text" class="form-control form-control-sm cus-form-control" value="' . $row['mobile_02'] . '" name="edit_realtive_contact_02[]" id="edit_realtive_contact_02">
                                </div>
                    
          ';

            }
        }
        catch(PDOException $e)
        {
            $bHTML = $e->getMessage();
        }
        return $bHTML;
    }

    function getHTML_profile_emergency_edit($sql)
    {
        global $con;
        try
        {
            $bHTML = '';
            $stmt = $con->prepare($sql, array(
                PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL
            ));
            $stmt->execute();
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT))
            {
                $bHTML .= '
                               <div class="col-md-3 border-end mb-3 no_border">
                                <input type="hidden" class="form-control form-control-sm" value="' . $row['id'] . '"  name="edit_emer_id[]" id="edit_emer_id">
                               <label for="edit_emer_name" class="form-label">Name</label>
                               <input type="text" class="form-control form-control-sm cus-form-control" name="edit_emer_name[]" value="' . $row['name'] . '" id="edit_emer_name">
                              <label for="edit_emer_realtion" class="form-label">Relationship</label>
                              <input type="text" class="form-control form-control-sm cus-form-control" name="edit_emer_realtion[]" value="' . $row['relationship'] . '" id="edit_emer_realtion">
                              <label for="edit_emer_contact_01" class="form-label">Contact 1</label>
                                 <input type="text" class="form-control form-control-sm cus-form-control" value="' . $row['mobile_01'] . '" name="edit_emer_contact_01[]" id="edit_emer_contact_01">
                        
                              <label for="edit_emer_contact_02" class="form-label">Contact 2</label>
                                 <input type="text" class="form-control form-control-sm cus-form-control" value="' . $row['mobile_02'] . '" name="edit_emer_contact_02[]" id="edit_emer_contact_02">
                                   <label for="edit_emer_address" class="form-label">Address</label>
                                 <textarea class="form-control form-control-sm cus-form-control" rows="4" name="edit_emer_address[]" id="edit_emer_address">' . $row['address'] . '</textarea>
                           </div>
                    
          ';

            }
        }
        catch(PDOException $e)
        {
            $bHTML = $e->getMessage();
        }
        return $bHTML;
    }

    // for employee spouse table
    function getHTML_profile_spouse_employees($sql)
    {
        global $con;
        try
        {
            $bHTML = '';
            $stmt = $con->prepare($sql, array(
                PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL
            ));
            $stmt->execute();

            $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $bHTML = $row;
        }
        catch(PDOException $e)
        {
            $bHTML = $e->getMessage();
        }
        return $row;
    }
    // end employee spouse table
    

    //Start function for get employee_list
    function getHTML_profile_list_employees($sql)
    {
        global $con;
        try
        {
            $bHTML = '';
            $stmt = $con->prepare($sql, array(
                PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL
            ));
            $stmt->execute();

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT))
            {
                $bHTML .= '
                
                      <img class="rounded-circle" src="../../assets/uploads/employee/' . $row['photo'] . '" height="70">             

          ';

            }
        }
        catch(PDOException $e)
        {
            $bHTML = $e->getMessage();
        }
        return $bHTML;
    }

    function getSelectHTMLDept($sql, $matchID, $field_name, $multisel = false, $optOnly = false)
    {
        global $con, $filter;
        try
        {
            $multi = ($multisel) ? 'multiple="multiple"' : '';
            $field_name = ($multisel) ? $field_name . '[]' : $field_name;
            $rHTML = '<select class="chosen-select sel2 width-100" ' . $multi . ' id="' . $field_name . '" name="' . $field_name . '">';
            $rHTML = ($optOnly) ? '' : $rHTML;
            $rHTML .= ($multisel) ? '<option value="-1">ALL</option>' : '<option value="0" selected>-- Select --</option>';

            $stmt = $con->prepare($sql, array(
                PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL
            ));
            $stmt->execute();
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT))
            {
                if ($row['id'] == $matchID) $rHTML = $rHTML . '<option value="' . $row['id'] . '" selected>' . $row['name'] . '</option>';
                else $rHTML = $rHTML . '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
            }
            $rHTML = ($optOnly) ? $rHTML : $rHTML . '</select>';
        }
        catch(PDOException $e)
        {
            $rHTML = $e->getMessage();
        }

        return $rHTML;
    }

    function getSelectMultilevel($id = 0, $mrk = '', $tableName, $foreign_key_name, $orderby_name, $pkey_name, $req_name, $sel = false, $matchID = 0, $custom = false, $custom_str = '')
    {
        global $con, $multi_level_select, $user_id;
        $sql = ($custom) ? 'SELECT * FROM ' . $tableName . ' WHERE ' . $foreign_key_name . ' = ' . $id . ' AND ' . $custom_str . ' ORDER BY ' . $orderby_name . ' ASC' : 'SELECT * FROM ' . $tableName . ' WHERE ' . $foreign_key_name . ' = ' . $id . ' ORDER BY ' . $orderby_name . ' ASC';
        $stmt = $con->prepare($sql, array(
            PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL
        ));
        $stmt->execute();
        //$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT))
        {
            if ($sel) if ($row[$pkey_name] == $matchID) $multi_level_select .= '<option value="' . $row[$pkey_name] . '" selected>' . $mrk . $row[$req_name] . '</option>';
            else $multi_level_select .= '<option value="' . $row[$pkey_name] . '">' . $mrk . $row[$req_name] . '</option>';
            else $multi_level_select .= $mrk . $row[$pkey_name] . '-' . $row[$req_name];

            if ($custom) getSelectMultilevel($row[$pkey_name], '---', $tableName, $foreign_key_name, $orderby_name, $pkey_name, $req_name, $sel, $matchID, true, $custom_str);
            else getSelectMultilevel($row[$pkey_name], '---', $tableName, $foreign_key_name, $orderby_name, $pkey_name, $req_name, $sel, $matchID);
        }

        // echo $matchID;
        
    }

?>
