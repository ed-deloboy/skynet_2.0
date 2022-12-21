<!DOCTYPE html>
<html lang="ru">

<?php
include 'views//header/head.php';
?>

<body>
  <div class="site-container">
    <!-- preloader -->
    <div class="preloader">
      <div class="preloader__row">
      </div>
    </div>


    <?php
    // тело

    if ($_SERVER['REQUEST_URI'] == '/') {
      $Page = 'index';
      $Module = 'index';
    } else {
      $URL_Path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
      $URL_Parts = explode('/', trim($URL_Path, ' /'));
      $Page = array_shift($URL_Parts);
      $Module = array_shift($URL_Parts);
      if (!empty($Module)) {
        $Param = array();
        for ($i = 0; $i < count($URL_Parts); $i++) {
          $Param[$URL_Parts[$i]] = $URL_Parts[++$i];
        }
      }
    }
    // echo 'cсылка = ' . $Page;
    if ($Page == 'index') {
      include 'views/general/index.php';
    } elseif ($Page == 'phone') {
      include 'views/phone/index.php';
    } elseif ($Page == 'tablet') {
      include 'views/tablet/index.php';
    } elseif ($Page == 'laptop') {
      include 'views/laptop/index.php';
    } elseif ($Page == 'printer') {
      include 'views/printer/index.php';
    } elseif ($Page == 'tv') {
      include 'views/tv/index.php';
    } elseif ($Page == 'photo') {
      include 'views/photo/index.php';
    } elseif ($Page == 'thanks') {
      include 'views/thanks/index.php';
    } elseif ($Page == 'politics') {
      include 'views/politics/index.php';
    } elseif ($Page == 'laser') {
      include 'views/laser/index.php';
    } elseif ($Page == 'gidrogel') {
      include 'views/gidrogel/index.php';
    } elseif ($Page == 'contc') {
      include 'views/contacts/index.php';
    } elseif ($Page == 'orders') {
      include 'views/orders/index.php';
    } else {
      include 'views/404/index.php';
    }
    

    ?>

    <?php
    include 'views/footer/index.php';
    ?>

    <!-- alerts -->

    <div class="close-point-container" id="idClosePoin">
      <div class="close-point__info-container">
        <div class="close-point__info-block">
          <button class="close-point__btn-close" id="idClosePointBtn">x</button>
          <h2>Объявление о работе сервисного в Ростове-на-Дону</h2>
          <hr />
          <div class="close-point__text-block">
            <p>
              Дорогие друзья! По техническим причинам сервисный центр в г. Ростов-на-Дону, расположенный по адресу Будённовский просп., 22, 15.07.2022 будет работать с 15:00 до 20:00, с 16.07.2022 работаем в штатном режиме. Приносим свои извинения за предоставленные неудобства. По возникнутым вопросам звоните <a href="tel:+78007776897" class="header__middle-number-phone">8 (800) 777-68-97</a> (Шахты, Красный Сулин).

            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- vk chat -->
    <!-- <div id="vk_community_messages"></div>
    <script type="text/javascript">
      VK.Widgets.CommunityMessages("vk_community_messages", 163352573, {
        tooltipButtonText: "Здравствуйте, чем мы можем Вам помочь?",
      });
    </script> -->

    <!-- fixed-btn -->
    <button class="fixed-call-btn__btn btn--blue popup-left-trigger">Заказать звонок</button>

    <!-- pop ups -->
    <div class="types-trigger__container">
      <button class="types-trigger__close calcapp-popup__close"></button>

      <h3 class="types-trigger__title">
        Заявка на звонок
      </h3>
      <p>Мы позвоним и скажем стимость ремонта Вашего оборудования</p>
      <form class="question-form__form" action="sender_bot/index.php" method="POST">
        <input type="hidden" name="requestType" value="repair">
        <label class="form-label" for="selectModel">Выберите модель оборудования</label>
        <select name="selectModel" id="selectModel">
          <option value="">Модель телефона</option>
          <optgroup label="Apple">
            <option value="iPhone 13/13 Pro/13 Pro Max/13 mini"></option>
            <option value="iPhone 12/12 Pro/12 Pro Max/12 mini"></option>
            <option value="iPhone 11/11 Pro/11 Pro Max"></option>
            <option value="iPhone X/XS/XS Max"></option>
            <option value="iPhone 8/8 Plus"></option>
            <option value="iPhone 7/7 Plus"></option>
            <option value="iPhone 6/6s/6 Plus/6s Plus"></option>
            <option value="Планшет iPad 2/3/4/Air/Pro/Mini/Mini 2"></option>
            <option value="Другая техника Apple"></option>
          </optgroup>
          <optgroup label="Samsung">
            <option value="Galaxy Note 20"></option>
            <option value="Galaxy A52"></option>
            <option value="Galaxy A51"></option>
            <option value="Galaxy M32"></option>
            <option value="Galaxy A31"></option>
            <option value="Galaxy A41"></option>
            <option value="Galaxy A22"></option>
            <option value="Galaxy A02/A02S"></option>
            <option value="Galaxy S9"></option>
            <option value="Другая модель Samsung"></option>
          </optgroup>
          <optgroup label="Xiaomi">
            <option value="Redmi Note 9 Pro"></option>
            <option value="Redmi Note 10S/10T"></option>
            <option value="Redmi Note 9/9C/9T/9S"></option>
            <option value="Redmi Note 8/8T/8 Pro"></option>
            <option value="Другая модель Xiaomi"></option>
          </optgroup>
          <optgroup label="Honor/Huawei">
            <option value="Honor 30/30i"></option>
            <option value="Honor 20/20 Lite/20S/20E"></option>
            <option value="Honor 10/10i/10X//10 Lite/10X Lite"></option>
            <option value="Honor 9/9A/9C/9X/9X Lite"></option>
            <option value="Honor 8/8A/8S/8X/8X Lite"></option>
            <option value="Другая модель Honor/Huawei"></option>
          </optgroup>
        </select>

        <div class="question-form__client-id-container">
          <div class="question-form__wrapper-id-client">
            <label class="form-label" for="formVariantBreaking">Выберите неисправность</label>
            <select name="variant-breaking" id="formVariantBreaking" class="question-form__city-select">
              <option value="">Неисправность</option>
              <option value="Не включается">Не включается</option>
              <option value="Не заряжается">Не заряжается</option>
              <option value="Разбит дисплей">Разбит дисплей</option>
              <option value="Не заряжается до 100%">Не заряжается до 100%</option>
              <option value="Быстро разряжается">Быстро разряжается</option>
              <option value="Попадание влаги">Попадание влаги</option>
              <option value="Нет изображения">Нет изображения</option>
              <option value="Отклеился дисплей">Отклеился дисплей</option>
              <option value="Тихий динамик/микрофон">Тихий динамик/микрофон</option>
            </select>
          </div>
        </div>


        <div class="question-form__client-id-container">
          <div class="question-form__wrapper-id-client">
            <label class="form-label" for="formCitySelect">Выберите город</label>
            <select name="formCitySelect" id="formCitySelect" class="question-form__city-select">
              <option value="">Город</option>
              <option value="1">Ростов-на-Дону</option>
              <option value="2">Шахты</option>
              <option value="3">Красный Сулин</option>
            </select>
          </div>
        </div>
        <div class="question-form__client-id-container">
          <div class="question-form__wrapper-id-client">
            <label class="form-label" for="formClientNumber">Введите номер начиная с +7</label>
            <input type="tel" class="question-form__phone-input form-number--number" id="formClientNumber" name="formClientNumber" autocomplete="off" placeholder="+7 ___ ___ __ __">
          </div>
        </div>

        <button id="submitbtn" class="btn btn--blue question-form__btn-submit" type="submit">Позвоните мне</button>
        <div id="alert_for_form"></div>
      </form>

    </div>

    <div class="types-trigger"></div>

    <!-- metriks -->
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
      (function(m, e, t, r, i, k, a) {
        m[i] = m[i] || function() {
          (m[i].a = m[i].a || []).push(arguments)
        };
        m[i].l = 1 * new Date();
        k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
      })
      (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

      ym(57711175, "init", {
        clickmap: true,
        trackLinks: true,
        accurateTrackBounce: true,
        webvisor: true
      });
    </script>
    <noscript>
      <div><img src="https://mc.yandex.ru/watch/57711175" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->
  </div>

</body>

</html>