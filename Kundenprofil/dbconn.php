<?php

function get_db_conn() {
    $host = 'localhost';
    $port = 3306;
    $dbname = 'Verwaltungsplattform_Handwerk';
    $user = 'dbuser';
    $pwd = 'dbuser123';

    $conn = new PDO("mysql:host=$host;port=$port;dbname=$dbname", "$user", "$pwd");
}

function close_db_conn($conn){
    $conn = null;
}
?>