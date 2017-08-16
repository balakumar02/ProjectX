<?php
//require_once 'model/appConnection.php';
class Connection { 
        
		public static function openConnection()
		{
            $host = "mysql:host=localhost;dbname=projectx";
            $user = "root";
            $pass = "";
            $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
            try {
			  $conn = new PDO($host, $user, $pass, $options);
			  return $conn;
			}
			catch (PDOException $e) {
			  echo "There is some problem in connection: " . $e->getMessage();
			}
		}
        
		public static function closeConnection() {
		  $conn = null;
		}
}

    function getData($str) {
        try
		{
			$conn = Connection::openConnection();
			
			// inserting data into create table using prepare statement to prevent from sql injections
                $stmt = $conn->prepare("SELECT * FROM gorgeous_biz WHERE service_name LIKE '%{$str}%'") ;
                $row = $stmt->execute();                
			    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
		        $result = $stmt->fetchAll();		    
                $array = array();                
                foreach ($result as $row) {
                    $array[] = array (
                        'service' => $row['SERVICE_NAME'],
                        'price' => $row['PRICE'],
                    );
                }
                //var_dump($array);die;
                //RETURN JSON ARRAY
                return $array;
		}
        
		catch (PDOException $e)
		{
			echo "There is some problem in connection: " . $e->getMessage();
		}
    }

if (isset($_REQUEST['search'])) {
    $array = getData(($_REQUEST['search']));
    echo json_encode($array);
}
    
//CREATE QUERY TO DB AND PUT RECEIVED DATA INTO ASSOCIATIVE ARRAY
?>
