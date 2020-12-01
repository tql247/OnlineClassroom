<?php  
	require_once('../connection/connector.php');
	$feed_title = $_POST["feed-title"];
	$feed_content = $_POST["feed-content"];
	$class_id = $_POST["class-id"];
	// $feed_cover = $_POST["feed-cover"];
	
	$sql = "INSERT INTO feed (`title`, `class_id`, `description`) VALUES ('$feed_title','$class_id','$feed_content') ";
	if($conn->query($sql) ===False){
		die("ERROR:". $sql. $conn->error );
	}else if (isset($_SERVER["HTTP_REFERER"])) {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    } else {
        die("ERROR:" . $_SERVER["HTTP_REFERER"]);
    }
?>