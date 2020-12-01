<?php  
	require_once('../connection/connector.php');
	$name= $_POST["class_name"];
	$code= $_POST["class_code"];
	$room= $_POST["class_room"];
	$course= $_POST["course_name"];
	
	$sql = "INSERT INTO class(class_name,class_code,class_room,course_name) VALUES ('$name','$code','$room','$code') ";
	if($conn->query($sql) ===False){
		die("ERROR:". $sql. $conn->error );
	}else{ header("Location: ../views/admin/classmanagement.php?");}


?>