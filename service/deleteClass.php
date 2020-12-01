<?php 
	require_once('../connection/connector.php');
	$id= $_POST["id_class_delete"];
	$sql = "DELETE FROM class WHERE id= '$id'";
	if($conn->query($sql) ===False){
		die("ERROR:". $sql. $conn->error );
	}else{ header("Location: ../views/admin/classmanagement.php?");}
	
?>