<?php 
	require_once('../connection/connector.php');
    $feed_id= $_POST["feed_id"];
	$sql = "DELETE FROM feed WHERE id= '$feed_id'";
	if($conn->query($sql) ===False){
		die("ERROR:". $sql. $conn->error );
	}else if (isset($_SERVER["HTTP_REFERER"])) {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    } else {
        die("ERROR:" . $_SERVER["HTTP_REFERER"]);
    }
?>