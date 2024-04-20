<?php
require_once('DBconnect.php');
if(isset($_POST['park_id']) && isset($_POST['location']) && isset($_POST['park_name'])) {
	$u = $_POST['park_id'];
	$p = $_POST['location'];
	$c = $_POST['park_name'];
	$sql = " INSERT INTO theme_parks VALUES( '$u', '$p', '$c' ) ";
	$result = mysqli_query($conn, $sql);
	if(mysqli_affected_rows($conn)){
        echo " inserted successfully";
	}
	else{
        echo " insertion failed";
	}	
}
?>