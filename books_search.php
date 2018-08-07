			<?php 
				include 'db.php';
			?>
			<!DOCTYPE html>
			<html>
				<head>
					<meta charset="utf-8">
					<link rel="stylesheet" type="text/css" href="CSS/books.css">
					<title>Search Book for Database</title>
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
					<div id="books">
						<div class="bd_container">
							<form action="books_search.php" method="POST">
								<input 
									type="text" 
									name="BOOK_NAME"
									placeholder="book name or isbn">
								<input type="submit" value="SEARCH">
								<input type="reset"  value="RESET">
							</form>
							
							<h1>Available book list is here</h1>
                            <?php
				
									$name = $_POST["BOOK_NAME"];

									require_once 'db.php';

									$query  = "SELECT * FROM books WHERE BOOK_NAME LIKE '$name%' OR ISBN LIKE '$name%'";
									$result = mysqli_query($con, $query);
				            ?>
							<table>
								<tr>
									<th>Book Name</th>
									<th>Author </th>
									<th>Subject Code</th>
									<th>ISBN</th>
									<th>Shelves No</th>
									<th>Price</th>
								</tr>
                                <?php 
 									while($row = mysqli_fetch_object($result)){ ?>                               
								<tr>
							         <td> <?php echo $row->Book_Name;?> </td>
							         <td> <?php echo $row->Author; ?> </td>
                                     <td> <?php echo $row->book_code;?> </td>
                                     <td> <?php echo $row->ISBN;?> </td>
							         <td> <?php echo $row->Shelves_No; ?> </td>
							         <td> <?php echo $row->PRICE; ?> </td>
									<td>
										<a href="books_edit_form.php?id=<?php echo $row->ISBN; ?>">EDIT</a>
									</td>
									<td> 
										<a href="books_delete_query.php?id=<?php echo $row->ISBN;    ?>">DELETE</a>
					  				</td>
                                    <?PHP }?>
								</tr>
							</table>
						</div>
					</div>
                        			
				</body>
			</html>