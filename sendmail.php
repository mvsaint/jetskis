<?php

$mailAdmin = "v.medvedev@upp.com.ru";

$subject = "=?utf-8?B?" . base64_encode("Заявка c лендинга wakesurfing") . "?=";

$message = "<DOCTYPE html>";
$message .= "<html><head><title>Заявка c лендинга wakesurfing</title></head>";
$message .= "<body>";
$message .= "<ul><li>Имя: ".$_POST['name']. "</li>
            <li>Телефон: ".$_POST['phone']."</li>
            </ul>";
$message .= "</body></html>";

$headers = "From:"."=?utf-8?B?" . base64_encode("RURIDER") . "?=". "<mail@rurider.ru>\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

mail($mailAdmin, $subject, $message, $headers);
        
?>