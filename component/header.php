<?php
	session_start();
	if (isset($_SESSION['User']))
		echo"<div>User</div>";
	else
		echo"<div>Noob</div>";
?>