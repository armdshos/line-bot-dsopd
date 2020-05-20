<?php



require "vendor/autoload.php";

$access_token = 'TjwShNySVD4+PyNu8fWinz3MCmGS1SEahtJdfd0AcpoR3kpVd1YhnbZTo94zcIy7Az6ox1nf5emmi0z+9LpuX8W1rlxQXV7IEVYF3fFb9BC550v3l4YJ985gne0FPi2phPG3oKOVfMMv/eOZ9j7lfwdB04t89/1O/w1cDnyilFU=';

$channelSecret = '510ac677064aae3c034a3289d59b7433';

$pushID = 'Uc4b92f25239cc7cf4e76c2fb370b8ef9';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('สวัสดี ยินดีต้อนรับท่านสู่ ระบบปรึกษาทางการแพทย์ โรงพยาบาลธัญญารักษ์ ขอนแก่น');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







