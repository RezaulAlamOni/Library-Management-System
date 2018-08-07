<?php
	$isbn 		  	= $_POST["ISBN"];
	$subject_code 	= $_POST["book_code"];
	$book_name 	  	= $_POST["Book_Name"];
	$Author_name    = $_POST["Author"];
	$Shelves_No 	= $_POST["Shelves_No"];
	$price			= $_POST["PRICE"];
	
	
	require_once 'db.php';
	
	$query = "INSERT INTO books VALUES ('$isbn', '$subject_code', '$book_name', '$Author_name', '$Shelves_No','$price')";
	
	$result = mysqli_query($con, $query);
	
	header("Location: books.php");
    //echo $result;
?>