<?php
 $client_id="088e96e956ee060";
 
 // 方式一:　讀取檔案後算出 base64 編碼
  $image = 'user.png';
  $imageHandle = fopen($image, "r");
  $image = base64_encode(fread($imageHandle, filesize($image)));
 
 
 $curl = curl_init();
 curl_setopt($curl, CURLOPT_URL, 'https://api.imgur.com/3/image.json');
 curl_setopt($curl, CURLOPT_TIMEOUT, $timeout);
 curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: Client-ID ' . $client_id));
 curl_setopt($curl, CURLOPT_POST, 1);
 curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
 curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
 curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_array);
 $curl_result = curl_exec($curl);
 curl_close ($curl);
 $Received_JsonParse = json_decode($curl_result,true);

 if ($Received_JsonParse['success'] = true) {
  $ImgURL = $Received_JsonParse['data']['link'];
  echo "Uploaded<br/><br/><img src='".$ImgURL."'/>";
 } else {
  echo "Error<br/><br/>".$Received_JsonParse['data']['error'];
 };
?> 