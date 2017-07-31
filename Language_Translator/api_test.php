<?php
$url = "https://gateway.watsonplatform.net/language-translator/api/v2/translate";
$post_args = array(
    'text' => 'Hello',
    'source' => 'en',
    'target' => 'es',
);
$headers = array(
        'Content-Type: application/json','Accept: application/json'
    );
$ch = curl_init();
curl_setopt($ch, CURLOPT_USERPWD, "{username}:{password}");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_args));
$result = curl_exec($ch);
    if ($result === FALSE) {
        die('Send Error: ' . curl_error($ch));
    }
curl_close($ch);
echo $result;

// This is the curl command that is made compatible to work in PHP using its curl library
// curl -u "{username}":"{password}" -X POST -H "Content-Type: application/json" -H "Accept: application/json" -d '{"text":"Hello","source":"en","target":"es"}' "https://gateway.watsonplatform.net/language-translator/api/v2/translate"
?>
