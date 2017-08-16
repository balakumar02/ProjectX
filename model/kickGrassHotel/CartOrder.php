<?php


/* Simulating Cart Model */

    $_POST['CLASS'] = 'KICKGRASS';
    $_POST['PRODUCT_ID'] = '1001';
    $_POST['PRODUCT_NAME'] = 'Chicken Burger';
    $_POST['QUANTITY'] = '3';

/* Simulating Cart Model */

/* Updating Admin Dashboard and Delivery Dashboard */

/*
if($_POST) {
    
    $bookingCheck = initializeBooking($_POST['PRODUCT_ID'], $_POST['PRODUCT_NAME'], $_POST['QUANTITY']);
    
    if($bookingCheck) {
        $deliveryCheck = initializeDelivery($_POST['CLASS'], $_POST['PRODUCT_ID'], $_POST['PRODUCT_NAME'], $_POST['QUANTITY']);
        
        if($deliveryCheck) {
            echo json_encode('Booking and Delivery success');
        }
        else {
            echo json_encode('Delivery failed');        
        }
        
    }
    
    else {
        echo json_encode('Booking failed');    
    }
}
*/

/* Updating Admin Dashboard and Delivery Dashboard */

if($_POST) {
    
    $updateTimeCheck = orderDispatched($_POST['book_id']);
    
    if($updateTimeCheck) {
        echo json_encode('Dispatch Time Updated');
    }
    else {
        echo json_encode('Dispatch Time Failed');        
    }
        
}

?>
