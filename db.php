<?php

//create connection

$db_host = 'localhost';
$db_user = 'root';
$db_pass = '9953425';
$db_name = 'library';


//create mysqli object

$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


//Error handler

if($con-> connect_error){
	printf("connection failed: %s\n", $con-> connect_error);
	exit();
}

?>