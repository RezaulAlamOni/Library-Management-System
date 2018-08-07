
<?php
	require_once 'db.php';
	//include 'upper.php';
	$id=$_GET['id'];
	$query= "SELECT * FROM members WHERE MEMBER_ID = $id";
	$result= mysqli_query($con, $query);
	$row= mysqli_fetch_object($result)
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="CSS/members.css">
		<title>Update Mamber Information</title>
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
		<div id="members_edit">
				<div class="medit_container">
					<h1>Update member information</h1>
						<form action="members_edit_query.php" method="POST">
							<table>
								<input type="hidden" name="id" value=<?php echo $id; ?>>
								<tr>
								  <td>Member Id</td>
								  <td><input 
								  			type="text" 
								  			name="MEMBER_ID" 
								  			value="<?php echo $row->MEMBER_ID;?>" 
								  			disabled="disabled" >
								  </td>
								</tr><tr>
								  <td>Member Type</td>
                                    <td><select name="MEMBER_TYPE">
                                    <option ><?php echo $row->MEMBER_TYPE;?></option>
                                    <option name="USER">Teacher</option>
                                </select>
					           </td>
								</tr>

								<tr>
								  <td>Member Name</td>
								  <td><input 
								  			type="text" 
								  			name="MEMBER_NAME"
								  			placeholder="write nicely" 
								  			value="<?php echo $row->MEMBER_NAME;?>" 
								  			autofocus required>
								  </td>
								</tr>
								
								<tr>
								  <td>Exp Date</td>
								  <td><input 
								  			type="DATE" 
								  			name="EXP_DATE" 
								  			placeholder="dd-mm-yy"
								  			value="<?php echo $row->EXP_DATE;?>" 
								  			autofocus required>
								  </td>
								</tr>
                                <tr>
								  <td>Department</td>
								  <td>
                                    <select type="text" name="dept">
                                        <option ><?php echo $row->dept;?></option>
                                        <option name="USER">BBA</option>
                                        <option name="USER">ECE</option>
                                        <option name="USER">Deploma</option>
                                    </select>
								  </td>
								</tr>
                                <tr>
								  <td>Password</td>
								  <td><input 
								  			type="password" 
								  			name="pass" 
								  			value="<?php echo $row->pass;?>" 
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