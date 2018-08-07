

<?php 
	include 'db.php';
	//include 'upper.php'; 
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="CSS/return.css">
		<title>Return Add</title>
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
            <a href="index.php">Logout</a></p>
	    <div id="return_data">
		<div class="rdata_container">
		<h1>Add new members</h1>
			<form action="return_add_query.php" method="POST">
				<table>
					<tr>
					  <td>Return ID</td>
					  <td><input 
					  			type="text" 
					  			name="RETURN_ID"
					  			autofocus required>
					  </td>
					</tr>

					<tr>
					  <td>Member ID</td>
					  <td><input 
					  			type="text" 
					  			name="MEMBER_ID"
					  			autofocus required>
					  </td>
					</tr>
			
					<tr>
					  <td>Days</td>
					  <td><input 
					  			type="text" 
					  			name="DAYS" 
					  			placeholder="12"
					  			autofocus required>
					  </td>
					</tr>

					<tr>
					  <td>Fines</td>
					  <td><input 
					  			type="text" 
					  			name="FINES" 
					  			autofocus required>
					  </td>
					</tr>
                    <tr>
					  <td>ISBN</td>
					  <td><input 
					  			type="text" 
					  			name="ISBN" 
					  			autofocus required>
					  </td>
					</tr>
					<tr>
					  <td><input type="submit" value="Add"></td>
					  <td><input type="reset" name="Reset"></td>
					</tr>
				</table>
			</form>
			
		</div>
	</div>

	</body>
</html>