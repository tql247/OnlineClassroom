<?php
    session_start();
		if (isset($_SESSION['isLogin'])) {
			if(isset($_SESSION['Admin'])) {
                header("Location: ./admin");
            } else if (isset($_SESSION['Teacher'])) {
                header("Location: ./teacher");
            } else {
                header("Location: ./student/");
            }
		} else {
            header("Location: ./account/login.php");
		}
?>