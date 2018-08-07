<?php
	require_once 'db.php';
	$id=$_GET['id'];
	
	$query = "DELETE FROM members WHERE MEMBER_ID = '$id'";
	$result = mysqli_query($con, $query);
	
	header("Location: members.php");
?>