<?php 

require __DIR__ . '/twilio-php-master/Twilio/autoload.php';
use Twilio\Rest\Client;
$account_sid = 'ACfde7447fd9b22e196c96d877d19f9d10';
$auth_token = 'a9d8d29254414cf49e9afcf88de0abba';
$verification = rand(10000,99999);
$twilio_number = "+16155521168";
$from = "vaping.tn";
$client = new Client($account_sid, $auth_token);
$verification = rand(1000,9999);
if($_GET["action"]=='send'){
    $arr = array('code' => $verification);
    $client->messages->create(
        '+21620532090',
        array(
            'from' => $twilio_number,
            'body' => 'Code de recuperation de votre compte : '.$verification
        )
    );
    
    echo json_encode($arr);
}
?>
