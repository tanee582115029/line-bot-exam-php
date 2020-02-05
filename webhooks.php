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
			"contents" => [
			  [
				"type" => "text",
				"text" => "ยกเลิกการจอง",
				"paddingAll" => "8%",
				"margin" => "lg",
				"size" => "lg",
				"align" => "center",
				"color" => "#E74C3C",
				"action" => [
				  "type" => "uri",
				  "label" => "ยกเลิกการจอง",
				  "uri" => "https://google.co.th/"
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

$jsonFlex = '{
	"type": "carousel",
	"contents": [
	  {
		"type": "bubble",
		"hero": {
		  "type": "image",
		  "size": "full",
		  "aspectRatio": "20:13",
		  "aspectMode": "cover",
		  "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/01_5_carousel.png"
		},
		"body": {
		  "type": "box",
		  "layout": "vertical",
		  "spacing": "sm",
		  "contents": [
			{
			  "type": "text",
			  "text": "Arm Chair, White",
			  "wrap": true,
			  "weight": "bold",
			  "size": "xl"
			},
			{
			  "type": "box",
			  "layout": "baseline",
			  "contents": [
				{
				  "type": "text",
				  "text": "$49",
				  "wrap": true,
				  "weight": "bold",
				  "size": "xl",
				  "flex": 0
				},
				{
				  "type": "text",
				  "text": ".99",
				  "wrap": true,
				  "weight": "bold",
				  "size": "sm",
				  "flex": 0
				}
			  ]
			}
		  ]
		},
		"footer": {
		  "type": "box",
		  "layout": "vertical",
		  "spacing": "sm",
		  "contents": [
			{
			  "type": "button",
			  "style": "primary",
			  "action": {
				"type": "uri",
				"label": "Add to Cart",
				"uri": "https://linecorp.com"
			  }
			},
			{
			  "type": "button",
			  "action": {
				"type": "uri",
				"label": "Add to wishlist",
				"uri": "https://linecorp.com"
			  }
			}
		  ]
		}
	  },
	  {
		"type": "bubble",
		"hero": {
		  "type": "image",
		  "size": "full",
		  "aspectRatio": "20:13",
		  "aspectMode": "cover",
		  "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/01_6_carousel.png"
		},
		"body": {
		  "type": "box",
		  "layout": "vertical",
		  "spacing": "sm",
		  "contents": [
			{
			  "type": "text",
			  "text": "Metal Desk Lamp",
			  "wrap": true,
			  "weight": "bold",
			  "size": "xl"
			},
			{
			  "type": "box",
			  "layout": "baseline",
			  "flex": 1,
			  "contents": [
				{
				  "type": "text",
				  "text": "$11",
				  "wrap": true,
				  "weight": "bold",
				  "size": "xl",
				  "flex": 0
				},
				{
				  "type": "text",
				  "text": ".99",
				  "wrap": true,
				  "weight": "bold",
				  "size": "sm",
				  "flex": 0
				}
			  ]
			},
			{
			  "type": "text",
			  "text": "Temporarily out of stock",
			  "wrap": true,
			  "size": "xxs",
			  "margin": "md",
			  "color": "#ff5551",
			  "flex": 0
			}
		  ]
		},
		"footer": {
		  "type": "box",
		  "layout": "vertical",
		  "spacing": "sm",
		  "contents": [
			{
			  "type": "button",
			  "flex": 2,
			  "style": "primary",
			  "color": "#aaaaaa",
			  "action": {
				"type": "uri",
				"label": "Add to Cart",
				"uri": "https://linecorp.com"
			  }
			},
			{
			  "type": "button",
			  "action": {
				"type": "uri",
				"label": "Add to wish list",
				"uri": "https://linecorp.com"
			  }
			}
		  ]
		}
	  },
	  {
		"type": "bubble",
		"body": {
		  "type": "box",
		  "layout": "vertical",
		  "spacing": "sm",
		  "contents": [
			{
			  "type": "text",
			  "flex": 1,
			  "gravity": "center",
			  "action": {
				"type": "uri",
				"label": "See more",
				"uri": "https://linecorp.com"
			  }
			}
		  ]
		}
	  }
	]
  }';
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
