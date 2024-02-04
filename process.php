<?php
require_once('config.php');

if(isset($_POST)){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	
	$sql = "INSERT INTO users (name, email, subject, message) VALUES (?, ?, ?, ?)";
	$stmtinsert = $db->prepare($sql);
	$result = $stmtinsert->execute([$name, $email, $subject, $message]);

	if($result){
		echo "Successfully saved";
	} else {
		echo "Error in saving data";
	}
} else {
	echo "No data";
}
?>
