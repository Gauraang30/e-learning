<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
include('connection.php');
// get the post records
$txtName = $_POST['username'];
$txtEmail = $_POST['email'];
$txtPhone = $_POST['password'];

// database insert SQL code
$sql = "INSERT INTO `register` (`Id`, `name`, `email`, `password`) VALUES ('0', '$txtName', '$txtEmail', '$txtPhone')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>