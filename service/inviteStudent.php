<?php  
	$student_id = $_POST["student_id"];
	$class_id = $_POST["class_id"];
	// $feed_cover = $_POST["feed-cover"];
	
	$sql = "INSERT INTO feed (`student_id`, `class_id`) VALUES ('$student_id','$class_id') ";
	if($conn->query($sql) ===False){
		die("ERROR:". $sql. $conn->error );
	}else if (isset($_SERVER["HTTP_REFERER"])) {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    } else {
        die("ERROR:" . $_SERVER["HTTP_REFERER"]);
    }
?>