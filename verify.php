<?php
$access_token = 'TjwShNySVD4+PyNu8fWinz3MCmGS1SEahtJdfd0AcpoR3kpVd1YhnbZTo94zcIy7Az6ox1nf5emmi0z+9LpuX8W1rlxQXV7IEVYF3fFb9BC550v3l4YJ985gne0FPi2phPG3oKOVfMMv/eOZ9j7lfwdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result."......verify";
