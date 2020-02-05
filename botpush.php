<?php



require "vendor/autoload.php";

$access_token = '0pl2UeOgbDBXo4VBQtmcK7cV12ftdHE/Exal56JNSpwPWYpVq7mbDOqmLlBKsj9z9ou/9wy44JbrvYW36om0tdHdyb4vfTdz+bDjE8av6Az1HuAj14V5NEq4FoO9JoJafHR3lXL7joEn16Up+SgclwdB04t89/1O/w1cDnyilFU=';

$channelSecret = '75c03f392f6e53d662d6f5a8db9e421f';

$pushID = 'U7ef7a449f2a5c2057eacfc02ba2eb286';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







