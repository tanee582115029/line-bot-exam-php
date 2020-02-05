<?php
$access_token = '/6tM7o48kVZwQTBP+/K1L7F6uI8byW6wBtRM3ICVxZwfDHCqeTmjhRjJ6cSyrd7r9ou/9wy44JbrvYW36om0tdHdyb4vfTdz+bDjE8av6AyxTLI6qNIYaVCqkJosO5vjzvc405AhhSfz4c94Y5RHlAdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;