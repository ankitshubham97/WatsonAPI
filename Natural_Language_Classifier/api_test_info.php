<?php
$url = "https://gateway.watsonplatform.net/natural-language-classifier/api/v1/classifiers/359f41x201-nlc-252224/classify";

$headers = array('Content-Type: application/json');

$postfields = array("text" => 'How hot will it be today?');

$ch = curl_init();
curl_setopt($ch, CURLOPT_USERPWD, "cd22c21d-6a93-404b-ba07-2841d90b6f5e:lizOeyqQuIdc");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postfields));
if($_GET['proxy']=="proxy"){
		curl_setopt($ch, CURLOPT_PROXY, "http://proxy22.iitd.ac.in"); //your proxy url
		curl_setopt($ch, CURLOPT_PROXYPORT, "3128");
	}
$result = curl_exec($ch);
    if ($result === FALSE) {
        die('Send Error: ' . curl_error($ch));
    }
curl_close($ch);
echo $result;

//curl -G --user "cd22c21d-6a93-404b-b07-2841d90b6f5e":"lizOeyqQuIdc" "https://gateway.watsonplatform.net/natural-language-classifier/api/v1/classifiers/359f41x201-nlc-252224/classify" --data-urlencode "text=How hot will it be today?"
?>
