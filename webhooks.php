<?php // callback.php

require "vendor/autoload.php";
require_once('vendor/linecorp/line-bot-sdk/line-bot-sdk-tiny/LINEBotTiny.php');

$access_token = '/6tM7o48kVZwQTBP+/K1L7F6uI8byW6wBtRM3ICVxZwfDHCqeTmjhRjJ6cSyrd7r9ou/9wy44JbrvYW36om0tdHdyb4vfTdz+bDjE8av6AyxTLI6qNIYaVCqkJosO5vjzvc405AhhSfz4c94Y5RHlAdB04t89/1O/w1cDnyilFU=';
$eiei = '
{
	"type": "template",
	"altText": "this is a carousel template",
	"template": {
	  "type": "carousel",
	  "actions": [],
	  "columns": [
		{
		  "thumbnailImageUrl": "SPECIFY_YOUR_IMAGE_URL",
		  "title": "Title",
		  "text": "Text",
		  "actions": [
			{
			  "type": "message",
			  "label": "Action 1",
			  "text": "Action 1"
			},
			{
			  "type": "message",
			  "label": "Action 2",
			  "text": "Action 2"
			}
		  ]
		},
		{
		  "thumbnailImageUrl": "SPECIFY_YOUR_IMAGE_URL",
		  "title": "Title",
		  "text": "Text",
		  "actions": [
			{
			  "type": "message",
			  "label": "Action 1",
			  "text": "Action 1"
			},
			{
			  "type": "message",
			  "label": "Action 2",
			  "text": "Action 2"
			}
		  ]
		}
	  ]
	}
  }
';

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
			$messages = json_encode($eiei);
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
