<?php
require_once "../../config.php";
session_start();
if(isset($_POST['name'])){
    $token= $dbquery->filterValue($_POST['token']);
    if(!$token || $token!==$_SESSION['_token']){
        $res=json_encode(['status'=>false,'message'=>'Bad request', 'error' => 'token']);
        echo $res;
    }
    else{
        $create_at=date("d-m-Y");
        $table='coupons';
        $unique_id= $Filter->unique_id_generator();
        $data=[
            'unique_id'=>$unique_id,
            'name'=>$_POST['name'],
            'discount'=>$_POST['discount'],
            'expire_date'=>$_POST['expire'],
            'create_at'=>$create_at
        ];
        $check_coupon=$dbquery->row_with_one_parameter($table,'name', $_POST['name']);
        if ($check_coupon !== false) {
            $msg = json_encode(['status' => false, 'message' => 'This coupon already exist.','error' => 'database']);
            echo $msg;
            exit();
        }
        else{
            $result = $insert->insert($table, $data);
            if($result){
                $msg = json_encode(['status' => true, 'message' => 'Coupon Added']);
                  echo $msg;
                exit();
            }
            else{
                $msg = json_encode(['status' => false, 'message' => 'Opps, fail to add coupon,try again later ', 'error' => 'database']);
                echo $msg;
                exit();
            }
        }
            
        
   
    }
				
}

?>