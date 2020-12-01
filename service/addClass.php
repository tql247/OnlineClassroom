<?php  
	require_once('../connection/connector.php');
	$name = $_POST["class_name"];
	$code = $_POST["class_code"];
	$room = $_POST["class_room"];
	$course = $_POST["course_name"];
	$id_user = $_POST["id_user"];

	$conn->begin_transaction();
	
	try {
		$sql = "INSERT INTO class(class_name,class_code,class_room,course_name) VALUES ('$name','$code','$room','$code') ";
		$conn->query($sql);
		$class_id = $conn->insert_id;;
		$sql = "INSERT INTO user_class(`class_id`, `user_id`) VALUES ('$class_id','$id_user') ";
		$conn->query($sql);

		$conn->commit();

		if (isset($_SERVER["HTTP_REFERER"])) {
			header("Location: " . $_SERVER["HTTP_REFERER"]);
		} else {
			die("ERROR:" . $_SERVER["HTTP_REFERER"]);
		}
	} catch (Exception $e) {
		$conn->rollback();
	}
?>