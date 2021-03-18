<?php
function imgur_upload($image, $title='') {
$url = 'https://imgur-apiv3.p.mashape.com/3/image/';
$mashape_key = "{088e96e956ee060}"; //填入自己的 Mashape Key
$client_id = "{d9061caa9125ea4403d2a8863b58a902b47cc48a}"; //填入自己的 Client ID
//要用 http header 送出的參數
$http_header_array = [
"X-Mashape-Key: $mashape_key",
"Authorization: Client-ID $client_id",
"Content-Type: application/x-www-form-urlencoded",

];
//要用 post 送出的參數	

$curl_post_array = [
'image' => $image,
'title' => $title,
];
//將 http header 與 post 加進 curl 的 option
$curl_options = [
CURLOPT_HTTPHEADER => $http_header_array,
CURLOPT_POST => true,
CURLOPT_POSTFIELDS => http_build_query($curl_post_array),
];
$curl_info = null;
$curl_result = use_curl_opt($url, $curl_options, $curl_info);	
return $curl_result;
}
function use_curl_opt($url, $options = [], &$curl_info = null) {
$ch = curl_init();	
$default_options = [
CURLOPT_URL => $url,
CURLOPT_HEADER => 0,
CURLOPT_VERBOSE => 0,
CURLOPT_RETURNTRANSFER => true,
CURLOPT_USERAGENT => "Mozilla/5.0 (Windows NT 5.1; rv:10.0.2) Gecko/20100101 Firefox/10.0.2",

];
curl_setopt_array($ch, $default_options);
curl_setopt_array($ch, $options);
$curl_result = curl_exec($ch);
$curl_info = curl_getinfo($ch);
$curl_error = curl_error($ch);
curl_close($ch);
if($curl_result){ return $curl_result; }
else{ return $curl_error; }
}

if(isset($_FILES['fileData'])){
$files = $_FILES['fileData'];
$fileNum = count($files['name']);
$imgur_result = [];
for($i=0; $i<$fileNum; $i++){
//讀取上傳的檔案並轉為 base64 字串
$filepath = $files['tmp_name'][$i];
$handle = fopen($filepath, "r");
$data = fread($handle, filesize($filepath));
$image_base64 = base64_encode($data);
//呼叫前面寫的 function imgur_upload
$imgur_result[] = imgur_upload($image_base64,$files['name'][$i])."\n";
}
//合併 imgur 回傳的 JSON 字串
echo "[".implode(",",$imgur_result)."]";
}
?>