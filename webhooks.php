<?php // callback.php

require "vendor/autoload.php";
require_once('vendor/linecorp/line-bot-sdk/line-bot-sdk-tiny/LINEBotTiny.php');

$access_token = '/6tM7o48kVZwQTBP+/K1L7F6uI8byW6wBtRM3ICVxZwfDHCqeTmjhRjJ6cSyrd7r9ou/9wy44JbrvYW36om0tdHdyb4vfTdz+bDjE8av6AyxTLI6qNIYaVCqkJosO5vjzvc405AhhSfz4c94Y5RHlAdB04t89/1O/w1cDnyilFU=';
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
			"text" => "#55555",
			"size" => "3xl",
			"weight" => "bold",
			"color" => "#000000"
		  ],
		  [
			"type" => "text",
			"text" => "นวดแผนไทย สุดผ่อนคลาย",
			"size" => "lg",
			"weight" => "bold",
			"color" => "#000000"
		  ],
		  [
			"type" => "text",
			"text" => "2019.02.14 21:47 (GMT+0700)",
			"size" => "xs",
			"color" => "#B2B2B2"
		  ]
		]
	  ],
	  "body" => [
		"type" => "box",
		"layout" => "vertical",
		"contents" => [
		  [
			"type" => "separator",
			"margin" => "lg",
			"color" => "#C3C3C3"
		  ],
		  [
			"type" => "box",
			"layout" => "baseline",
			"margin" => "lg",
			"contents" => [
			  [
				"type" => "text",
				"text" => "x2",
				"align" => "start",
				"color" => "#C3C3C3"
			  ],
			  [
				"type" => "text",
				"text" => "฿ 2000",
				"align" => "end",
				"color" => "#000000"
			  ]
			]
		  ],
		  [
			"type" => "separator",
			"margin" => "lg",
			"color" => "#C3C3C3"
		  ],
		  [
			"type" => "box",
			"layout" => "baseline",
			"margin" => "lg",
			"contents" => [
			  [
				"type" => "text",
				"text" => "ผู้จอง:",
				"align" => "start",
				"color" => "#C3C3C3"
			  ],
			  [
				"type" => "text",
				"text" => "พี่รินริน",
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
				"text" => "หมายเหตุ:",
				"align" => "start",
				"color" => "#C3C3C3"
			  ],
			  [
				"type" => "text",
				"text" => "ขอมือหนักๆ",
				"align" => "end",
				"color" => "#000000"
			  ]
			]
		  ]
		]
		],
		"footer" => [
			"type" => "box",
			"layout" => "horizontal",
			"paddingAll" => "8%",
			"contents" => [
			  [
				"type" => "text",
				"text" => "ยกเลิกการจอง",
				"margin" => "lg",
				"size" => "lg",
				"align" => "center",
				"color" => "#E74C3C",
				"action" => [
				  "type" => "message",
				  "label" => "ยกเลิกการจอง",
				  "text" => "ยกเลิกการจอง"
				]
			  ]
			]
		]

	]
];

$jsonCanceledSlipFlex = [
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
				"type" => "box",
				"layout" => "baseline",
				"margin" => "lg",
				"contents" => [
					[
						"type" => "text",
						"text" => "#51521",
						"size" => "3xl",
						"align" => "start",
						"weight" => "bold",
						"color" => "#000000"
					  ],
					  [
						"type" => "text",
						"text" => "ยกเลิกแล้ว",
						"size" => "md",
						"align" => "end",
						"color" => "#E74C3C"
					  ],
				]
			  ],
		  [
			"type" => "text",
			"text" => "นวดแผนไทย สุดผ่อนคลาย",
			"size" => "lg",
			"weight" => "bold",
			"color" => "#000000"
		  ],
		  [
			"type" => "text",
			"text" => "2019.02.14 21:47",
			"size" => "xs",
			"color" => "#B2B2B2"
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
				"text" => "x2",
				"align" => "start",
				"color" => "#C3C3C3"
			  ],
			  [
				"type" => "text",
				"text" => "฿ 2000",
				"align" => "end",
				"color" => "#000000"
			  ]
			]
		  ],
		  [
			"type" => "separator",
			"margin" => "lg",
			"color" => "#C3C3C3"
		  ],
		  [
			"type" => "box",
			"layout" => "baseline",
			"margin" => "lg",
			"contents" => [
			  [
				"type" => "text",
				"text" => "ผู้จอง:",
				"align" => "start",
				"color" => "#C3C3C3"
			  ],
			  [
				"type" => "text",
				"text" => "พี่รินริน",
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
				"text" => "หมายเหตุ:",
				"align" => "start",
				"color" => "#C3C3C3"
			  ],
			  [
				"type" => "text",
				"text" => "ขอมือหนักๆ",
				"align" => "end",
				"color" => "#000000"
			  ]
			]
		  ]
		]
	  ]
	]
];

$jsonPromoFlex = [
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
			"text" => "Promotion",
			"size" => "lg",
			"align" => "start",
			"weight" => "bold",
			"color" => "#009813"
		  ],
		  [
			"type" => "text",
			"text" => "50 %",
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
		"layout" => "vertical",
		"spacing" => "sm",
		"contents" => [
		  [
			"type" => "text",
			"text" => "View Details",
			"size" => "lg",
			"align" => "center",
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

$jsonShopFlex = [
	"type" => "flex",
	"altText" => "Hello Flex Message",
	"contents" => [
	  "type" => "bubble",
	  "direction" => "ltr",
	  "hero" => [
		"type" => "image",
		"url" => "https://scdn.line-apps.com/n/channel_devcenter/img/fx/01_3_movie.png",
		"size" => "full",
		"aspectRatio" => "20:13",
		"aspectMode" => "cover",
	  ],
	  "body" => [
		"type" => "box",
		"layout" => "vertical",
		"contents" => [
			[
				"type" => "text",
				"text" => "A-SHOP",
				"size" => "3xl",
				"weight" => "bold",
				"color" => "#000000"
			],
		  [
			"type" => "box",
			"layout" => "baseline",
			"margin" => "lg",
			"contents" => [
			  [
				"type" => "text",
				"text" => "o",
				"color" => "#C3C3C3"
			  ],
			  [
				"type" => "text",
				"text" => "084-488-2035",
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
				"text" => "o",
				"color" => "#C3C3C3"
			  ],
			  [
				"type" => "text",
				"text" => "123/21 เจียงใหม่ ไทยแลนด์",
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
					"text" => "o",
					"color" => "#C3C3C3"
				  ],
				  [
					"type" => "text",
					"text" => "จันทร์ - ศุกร์ 19:00 - 24:00",
					"color" => "#000000"
				  ]
				]
			  ]
		]
		],
		"footer" => [
			"type" => "box",
			"layout" => "vertical",
			"paddingAll" => "8%",
			"contents" => [
			  [
				"type" => "text",
				"text" => "โทรออก",
				"margin" => "lg",
				"size" => "lg",
				"align" => "center",
				"color" => "#E74C3C",
				"action" => [
				  "type" => "message",
				  "label" => "โทรออก",
				  "text" => "โทรออก"
				]
				],
				[
					"type" => "text",
					"text" => "นำทาง",
					"margin" => "lg",
					"size" => "lg",
					"align" => "center",
					"color" => "#E74C3C",
					"action" => [
					  "type" => "message",
					  "label" => "นำทาง",
					  "text" => "นำทาง"
					]
					],			  
					[
						"type" => "text",
						"text" => "เพิ่มเติม",
						"margin" => "lg",
						"size" => "lg",
						"align" => "center",
						"color" => "#E74C3C",
						"action" => [
						  "type" => "message",
						  "label" => "เพิ่มเติม",
						  "text" => "เพิ่มเติม"
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
			$messages = json_decode($jsonFlex, true);
		}
		if ($event['type'] == 'message' && $event['message']['text'] == 'shopdetail') {
			$messages = $jsonShopFlex;
		}
		if ($event['type'] == 'message' && $event['message']['text'] == 'mybooking') {
			$messages = $jsonSlipFlex;
		}
		if ($event['type'] == 'message' && $event['message']['text'] == 'ยกเลิกการจอง') {
			$messages = $jsonCanceledSlipFlex;
		}
		if ($event['type'] == 'message' && $event['message']['text'] == 'promotion') {
			$messages = $jsonPromoFlex;
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
