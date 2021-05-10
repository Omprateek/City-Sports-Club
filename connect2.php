

<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$subjectt = $_POST['subject'];
$conn = new mysqli('localhost', 'root', '','CSC');
if($conn->connect_error){
	die('Connection failed : ' .$conn->connect_error);
}else{
	$stmt=$conn->prepare("INSERT INTO contactUs (firstname, lastname, email, subject) VALUES (?,?,?,?)");
	$stmt->bind_param("ssss", $firstname, $lastname, $email, $subject);
	$stmt->execute();
	echo "Success";
	$stmt->close();
	$conn->close();
}
?>