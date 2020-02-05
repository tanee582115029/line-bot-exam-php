<?php
$access_token = '0pl2UeOgbDBXo4VBQtmcK7cV12ftdHE/Exal56JNSpwPWYpVq7mbDOqmLlBKsj9z9ou/9wy44JbrvYW36om0tdHdyb4vfTdz+bDjE8av6Az1HuAj14V5NEq4FoO9JoJafHR3lXL7joEn16Up+SgclwdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;