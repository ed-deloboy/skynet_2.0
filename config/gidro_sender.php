<?php
// session_start();
/* https://api.telegram.org/botXXXXXXXXXXXXXXXXXXXXX/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */


// connectTG
$token = "1904240641:AAHgsT0c_dPCgv7DsY0Qi6XEGa8ViMgvYbA";
$chat_id = "-427032957";

// clientdata
$typeTechnica = $_POST['typeTechnicaOfferCalc'];
$typeSkin = $_POST['typeSkinOfferCalc'];
$clientNumber = trim($_POST['formClientNumber']);
$price = $_POST['priceSlick'];
$priceSell = $_POST['priceSlickSell'];

if (strlen($clientNumber) === 12) {
//   // если проверка прошла
  $arr = array(
    'Заявка' => 'на гидрогель',
    'Тип техники: ' => $typeTechnica,
    'Тип пленки: ' => $typeSkin,
    'Цена до скидки: ' => $price,
    'Цена со скидкой: ' => $priceSell,
    'Номер телефона: ' => $clientNumber,
  );

// echo "<pre>";
// print_r($arr);

  foreach ($arr as $key => $value) {
    $txt .= "<b>" . $key . "</b> " . $value . "%0A";
  };

  $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");
  fclose($sendToTelegram);

  if ($sendToTelegram) {
    // успешно отправлено
    echo 3;
    // echo strlen($clientNumber);
  } else {
    // ошибка отправки
    echo 2;
  }
} else {
  // не правильно введен номер
  echo 1;
  // echo strlen($clientNumber);
}
