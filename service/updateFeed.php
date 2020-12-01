<?php 
	require_once('../connection/connector.php');
	$id= $_POST["id_feed"];
	$title = $_POST["feed_title"];
	$content = $_POST["feed_content"];

	$sql = "UPDATE feed SET title = '$title', description ='$content' WHERE id= '$id'";
	if($conn->query($sql) ===False){
		die("ERROR:". $sql. $conn->error );
	}else if (isset($_SERVER["HTTP_REFERER"])) {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    } else {
        die("ERROR:" . $_SERVER["HTTP_REFERER"]);
    }
?>