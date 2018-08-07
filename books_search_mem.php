			<?php 
				include 'db.php';
				//include 'upper_mem.php'; 
			?>
			<!DOCTYPE html>
			<html>
				<head>
					<meta charset="utf-8">
					<link rel="stylesheet" type="text/css" href="CSS/books.css">
					<title>SEARCH RESULT</title>
				</head>
                <style>
                        p {
                            margin-left: 1300px;
                            position: fixed;
                            margin-top: 30px;
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
									placeholder="book name or isbn">
								<input type="submit" value="SEARCH">
							</form>
							
							<h1>Available book list is here</h1>
							<table>
								<tr>
									<th>Book Name</th>
									<th>ISBN</th>
									<th>Subject Code </th>
									<th>Author Name</th>
									<th>Shelve No</th>
									<th>PRICE</th>
								</tr>
							
								<?php
				
									$name = $_POST["BOOK_NAME"];

									require_once 'db.php';

									$query  = "SELECT * FROM books WHERE BOOK_NAME LIKE '$name%' OR isbn LIKE '$name%'";
									$result = mysqli_query($con, $query);
									while($row = mysqli_fetch_object($result))
										{
								?>
								<tr>
                                     <td> <?php echo $row->Book_Name;?> </td>
									 <td> <?php echo $row->ISBN;?> </td>
							         <td> <?php echo $row->book_code;?> </td>
							         <td> <?php echo $row->Author; ?> </td>
							         <td> <?php echo $row->Shelves_No; ?> </td>
							         <td> <?php echo $row->PRICE; ?> </td>
								</tr>
						
								<?PHP }
                                $count=mysqli_num_rows($result);
                                if($count==0){
                                ?>
							    <p >Sorry this Book Is Not In the list .. Please try again!!!</p>
                                <?php } ?>
							</table>
						</div>
					</div>
				</body>
			</html>