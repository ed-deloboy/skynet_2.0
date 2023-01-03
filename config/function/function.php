<?php

function userInfo($p1)
{
    global $conn;
    $res = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM `users` WHERE `id` = $p1"));
    return $res;
}
function Ulogin($p1)
{
    $url1 = 'https://fxmonster.space/office';
    $url2 = 'https://fxmonster.pw/';
    if ($p1 <= 0 and $_SESSION['USER_LOGIN_IN'] != $p1) exit(header('Location: ' . $url1));
    else if ($_SESSION['USER_LOGIN_IN'] != $p1) exit(header('Location: ' . $url2));
}
function MessageSend($p1, $p2, $p3)
{
    $_SESSION['noty_header'] = $p1;
    $_SESSION['noty_text'] = $p2;
    $_SESSION['noty_type'] = $p3;
    exit(header('Location: ' . $_SERVER['HTTP_REFERER']));
}
function MessageShow()
{
    if ($_SESSION['noty_header']) $Message = "<script>message('" . $_SESSION['noty_header'] . "','" . $_SESSION['noty_text'] . "','" . $_SESSION['noty_type'] . "')</script>";
    echo $Message;
    $_SESSION['noty_header'] = '';
    $_SESSION['noty_text'] = '';
    $_SESSION['noty_type'] = '';
}
function FormChars($p1, $p2 = 0)
{
    global $conn;
    if ($p2) return mysqli_real_escape_string($conn, $p1);
    else return nl2br(htmlspecialchars(trim($p1), ENT_QUOTES), false);
}
function generate_password($number)
{
    $arr = array(
        'a', 'b', 'c', 'd', 'e', 'f',
        'g', 'h', 'i', 'j', 'k', 'l',
        'm', 'n', 'o', 'p', 'r', 's',
        't', 'u', 'v', 'x', 'y', 'z',
        'A', 'B', 'C', 'D', 'E', 'F',
        'G', 'H', 'I', 'J', 'K', 'L',
        'M', 'N', 'O', 'P', 'R', 'S',
        'T', 'U', 'V', 'X', 'Y', 'Z',
        '1', '2', '3', '4', '5', '6',
        '7', '8', '9', '0'
    );
    // Генерируем пароль
    $pass = "";
    for ($i = 0; $i < $number; $i++) {
        // Вычисляем случайный индекс массива
        $index = rand(0, count($arr) - 1);
        $pass .= $arr[$index];
    }
    return $pass;
}
function changeDateFormat($sourceDate, $newFormat)
{
    $r = date($newFormat, strtotime($sourceDate));
    return $r;
}

// отправка смс в телеграм
// define('TELEGRAM_TOKEN', '');
// function message_to_telegram($text, $id)
// {
//     $ch = curl_init();
//     curl_setopt_array(
//         $ch,
//         array(
//             CURLOPT_URL => 'https://api.telegram.org/bot5296981482:AAEbmJmhz0twcMiOMjolMzrb3XffkfXtN64/sendMessage',
//             CURLOPT_POST => TRUE,
//             CURLOPT_RETURNTRANSFER => TRUE,
//             CURLOPT_TIMEOUT => 10,
//             CURLOPT_POSTFIELDS => array(
//                 'chat_id' => $id,
//                 'text' => $text,
//             ),
//         )
//     );
//     curl_exec($ch);
//     curl_close($ch);
// }

// function getYoutubeEmbedUrl($url)
// {
//     $shortUrlRegex = '/youtu.be\/([a-zA-Z0-9_-]+)\??/i';
//     $longUrlRegex = '/youtube.com\/((?:embed)|(?:watch))((?:\?v\=)|(?:\/))([a-zA-Z0-9_-]+)/i';

//     if (preg_match($longUrlRegex, $url, $matches)) {
//         $youtube_id = $matches[count($matches) - 1];
//     }

//     if (preg_match($shortUrlRegex, $url, $matches)) {
//         $youtube_id = $matches[count($matches) - 1];
//     }
//     return 'https://www.youtube.com/embed/' . $youtube_id;
// }

// функ хэш пароля от WP
function wp_hash_password($password)
{
    global $wp_hasher;

    if (empty($wp_hasher)) {
        require_once('../classes/class-phpass.php');
        // By default, use the portable hash from phpass
        $wp_hasher = new PasswordHash(8, TRUE);
    }
    return $wp_hasher->HashPassword($password);
}

function wp_check_password($password, $hash, $user_id = '')
{
    global $wp_hasher;
    // If the hash is still md5...
    // If the stored hash is longer than an MD5,
    // presume the new style phpass portable hash.
    if (empty($wp_hasher)) {
        require_once('../classes/class-phpass.php');
        // By default, use the portable hash from phpass.
        $wp_hasher = new PasswordHash(8, true);
    }

    $check = $wp_hasher->CheckPassword($password, $hash);

    /** This filter is documented in wp-includes/pluggable.php */
    return $check;
}

function get_currency($currency_code, $format)
{

    $date = date('d/m/Y'); // Текущая дата
    $cache_time_out = '3600'; // Время жизни кэша в секундах

    $file_currency_cache = __DIR__ . '/currency.xml'; // Файл кэша

    if (!is_file($file_currency_cache) || filemtime($file_currency_cache) < (time() - $cache_time_out)) {

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://www.cbr.ru/scripts/XML_daily.asp?date_req=' . $date);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);

        $out = curl_exec($ch);

        curl_close($ch);

        file_put_contents($file_currency_cache, $out);
    }

    $content_currency = simplexml_load_file($file_currency_cache);

    return number_format(str_replace(',', '.', $content_currency->xpath('Valute[CharCode="' . $currency_code . '"]')[0]->Value), $format);
}
function sssetMyCommands($token)
{
    file_get_contents('https://api.telegram.org/bot' . $token . '/setMyCommands?commands=[{"command":"som1","description":"desc som1"},]');
}

function deleteMyCommands($token)
{
    $method = 'deleteMyCommands';

    $params = [];

    send($token, $method, $params);
}

// function startNewMassage($conn, $client_id, $massage, $token, $chat_id, $location, $keyboard_name)
// {
//     mysqli_query($conn, "UPDATE `users` SET `active`='1' WHERE client_id='$client_id'");
//     mysqli_query($conn, "UPDATE `users` SET `location`='$location' WHERE client_id='$client_id'");
//     $massage = $massage;
//     sendMessage($token, $chat_id, $massage, $keyboard_name);
// }

function sendMessage($token, $chat_id, $massage_out, $keyboard_name)
{
    $method = 'sendMessage';
    $params = [
        'chat_id' => $chat_id,
        'text'    => $massage_out,
        'reply_markup' => json_encode(array('keyboard' => $keyboard_name, 'resize_keyboard' => true))
    ];

    send($token, $method, $params);
}

function send($token, $method, $params)
{
    file_get_contents('https://api.telegram.org/bot' . $token . '/' . $method . '?' . http_build_query($params));
}
