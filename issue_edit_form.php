
<?php
	require_once 'db.php';
	//include 'upper.php';
	$id=$_GET['id'];
	$query= "SELECT * FROM issues WHERE ISSUE_ID = $id";
	$result= mysqli_query($con, $query);
	$row= mysqli_fetch_object($result)
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="CSS/issue.css">
		<title>Issue Edit</title>
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
		<div id="issue_edit">
				<div class="iedit_container">
					<h1>Update issue info</h1>
						<form action="issue_edit_query.php" method="POST">
							<table>
								<input type="hidden" name="id" value=<?php echo $id; ?>>
								<tr>
								  <td>Issue ID</td>
								  <td><input 
								  			type="text" 
								  			name="ISSUE_ID" 
								  			value="<?php echo $row->ISSUE_ID;?>" 
								  			disabled="disabled" >
								  </td>
								</tr>
								<tr>
								  <td>Member ID</td>
								  <td><input 
								  			type="text" 
								  			name="MEMBER_ID"
								  			value="<?php echo $row->MEMBER_ID;?>" 
								  			disabled="disabled" >
								  </td>
								</tr>
								
								<tr>
								  <td>ISBN</td>
								  <td><input 
								  			type="text" 
								  			name="ISBN"
								  			value="<?php echo $row->isbn;?>" 
								  			autofocus required>
								  </td>
								</tr>
								
								<tr>
								  <td>Issue Date</td>
								  <td><input 
								  			type="DATE" 
								  			name="ISSUE_DATE" 
								  			pattern="[0-9]{2,}-[0-9]{2,}-[0-9]{2}"
								  			value="<?php echo $row->ISSUE_DATE;?>" 
								  			autofocus required>
								  </td>
								</tr>

								<tr>
								  <td>Return Date</td>
								  <td><input 
								  			type="DATE" 
								  			name="RETURN_DATE" 
								  			pattern="[0-9]{2,}-[0-9]{2,}-[0-9]{2}"
								  			value="<?php echo $row->RETURN_DATE;?>" 
								  			autofocus required>
								  </td>
								</tr>
								
								<tr>
								  <td><input type="submit" value="UPDATE"></td>
								  <td><input type="reset" name="RESET"></td>
								</tr>
							</table>
						</form>
						
				</div>
		</div>

	</body>
</html>