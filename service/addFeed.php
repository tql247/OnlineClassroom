<?php  
	require_once('../connection/connector.php');
	$feed_title = $_POST["feed-title"];
	$feed_content = $_POST["feed-content"];
	$class_id = $_POST["class-id"];
	
	$img=$_FILES['img']; 
	if($img['name']==''){  
		$url = "";
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
	
	$sql = "INSERT INTO feed (`title`, `class_id`, `description`, `attach`) VALUES ('$feed_title','$class_id','$feed_content', '$url') ";
	if($conn->query($sql) ===False){
		die("ERROR:". $sql. $conn->error );
	}else if (isset($_SERVER["HTTP_REFERER"])) {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    } else {
        die("ERROR:" . $_SERVER["HTTP_REFERER"]);
    }
?>