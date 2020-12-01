<?php  
	require_once('../connection/connector.php');
	$id_user = $_POST["id_user_current"];
	$id_feed = $_POST["id_feed"];
	$cmt = $_POST["content_comment"];
	echo $id_feed,$id_user;
	
	$sql = "INSERT INTO comment (`feed_id`, `user_id`, `content`) VALUES ('$id_feed','$id_user','$cmt') ";
	if($conn->query($sql) ===False){
		die("ERROR:". $sql. $conn->error );
	}else if (isset($_SERVER["HTTP_REFERER"])) {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    } else {
        die("ERROR:" . $_SERVER["HTTP_REFERER"]);
    }
?>