
<?php 
	include 'db.php';
	//include 'upper.php'; 
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="CSS/return.css">
		<title>Return book</title>
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
		<div id="return">
			<div class="rt_container">
			<form action="return_search.php" method="POST">
					<input 
						type="text" 
						name="MEMBER_ID"
						placeholder="search by member id">
					<input type="submit" value="SEARCH">
				</form>

				<h1>Available return list is here</h1>
				<table>
						<tr>
							<th>Return ID</th>
							<th>Member ID</th>
							<th>Days</th>
							<th>Fines</th>
							<th><a href="return_add_form.php">Add</a></th>
						</tr> 
					
				<?php		
					
					// writing queries 
					$query = "SELECT * FROM returns";

					// get result 
					$result = mysqli_query($con, $query);
					while($row = mysqli_fetch_object($result)){
				?>
						<tr>
							<td> <?php echo $row->return_id; ?> </td>
							<td> <?php echo $row->MEMBER_ID; ?> </td>
							<td> <?php echo $row->DAYS; ?> </td>
							<td> <?php echo $row->FINES; ?> </td>
							<td>
				<a href="return_edit_form.php?id=<?php echo $row->return_id;?>">Edit</a>
                
							</td>
							<td> 
								<a href="return_delete_query.php?id=<?php echo $row->return_id;?>">Delete</a>
			  				</td>
						</tr>
				
				<?PHP } ?>
			
		</div>
	</div>

	</body>
</html>