<?php
	$Name_Account = $_REQUEST['Name_Account'];
	$Pw = $_REQUEST['Password'];
	
	require_once('connFilm.php');

	$sql = "Select * From Account Where Name_Account like '" . $Name_Account . "' and Password like '" . $Pw . "'";
	$result = $connFilm->query($sql);
	
	if ($result->num_rows > 0) {
		session_start();
		$account = $result->fetch_assoc();
		if ($account['Role'] == 'Admin') {
			$_SESSION['Admin'] = true;
			header("Location: Admin_Listing.php");
		} else if ($account['Role']){
			$_SESSION['Student'] = true;
			$_SESSION['Id_User'] = $account['Id_Account'];
			header("Location: hp.php");
		} else {
			$_SESSION['Teacher'] = true;
			$_SESSION['Id_User'] = $account['Id_Account'];
			header("Location: hp.php");
		}
	} else
		header("Location: login.php");
	
	$connFilm->close();
