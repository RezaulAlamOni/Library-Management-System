			<?php 
				include 'db.php';
				//include 'upper_mem.php'; 
			?>
			<!DOCTYPE html>
			<html>
				<head>
					<meta charset="utf-8">
					<link rel="stylesheet" type="text/css" href="CSS/return.css">
					<title>SEARCH RESULT</title>
				</head>
				
				<body>
                    <p> <a href="library_mem.php"> Home</a>
                        <a href="index.php">Logout</a></p>
					<div id="return">
						<div class="md_container">
							<form action="return_search_mem.php" method="POST">
								<input 
									type="text" 
									name="MEMBER_ID"
									placeholder="search by member id">
								<input type="submit" value="SEARCH">
							</form>
							
							<h1>Available return list is here</h1>
							<table>
								<tr>
									<th>MEMBER ID</th>
									<th>RETURN ID</th>
									<th>DAYS</th>
									<th>FINES</th>
								</tr>
							
								<?php
				
									$name = $_POST["MEMBER_ID"];

									require_once 'db.php';

									$query  = "SELECT * FROM returns WHERE MEMBER_ID LIKE '$name%' ";
									$result = mysqli_query($con, $query);
									while($row = mysqli_fetch_object($result))
										{
								?>
								
								<tr>
									<td> <?php echo $row->MEMBER_ID; ?> </td>
									<td> <?php echo $row->return_id; ?> </td>
									<td> <?php echo $row->DAYS; ?> </td>
									<td> <?php echo $row->FINES; ?> </td>
								</tr>
						
								<?PHP } ?>
							
							</table>
						</div>
					</div>
				</body>
			</html>