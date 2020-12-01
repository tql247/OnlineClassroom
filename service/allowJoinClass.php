<?php  
	require_once('../connection/connector.php');
	$user_id= $_POST["user_id"];
    $class_id= $_POST["class_id"];
    
    $sql = "UPDATE user_class SET `status` = 'j' WHERE `user_id` = '$user_id' AND `class_id` = '$class_id'";
	if($conn->query($sql) ===False){
		die("ERROR:". $sql. $conn->error );
	}else if (isset($_SERVER["HTTP_REFERER"])) {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    } else {
        die("ERROR:" . $_SERVER["HTTP_REFERER"]);
    }

?>