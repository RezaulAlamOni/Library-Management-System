<?php
	$RETURN_ID 	 = $_POST["RETURN_ID"];
	$MEMBER_ID   = $_POST["MEMBER_ID"];
	$DAYS        = $_POST["DAYS"];
	$FINES 	     = $_POST["FINES"];
    $isbn 	     = $_POST["ISBN"];
	
	
	require_once 'db.php';
	
	$query = "INSERT INTO returns VALUES ('$isbn', '$MEMBER_ID', '$DAYS', '$FINES','$RETURN_ID')";
	
	$result = mysqli_query($con, $query);
	
	header("Location: return.php");
?>