<?php
  

function send_LINE($msg){
 $access_token = 'h1sPhF17M3rwEGs3I9xKevnpG++B97gySI7ZleGmUSs3qIY7KxAmwUQzak9OHBsFybIDBqh/SLZcdQ3J9k5czZ0c9ukTVZ7nC+VXi11YiCZVhAiuufszzlMbxCd1IKcRW2oQH2+9EEf/u9/kQLW1VQdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'fd7f0e29486886825b50c5396be612b2',
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

?>
