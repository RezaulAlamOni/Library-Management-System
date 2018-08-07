
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
		<title>MEMBERS MANAGEMENT SYSTEM</title>
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
    <div class="container ">
        <p>
            <a href="library.php">Home</a>
            <a href="index.php">Logout</a></p>
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
							<th>Member Id</th>
							<th>Member Type</th>
							<th>Membe Name</th>
							<th>Exp Date</th>
                            <th>Department Name</th>
							<th>Password</th>
							<th><a href="members_add_form.php" class="btn btn-info">Add</a></th>
						</tr> 
					
				<?php		
					
					// writing queries 
					$query = "SELECT * FROM members";

					// get result 
					$result = mysqli_query($con, $query);
					while($row = mysqli_fetch_object($result)){
				?>
						<tr>
							<td> <?php echo $row->MEMBER_ID; ?> </td>
							<td> <?php echo $row->MEMBER_TYPE; ?> </td>
							<td> <?php echo $row->MEMBER_NAME; ?> </td>
							<td> <?php echo $row->EXP_DATE; ?> </td>
                            <td> <?php echo $row->dept; ?> </td>
                            <td> <?php echo $row->pass; ?> </td>
							<td>
				<a href="members_edit_form.php?id=<?php echo $row->MEMBER_ID; ?>">Edit</a>
							</td>
							<td> 
								<a href="members_delete_query.php?id=<?php echo $row->MEMBER_ID; ?>">Delete</a>
			  				</td>
						</tr>
				
				<?PHP } ?>
			
		    </div>
	    </div>
    </div>
	</body>
</html>