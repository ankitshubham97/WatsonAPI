<?php
$url = "https://gateway.watsonplatform.net/natural-language-classifier/api/v1/classifiers";

$headers = array('Content-Type: multipart/form-data');

$postfields = array("training_data" => file_get_contents('weather_data_train.csv'), "training_metadata" => '{"language":"en","name":"TutorialClassifier2"}');

$ch = curl_init();
curl_setopt($ch, CURLOPT_USERPWD, "cd22c21d-6a93-404b-ba07-2841d90b6f5e:lizOeyqQuIdc");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POSTFIELDS, ($postfields));
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

//curl -i --user "cd22c21d-6a93-404b-ba07-2841d90b6f5e":"lizOeyqQuIdc" -F training_data=@weather_data_train.csv -F training_metadata="{\"language\":\"en\",\"name\":\"TutorialClassifier\"}" "https://gateway.watsonplatform.net/natural-language-classifier/api/v1/classifiers"

?>