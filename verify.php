<?php
$access_token = 'h1sPhF17M3rwEGs3I9xKevnpG++B97gySI7ZleGmUSs3qIY7KxAmwUQzak9OHBsFybIDBqh/SLZcdQ3J9k5czZ0c9ukTVZ7nC+VXi11YiCZVhAiuufszzlMbxCd1IKcRW2oQH2+9EEf/u9/kQLW1VQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>
