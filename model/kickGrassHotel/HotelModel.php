<?php

    /*require_once '../appConnection.php';*/

    class KickGrass {

       static public function fetchProducts($biz) {

            try {
                $conn = Connection::openConnection();
                $stmt = $conn->prepare("SELECT * FROM kickgrass_biz WHERE CLASS = :biz");
                $stmt->execute(array(':biz' => $biz));
                $stmt->setFetchMode(PDO::FETCH_ASSOC); 		    
                $result = $stmt->fetchAll();		    
                $conn = Connection::closeConnection();
                return $result;
            }

            catch (PDOException $e)	{
                echo "There is some problem in connection: " . $e->getMessage();
            }

        }

    }
	
	
	<?php

    require_once 'HotelModel.php';

    $class = [];
    $products = array('BURGER', 'PIZZA', 'SANDWICH', 'STARTER', 'CURRIES', 'BREADS', 'BRIYANI', 'RICE', 'NOODLES', 'PASTAS', 'SOUP', 'MOJITOS AND COOLERS', 'MILKSHAKES', 'DESSERTS', 'COLD BEVERAGES', 'FRESH JUICE', 'HOT BEVERAGES', 'ICE CREAM','SIDES');

    foreach($products as $items) {
        $class[$items] = KickGrass::fetchProducts($items);
    }
    
