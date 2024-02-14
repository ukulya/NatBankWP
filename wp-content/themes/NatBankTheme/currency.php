<?php
header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: POST');

header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');

header('Access-Control-Allow-Credentials: true');

$data = file_get_contents("https://www.nbkr.kg/XML/daily.xml");

$xml = simplexml_load_string($data);

$client = [];
foreach ($xml as $val) {
    $client[] = (string) $val->Value;
}

echo json_encode($client);

