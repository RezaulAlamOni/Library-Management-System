<?php
	$MEMBER_ID   = $_POST["id"];
	$MEMBER_TYPE = $_POST["MEMBER_TYPE"];
	$MEMBER_NAME = $_POST["MEMBER_NAME"];
	$EXP_DATE 	 = $_POST["EXP_DATE"];
	$pass        = $_POST["pass"];
	$dept 	     = $_POST["dept"];
	
	
	require_once 'db.php';
	
	$query = "UPDATE members SET MEMBER_TYPE = '$MEMBER_TYPE', MEMBER_NAME ='$MEMBER_NAME', EXP_DATE = '$EXP_DATE',pass='$pass',dept='$dept' WHERE MEMBER_ID = '$MEMBER_ID' ";
	$result = mysqli_query($con, $query);
	//echo $result;
	header("Location: members.php");
?>