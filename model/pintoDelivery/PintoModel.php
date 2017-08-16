<?php

    class PintoDelivery {
        
        static public function getDeliveryList($usr) {
            
            if(isset($_SESSION[$usr])) {
                
                try {
                    $conn = Connection::openConnection();
                    $stmt = $conn->prepare("SELECT * FROM pinto_book WHERE DELIVERY_TIME IS NULL") ;
                    $stmt->execute();                
                    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
                    $result = $stmt->fetchAll();		    
                    return $result;
                }

                catch (PDOException $e)	{
                    echo "There is some problem in connection: " . $e->getMessage();
                }
    
            }
            
        }   

        
        static public function updateDeliveryTime($id) {
            
            try {
                $conn = Connection::openConnection();
                $stmt = $conn->prepare("UPDATE pinto_book SET DELIVERY_TIME = :time WHERE DEL_ID = :id") ;
                $stmt->execute(array(':time' => dateTime(), ':id' => $id));       
                if($stmt) {
                    return true;
                }
                else {
                    return false;
                }
                return $result;
            }

            catch (PDOException $e) {
                echo "There is some problem in connection: " . $e->getMessage();
            }
            
        }
        
        static public function dateTime() {
            
            date_default_timezone_set('Asia/Kolkata');
            $time = date("Y-m-d H:i:s");
            return $time;
            
        }
        
    }
