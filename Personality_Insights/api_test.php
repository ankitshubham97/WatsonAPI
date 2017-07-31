<?php
$url = "https://gateway.watsonplatform.net/personality-insights/api/v3/profile?version=2016-10-20&consumption_preferences=true&raw_scores=true";

$headers = array('Content-Type: application/json');

$ch = curl_init();
curl_setopt($ch, CURLOPT_USERPWD, "e50cff98-7caa-4c04-a7ed-3b1bee2621b5:QorTLoujR10W");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POSTFIELDS, file_get_contents('profile.json'));
$result = curl_exec($ch);
    if ($result === FALSE) {
        die('Send Error: ' . curl_error($ch));
    }
curl_close($ch);
echo $result;

//curl -X POST -u "e50cff98-7caa-4c04-a7ed-3b1bee2621b5:QorTLoujR10W" --header "Content-Type: application/json" --data-binary @profile.json "https://gateway.watsonplatform.net/personality-insights/api/v3/profile?version=2016-10-20&consumption_preferences=true&raw_scores=true"

?>
