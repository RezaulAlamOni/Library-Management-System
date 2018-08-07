<?php
	$MEMBER_ID   = $_POST["MEMBER_ID"];
	$MEMBER_TYPE = $_POST["MEMBER_TYPE"];
	$MEMBER_NAME = $_POST["MEMBER_NAME"];
	$EXP_DATE 	 = $_POST["EXP_DATE"];
	$pass = $_POST["pass"];
	$dept 	 = $_POST["dept"];
	
	require_once 'db.php';
	
	$query = "INSERT INTO members VALUES ('$MEMBER_ID', '$MEMBER_TYPE', '$MEMBER_NAME', '$EXP_DATE','$pass','$dept')";
	
	$result = mysqli_query($con, $query);
	
    
	header("Location: members.php");
?>