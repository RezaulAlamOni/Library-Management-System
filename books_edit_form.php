
<?php
	require_once 'db.php';
	$id=$_GET['id'];
	$query= "SELECT * FROM books WHERE ISBN = $id";
	$result= mysqli_query($con, $query);
	$row= mysqli_fetch_object($result)
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="CSS/books.css">
		<title>Edit Book Information</title>
	</head>
        <style>
             p {
                margin-left: 1300px;
                position: fixed;
                margin-top: 30px;
            }
         </style>

	<body>
        <p><a href="index.php">Logout</a></p>
        <div id="books_edit">
				<div class="bedit_container">
					<h1>Update Book Information</h1>
						<form action="books_edit_query.php" method="POST">
							<table>
								<input type="hidden" name="id" value=<?php echo $id; ?>>
								<tr>
								  <td>ISBN</td>
								  <td><input
								  			value="<?php echo $row->ISBN;?>" 
								  			disabled="disabled" >
								  </td>
								</tr>
								<tr>
								  <td>Subject Code</td>
								  <td><input 
								  			type="text" 
								  			name="book_code"
								  			value="<?php echo $row->book_code;?>" 
								  			autofocus required>
								  </td>
								</tr>
								<tr>
								  <td>Book Name</td>
								  <td><input 
								  			type="text" 
                                            name="Book_Name"
								  			value="<?php echo $row->Book_Name;?>" 
								  			autofocus required></td>
								</tr><tr>
								  <td>Author </td><td>
                                      <input 
								  			type="text" 
								  			name="Author"
								  			value="<?php echo $row->Author;?>" 
								  			autofocus required></td>
								</tr><tr>
								  <td>Shelve No</td>
								  <td><input 
								  			type="text" 
								  			name="Shelves_No" 
								  			value="<?php echo $row->Shelves_No;?>" 
								  			autofocus required></td>
								</tr><tr>
								  <td>PRICE</td>
								  <td><input 
								  			type="text" 
								  			name="PRICE" 
								  			value="<?php echo $row->PRICE;?>" 
								  			autofocus required></td>
								</tr>
								<tr>
								  <td><input type="submit" value="Update"></td>
								  <td><input type="reset" name="Reset"></td>
								</tr>
							</table>
						</form>
						
				</div>
		</div>

	</body>
</html>
</html>