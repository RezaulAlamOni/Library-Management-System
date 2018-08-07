<?php
    require_once 'db.php';
	$username  = $_POST["USER" ];
	$password  = $_POST["PASS" ];
    
    
    $username = stripslashes($username);
    $password = stripslashes($password);
    //$username = mysqli_real_escape_string($username);
    //$password = mysqli_real_escape_string($password);

    $sql="SELECT * FROM admin WHERE user_id='$username' and password='$password'";
    $result = mysqli_query($con , $sql);

    $count=mysqli_num_rows($result);
	if($count==1)
	{
		header("Location: library.php");
        //echo $count;
	}
	else
	{
		 header("Location: index.php");
        //echo $count;
	}

	?>