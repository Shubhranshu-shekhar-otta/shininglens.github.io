<?php
   $email=$_POST['email'];
   $message=$_POST['message'];

	$conn = new mysqli('localhost', 'root', '', 'test');


	if ($conn->connect_error) {
		die('connection failed :' .$conn->connect_error);
	}else {

   $stmt= $conn->prepare("insert into registration(email, message) values(?, ?)");

   $stmt->bind_param("ss",$email,$message);
   $stmt->execute();
   echo "resistration successfully...";
   $stmt->close();
   }
?>