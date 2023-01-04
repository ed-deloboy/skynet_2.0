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
$head = 'views/header/head.php';
$footerBody = 'views/footer/index.php';
$loader_lending = 'view_modules/loader_lending/index.php';
// echo 'this =' . $Page.'|';
// $Page = trim($_SERVER['REQUEST_URI']);
if ($Page == 'index') {
    $contentBody = 'views/general/index.php';
    $title = ' Скайнет - сеть сервисных центров по ремонту телефонов и компьютерной техники';
} elseif ($Page == 'phone') {
    $contentBody = 'views/phone/index.php';
    $title = 'Скайнет - ремонт релефонов';
} elseif ($Page == 'for-business') {
    $contentBody = 'views/for-business/index.php';
    $title = 'Скайнет - предложение для бизнеса';
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
} elseif ($Page == 'contacts') {
    $contentBody = 'views/contacts/index.php';
    $title = 'Скайнет - наши контакты';
} elseif ($Page == 'gidrogel') {
    $contentBody = 'views/gidrogel/index.php';
    $title = 'Скайнет - гидрогелевая пленка для техники';
} elseif ($Page == 'registration') {
    if ($_SESSION) {
        echo "<script>
        window.location.href = '/office'
        </script>";
    } else {
        $contentBody = 'views/reg_page/index.php';
        $title = 'Регистрация в Скайнет';
    }
} elseif ($Page == 'contacts') {
    $contentBody = 'views/redirect/index.php';
} elseif ($Page == 'exit') {
    // $contentBody = 'views/redirect/index.php';
    include 'config/modules/logout.php';
    echo "<script>
        window.location.href = '/'
        </script>";
} elseif ($Page == 'office') {

    if ($_SESSION) {
        $loader_lending = '';
        $footerBody = '';
        $head = '';
        $contentBody = 'views/office/index.php';
        $title = 'Личный кабинет Скайнет';
    } else {
        echo "<script>
        window.location.href = '/registration'
        </script>";
    }
} else {
    $contentBody = 'views/404/index.php';
    $title = 'Скайнет 404 страница не найдена';
}
            // url: "",
