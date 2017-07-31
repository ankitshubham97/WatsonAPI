<?php
$url = "https://gateway.watsonplatform.net/natural-language-understanding/api/v1/analyze?version=2017-02-27";
$entities = new \stdClass();
$keywords = new \stdClass();
$entities_keywords = new \stdClass();
$postdata = new \stdClass();
$entities->emotion = "true";
$entities->sentiment = "true";
$entities->limit = 2;
$keywords->emotion = "true";
$keywords->sentiment = "true";
$keywords->limit = 2;
$entities_keywords->entities = $entities;
$entities_keywords->keywords = $keywords;
$postdata->text = "IBM is an American multinational technology company headquartered in Armonk, New York, United States, with operations in over 170 countries.";
$postdata->features = $entities_keywords;

$headers = array('Content-Type: application/json');

$ch = curl_init();
curl_setopt($ch, CURLOPT_USERPWD, "{username}:{password}");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postdata));
$result = curl_exec($ch);
    if ($result === FALSE) {
        die('Send Error: ' . curl_error($ch));
    }
curl_close($ch);
echo $result;

// This is the curl command that I made compatible to work in PHP:
//curl -X POST -H "Content-Type: application/json" -u "{username}":"{password}" -d @parameters.json "https://gateway.watsonplatform.net/natural-language-understanding/api/v1/analyze?version=2017-02-27"

// parameters.json:
// {
//   "text": "IBM is an American multinational technology company headquartered in Armonk, New York, United States, with operations in over 170 countries.",
//   "features": {
//     "entities": {
//       "emotion": true,
//       "sentiment": true,
//       "limit": 2
//     },
//     "keywords": {
//       "emotion": true,
//       "sentiment": true,
//       "limit": 2
//     }
//   }
// }

?>
