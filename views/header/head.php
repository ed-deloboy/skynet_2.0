<head>


  <?php
  if ($_SERVER['REQUEST_URI'] == '/') {
    $Page = 'index';
    $Module = 'index';
  } else {
    $URL_Path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $URL_Parts = explode('/', trim($URL_Path, '/'));
    $Page = array_shift($URL_Parts);
    $Module = array_shift($URL_Parts);
    if (!empty($Module)) {
      $Param = array();
      for ($i = 0; $i < count($URL_Parts); $i++) {
        $Param[$URL_Parts[$i]] = $URL_Parts[++$i];
      }
    }
  }

  // echo 'this =' . $Page.'|';
  // $Page = trim($_SERVER['REQUEST_URI']);
  // $contentBody
  if ($Page == 'index') {
    $contentBody = 'views/general/index.php';
    $title = ' Скайнет - сеть сервисных центров по ремонту телефонов и компьютерной техники';
  } elseif ($Page == 'phone') {
    $contentBody = 'views/phone/index.php';
    $title = 'Скайнет - ремонт релефонов';
  } elseif ($Page == 'tablet') {
    $contentBody = 'views/tablet/index.php';
    $title = 'Скайнет - ремонт планшетов';
  } elseif ($Page == 'laptop') {
    $contentBody = 'views/laptop/index.php';
    $title = 'Скайнет - ремонт ноутбуков';
  } elseif ($Page == 'printer') {
    $contentBody = 'views/printer/index.php';
    $title = 'Скайнет - ремонт принтеров';
  } elseif ($Page == 'tv') {
    $contentBody = 'views/tv/index.php';
    $title = 'Скайнет - ремонт телевизоров';
  } elseif ($Page == 'photo') {
    $contentBody = 'views/photo/index.php';
    $title = 'Скайнет - ремонт фотоаппаратов';
  } elseif ($Page == 'thanks') {
    $contentBody = 'views/thanks/index.php';
    $title = 'Скайнет - спасибо за заявку';
  } elseif ($Page == 'politics') {
    $contentBody = 'views/politics/index.php';
    $title = 'Скайнет - политика обработки данных';
  } elseif ($Page == 'laser') {
    $contentBody = 'views/laser/index.php';
    $title = 'Скайнет - работы лазером';
  } elseif ($Page == 'contc') {
    $contentBody = 'views/contacts/index.php';
    $title = 'Скайнет - наши контакты';
  } elseif ($Page == 'gidrogel') {
    $contentBody = 'views/gidrogel/index.php';
    $title = 'Скайнет - гидрогелевая пленка для техники';
  } elseif ($Page == 'contacts') {
    $contentBody = 'views/redirect/index.php';
  } else {
    $contentBody = 'views/404/index.php';
    $title = 'Скайнет 404 страница не найдена';
  }
  ?>
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