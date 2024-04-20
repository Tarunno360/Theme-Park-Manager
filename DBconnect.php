<?php

$servername= 'localhost';
$username='root';
$password='';
$dbname= 'Theme_park_manager';
 
$conn= new mysqli($servername,$username,$password);

if($conn->connect_error){
    die('connection failed:' . $conn -> connect_error);
    }
else{
    mysqli_select_db($conn,$dbname);
    }
?>
