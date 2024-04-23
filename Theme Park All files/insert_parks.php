<?php
require_once('dbconnect.php');
if(isset($_POST['park_id']) && isset($_POST['location']) && isset($_POST['park_name']) && isset($_POST['image_url'])) {
	$u = $_POST['park_id'];
	$p = $_POST['location'];
	$c = $_POST['park_name'];
	$d = $_POST['image_url'];
	$sql = " INSERT INTO theme_parks VALUES( '$u', '$p', '$c','$d' ) ";
	$result = mysqli_query($conn, $sql);
	if(mysqli_affected_rows($conn)){
        echo " inserted successfully";
	}
	else{
        echo " insertion failed";
	}	
}
?>