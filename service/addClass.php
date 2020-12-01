<?php  
	require_once('../connection/connector.php');
	$name = $_POST["class_name"];
	$code = $_POST["class_code"];
	$room = $_POST["class_room"];
	$course = $_POST["course_name"];
	$id_user = $_POST["id_user"];

	$conn->begin_transaction();

	$img=$_FILES['img']; 
	if($img['name']==''){  
		echo "<h2>Select an Image Please.</h2>";
	}
	else {
		$filename = $img['tmp_name'];
		$client_id='e4d17de64fb7066';		// Replace this with your client_id, if you want images to be uploaded under your imgur account
		$handle = fopen($filename, 'r');
		$data = fread($handle, filesize($filename));
		$pvars = array('image' => base64_encode($data));
		$timeout = 30;
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, 'https://api.imgur.com/3/image.json');
		curl_setopt($curl, CURLOPT_TIMEOUT, $timeout);
		curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: Client-ID ' . $client_id));
		curl_setopt($curl, CURLOPT_POST, 1);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $pvars);
	
		$out = curl_exec($curl);
		curl_close ($curl);
		$pms = json_decode($out,true);
		$url=$pms['data']['link'];
		if($url!=''){
		}
		else{
			echo "<div>".$pms['data']['error']."</div>";  
		} 
	}

	try {
		$sql = "INSERT INTO class(class_name,course_name,class_room,class_code, class_cover) VALUES ('$name','$course','$room','$code', '$url') ";
		$conn->query($sql);
		$class_id = $conn->insert_id;;
		$sql = "INSERT INTO user_class(`class_id`, `user_id`) VALUES ('$class_id','$id_user') ";
		$conn->query($sql);

		$conn->commit();

		if (isset($_SERVER["HTTP_REFERER"])) {
			header("Location: " . $_SERVER["HTTP_REFERER"]);
		} else {
			die("ERROR:" . $_SERVER["HTTP_REFERER"]);
		}
	} catch (Exception $e) {
		$conn->rollback();
	}

?>
