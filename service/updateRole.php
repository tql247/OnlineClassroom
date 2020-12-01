<?php 
	require_once('../connection/connector.php');
	$id= $_POST["id_user"];
	$role = $_POST["role_user"];
	echo $id,$role;
	$sql = "UPDATE user SET role = '$role' WHERE id= '$id'";
	if($conn->query($sql) ===False){
		die("ERROR:". $sql. $conn->error );
	}else if (isset($_SERVER["HTTP_REFERER"])) {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    } else {
        die("ERROR:" . $_SERVER["HTTP_REFERER"]);
    }
?>