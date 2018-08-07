<?php

	$username  = $_POST["USER" ];
	$password  = $_POST["PASS" ];

    require_once 'db.php';
    $username = stripslashes($username);
    $password = stripslashes($password);
    //$username = mysqli_real_escape_string($username);
    //$password = mysqli_real_escape_string($password);

    $sql="SELECT * FROM members where dept='$username' and pass='$password'";
    $result = mysqli_query($con , $sql);
    
    $count=mysqli_num_rows($result);
	if($count==1)
	{
		header("Location: library_mem.php");
	}

	else
	{
		header("Location: index.php");
	}

	
?>