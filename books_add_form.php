

<?php 
	include 'db.php';
	//include 'upper.php'; 
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="CSS/books.css">
		<title>Adding Book</title>
	</head>
    <style>
             p {
                margin-left: 1300px;
                position: fixed;
                margin-top: 30px;
                background-color: chartreuse;
                text-decoration-color: darkblue;
                 font-size: 18px;
             }
     </style>

	<body>
        <p>
            <a href="library.php">Home</a>
            <a href="index.php">Logout</a>
        </p>
	<div id="books_data">
		<div class="bdata_container">
		<h1>Add new books</h1>
			<form action="books_add_query.php" method="POST">
				<table>
					<tr>
					  <td>ISBN</td>
					  <td><input 
					  			type="text" 
					  			name="ISBN"
					  			pattern="[0-9]{4}"
					  			title="support 4 digits" 
					  			autofocus required>
					  </td>
					</tr>
					<tr>
					  <td>Subject Code</td>
					  <td><input 
					  			type="text" 
					  			name="book_code"
					  			pattern="[A-Z]{3,}-[0-9]{3}" 
					  			autofocus required>
					  </td>
					</tr>
					<tr>
					  <td>Book Name</td>
					  <td><input 
					  			type="text" 
					  			name="Book_Name" 
					  			autofocus required>
					  </td>
					</tr>
					<tr>
					  <td>Author Name</td>
					  <td><input 
					  			type="text" 
					  			name="Author"
					  			autofocus required>
					  </td>
					</tr><tr>
					  <td>Shelve No</td>
					  <td><input 
					  			type="text" 
					  			name="Shelves_No"
					  			autofocus required></td>
					</tr><tr>
					  <td>PRICE</td>
					  <td><input 
					  			type="text" 
					  			name="PRICE"
                                autofocus required></td>
					</tr>
					<tr>
					  <td><input type="submit" value="Add"></td>
					  <td><input type="reset" value="Reset"></td>
					</tr>
				</table>
			</form>
			
		</div>
	</div>

	</body>
</html>