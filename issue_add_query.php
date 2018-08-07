<?php
	$ISSUE_ID    = $_POST["ISSUE_ID"];
	$MEMBER_ID   = $_POST["MEMBER_ID"];
	$ISBN 		 = $_POST["ISBN"];
	$ISSUE_DATE  = $_POST["ISSUE_DATE"];
	$RETURN_DATE = date("Y-m-d",strtotime($ISSUE_DATE ."+ 15 days"));
    
        
	
	
	require_once 'db.php';
	
	$query = "INSERT INTO issues VALUES ('$ISSUE_ID', '$MEMBER_ID', '$ISBN', '$ISSUE_DATE', '$RETURN_DATE')";
	
	$result = mysqli_query($con, $query);
	
	header("Location: issue.php");
?>