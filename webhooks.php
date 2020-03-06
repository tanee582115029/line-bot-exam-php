<?php // callback.php

require "vendor/autoload.php";
require_once('vendor/linecorp/line-bot-sdk/line-bot-sdk-tiny/LINEBotTiny.php');

$access_token = '/6tM7o48kVZwQTBP+/K1L7F6uI8byW6wBtRM3ICVxZwfDHCqeTmjhRjJ6cSyrd7r9ou/9wy44JbrvYW36om0tdHdyb4vfTdz+bDjE8av6AyxTLI6qNIYaVCqkJosO5vjzvc405AhhSfz4c94Y5RHlAdB04t89/1O/w1cDnyilFU=';




// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data
if (!is_null($events['events'])) {
	// Loop through each event
	foreach ($events['events'] as $event) {
		// Reply only when message sent is in 'text' format
		// if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
		// 	// Get text sent
		// 	$text = $event['source']['userId'];

		// 	// Build message to reply back
		// 	$messages = [
		// 		'type' => 'text',
		// 		'text' => $text
		// 	];

		//}
		if ($event['type'] == 'message' && $event['message']['text'] == 'services') {
			$service_json = json_decode(file_get_contents("services.json"),true);
			$service_json['contents']['hero']['url'] = 'https://lh3.googleusercontent.com/proxy/-1c7kpqSBd9MstpLoL1SssBqYrwCIFRJEO0GHycFDq7ZfioJKWjNkF1Qn7jex6Z18Kr51k_W2Oa5vHimHAIDDMVdGQbvjHHu6tKcXSWQxfuOT8NSvjOfZGTi1VR8e9aYNA_y';
			$service_json['contents']['body']['contents'][0]['text'] = 'นวดฝ่าเท้า';
			$service_json['contents']['body']['contents'][1]['text'] = 'จ อ พฤ ศ';
			$service_json['contents']['body']['contents'][2]['text'] = '9,999 ฿';
			$messages = $service_json;
		}
		if ($event['type'] == 'message' && $event['message']['text'] == 'promotions') {
			$messages = json_decode(file_get_contents("promotions.json"),true);
		}
		if ($event['type'] == 'message' && $event['message']['text'] == 'mybooking') {
			$code = "#46547";
			$mybooking_json = json_decode(file_get_contents("mybooking.json"),true);
			$mybooking_json['contents']['header']['contents'][0]['text'] = $code;
			$mybooking_json['contents']['header']['contents'][1]['text'] = 'นวดฝ่าเท้า';
			$mybooking_json['contents']['header']['contents'][2]['text'] = '12/12/2020, 19:00';
			$mybooking_json['contents']['body']['contents'][1]['contents'][0]['text'] = 'x76';
			$mybooking_json['contents']['body']['contents'][1]['contents'][1]['text'] = '9,899 ฿';
			$mybooking_json['contents']['body']['contents'][3]['contents'][1]['text'] = 'เจ้น้ำ';
			$mybooking_json['contents']['body']['contents'][4]['contents'][1]['text'] = 'ขอมือเบาๆ';
			$mybooking_json['contents']['footer']['contents'][1]['action']['displayText'] = "cancel";
			$mybooking_json['contents']['footer']['contents'][1]['action']['data'] = $code;
			$messages = $mybooking_json;
		}
		if ($event['type'] == 'postback') {
			// $messages = json_decode(file_get_contents("confirmCancel.json"),true);
			$messages = [
				'type' => 'text',
				'text' => $event['postback']['data']
			];
		}
		if ($event['type'] == 'message' && $event['message']['text'] == 'shopinfo') {
			$messages = json_decode(file_get_contents("shopinfo.json"),true);
		}
		// if ($event['type'] == 'message' && $event['message']['text'] == 'cer') {
		// 	$messages = json_decode(file_get_contents("cer.json"),true);
		// }

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
