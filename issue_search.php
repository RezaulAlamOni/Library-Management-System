			<?php 
				include 'db.php';
				//include 'upper.php'; 
			?>
			<!DOCTYPE html>
			<html>
				<head>
					<meta charset="utf-8">
					<link rel="stylesheet" type="text/css" href="CSS/issue.css">
					<title>SEARCH</title>
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
                        <a href="library.php">Home</a>
                        <a href="index.php">Logout</a>
                    </p>
					<div id="issue">
						<div class="is_container">
							<form action="issue_search.php" method="POST">
								<input 
									type="text" 
									name="MEMBER_ID"
									placeholder="search by member id">
								<input type="submit" value="Search">
							</form>
							
							<h1>All Issue Here</h1>
							<table>
								<tr>
									<th>Member ID</th>
									<th>Issue ID</th>
									<th>ISBN</th>
									<th>Issue Date</th>
									<th>Return Date</th>
								</tr>
							
								<?php
				
									$name = $_POST["MEMBER_ID"];

									require_once 'db.php';

									$query  = "SELECT * FROM issues WHERE MEMBER_ID LIKE '$name%' ";
									$result = mysqli_query($con, $query);
									while($row = mysqli_fetch_object($result))
										{
								?>
								
								<tr>
									<td> <?php echo $row->MEMBER_ID; ?> </td>
									<td> <?php echo $row->ISSUE_ID; ?> </td>
									<td> <?php echo $row->isbn; ?> </td>
									<td> <?php echo $row->ISSUE_DATE; ?> </td>
									<td> <?php echo $row->RETURN_DATE; ?> </td>
									<td>
										<a href="issue_edit_form.php?id=<?php echo $row->ISSUE_ID; ?>">Edit</a>
									</td>
									<td> 
										<a href="issue_delete_query.php?id=<?php echo $row->ISSUE_ID; ?>">Delete</a>
					  				</td>
								</tr>
						
								<?PHP } ?>
							
							</table>
						</div>
					</div>
				</body>
			</html>