<?php
session_start();
$uid = $_SESSION["userId"];
$org_id = $_SESSION["org_id"];

if($_SERVER['REQUEST_METHOD'] == "POST") {


    include('connection.php');

    //get operation
    $oper = $_POST['oper'];
    if($oper == 'add'){
//        print_r($_POST);
        $applicable_for = '';
        $values = '';
        $exItems ='';
        $amount =0;
        $amount_type='';
        $retail_offer_id = '';
        $invoice_from ='';
        $invoice_to ='';
        $offer_name =  preg_replace('/[^A-Za-z0-9. -]/', '',@$_POST['add_offer_name']);
        $valid_from =  preg_replace('/[^A-Za-z0-9. -]/', '',@$_POST['valid_from']);
        $valid_to =  preg_replace('/[^A-Za-z0-9. -]/', '',@$_POST['valid_to']);
        $offer_type =  preg_replace('/[^A-Za-z0-9. -]/', '',@$_POST['offer_type']);
        if ($offer_type==1){
            $amount = preg_replace('/[^A-Za-z0-9. -]/', '',@$_POST['amount']);
            $amount_type = preg_replace('/[^A-Za-z0-9. -]/', '',@$_POST['amount_type']);
        }
        $region =  preg_replace('/[^A-Za-z0-9. -]/', '',@$_POST['region']);
        if (isset($region) & !empty($region)){
            $applicable_for = 'region';
            $values = implode(',',$region);
        }

        $depot =  preg_replace('/[^A-Za-z0-9. -]/', '',@$_POST['depot']);
        if (isset($depot) & !empty($depot)){
            $applicable_for = 'depot';
            $values = implode(',',$depot);
        }

        $area =  preg_replace('/[^A-Za-z0-9. -]/', '',@$_POST['area']);
        if (isset($area) & !empty($area)){
            $applicable_for = 'area';
            $values = implode(',',$area);
        }
        $territory =  preg_replace('/[^A-Za-z0-9. -]/', '',@$_POST['territory']);
        if (isset($territory) & !empty($territory)){
            $applicable_for = 'territory';
            $values = implode(',',$territory);
        }
        $distributor =  preg_replace('/[^A-Za-z0-9. -]/', '',@$_POST['distributor']);
        if (isset($distributor) & !empty($distributor)){
            $applicable_for = 'distributor';
            $values = implode(',',$distributor);
        }
        //Single invoice or date range
        $offer_for =  preg_replace('/[^A-Za-z0-9. -]/', '',@$_POST['applicable_for']);
        if ($offer_for == 0){
            $invoice_from = preg_replace('/[^A-Za-z0-9. -]/', '',@$_POST['invoice_date_from']);
            $invoice_to = preg_replace('/[^A-Za-z0-9. -]/', '',@$_POST['invoice_date_to']);
        }
        $invoice_amount = preg_replace('/[^A-Za-z0-9. -]/', '',@$_POST['invoice_amount']);
        $retailer_include = preg_replace('/[^A-Za-z0-9. -]/', '',@$_POST['retailer_include']);
        if ($retailer_include==0){
            $retail_offer_id = preg_replace('/[^A-Za-z0-9. -]/', '',@$_POST['retail_offer_id']);
        }
        $is_excluded = preg_replace('/[^A-Za-z0-9. -]/', '',@$_POST['is_excluded']);
        if ($is_excluded==1){
            $excluded_items = preg_replace('/[^A-Za-z0-9. -]/', '',@$_POST['excluded_items']);
            $exItems = implode(',',$excluded_items);
        }
        $is_active = preg_replace('/[^A-Za-z0-9. -]/', '',@$_POST['is_active']);
            $sql = "INSERT INTO `offer_lists`
                (`name`, `valid_from`, `valid_to`, `offer_type`, `amount`, 
                 `amount_type`, `applicable_for`, `values`, `offer_for`, `invoice_amount`, 
                 `invoice_from`, `invoice_to`, `retails_include_status`, `retail_offer_id`, 
                 `is_excluded`, `excluded_items`, `is_active`, `created_by`)
            VALUES('$offer_name','$valid_from','$valid_to','$offer_type','$amount',
                    '$amount_type','$applicable_for','$values','$offer_for','$invoice_amount'
                    ,'$invoice_from','$invoice_to','$retailer_include','$retail_offer_id','$is_excluded'
                    ,'$exItems','$is_active','$uid')";

        $stmt = $con->prepare($sql);
        try {
            $result  = $stmt->execute();
            $last_id = $con->lastInsertId();

            if ($offer_type==2){
                $cat = $_POST['prod_cat'];
                $prod = $_POST['product'];
                $ctn = $_POST['ctn'];
                $pcs = $_POST['pcs'];

                for($i=0; $i<count($cat); $i++){
                    $prodSql = "INSERT INTO offer_product_lists(`offer_id`,`prod_cat`,`product_id`,`ctn`,`pcs`) 
                    VALUES ('$last_id','$cat[$i]','$prod[$i]','$ctn[$i]','$pcs[$i]')";

                    $stmt2 = $con->prepare($prodSql);
                    $result2 = $stmt2->execute();
                }
            }

            if($result  == true){
                echo 'true';
            }
        }
        catch (PDOException $e){
            echo $e->getMessage();
        }
    }
}
