<?php 
	require_once('../connection/connector.php');
    $cmt_id= $_POST["cmt_id"];

	$sql = "DELETE FROM comment WHERE `id` = '$cmt_id'";
	if($conn->query($sql) ===False){
		die("ERROR:". $sql. $conn->error );
	}else if (isset($_SERVER["HTTP_REFERER"])) {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    } else {
        die("ERROR:" . $_SERVER["HTTP_REFERER"]);
    }
?>