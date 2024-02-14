<?php
header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: POST');

header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');

header('Access-Control-Allow-Credentials: true');

$distance_data = file_get_contents("https://www.nbkr.kg/XML/daily.xml");
// echo $distance_data;
$xml = simplexml_load_string($distance_data);

$client = [];
foreach ($xml as $val) {
    $client[] = (string) $val->Value;
}

// print_r($client) ; // produces 17992 in this case
echo json_encode($client);

