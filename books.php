
<?php 
	include 'db.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="CSS/books.css">
		<title>Books</title>
	</head>
    <style>
        p {
            margin-left: 1300px;
            position: fixed;
            margin-top: 10px;
            color: red;
            font-size:20px;
        }
        
    </style>
	<body>
        <p>
            <a href="library.php">Home</a>
            <a href="index.php">Logout</a>
        </p>
		<div id="books">
			<div class="bd_container">
				<form action="books_search.php" method="POST">
					<input 
						type="text" 
						name="BOOK_NAME"
						placeholder="Enter book Name/ISBN">
					<input type="submit" value="Search">
				</form>
				
				<h1>Available book list is here</h1>
				<table>
						<tr>
							<th>ISBN</th>
							<th>Subject Code</th>
							<th>Book Name</th>
							<th>Author</th>
							<th>Shelve No</th>
							<th>Price</th>
							<th><a href="books_add_form.php">Add</a></th>
						</tr> 
					
				<?php		
					
					$query = "SELECT * FROM books";
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
							<td>
								<a href="books_edit_form.php?id=<?php echo $row->ISBN; ?>">Edit</a>
							</td>
							<td> 
								<a href="books_delete_query.php?id=<?php echo $row->ISBN;    ?>">Delete</a>
			  				</td>
						</tr>
				
				<?PHP } ?>
                    <div>
                        <?php
                        $query = "select count(ISBN) AS isbn from books";
                        $result = mysqli_query($con, $query);
                       while($row = mysqli_fetch_object($result)){
                      ?>  
                        <table>
                            <tr>
                                <td> Total Number Of book In This Library : </td>
                                <td><?php echo $row->isbn;?></td>
                            </tr>
                        </table><?php }?>
                    <div>
			
		</div>
	</div>

	</body>
</html>