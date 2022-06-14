<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
include('connection.php');
// get the post records
$txtName = $_POST['name'];
$txtEmail = $_POST['subject'];
$txtPhone = $_POST['email'];
$txtArea=$_POST['message'];

// database insert SQL code
$sql = "INSERT INTO `contactus` (`Id`, `name`,`subject`, `email`, `query`) VALUES ('0', '$txtName', '$txtEmail', '$txtPhone','$txtArea')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>