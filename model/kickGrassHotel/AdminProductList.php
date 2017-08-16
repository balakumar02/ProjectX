<?php

    require_once 'AdminModel.php';

    if(isset($_SESSION['USERMB'])) {
        
        $booking = KickGrassAdmin::getBookingList($_SESSION['USERMB']);    
        
    }
    
