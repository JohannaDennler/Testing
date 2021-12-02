<?php

include_once "dbconn.php";

function get_user_id($kunden_id) {
    try {

        $conn = get_db_conn();
        
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $selectQuery = 'SELECT UserID FROM Kunde WHERE KundenID ='.$kunden_id;
        
        $selectStatement = $conn->prepare($selectQuery);
        
        $selectStatement->execute();
        
        if($selectStatement->rowCount()){
            $result = $selectStatement->fetchAll();
        }else{
            print "Keine Ergebnisse";
        }

        $conn = null;

        return $result;
    } catch(PDOException $e){
        print "Connection failed: " . $e->getMessage();
    }
}
function get_name($user_id) {
    try {

        $conn = get_db_conn();
        
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $selectQuery = 'SELECT Vorname, Name FROM User WHERE KundenID ='.$user_id;
        
        $selectStatement = $conn->prepare($selectQuery);
        
        $selectStatement->execute();
        
        if($selectStatement->rowCount()){
            $result = $selectStatement->fetchAll();
        }else{ print "Keine Ergebnisse";
        }

        $conn = null;

        return $result;
    } catch(PDOException $e){
        print "Connection failed: " . $e->getMessage();
    }
}

function get_email($user_id) {
    try {

        $conn = get_db_conn();
        
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $selectQuery = 'SELECT Email FROM User WHERE UserID ='.$user_id;
        
        $selectStatement = $conn->prepare($selectQuery);
        
        $selectStatement->execute();
        
        if($selectStatement->rowCount()){
            $result = $selectStatement->fetchAll();
        }else{
            print "Keine Ergebnisse";
        }

        $conn = null;

        return $result;
    } catch(PDOException $e){
        print "Connection failed: " . $e->getMessage();
    }
}

function get_adress_data($kunden_id) {
    try {

        $conn = get_db_conn();
        
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $selectQuery = 'SELECT * FROM Kundenadressen WHERE KundenID ='.$kunden_id;
        
        $selectStatement = $conn->prepare($selectQuery);
        
        $selectStatement->execute();
        
        if($selectStatement->rowCount()){
            $result = $selectStatement->fetchAll();
        }else{
            print "Keine Ergebnisse";
        }

        $conn = null;

        return $result;
    } catch(PDOException $e){
        print "Connection failed: " . $e->getMessage();
    }
}
?>