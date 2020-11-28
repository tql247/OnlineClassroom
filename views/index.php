<?php
	session_start();
		if (isset($_SESSION['isLogin'])) {
			if(isset($_SESSION['Admin'])) {
                // header("Location: login.php");
            } else if (isset($_SESSION['Teacher'])) {
                // header("Location: login.php");
            } else {
                // header("Location: login.php");
            }
		} else {
            // header("Location: login.php");
		}
?>