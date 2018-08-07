			<?php 
				include 'db.php';
				//include 'upper.php'; 
			?>
			<!DOCTYPE html>
			<html>
				<head>
					<meta charset="utf-8">
					<link rel="stylesheet" type="text/css" href="CSS/members.css">
					<title>SEARCH RESULT</title>
				</head>
                    <style>
                     p {
                         margin-left: 1300px;
                         position: fixed;
                         margin-top: 30px;
                    }
                    a{
                        border: 2px solid green;
                        background: yellow;
                        border-radius: 3px;
                    }
                </style>
				
				<body>
                    <p>
                        <a href="library.php">Home</a>
                        <a href="index.php">Logout</a>
                    </p>
                    
					<div id="members">
						<div class="md_container">
							<form action="members_search.php" method="POST">
								<input 
									type="text" 
									name="MEMBER_ID"
									placeholder="search by member id">
								<input type="submit" value="SEARCH">
								<input type="reset"  value="RESET">
							</form>
							
							<h1>Available member list is here</h1>
							<table>
								<tr>
									<th>MEMBER ID</th>
									<th>MEMBER TYPE</th>
									<th>MEMBER NAME</th>
									<th>EXP DATE</th>
								</tr>
							
								<?php
				
									$name = $_POST["MEMBER_ID"];

									require_once 'db.php';

									$query  = "SELECT * FROM members WHERE MEMBER_ID LIKE '$name%' ";
									$result = mysqli_query($con, $query);
									while($row = mysqli_fetch_object($result))
										{
								?>
								
								<tr>
									<td> <?php echo $row->MEMBER_ID; ?> </td>
									<td> <?php echo $row->MEMBER_TYPE; ?> </td>
									<td> <?php echo $row->MEMBER_NAME; ?> </td>
									<td> <?php echo $row->EXP_DATE; ?> </td>
									<td>
										<a href="members_edit_form.php?id=<?php echo $row->MEMBER_ID; ?>">EDIT</a>
									</td>
									<td> 
										<a href="members_delete_query.php?id=<?php echo $row->MEMBER_ID;    ?>">DELETE</a>
					  				</td>
								</tr>
						
								<?PHP } ?>
							
							</table>
						</div>
					</div>
				</body>
			</html>