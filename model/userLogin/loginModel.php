<?php

    require_once '../appConnection.php';

    class Authentication  {

        static protected function login($mob, $pwd) {
            
            try
            {
                $conn = Connection::openConnection();
                $stmt = $conn->prepare("SELECT * FROM users WHERE MOBILE_NO = :mobi and PASSWORD = :pass") ;
                $stmt->execute(array(':mobi' => $mob, ':pass' => $pwd));                
                $stmt->setFetchMode(PDO::FETCH_ASSOC); 
                $result = $stmt->fetch();
                
                if($result) {
                   return $result;
                }
                else {
                    return false;
                }
            }

            catch (PDOException $e)
            {
                echo "There is some problem in Login: " . $e->getMessage();
            }
            
        }

        static protected function signup($usr, $mobile, $email, $pwd, $addr) {
            
            try
            {
                $conn = Connection::openConnection();
                $stmt = $conn->prepare("INSERT INTO users(USERNAME, PASSWORD, MOBILE_NO, EMAIL, ADDRESS) VALUES(:user, :pass, :mobi, :mail, :addr)") ;
                $stmt->execute(array(':user' => $usr, ':pass' => $pwd, ':mobi' => $mobile, ':mail' => $email, ':addr' => $addr));
                
                if($stmt) {
                    return true;
                }
                else {
                    return false;
                }
            }

            catch (PDOException $e)
            {
                echo "There is some problem in Signup: " . $e->getMessage();
            }
            
        }

    }