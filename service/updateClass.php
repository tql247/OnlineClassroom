<?php 
	require_once('../connection/connector.php');
	$id= $_POST["id_class"];
	$class_name = $_POST["class_name_update"];
	$class_code = $_POST["class_code_update"];
	$class_course = $_POST["class_course_update"];
	$class_room = $_POST["class_room_update"];

	$sql = "UPDATE class SET class_name = '$class_name', class_room ='$class_room', class_code ='$class_code', course_name='$class_course' WHERE id= '$id'";
	if($conn->query($sql) ===False){
		die("ERROR:". $sql. $conn->error );
	}else if (isset($_SERVER["HTTP_REFERER"])) {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    } else {
        die("ERROR:" . $_SERVER["HTTP_REFERER"]);
    }
?>