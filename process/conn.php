<?php
$servername = 'localhost';
$username = 'root';
$password = '';
date_default_timezone_set('Asia/Manila');
$server_date_time = date('Y-m-d H:i:s');
$server_date_time1 = date('Y-m-d H:i:s');
$server_date_only = date('Y-m-d');
//+1 day $day = date('Y-m-d',(strtotime('+1 day',strtotime($server_date_only))));
$server_date_month = date('M');
$server_date_day = date('d');
$server_date_month_time = date('Y-m-01 H:i:s');
$server_time = date('H:i:s');
// $servername = 'localhost'; $username = 'server_113.4'; $password = 'SystemGroup@2022';
try {
    $conn = new PDO("mysql:host=$servername;dbname=tube_ins_db", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'NO CONNECTION' . $e->getMessage();
}
?>