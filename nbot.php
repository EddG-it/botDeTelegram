<?php

# token y website del BOT #
$token = '7748757733:AAFCaNWrJMtqypQPtYrxkE372rZYv-UNfm4';
$website = 'https://api.telegram.org/bot' . $token;

# leer mi webhook #
$input = file_get_contents('php://input');
$update = json_decode($input, TRUE);

$chatId = $update['message']['chat']['id'];
$message = $update['message']['text'];

# caso para cada comando #
switch ($message) {
    case '/start':
        $response = "¡Hola! Bienvenido a este bot tu usuario es " . $chatId;
        sendMessage($chatId, $response);
        break;

    case '/r':
        $response = "Por favor, regístrate en ";
        sendMessage($chatId, $response);

        break;

    case '/b':
        $response = "Buscando datos en ";
        sendMessage($chatId, $response);
        break;

    case '/m':
        $response = "Modifica tus datos en ";
        sendMessage($chatId, $response);
        break;

    case '/e':
        $response = "Eliminar tu registro en";
        sendMessage($chatId, $response);
        break;

    default:
        $response = "Comando no válido. Usa:\n/r Registro\n/b Buscar\n/m Modificar Registro\n/e Eliminar Registro";
        sendMessage($chatId, $response);
        break;
}


# enviar mensajes al usuario  #
function sendMessage($chatId, $response)
{
    $url = $GLOBALS['website'] . '/sendMessage?chat_id=' . $chatId . '&parse_mode=HTML&text=' . urlencode($response);
    file_get_contents($url);
}


?>

