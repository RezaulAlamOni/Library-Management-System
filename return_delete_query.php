<?php
	require_once 'db.php';
	$id=$_GET['id'];
	
	$query = "DELETE FROM returns WHERE RETURN_ID = '$id'";
	$result = mysqli_query($con, $query);
	
	header("Location: return.php");
?>