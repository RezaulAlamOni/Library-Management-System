

<?php 
	include 'db.php';
	//include 'upper.php'; 
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

		<link rel="stylesheet" type="text/css" href="CSS/members.css">
		<title>Add Member in The System</title>
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
            <a href="library.php" class="btn btn-warning">Home</a>
            <a href="index.php" class="btn btn-danger">Logout</a></p>
	       <div id="members_data">
		<div class="mdata_container">
		<h1>Add new members</h1>
			<form action="members_add_query.php" method="POST">
				<table>
					<tr>
					  <td>Member Id</td>
					  <td><input 
					  			type="text" 
					  			name="MEMBER_ID"
					  			autofocus required>
					  </td>
					</tr>
					
					<tr>
					  <td>Member Type</td>
					  <td><select name="MEMBER_TYPE">
                            <option > </option>
                            <option name="USER">Student</option>
                            <option name="USER">Teacher</option>
                          </select>
					  </td>
					</tr>

					<tr>
					  <td>Member Name</td>
					  <td><input 
					  			type="text" 
					  			name="MEMBER_NAME" 
					  			autofocus required>
					  </td>
					</tr>
	
					<tr>
					  <td>Exp Date</td>
					  <td><input 
					  			type="DATE" 
					  			name="EXP_DATE" 
					  			pattern="[0-9]{2,}-[0-9]{2,}-[0-9]{2}"
					  			placeholder="dd-mm-yy" 
					  			autofocus required>
					  </td></tr>
                        <tr>
                            <td>Department </td>
                            <td>
                                <select type="text" name="dept">
                            <option > </option>
                            <option name="USER">CSE</option>
                            <option name="USER">BBA</option>
                            <option name="USER">ECE</option>
                            <option name="USER">Deploma</option>
                          </select>
					  </td></tr>
                    <tr>
                       <td>Password</td>
					  <td><input 
					  			type="text" 
					  			name="pass" 
					  			placeholder="******" 
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