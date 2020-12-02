<?php
	require_once('../connection/connector.php');

	$class_id = $_POST["class_id"];
	$title = $_POST["assignment-title"];
	$description = $_POST["assignment-desc"];
	$open = $_POST["assignment-open"];
	$due = $_POST["assignment-due"];
	

    $target_dir = "../upload_file/";
	$file_name = basename($_FILES["assignmen-attach"]["name"]);
	$target_file = $target_dir . $file_name;

	if (!move_uploaded_file($_FILES["assignmen-attach"]["tmp_name"], $target_file)) {
        die("Sorry, there was an error uploading your file.");
    }

	$sql = "INSERT INTO assignment (`class_id`, `title`, `description`, `open`, `due`, `attach`) VALUES ('$class_id','$title', '$description','$open','$due','$file_name') ";
	
	if($conn->query($sql) ===False){
		die("ERROR:". $sql. $conn->error );
	}else if (isset($_SERVER["HTTP_REFERER"])) {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    } else {
        die("ERROR:" . $_SERVER["HTTP_REFERER"]);
    }
?>