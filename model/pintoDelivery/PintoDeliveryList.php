<?php

    require_once 'PintoModel.php';

    if(isset($_SESSION['USERMB'])) {
        
        $delivery = PintoDelivery::getDeliveryList($_SESSION['USERMB']);    
        
    }
    

