<?php
$access_token = 'FRTwDpvq9jhM13ERGGt5BdkdaG9Nny+hWdyIHhevxvUagqXNGPblAlpf+SOQpqwH0KHCXDOHJRdmOPmnYlCWa4UVOw+0oUUKnJJjOTqzgeig8Bakk3Ea8JlEuuhC0HTlptVpIovgkYF7Uz6P+zw0RQdB04t89/1O/w1cDnyilFU=
';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
