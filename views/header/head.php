
<?php
$route = trim($_SERVER['REQUEST_URI']);
if ($route == '/') {
  $title = ' Скайнет - сеть сервисных центров по ремонту телефонов и компьютерной техники';
} elseif ($route == '/phone') {
  $title = 'Скайнет - ремонт релефонов';
} elseif ($route == '/tablet') {
  $title = 'Скайнет - ремонт планшетов';
} elseif ($route == '/laptop') {
  $title = 'Скайнет - ремонт ноутбуков';
} elseif ($route == '/printer') {
  $title = 'Скайнет - ремонт принтеров';
} elseif ($route == '/tv') {
  $title = 'Скайнет - ремонт телевизоров';
} elseif ($route == '/photo') {
  $title = 'Скайнет - ремонт фотоаппаратов';
} elseif ($route == '/thanks') {
  $title = 'Скайнет - спасибо за заявку';
} elseif ($route == '/politics') {
  $title = 'Скайнет - политика обработки данных';
} elseif ($route == '/laser') {
  $title = 'Скайнет - работы лазером';
}elseif ($route == '/contacts') {
  $title = 'Скайнет - наши контакты';
}
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no">
  <link rel="shortcut icon" href="favic.ico" type="image/x-icon">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="theme-color" content="#111111">
  <!-- <title>Скайнет - сеть сервисных центров по ремонту телефонов и компьютерной техники</title> -->
  <title><?php echo $title ?></title>
  <!-- bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <link rel="stylesheet" href="css/global.css">
  <link rel="stylesheet" href="css/vendor.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="css/main.css">
  <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script defer src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

  <script defer src="https://api-maps.yandex.ru/2.1/?apikey=ваш API-ключ&lang=ru_RU" type="text/javascript"></script>
  <script defer src="js/vendor.js"></script>
  <script defer src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

  <script defer src="js/main.js"></script>
  <!-- vk -->
  <!-- <script type="text/javascript" src="https://vk.com/js/api/openapi.js?169"></script> -->
  <!-- vk init -->

</head>