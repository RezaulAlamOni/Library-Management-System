
<?php
	require_once 'db.php';
	//include 'upper.php';
	$id=$_GET['id'];
	$query= "SELECT * FROM returns WHERE return_id = $id";
	$result= mysqli_query($con, $query);
	$row= mysqli_fetch_object($result)
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="CSS/return.css">
		<title>Return Edit</title>
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
		<div id="return_edit">
				<div class="redit_container">
					<h1>Update return information</h1>
						<form action="return_edit_query.php" method="POST">
							<table>
                                <input type="hidden" name="id" value=<?php echo $id; ?>>
								<tr>
								  <td>Return ID</td>
								  <td><input 
								  			type="text" 
								  			name="RETURN_ID"
								  			value="<?php echo $row->return_id;?>" 
								  			disabled="disabled">
								  </td>
								</tr>

								<tr>
								  <td>Member ID</td>
								  <td><input 
								  			type="text" 
								  			name="MEMBER_ID"
								  			value="<?php echo $row->MEMBER_ID;?>"  
								  			>
								  </td>
								</tr>
						
								<tr>
								  <td>Days</td>
								  <td><input 
								  			type="text" 
								  			name="DAYS" 
								  			value="<?php echo $row->DAYS;?>"  
								  			autofocus required>
								  </td>
								</tr>

								<tr>
								  <td>Fines</td>
								  <td><input 
								  			type="text" 
								  			name="FINES"  
								  			value="<?php echo $row->FINES;?>"
								  			autofocus required>
								  </td>
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