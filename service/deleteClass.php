<?php 
	require_once('../connection/connector.php');
	$id= $_POST["id_class_delete"];
	echo $id;
	// $sql = "UPDATE class SET class_name = '$class_name', class_room ='$class_room', class_code ='$class_code', course_name='$class_course' WHERE id= '$id'";
	// if($conn->query($sql) ===False){
	// 	die("ERROR:". $sql. $conn->error );
	// }else{ header("Location: ../views/admin/classmanagement.php?");}
?>