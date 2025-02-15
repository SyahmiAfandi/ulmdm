<?php
session_start();

$url="https://script.google.com/macros/s/AKfycbxGRNnHuBkRcOk0F27VVZLpk2DrvAenLXIqoJNjhW4P3C3rJ8k9DjhR8bZqEZlmeKU/exec";
$postData =[
    "action" => "login",
    "username"=>$_POST['Username'],
    "password"=>$_POST['Password']
];

$ch = curl_init($url);
curl_setopt_array($ch,[
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POSTFIELDS => $postData
]);

$result = curl_exec($ch);
$result = json_decode($result, 1);

if($result['status'] == "success"){
   $_SESSION['user'] = $result['data'];
   header("location: home.htm");
}else{
   $_SESSION['error'] = $result['message'];
   header("location: login.php");
}
