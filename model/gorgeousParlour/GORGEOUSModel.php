<?php

	function retrieveItems($biz, $status) {
		try
		{
            $conn = Connection::openConnection();
            //$database = new Connection();
			//$conn = $database->openConnection();
            $stmt = $conn->prepare("SELECT * FROM gorgeous_biz WHERE CLASS = :biz AND AVAILABILITY = :status");
            $stmt->execute(array(':biz' => $biz, ':status' => $status));
            $stmt->setFetchMode(PDO::FETCH_ASSOC); 		    
		    $result = $stmt->fetchAll();		    
            $conn = Connection::closeConnection();
            return $result;
		}
        
		catch (PDOException $e)
		{
			echo "There is some problem in connection: " . $e->getMessage();
		}
	}
    
    $class = [];
    $getService = array('FACIAL', 'BLEACH', 'WAXING', 'SPA AND MASSAGE', 'MEHANDHI AND NAILWORK', 'HAIR CARE', 'SPECIAL TREATMENTS');

    foreach($getService as $items) {
        $class[$items] = retrieveItems($items, 1);
    }
	//var_dump($class['BURGER']);die;
?>