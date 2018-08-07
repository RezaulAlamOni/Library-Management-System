<?php
    require_once 'db.php';
	$RETURN_ID 	 = $_POST['id'];
	$MEMBER_ID   = $_POST["MEMBER_ID"];
	$DAYS        = $_POST["DAYS"];
	$FINES 	     = $_POST["FINES"];
	
	
	$query = "UPDATE returns SET MEMBER_ID ='$MEMBER_ID', DAYS ='$DAYS', FINES = '$FINES' WHERE return_id = '$RETURN_ID' ";
	$result = mysqli_query($con, $query);
	//echo $result;
	header("Location: return.php");
?>