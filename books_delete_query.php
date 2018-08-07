<?php
	require_once 'db.php';
	$id=$_GET['id'];
	
	$query = "DELETE FROM books WHERE ISBN = '$id'";
	$result = mysqli_query($con, $query);
	
	header("Location: books.php");
?>