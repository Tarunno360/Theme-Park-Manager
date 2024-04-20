<?php
require_once('DBconnect.php');
if(isset($_POST['park_id'])) {
	$u = $_POST['park_id'];
	$sql = " DELETE FROM theme_parks WHERE park_id=$u ";
	$result = mysqli_query($conn, $sql);
	if(mysqli_affected_rows($conn)){
        echo " inserted successfully";
	}
	else{
        echo " insertion failed";
	}	
}
?>
