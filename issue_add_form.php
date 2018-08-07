
<?php 
	include 'db.php';
	//include 'upper.php'; 
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="CSS/issue.css">
		<title>ISSUE DATABASE ADD</title>
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
	<div id="issue_data">
		<div class="idata_container">
		<h1>New Book Issue</h1>
			<form action="issue_add_query.php" method="POST">
				<table>
					<tr>
					  <td>Issue Id</td>
					  <td><input 
					  			type="text" 
					  			name="ISSUE_ID"
					  			autofocus required>
					  </td>
					</tr>
					
					<tr>
					  <td>Member Id</td>
					  <td><input 
					  			type="text" 
					  			name="MEMBER_ID" 
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
					  <td>Issue Date</td>
					  <td><input 
					  			type="DATE" 
					  			name="ISSUE_DATE" 
					  			autofocus required>
					  </td>
					</tr>
					<tr>
					  <td><input type="submit" value="ADD"></td>
					  <td><input type="reset" name="RESET"></td>
					</tr>
				</table>
			</form>
			
		</div>
	</div>

	</body>
</html>