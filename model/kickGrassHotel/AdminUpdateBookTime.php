<?php

    require_once 'AdminModel.php';

    if(isset($_POST['book_id'])) {
        
        $trueCheck = KickGrassAdmin::updateBookTime(($_POST['book_id']));
        if($trueCheck) {
            echo json_encode('success');
        }
        
        else {
            echo json_encode('failed');    
        }
        
    }