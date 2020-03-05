<?php // callback.php

require "vendor/autoload.php";
require_once('vendor/linecorp/line-bot-sdk/line-bot-sdk-tiny/LINEBotTiny.php');

$access_token = '/6tM7o48kVZwQTBP+/K1L7F6uI8byW6wBtRM3ICVxZwfDHCqeTmjhRjJ6cSyrd7r9ou/9wy44JbrvYW36om0tdHdyb4vfTdz+bDjE8av6AyxTLI6qNIYaVCqkJosO5vjzvc405AhhSfz4c94Y5RHlAdB04t89/1O/w1cDnyilFU=';
$eiei = 
[
	"type"=> "flex",
	"altText"=> "Flex Message",
	"contents"=> [
	  "type"=> "bubble",
	  "direction"=> "ltr",
	  "hero"=> [
		"type"=> "image",
		"url"=> "https://lh3.googleusercontent.com/proxy/-1c7kpqSBd9MstpLoL1SssBqYrwCIFRJEO0GHycFDq7ZfioJKWjNkF1Qn7jex6Z18Kr51k_W2Oa5vHimHAIDDMVdGQbvjHHu6tKcXSWQxfuOT8NSvjOfZGTi1VR8e9aYNA_y",
		"align"=> "center",
		"size"=> "full",
		"aspectRatio"=> "4=>3",
		"aspectMode"=> "cover"
	  ],
	  "body"=> [
		"type"=> "box",
		"layout"=> "vertical",
		"contents"=> [
		  [
			"type"=> "text",
			"text"=> "นวดแผนไทย สุดผ่อนคลาย",
			"size"=> "lg",
			"weight"=> "bold",
			"color"=> "#000000",
			"wrap"=> true
		  ],
		  [
			"type"=> "text",
			"text"=> "ทุกวัน",
			"margin"=> "sm",
			"align"=> "start",
			"color"=> "#B9B9B9",
			"wrap"=> true
		  ],
		  [
			"type"=> "text",
			"text"=> "1,000.00 ฿",
			"margin"=> "xl",
			"size"=> "lg",
			"weight"=> "bold",
			"color"=> "#3361F4",
			"wrap"=> true
		  ]
		]
	  ]
	]
  ]
;

// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data
if (!is_null($events['events'])) {
	// Loop through each event
	foreach ($events['events'] as $event) {
		// Reply only when message sent is in 'text' format
		if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
			// Get text sent
			$text = $event['source']['userId'];

			// Build message to reply back
			$messages = [
				'type' => 'text',
				'text' => $text
			];

		}
		if ($event['type'] == 'message' && $event['message']['text'] == 'services') {
			$messages = $eiei;
		}

		// Make a POST Request to Messaging API to reply to sender
		
		// Get replyToken
		$replyToken = $event['replyToken'];
		$url = 'https://api.line.me/v2/bot/message/reply';
		$data = [
			'replyToken' => $replyToken,
			'messages' => [$messages],
		];
		$post = json_encode($data);
		$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		$result = curl_exec($ch);
		curl_close($ch);

		echo $result . "\r\n";
	}
}
echo "OK";
