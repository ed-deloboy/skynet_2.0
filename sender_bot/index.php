<?php
// session_start();
/* https://api.telegram.org/botXXXXXXXXXXXXXXXXXXXXX/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */
require_once '../config/db_conn/conn.php';

$admins = [771413338];

$kbrd_general = array(

  [
    array('text' => '🔀 Заявки по городам'),
  ],
  [
    array('text' => '📛 Не просмотренные заявки'),
  ],
);

$kbrd_all_request = [
  [
    array('text' => '1️⃣ Заявки Ростов'),
  ],
  [
    array('text' => '2️⃣ Заявки Шахты'),
  ],
  [
    array('text' => '3️⃣ Заявки Сулин'),
  ],
  [
    array('text' => '↩️ Главная'),
  ],
];

$data = json_decode(file_get_contents('php://input'), TRUE);
file_put_contents('data_bot.txt', '$data: ' . print_r($data, 1) . "\n", FILE_APPEND);
// connectTG
$token = "1904240641:AAHgsT0c_dPCgv7DsY0Qi6XEGa8ViMgvYbA";
// https://api.telegram.org/bot1904240641:AAHgsT0c_dPCgv7DsY0Qi6XEGa8ViMgvYbA/setwebhook?url=/skynet-service.com/sender_bot/index.php
if ($_POST) {
  // id для базы
  $requestId = 0;
  if (trim($_POST['requestType']) == 'repair') {
    $requestId = 1;
    // clientdata
    $requestType = htmlspecialchars(trim($_POST['requestType']));
    $phoneModel = htmlspecialchars(trim($_POST['selectModel']));
    $variantBreaking = htmlspecialchars(trim($_POST['variant-breaking']));
    $clientCity = htmlspecialchars(trim($_POST['formCitySelect']));
    $clientNumber = htmlspecialchars(trim($_POST['formClientNumber']));


    // sendMessage($token, 771413338, 'заявка777', $kbrd_general);
    // echo 3;

    if (strlen($clientNumber) == 12) {
      // если проверка прошла
      $arr = array(
        "<b>ТИП ЗАЯВКИ:</b> " => '<b>РЕМОНТ</b>',
        "\n<b>Модель телефона:</b> " => $phoneModel,
        "\n<b>Неисправность нелефона:</b> " => $variantBreaking,
        "\n<b>Клиент из города:</b> " => $clientCity,
        "\n<b>Номер телефон:</b> " => $clientNumber,
      );

      foreach ($arr as $key => $value) {
        $request_message .= "<b>" . $key . "</b> " . $value;
      };

      // отправка админам
      for ($i = 0; $i < count($admins); $i++) {
        sendMessage($token, $admins[$i], $request_message, $kbrd_general);
      }

      echo 3;
    } else {
      // не правильно введен номер
      echo 1;
    }
  }

  // запись в базу
  $time_request = date('Y-m-d H:i:s', time());
  mysqli_query($conn, "INSERT INTO `requests`(`id`, `type`, `apparat_name`, `theme_request`, `city`, `phone`, `time_request`) VALUES (null,'$requestId','$phoneModel','$variantBreaking','$clientCity','$clientNumber','$time_request')");
  echo mysqli_error($conn);
  // jst_sendMessage($token, $chat_id, "Базы нет/есть");

} else {

  # Обрабатываем данные
  $message_in = trim($data['message']['text']);
  $chat_id = $data['message']['chat']['id'];
  $client_id = $data['message']['from']['id'];
  $message_id = $data['message']['message_id'];
  $client_first_name = $data['message']['from']['first_name'];
  $client_user_name = $data['message']['from']['username'];
  $client_user_file_id = $data['message']['document']['file_id'];
  $client_user_photo_id = $data['message']['photo'][0]['file_id'];
  $client_user_caption = $data['message']['caption'];

  // callback_query данные
  $callback_query_id = $data['callback_query']['id'];
  $callback_query_message_id = $data['callback_query']['message']['message_id'];
  $callback_query_data = $data['callback_query']['data'];
  $callback_query_user_id = $data['callback_query']['from']['id'];
  $callback_query_chat_id = $data['callback_query']['message']['chat']['id'];
  $callback_query_user_name = $data['callback_query']['from']['username'];
  $callback_query_first_name = $data['callback_query']['from']['first_name'];

  // my_chat_member
  $my_chat_member_id = $data['my_chat_member']['chat']['id'];

  if ($data['callback_query']) {

    $client_id = $callback_query_user_id;
    $chat_id = $callback_query_chat_id;
    $message_in = $callback_query_data;
    $message_id = $callback_query_message_id;
    $client_user_name = $callback_query_user_name;
    $client_first_name = $callback_query_first_name;
  }

  if ($data['my_chat_member']) {
    exit;
  }


  if (isset($data['callback_query'])) {
  } else {
    // $message = "Не обраб массив " . $message_in;
    // jst_sendMessage($token, $chat_id, $message);

    if (mb_strtolower($message_in) == '1️⃣ заявки ростов' or mb_strtolower($message_in) == '2️⃣ заявки шахты' or mb_strtolower($message_in) == '3️⃣ заявки сулин') {

      switch (mb_strtolower($message_in)) {
        case '1️⃣ заявки ростов':
          $city_id = 1;
          $city_name = 'Ростов';
          break;

        case '2️⃣ заявки шахты':
          $city_id = 2;
          $city_name = 'Шахты';
          break;

        case '3️⃣ заявки сулин':
          $city_id = 3;
          $city_name = 'Сулин';
          break;
      }

      $con1 = 0;
      $con2 = 1;
      for ($i = 0; $i < 4; $i++) {
        $request_data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * from `requests` where city='$city_id' order by `time_request` asc limit $con1,$con2"));
        if (!$request_data) break;
        if ($con1 == 0) {
          jst_sendMessage($token, $chat_id, $title_mess . "<b>Последние 5 заявок по городу {$city_name}:</b>");
        }
        switch ($request_data['type']) {
          case '1':
            $type = 'Ремонт';
            break;

          case '2':
            $type = 'Заказ';
            break;
        }

        switch ($request_data['view']) {
          case '0':
            $view = 'НЕТ';
            break;

          case '1':
            $view = 'ДА';
            break;
        }
        // `id`, `type`, `apparat_name`, `theme_request`, `city`, `phone`, `time_request`
        jst_sendMessage($token, $chat_id, $title_mess . "<b>ID заявки:</b> {$request_data['id']}\n<b>Тип заявки:</b> {$type}\n<b>Заявка от: {$request_data['phone']}:</b>\n\n<b>Название аппарата: </b> {$request_data['apparat_name']}\n<b>Тема заявки: </b> {$request_data['theme_request']}\n<b>Город: </b> {$city_name} \n<b>Время создания заявки: </b> {$request_data['time_request']}\n<b>Статус прозвона: {$view}</b>");
        $con1++;
        $con2++;
        sleep(1);
      }
    } else {

      switch (mb_strtolower($message_in)) {

        case '📛 не просмотренные заявки':
          $con1 = 0;
          $con2 = 1;
          for ($i = 0; $i < 4; $i++) {
            $request_data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * from `requests` where view='0' order by `time_request` asc limit $con1,$con2"));
            if (!$request_data) break;
            if ($con1 == 0) {
              jst_sendMessage($token, $chat_id, $title_mess . "<b>Последние 5 заявок по городу {$city_name}:</b>");
            }
            switch ($request_data['type']) {
              case '1':
                $type = 'Ремонт';
                break;

              case '2':
                $type = 'Заказ';
                break;
            }

            switch ($request_data['view']) {
              case '0':
                $view = 'НЕТ';
                break;

              case '1':
                $view = 'ДА';
                break;
            }
            // `id`, `type`, `apparat_name`, `theme_request`, `city`, `phone`, `time_request`
            jst_sendMessage($token, $chat_id, $title_mess . "<b>ID заявки:</b> {$request_data['id']}\n<b>Тип заявки:</b> {$type}\n<b>Заявка от: {$request_data['phone']}:</b>\n\n<b>Название аппарата: </b> {$request_data['apparat_name']}\n<b>Тема заявки: </b> {$request_data['theme_request']}\n<b>Город: </b> {$city_name} \n<b>Время создания заявки: </b> {$request_data['time_request']}\n<b>Статус прозвона: {$view}</b>");
            $con1++;
            $con2++;
            sleep(1);
          }

          break;

        case '🔀 заявки по городам':
          sendMessage($token, $chat_id, 'Выберите город', $kbrd_all_request);

          break;

        case '↩️ главная':
          sendMessage($token, $chat_id, 'Главная', $kbrd_general);
          break;
      }
    }
  }
}




function jst_sendMessage($token, $chat_id, $message_out)
{
  $method = 'sendMessage';

  $params = [
    'chat_id' => $chat_id,
    'text'    => $message_out,
    'parse_mode' => 'HTML',
    // 'reply_markup' => json_encode(array('keyboard' => $keyboard_name, 'resize_keyboard' => true)),

  ];

  send($token, $method, $params);
}

function sendMessage($token, $chat_id, $message_out, $keyboard_name)
{
  $method = 'sendMessage';

  $params = [
    'chat_id' => $chat_id,
    'text'    => $message_out,
    'parse_mode' => 'HTML',
    'reply_markup' => json_encode(array('keyboard' => $keyboard_name, 'resize_keyboard' => true, 'one_time_keyboard' => false)),

  ];

  send($token, $method, $params);
}

function send($token, $method, $params)
{
  file_get_contents('https://api.telegram.org/bot' . $token . '/' . $method . '?' . http_build_query($params));
}
