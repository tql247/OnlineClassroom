<?php
        $imageData = base64_encode(readfile('path/to/image.jpg')); // Read data, encode with base64 which Imgur API supported
        $pvars = array(
                  'image' => $imageData,
                  'type' => 'base64'
                );
        $timeout = 30; // Second
        $imgurClientID = "abcxyz"; // Imgur API key. Get it in https://imgur.com/account/settings/apps

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'https://api.imgur.com/3/image');
        curl_setopt($curl, CURLOPT_TIMEOUT, $timeout);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: Client-ID ' . $imgurClientID));
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $pvars);

        $response = curl_exec($curl);
        curl_close($curl);

        $data = json_decode($response, true);
        $link = $data['data']['link']
?>