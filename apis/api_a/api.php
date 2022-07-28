<?php
include('../../controller/connection.php');

$return_data = array();

session_start();
$uid = $_SESSION["userId"];
$dept_id = $_SESSION["dept_id"];
$wloc_id = $_SESSION["wloc_id"];
$org_id =  $_SESSION["org_id"];
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
    //For offer type
    case '1':
        $table = 'offer_type';
        break;

    //For product Category
    case '2':
        $table = 'productcategories';
        break;

    //For products
    case '3':
        $table = 'products';
        break;

        //For Region
    case '4':
        $table = 'regions';
        break;

        //For depot
    case '5':
        $table = 'depots';
        break;

    //For area
    case '6':
        $table = 'areas';
        break;

        //For territories
    case '7':
        $table = 'territories';
        break;

    //For distributor
    case '8':
        $table = 'distributors';
        break;
    //For distributor
    case '9':
        $table = 'offer_lists';
        break;
    default:
        $table = '';
}

switch ($param) {

    // Select Dropdown
    case '1':
        $sql = 'SELECT * FROM ' . $table . ' WHERE is_active = 1';
        $sql .= ($filter!='')? ' AND '.$filter : '' ;
        $return_data = getSelectHTML($sql,$match_id,'',$multi_select,true);
        break;

    //For product category
    case '2': //department list
        $multi_level_select = '<option value="">-- Select --</option>';
        if($filter != '')
            getSelectMultilevel(0,'',$table,'sub_of','id','id',$field_list,true,0,true,$filter,$match_id);
        else
            getSelectMultilevel(0,'',$table,'sub_of','id','id',$field_list,true,$match_id);
        $return_data = $multi_level_select;
        break;

    case '3': //dependent products by category
        $return_data = getProductsByCat($data,$table);
        break;

        //For Multiple select dropdown
    case '4':
        $res = implode(',',$data);
        $sql = 'SELECT * FROM '.$table.' WHERE '.$field_list.' IN ('.$res.') AND is_active = 1';
        $return_data = getMultiSelect($sql, true);
        break;


}
echo json_encode($return_data);

function getSelectHTML($sql, $matchID, $field_name, $multisel = FALSE, $optOnly = FALSE)
{
    global $con, $filter;
    try
    {
        $multi = ($multisel) ? 'multiple="multiple"' : '';
        $field_name = ($multisel) ? $field_name.'[]' : $field_name;
        $rHTML = '<select class="chosen-select sel2 width-100" '.$multi.' id="'.$field_name.'" name="'.$field_name.'">';
        $rHTML = ($optOnly) ? '' : $rHTML;
        $rHTML .= ($multisel) ? '<option value="-1">-- Select --</option>' : '<option value="">-- Select --</option>';

        $stmt = $con->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT))
        {
            if($row['id'] == $matchID)
                $rHTML = $rHTML . '<option value="'.$row['id'].'" selected>'.$row['name'].'</option>';
            else
                $rHTML = $rHTML . '<option value="'.$row['id'].'">'.$row['name'].'</option>';
        }
        $rHTML = ($optOnly) ? $rHTML : $rHTML . '</select>';
    }
    catch (PDOException $e)
    {
        $rHTML = $e->getMessage();
    }

    return $rHTML;
}


function getSelectMultilevel($id = 0, $mrk = '', $tableName, $foreign_key_name, $orderby_name, $pkey_name, $req_name, $sel = FALSE, $matchID = 0, $custom = FALSE, $custom_str = '')
{
    global $con, $multi_level_select, $user_id, $org_id;
    $sql = ($custom)? 'SELECT * FROM '.$tableName.' WHERE '.$foreign_key_name.' = '.$id.' AND '.$custom_str.' AND org_id = '.$org_id.' ORDER BY '.$orderby_name.' ASC' : 'SELECT * FROM '.$tableName.' WHERE '.$foreign_key_name.' = '.$id.'  AND org_id = '.$org_id.' ORDER BY '.$orderby_name.' ASC';
    $stmt = $con->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
    $stmt->execute();
    //$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    while($row = $stmt->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT))
    {
        
        if($sel)
            if($row[$pkey_name] == $matchID)
                $multi_level_select .= '<option value="'.$row[$pkey_name].'" selected>'.$mrk.$row[$req_name].'</option>';
            else
                $multi_level_select .= '<option value="'.$row[$pkey_name].'">'.$mrk.$row[$req_name]. '</option>';
        else
            $multi_level_select .= $mrk.$row[$pkey_name].'-'.$row[$req_name];

        if($custom)
            getSelectMultilevel($row[$pkey_name],'---',$tableName,$foreign_key_name, $orderby_name, $pkey_name, $req_name,$sel,$matchID, TRUE,$custom_str);
        else
            getSelectMultilevel($row[$pkey_name],'---',$tableName,$foreign_key_name, $orderby_name, $pkey_name, $req_name,$sel,$matchID);
        // echo $pkey_name;
    }
    // echo $matchID;
}

function getProductsByCat($data,$table){
    global $res, $con;
    $res = '<option value="">-- Select --</option>';
    $sql = 'SELECT * FROM productcategories WHERE is_active=1 AND id = '.$data;
    $stmt = $con->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT);
    if ($row['sub_of'] == 0){
        $prod_sql = 'SELECT * FROM '.$table.' WHERE category IN(
                    SELECT id FROM productcategories WHERE sub_of='.$data.') AND is_active=1';
    }
    else{
        $prod_sql = 'SELECT * FROM '.$table .' WHERE category ='.$data.' AND is_active=1';
    }
    $stmt_prod = $con->prepare($prod_sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
    $stmt_prod->execute();

    while ( $prod_row = $stmt_prod->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT)){
        $res .= '
            <option value="'.$prod_row['id'].'">'.$prod_row['name'].'</option>
        ';
    }
    return $res;
}

function getMultiSelect($sql){
    global $con;
    try {
        $opt = '<option value="0">--- Select ---</option>';
        $stmt = $con->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT)){
            $opt .= '
            <option value="'.$row['id'].'">'.$row['name'].'</option>
        ';
        }
    }
    catch (PDOException $e){
        $opt = $e->getMessage();
    }
    return $opt;
}
?>