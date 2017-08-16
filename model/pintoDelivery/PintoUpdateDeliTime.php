<?php

    require_once 'PintoModel.php';

    if(isset($_POST['del_id'])) {
        
        $trueCheck = PintoDelivery::updateDeliveryTime(($_POST['del_id']));
        if($trueCheck) {
            echo json_encode('success');
        }
        
        else {
            echo json_encode('failed');    
        }
        
    }    