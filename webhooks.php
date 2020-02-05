<?php // callback.php

require "vendor/autoload.php";
require_once('vendor/linecorp/line-bot-sdk/line-bot-sdk-tiny/LINEBotTiny.php');

$access_token = '/6tM7o48kVZwQTBP+/K1L7F6uI8byW6wBtRM3ICVxZwfDHCqeTmjhRjJ6cSyrd7r9ou/9wy44JbrvYW36om0tdHdyb4vfTdz+bDjE8av6AyxTLI6qNIYaVCqkJosO5vjzvc405AhhSfz4c94Y5RHlAdB04t89/1O/w1cDnyilFU=';
$jsonFlex = [
	"type"=> "carousel",
	"contents"=> [
	  [
		"type"=> "bubble",
		"size"=> "micro",
		"hero"=> [
		  "type"=> "image",
		  "url"=> "https://scdn.line-apps.com/n/channel_devcenter/img/flexsnapshot/clip/clip10.jpg",
		  "size"=> "full",
		  "aspectMode"=> "cover",
		  "aspectRatio"=> "320=>213"
		],
		"body"=> [
		  "type"=> "box",
		  "layout"=> "vertical",
		  "contents"=> [
			[
			  "type"=> "text",
			  "text"=> "Brown Cafe",
			  "weight"=> "bold",
			  "size"=> "sm",
			  "wrap"=> true
			],
			[
			  "type"=> "box",
			  "layout"=> "baseline",
			  "contents"=> [
				[
				  "type"=> "icon",
				  "size"=> "xs",
				  "url"=> "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
				],
				[
				  "type"=> "icon",
				  "size"=> "xs",
				  "url"=> "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
				],
				[
				  "type"=> "icon",
				  "size"=> "xs",
				  "url"=> "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
				],
				[
				  "type"=> "icon",
				  "size"=> "xs",
				  "url"=> "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
				],
				[
				  "type"=> "icon",
				  "size"=> "xs",
				  "url"=> "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gray_star_28.png"
				],
				[
				  "type"=> "text",
				  "text"=> "4.0",
				  "size"=> "xs",
				  "color"=> "#8c8c8c",
				  "margin"=> "md",
				  "flex"=> 0
				]
			  ]
			],
			[
			  "type"=> "box",
			  "layout"=> "vertical",
			  "contents"=> [
				[
				  "type"=> "box",
				  "layout"=> "baseline",
				  "spacing"=> "sm",
				  "contents"=> [
					[
					  "type"=> "text",
					  "text"=> "東京旅行",
					  "wrap"=> true,
					  "color"=> "#8c8c8c",
					  "size"=> "xs",
					  "flex"=> 5
					]
				  ]
				]
			  ]
			]
		  ],
		  "spacing"=> "sm",
		  "paddingAll"=> "13px"
		]
	  ]
	]
];

$jsonSlipFlex = [
		"type" => "flex",
		"altText" => "Hello Flex Message",
		"contents" => [
		  "type" => "bubble",
		  "direction" => "ltr",
		  "header" => [
			"type" => "box",
			"layout" => "vertical",
			"contents" => [
			  [
				"type" => "text",
				"text" => "Purchase",
				"size" => "lg",
				"align" => "start",
				"weight" => "bold",
				"color" => "#009813"
			  ],
			  [
				"type" => "text",
				"text" => "฿ 100.00",
				"size" => "3xl",
				"weight" => "bold",
				"color" => "#000000"
			  ],
			  [
				"type" => "text",
				"text" => "Rabbit Line Pay",
				"size" => "lg",
				"weight" => "bold",
				"color" => "#000000"
			  ],
			  [
				"type" => "text",
				"text" => "2019.02.14 21:47 (GMT+0700)",
				"size" => "xs",
				"color" => "#B2B2B2"
			  ],
			  [
				"type" => "text",
				"text" => "Payment complete.",
				"margin" => "lg",
				"size" => "lg",
				"color" => "#000000"
			  ]
			]
		  ],
		  "body" => [
			"type" => "box",
			"layout" => "vertical",
			"contents" => [
			  [
				"type" => "separator",
				"color" => "#C3C3C3"
			  ],
			  [
				"type" => "box",
				"layout" => "baseline",
				"margin" => "lg",
				"contents" => [
				  [
					"type" => "text",
					"text" => "Merchant",
					"align" => "start",
					"color" => "#C3C3C3"
				  ],
				  [
					"type" => "text",
					"text" => "BTS 01",
					"align" => "end",
					"color" => "#000000"
				  ]
				]
			  ],
			  [
				"type" => "box",
				"layout" => "baseline",
				"margin" => "lg",
				"contents" => [
				  [
					"type" => "text",
					"text" => "New balance",
					"color" => "#C3C3C3"
				  ],
				  [
					"type" => "text",
					"text" => "฿ 45.57",
					"align" => "end"
				  ]
				]
			  ],
			  [
				"type" => "separator",
				"margin" => "lg",
				"color" => "#C3C3C3"
			  ]
			]
		  ],
		  "footer" => [
			"type" => "box",
			"layout" => "horizontal",
			"contents" => [
			  [
				"type" => "text",
				"text" => "View Details",
				"size" => "lg",
				"align" => "start",
				"color" => "#0084B6",
				"action" => [
				  "type" => "uri",
				  "label" => "View Details",
				  "uri" => "https://google.co.th/"
				]
			  ]
			]
		  ]
		]
	  ];
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
		if ($event['type'] == 'message' && $event['message']['text'] == 'service') {
			$messages = $jsonFlex;
		}
		if ($event['type'] == 'message' && $event['message']['text'] == 'mybooking') {
			$messages = $jsonSlipFlex;
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
