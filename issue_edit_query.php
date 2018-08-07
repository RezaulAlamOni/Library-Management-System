<?php
	$ISSUE_ID   = $_POST["id"];
	$MEMBER_ID  = $_POST["MEMBER_ID"];
	$ISBN 		= $_POST["ISBN"];
	$ISSUE_DATE = $_POST["ISSUE_DATE"];
	$RETURN_DATE = $_POST["RETURN_DATE"];
	
	
	require_once 'db.php';
	
	$query = "UPDATE issues SET isbn ='$ISBN', ISSUE_DATE = '$ISSUE_DATE', RETURN_DATE = '$RETURN_DATE' WHERE ISSUE_ID = '$ISSUE_ID' ";
	$result = mysqli_query($con, $query);
	
	header("Location: issue.php");
?>