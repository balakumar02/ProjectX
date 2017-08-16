<?php 

    require_once 'AdminModel.php';

    if(isset($_POST['product_id']) && isset($_POST['status'])) {

        $trueCheck = KickGrassAdmin::availUnavailToggle($_POST['product_id'], $_POST['status']);
        if($trueCheck) {
            echo 'success';
        }

        else {
            echo 'failed';
        }

    }



