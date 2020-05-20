<?php


$access_token = 'TjwShNySVD4+PyNu8fWinz3MCmGS1SEahtJdfd0AcpoR3kpVd1YhnbZTo94zcIy7Az6ox1nf5emmi0z+9LpuX8W1rlxQXV7IEVYF3fFb9BC550v3l4YJ985gne0FPi2phPG3oKOVfMMv/eOZ9j7lfwdB04t89/1O/w1cDnyilFU=';

$userId = 'Ub9af2ecddba401128eb33559023cbf9a';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

