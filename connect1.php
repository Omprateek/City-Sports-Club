

<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','CSC');

// get the post records
$name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$pincode=$_POST['address'];
$membership=$_POST['membership'];

// database insert SQL code
$sql = ("INSERT INTO 'membership'('name','email','contact','address','membership') 
        values(?,?,?,?,?)");  
// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>