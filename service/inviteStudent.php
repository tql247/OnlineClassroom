<?php
	require_once('../connection/connector.php');

    $student_email = $_POST["student_email"];
	$class_id = $_POST["class_id"];
    
    $student_id = $conn->query("SELECT * from user WHERE `email` = '$student_email'")->fetch_assoc()["id"];
	
	$sql = "INSERT INTO user_class (`user_id`, `class_id`, `status`) VALUES ('$student_id','$class_id', 'c') ";
	if($conn->query($sql) ===False){
		die("ERROR:". $sql. $conn->error );
	}else if (isset($_SERVER["HTTP_REFERER"])) {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    } else {
        die("ERROR:" . $_SERVER["HTTP_REFERER"]);
    }
?>