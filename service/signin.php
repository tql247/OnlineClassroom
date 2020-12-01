<?php 
	require_once('../connection/connector.php');
	$fullname= $_POST["fullname"];
	$birth= $_POST["birth"];
	$email= $_POST["email"];
	$phone= $_POST["phone"];
	$username= $_POST["username"];
	$password= $_REQUEST["password"];
	$password = password_hash($password, PASSWORD_DEFAULT);

	$sql = "INSERT INTO `user`(`username`, `password`, `fullname`, `birth`, `email`, `phone`)
						VALUES ('$username', '$password', '$fullname', '$birth', '$email', '$phone')";
	if($conn->query($sql) ===False){
		die("ERROR:". $sql. $conn->error );
	}else{
        header("Location: ../views/account/login.php");
    }
?>