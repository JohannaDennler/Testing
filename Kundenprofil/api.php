<?php

include "dbconn.php";

function get_data($table_name) {
    try {

        $conn = get_db_conn();
        
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $selectQuery = 'SELECT * FROM '.$table_name;
        
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