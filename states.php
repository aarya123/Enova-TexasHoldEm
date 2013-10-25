<pre>
<?php

$url = 'http://nolimitcodeem.com/api/players/4f954fd3-17e4-440e-a708-626a4dc0a1a0/';
//$url = 'http://nolimitcodeem.com/sandbox/players/flop-phase-key';


function getState () {
	$url = 'http://nolimitcodeem.com/api/players/4f954fd3-17e4-440e-a708-626a4dc0a1a0/';
	$url = 'http://nolimitcodeem.com/sandbox/players/flop-phase-key';
	 $getRes = json_decode(file_get_contents($url));
	 return $getRes;
}

function act ($actName, $amt="0") {

$url = 'http://nolimitcodeem.com/api/players/4f954fd3-17e4-440e-a708-626a4dc0a1a0/';
$url = 'http://nolimitcodeem.com/sandbox/players/flop-phase-key';
	$url .= '/action';
	$fields = array(
				'action_name' => $actName,
				'amount' => $amt
			  );

	$fields_string="";
	foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
	rtrim($fields_string, '&');

	//open connection
	$ch = curl_init();

	//set the url, number of POST vars, POST data
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	curl_setopt($ch,CURLOPT_URL, $url);
	curl_setopt($ch,CURLOPT_POST, count($fields));
	curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);

	//execute post
	$result = json_decode(curl_exec($ch));

	print_r($result);

	//close connection
	curl_close($ch);

	return $result;
}



?>
</pre>