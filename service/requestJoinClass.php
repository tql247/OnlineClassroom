<?php
	require_once('../connection/connector.php');

    $user_id = $_POST["user_id"];
	$class_code = $_POST["class_code"];
    
    $class_id = $conn->query("SELECT * from class WHERE `class_code` = '$class_code'")->fetch_assoc()["id"];
	
	$sql = "INSERT INTO user_class (`user_id`, `class_id`, `status`) VALUES ('$user_id','$class_id', 's') ";
	if($conn->query($sql) ===False){
		die("ERROR:". $sql. $conn->error );
	}else if (isset($_SERVER["HTTP_REFERER"])) {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    } else {
        die("ERROR:" . $_SERVER["HTTP_REFERER"]);
    }
?>