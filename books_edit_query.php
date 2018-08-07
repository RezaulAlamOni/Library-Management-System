<?php
	$isbn 		  	= $_POST["id"];
	$subject_code 	= $_POST["book_code"];
	$book_name 	  	= $_POST["Book_Name"];
	$author_name = $_POST["Author"];
	$Shelves_No		= $_POST["Shelves_No"];
	$price			= $_POST["PRICE"];
	
	
	require_once 'db.php';
	
	$query = "UPDATE books SET book_code = '$subject_code', Book_Name ='$book_name', Author = '$author_name',Shelves_No = '$Shelves_No', PRICE = '$price' WHERE ISBN = '$isbn' ";
	$result = mysqli_query($con, $query);
	
	header("Location: books.php");
?>