<?php
	require_once 'db.php';
	$id=$_GET['id'];
	
	$query = "DELETE FROM issues WHERE ISSUE_ID = '$id'";
	$result = mysqli_query($con, $query);
	
	header("Location: issue.php");
?>