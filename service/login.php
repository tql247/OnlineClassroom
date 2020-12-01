<?php 
	require_once('../connection/connector.php');
	$username= $_POST["username"];
	$password= $_REQUEST["password"];

	$sql = "SELECT * FROM user
			WHERE `username` = '$username'";


	if($conn->query($sql) ===False){
		die("ERROR:". $sql. $conn->error );
	}else if ($user = $conn->query($sql)->fetch_assoc()) {
		if (password_verify($password, $user["password"])) {
			session_start();
			if ($user['role'] == 'Admin') {
				echo 'admin';
				$_SESSION['Admin'] = true;
			} else if (($user['role'] == 'Teacher')){
				$_SESSION['Teacher'] = true;
				echo 'admin';
			} else {
				$_SESSION['Student'] = true;
				echo 'Student';
			}
			$_SESSION['isLogin'] = true;
			$_SESSION['Id_User'] = $user['id'];
			header("Location: ../views/index.php");
		} else {
			echo 'fail';
	        // header("Location: ../views/account/login.php");
		}
    }
?>