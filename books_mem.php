
<?php 
	include 'db.php';
	//include 'upper_mem.php'; 
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="CSS/books.css">
		<title>BOOKS MANAGEMENT SYSTEM</title>
	</head>
    <style>
             p {
                margin-left: 1300px;
                position: fixed;
                margin-top: auto;
                background-color: chartreuse;
                text-decoration-color: darkblue;
             }
     </style>
	<body>
        <p>
            <a href="library_mem.php"> Home</a>
            <a href="index.php">Logout</a></p>
		<div id="books">
			<div class="bd_container">
				<form action="books_search_mem.php" method="POST">
					<input 
						type="text" 
						name="BOOK_NAME"
						placeholder="search by book name">
					<input type="submit" value="SEARCH">
					<input type="reset"  value="RESET">
				</form>
				
				<h1>Available book list is here</h1>
				<table>
						<tr>
							<th>ISBN</th>
							<th>Subject Code</th>
							<th>Book Name</th>
							<th>Author Name</th>
							<th>Shelves No</th>
							<th>Price</th>
						</tr> 
					
				<?php		
					
					// writing queries 
					$query = "SELECT * FROM books";

					// get result 
					$result = mysqli_query($con, $query);
					while($row = mysqli_fetch_object($result)){
				?>
						<tr>
							<td> <?php echo $row->ISBN;?> </td>
							<td> <?php echo $row->book_code;?> </td>
							<td> <?php echo $row->Book_Name;?> </td>
							<td> <?php echo $row->Author; ?> </td>
							<td> <?php echo $row->Shelves_No; ?> </td>
							<td> <?php echo $row->PRICE; ?> </td>
						</tr>
				
				<?PHP } ?>
			
		</div>
	</div>

	</body>
</html>