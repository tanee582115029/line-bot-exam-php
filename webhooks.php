<?php // callback.php

require "vendor/autoload.php";
require_once('vendor/linecorp/line-bot-sdk/line-bot-sdk-tiny/LINEBotTiny.php');

$access_token = '/6tM7o48kVZwQTBP+/K1L7F6uI8byW6wBtRM3ICVxZwfDHCqeTmjhRjJ6cSyrd7r9ou/9wy44JbrvYW36om0tdHdyb4vfTdz+bDjE8av6AyxTLI6qNIYaVCqkJosO5vjzvc405AhhSfz4c94Y5RHlAdB04t89/1O/w1cDnyilFU=';
$servicesJson = '
{
	"type": "flex",
	"altText": "Flex Message",
	"contents": {
	  "type": "bubble",
	  "direction": "ltr",
	  "hero": {
		"type": "image",
		"url": "https://lh3.googleusercontent.com/proxy/-1c7kpqSBd9MstpLoL1SssBqYrwCIFRJEO0GHycFDq7ZfioJKWjNkF1Qn7jex6Z18Kr51k_W2Oa5vHimHAIDDMVdGQbvjHHu6tKcXSWQxfuOT8NSvjOfZGTi1VR8e9aYNA_y",
		"align": "center",
		"size": "full",
		"aspectRatio": "4:3",
		"aspectMode": "cover"
	  },
	  "body": {
		"type": "box",
		"layout": "vertical",
		"contents": [
		  {
			"type": "text",
			"text": "นวดแผนไทย สุดผ่อนคลาย",
			"size": "lg",
			"weight": "bold",
			"color": "#000000",
			"wrap": true
		  },
		  {
			"type": "text",
			"text": "ทุกวัน",
			"margin": "sm",
			"align": "start",
			"color": "#B9B9B9",
			"wrap": true
		  },
		  {
			"type": "text",
			"text": "1,000.00 ฿",
			"margin": "xl",
			"size": "lg",
			"weight": "bold",
			"color": "#3361F4",
			"wrap": true
		  }
		]
	  }
	}
  }'
;

$promotionsJson = '
{
	"type": "flex",
	"altText": "Flex Message",
	"contents": {
	  "type": "carousel",
	  "contents": [
		{
		  "type": "bubble",
		  "hero": {
			"type": "image",
			"url": "https://notebookspec.com/web/wp-content/uploads/2018/06/201806266417008724.jpg",
			"size": "full",
			"aspectRatio": "20:13",
			"aspectMode": "cover",
			"action": {
			  "type": "uri",
			  "label": "Action",
			  "uri": "https://linecorp.com/"
			}
		  },
		  "body": {
			"type": "box",
			"layout": "vertical",
			"spacing": "md",
			"contents": [
			  {
				"type": "text",
				"text": "จองล่วงหน้าลดทันที",
				"size": "lg",
				"gravity": "center",
				"weight": "bold",
				"wrap": true
			  },
			  {
				"type": "text",
				"text": "31/01/2020 - 29/02/2020",
				"size": "sm",
				"align": "start",
				"weight": "bold",
				"color": "#C8C4C4",
				"wrap": true
			  },
			  {
				"type": "text",
				"text": "ลด 15%",
				"size": "md",
				"weight": "bold",
				"color": "#F75353",
				"wrap": true
			  },
			  {
				"type": "text",
				"text": "PREBOOK15",
				"size": "lg",
				"align": "center",
				"gravity": "center",
				"weight": "bold",
				"color": "#000000",
				"wrap": true
			  }
			]
		  },
		  "footer": {
			"type": "box",
			"layout": "vertical",
			"margin": "xxl",
			"contents": [
			  {
				"type": "text",
				"text": "คุณสามารถใช้รหัสนี้เป็นส่วนลด เมื่อจองบริการผ่าน line เท่านั้น",
				"margin": "xxl",
				"size": "xs",
				"align": "start",
				"gravity": "bottom",
				"weight": "regular",
				"color": "#C5C3C3",
				"wrap": true
			  },
			  {
				"type": "spacer",
				"size": "xxl"
			  }
			]
		  }
		},
		{
		  "type": "bubble",
		  "hero": {
			"type": "image",
			"url": "https://notebookspec.com/web/wp-content/uploads/2018/06/201806266417008724.jpg",
			"size": "full",
			"aspectRatio": "20:13",
			"aspectMode": "cover",
			"action": {
			  "type": "uri",
			  "label": "Action",
			  "uri": "https://linecorp.com/"
			}
		  },
		  "body": {
			"type": "box",
			"layout": "vertical",
			"spacing": "md",
			"contents": [
			  {
				"type": "text",
				"text": "จองล่วงหน้าลดทันที",
				"size": "lg",
				"gravity": "center",
				"weight": "bold",
				"wrap": true
			  },
			  {
				"type": "text",
				"text": "31/01/2020 - 29/02/2020",
				"size": "sm",
				"align": "start",
				"weight": "bold",
				"color": "#C8C4C4",
				"wrap": true
			  },
			  {
				"type": "text",
				"text": "ลด 15%",
				"size": "md",
				"weight": "bold",
				"color": "#F75353",
				"wrap": true
			  },
			  {
				"type": "text",
				"text": "PREBOOK15",
				"size": "lg",
				"align": "center",
				"gravity": "center",
				"weight": "bold",
				"color": "#000000",
				"wrap": true
			  }
			]
		  },
		  "footer": {
			"type": "box",
			"layout": "vertical",
			"margin": "xxl",
			"contents": [
			  {
				"type": "text",
				"text": "คุณสามารถใช้รหัสนี้เป็นส่วนลด เมื่อจองบริการผ่าน line เท่านั้น",
				"margin": "xxl",
				"size": "xs",
				"align": "start",
				"gravity": "bottom",
				"weight": "regular",
				"color": "#C5C3C3",
				"wrap": true
			  },
			  {
				"type": "spacer",
				"size": "xxl"
			  }
			]
		  }
		},
		{
		  "type": "bubble",
		  "hero": {
			"type": "image",
			"url": "https://notebookspec.com/web/wp-content/uploads/2018/06/201806266417008724.jpg",
			"size": "full",
			"aspectRatio": "20:13",
			"aspectMode": "cover",
			"action": {
			  "type": "uri",
			  "label": "Action",
			  "uri": "https://linecorp.com/"
			}
		  },
		  "body": {
			"type": "box",
			"layout": "vertical",
			"spacing": "md",
			"contents": [
			  {
				"type": "text",
				"text": "จองล่วงหน้าลดทันที",
				"size": "lg",
				"gravity": "center",
				"weight": "bold",
				"wrap": true
			  },
			  {
				"type": "text",
				"text": "31/01/2020 - 29/02/2020",
				"size": "sm",
				"align": "start",
				"weight": "bold",
				"color": "#C8C4C4",
				"wrap": true
			  },
			  {
				"type": "text",
				"text": "ลด 15%",
				"size": "md",
				"weight": "bold",
				"color": "#F75353",
				"wrap": true
			  },
			  {
				"type": "text",
				"text": "PREBOOK15",
				"size": "lg",
				"align": "center",
				"gravity": "center",
				"weight": "bold",
				"color": "#000000",
				"wrap": true
			  }
			]
		  },
		  "footer": {
			"type": "box",
			"layout": "vertical",
			"margin": "xxl",
			"contents": [
			  {
				"type": "text",
				"text": "คุณสามารถใช้รหัสนี้เป็นส่วนลด เมื่อจองบริการผ่าน line เท่านั้น",
				"margin": "xxl",
				"size": "xs",
				"align": "start",
				"gravity": "bottom",
				"weight": "regular",
				"color": "#C5C3C3",
				"wrap": true
			  },
			  {
				"type": "spacer",
				"size": "xxl"
			  }
			]
		  }
		}
	  ]
	}
  }
';

$bookingJson = '
{
	"type": "flex",
	"altText": "Flex Message",
	"contents": {
	  "type": "bubble",
	  "direction": "ltr",
	  "header": {
		"type": "box",
		"layout": "vertical",
		"contents": [
		  {
			"type": "text",
			"text": "#54545",
			"size": "xl",
			"align": "start",
			"weight": "bold"
		  },
		  {
			"type": "text",
			"text": "นวดแผนไทย สุดผ่อนคลาย",
			"margin": "md",
			"size": "lg",
			"align": "start",
			"weight": "bold",
			"color": "#000000",
			"wrap": true
		  },
		  {
			"type": "text",
			"text": "01/01/2020, 09:00-12:00",
			"margin": "sm",
			"size": "xs",
			"align": "start",
			"color": "#9F9B9B",
			"wrap": true
		  }
		]
	  },
	  "body": {
		"type": "box",
		"layout": "vertical",
		"contents": [
		  {
			"type": "separator",
			"margin": "xl",
			"color": "#9F9B9B"
		  },
		  {
			"type": "box",
			"layout": "baseline",
			"margin": "xl",
			"contents": [
			  {
				"type": "text",
				"text": "x2",
				"flex": 1,
				"size": "xs",
				"color": "#9F9B9B",
				"wrap": true
			  },
			  {
				"type": "text",
				"text": "฿ 2,000.00 ",
				"size": "xs",
				"align": "end",
				"weight": "bold",
				"wrap": true
			  }
			]
		  },
		  {
			"type": "separator",
			"margin": "xl",
			"color": "#9F9B9B"
		  },
		  {
			"type": "box",
			"layout": "baseline",
			"margin": "lg",
			"contents": [
			  {
				"type": "text",
				"text": "ผู้จอง:",
				"size": "sm",
				"color": "#9F9B9B",
				"wrap": true
			  },
			  {
				"type": "text",
				"text": "รินทร์ มูลสาร",
				"size": "sm",
				"align": "end",
				"color": "#4E4D4D",
				"wrap": true
			  }
			]
		  },
		  {
			"type": "box",
			"layout": "baseline",
			"margin": "lg",
			"contents": [
			  {
				"type": "text",
				"text": "หมายเหตุ:",
				"color": "#9F9B9B"
			  },
			  {
				"type": "text",
				"text": "ขอคนมือหนักๆครับ ชอบความรุนแรง",
				"size": "sm",
				"align": "end",
				"color": "#4E4D4D",
				"wrap": true
			  }
			]
		  }
		]
	  },
	  "footer": {
		"type": "box",
		"layout": "vertical",
		"contents": [
		  {
			"type": "spacer",
			"size": "xl"
		  },
		  {
			"type": "button",
			"action": {
			  "type": "message",
			  "label": "ยกเลิกการจอง",
			  "text": "cancel"
			},
			"color": "#EE6868"
		  }
		]
	  }
	}
  }
';

$canceledJson = '
{
	"type": "flex",
	"altText": "Flex Message",
	"contents": {
	  "type": "bubble",
	  "direction": "ltr",
	  "header": {
		"type": "box",
		"layout": "vertical",
		"flex": 1,
		"spacing": "none",
		"margin": "none",
		"contents": [
		  {
			"type": "box",
			"layout": "horizontal",
			"contents": [
			  {
				"type": "text",
				"text": "#54545",
				"size": "xl",
				"align": "start",
				"gravity": "center",
				"weight": "bold",
				"wrap": true
			  },
			  {
				"type": "image",
				"url": "https://www.rochesterfirst.com/wp-content/uploads/sites/66/2019/01/canceled-520x247_1548805365403_69480133_ver1.0.jpg",
				"margin": "none",
				"align": "end",
				"gravity": "top",
				"size": "md",
				"aspectRatio": "2:1"
			  }
			]
		  },
		  {
			"type": "text",
			"text": "นวดแผนไทย สุดผ่อนคลาย",
			"margin": "none",
			"size": "lg",
			"align": "start",
			"weight": "bold",
			"color": "#000000",
			"wrap": true
		  },
		  {
			"type": "text",
			"text": "01/01/2020, 09:00-12:00",
			"margin": "sm",
			"size": "xs",
			"align": "start",
			"color": "#9F9B9B",
			"wrap": true
		  }
		]
	  },
	  "body": {
		"type": "box",
		"layout": "vertical",
		"contents": [
		  {
			"type": "separator",
			"margin": "xl",
			"color": "#9F9B9B"
		  },
		  {
			"type": "box",
			"layout": "baseline",
			"margin": "xl",
			"contents": [
			  {
				"type": "text",
				"text": "x2",
				"flex": 1,
				"size": "xs",
				"color": "#9F9B9B",
				"wrap": true
			  },
			  {
				"type": "text",
				"text": "฿ 2,000.00 ",
				"size": "xs",
				"align": "end",
				"weight": "bold",
				"wrap": true
			  }
			]
		  },
		  {
			"type": "separator",
			"margin": "xl",
			"color": "#9F9B9B"
		  },
		  {
			"type": "box",
			"layout": "baseline",
			"margin": "lg",
			"contents": [
			  {
				"type": "text",
				"text": "ผู้จอง:",
				"size": "sm",
				"color": "#9F9B9B",
				"wrap": true
			  },
			  {
				"type": "text",
				"text": "รินทร์ มูลสาร",
				"size": "sm",
				"align": "end",
				"color": "#4E4D4D",
				"wrap": true
			  }
			]
		  },
		  {
			"type": "box",
			"layout": "baseline",
			"margin": "lg",
			"contents": [
			  {
				"type": "text",
				"text": "หมายเหตุ:",
				"color": "#9F9B9B"
			  },
			  {
				"type": "text",
				"text": "ขอคนมือหนักๆครับ ชอบความรุนแรง",
				"size": "sm",
				"align": "end",
				"color": "#4E4D4D",
				"wrap": true
			  }
			]
		  },
		  {
			"type": "spacer",
			"size": "lg"
		  }
		]
	  }
	}
  }
';

$shopinfoJson = '
{
	"type": "flex",
	"altText": "Flex Message",
	"contents": {
	  "type": "bubble",
	  "hero": {
		"type": "image",
		"url": "https://f.ptcdn.info/945/029/000/1427894585-guccih-o.jpg",
		"size": "full",
		"aspectRatio": "20:13",
		"aspectMode": "cover",
		"action": {
		  "type": "uri",
		  "label": "Line",
		  "uri": "https://linecorp.com/"
		}
	  },
	  "body": {
		"type": "box",
		"layout": "vertical",
		"contents": [
		  {
			"type": "text",
			"text": "Brown Cafe",
			"size": "xl",
			"weight": "bold"
		  },
		  {
			"type": "box",
			"layout": "vertical",
			"spacing": "sm",
			"margin": "lg",
			"contents": [
			  {
				"type": "box",
				"layout": "baseline",
				"spacing": "xl",
				"contents": [
				  {
					"type": "icon",
					"url": "https://cdn3.iconfinder.com/data/icons/unicons-vector-icons-pack/32/phone-512.png"
				  },
				  {
					"type": "text",
					"text": "081-232-5559",
					"flex": 5,
					"size": "sm",
					"color": "#666666",
					"wrap": true
				  }
				]
			  },
			  {
				"type": "box",
				"layout": "baseline",
				"spacing": "xl",
				"contents": [
				  {
					"type": "icon",
					"url": "https://cdn3.iconfinder.com/data/icons/unicons-vector-icons-pack/32/phone-512.png"
				  },
				  {
					"type": "text",
					"text": "123/35 ข้างโรงแรมเชียงใหมภูคํา",
					"flex": 5,
					"size": "sm",
					"color": "#666666",
					"wrap": true
				  }
				]
			  },
			  {
				"type": "box",
				"layout": "baseline",
				"spacing": "xl",
				"contents": [
				  {
					"type": "icon",
					"url": "https://cdn3.iconfinder.com/data/icons/unicons-vector-icons-pack/32/phone-512.png"
				  },
				  {
					"type": "text",
					"text": "จันทร์ - ศุกร์, 08:00-18:00 น.",
					"flex": 5,
					"size": "sm",
					"color": "#666666",
					"wrap": true
				  }
				]
			  }
			]
		  }
		]
	  },
	  "footer": {
		"type": "box",
		"layout": "vertical",
		"flex": 0,
		"spacing": "sm",
		"contents": [
		  {
			"type": "button",
			"action": {
			  "type": "uri",
			  "label": "โทรออก",
			  "uri": "https://linecorp.com"
			},
			"height": "sm",
			"style": "link"
		  },
		  {
			"type": "button",
			"action": {
			  "type": "uri",
			  "label": "นำทาง",
			  "uri": "https://linecorp.com"
			},
			"height": "sm",
			"style": "link"
		  },
		  {
			"type": "button",
			"action": {
			  "type": "uri",
			  "label": "เพิ่มเติม",
			  "uri": "https://linecorp.com"
			}
		  },
		  {
			"type": "spacer",
			"size": "sm"
		  }
		]
	  }
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
			$messages = json_decode($servicesJson,true);
		}
		if ($event['type'] == 'message' && $event['message']['text'] == 'promotions') {
			$messages = json_decode($promotionsJson,true);
		}
		if ($event['type'] == 'message' && $event['message']['text'] == 'booking') {
			$messages = json_decode($bookingJson,true);
		}
		if ($event['type'] == 'message' && $event['message']['text'] == 'canceled') {
			$messages = json_decode($canceledJson,true);
		}
		if ($event['type'] == 'message' && $event['message']['text'] == 'shopinfo') {
			$messages = json_decode($shopinfoJson,true);
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
