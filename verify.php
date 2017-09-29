<?php
$access_token = 'sKGR7bwKeZ0fnBU1F7uitcD0NdhAsdgEJ+jzCjIe6gTXbq3ArXL9AEN5+15AmHfd0KHCXDOHJRdmOPmnYlCWa4UVOw+0oUUKnJJjOTqzgegWF4rSYpKECTvCBbAN68v4aTuLqchbC2BuTbT9hmAUHAdB04t89/1O/w1cDnyilFU=
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
