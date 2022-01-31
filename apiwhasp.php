<?php
    //if(!isset($_GET['text']) or !isset($_GET['phone'])){ die('Not enough data');}

    $apiURL = 'https://api.chat-api.com/instance401090/';
    $token = '3joyqvzgm973a7lx';

    /*     $message = $_GET['text'];
        $phone = $_GET['phone']; */

    $data = json_encode(
        array(
            'chatId'=>'51959747175@c.us',
            'body'=>"Test"
        )
    );
    $url = $apiURL.'message?token='.$token;
    $options = stream_context_create(
        array('http' =>
            array(
                'method'  => 'POST',
                'header'  => 'Content-type: application/json',
                'content' => $data
            )
        )
    );
    $response = file_get_contents($url,false,$options);
    echo $response; exit;
?>