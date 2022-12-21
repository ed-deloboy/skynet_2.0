<?php

// шапка
include 'views/header/header.php';

?>

<!-- often request -->
<section class="often-request">
  <div class="container">
    <div class="often-request__slider" style="min-height:5vh; margin-bottom:15px;">
      <ul class="often-request__list swiper-wrapper">
        <li class="often-request__item swiper-slide">
          <a href="../phone" class="often-request__link">Ремонт телефонов</a>
        </li>
        <li class="often-request__item swiper-slide">
          <a href="https://shop.skynet-service.com/apple-store" class="often-request__link">Купить iPhone</a>
        </li>
        <li class="often-request__item swiper-slide">
          <a href="https://shop.skynet-service.com/apple-store" class="often-request__link">Купить Apple Watch</a>
        </li>
        <li class="often-request__item swiper-slide">
          <a href="/gidrogel" class="often-request__link">Гидрогелевая плёнка</a>
        </li>
        <li class="often-request__item swiper-slide">
          <a href="https://shop.skynet-service.com/rashodnye-materialy" class="often-request__link">Термопаста и расходники</a>
        </li>
        <li class="often-request__item swiper-slide">
          <a href="https://shop.skynet-service.com/periferiya-i-dr" class="often-request__link">Купить беспроводную мышь</a>
        </li>
        <li class="often-request__item swiper-slide">
          <a href="https://shop.skynet-service.com/periferiya-i-dr" class="often-request__link">Купить клавиатуру</a>
        </li>
        <li class="often-request__item swiper-slide">
          <a href="https://shop.skynet-service.com/periferiya-i-dr" class="often-request__link">Коврики для мышки</a>
        </li>
        <li class="often-request__item swiper-slide">
          <a href="https://shop.skynet-service.com/periferiya-i-dr" class="often-request__link">Периферия</a>
        </li>
        <li class="often-request__item swiper-slide">
          <a href="https://shop.skynet-service.com/rashodnye-materialy" class="often-request__link">Купить флюс для пайки</a>
        </li>
        <li class="often-request__item swiper-slide">
          <a href="/phone" class="often-request__link">Замена АКБ в смартфоне</a>
        </li>
        <li class="often-request__item swiper-slide">
          <a href="/laptop" class="often-request__link">Чистка ноутбука</a>
        </li>
        <li class="often-request__item swiper-slide">
          <a href="https://shop.skynet-service.com/zapchasti-dlya-apple/displei-iphone" class="often-request__link">Дисплеи для iPhone</a>
        </li>
        <li class="often-request__item swiper-slide">
          <a href="/phone" class="often-request__link">Замена корпуса iPhone</a>
        </li>
        <li class="often-request__item swiper-slide">
          <a href="/phone" class="often-request__link">Переклейка разбитого стекла</a>
        </li>
        <li class="often-request__item swiper-slide">
          <a href="/phone" class="often-request__link">Замена дисплея iPhone</a>
        </li>
        <li class="often-request__item swiper-slide">
          <a href="/phone" class="often-request__link">Замена дисплея Samsung</a>
        </li>
      </ul>
    </div>
  </div>
  <div class="swiper-button-next often-arrow-next"></div>
  <div class="swiper-button-prev often-arrow-prev"></div>
</section>

<!-- services -->
<section class="services">
  <div class="container">
    <h2 class="hidden">Выберите вид ремонта</h2>
    <ul class="services__list">
      <li class="services__item">
        <img class="services__item-img" src="../img/remont-phone.png" alt="Изображение телефона">
        <a href="/phone">Ремонт телефонов</a>
      </li>
      <li class="services__item">
        <img class="services__item-img" src="../img/remont-nout.png" alt="Изображение ноутбука">
        <a href="/laptop">Ремонт ноутбуков</a>
      </li>
      <li class="services__item">
        <img class="services__item-img" src="../img/remont-laptop.png" alt="Изображение планшета">
        <a href="/tablet">Ремонт планшетов</a>
      </li>
      <li class="services__item">
        <img class="services__item-img" src="../img/remont-printer.png" alt="Изображение принтера">
        <a href="/printer">Ремонт принтеров</a>
      </li>
      <li class="services__item">
        <img class="services__item-img" src="../img/remont-tv.png" alt="Изображение телевизора">
        <a href="/tv">Ремонт телевизоров</a>
      </li>
      <li class="services__item">
        <img class="services__item-img" src="../img/remont-photo.png" alt="Изображение фотоаппарата">
        <a href="/photo">Ремонт фотоаппаратов</a>
      </li>
    </ul>
  </div>
</section>

<!-- laser-page -->
<section class="laser-page">
  <div class="container">

  </div>
</section>
<!-- acc-map -->
<section class="acc-map" id="acc-map">
  <div class="container">
    <h2 class="title-h2">Сервисные центры на карте</h2>
    <span class="lineOne"></span>

    <div class="acc-map__wrapper">
      <div class="acc-map__acc-container">
        <ul id="accFrance" class="acc__wrapper">
          <li class="acc-item">
            <button class="acc-item__button">
              <span class="acc-item__title">Скайнет Ростов-на-Дону</span>
            </button>
            <p class="acc-item__text">
              Буденновский проспект, 22, цокольный этаж
              <span class="mt20 acc-item__text-desc"> Режим работы: </span>
              <span class="acc-item__text-desc"> ПН-СБ с 10:00 до 20:00 </span>
              <span class="acc-item__text-desc"> ВС с 10:00 до 18:00 </span>
              <span class="mt20 acc-item__text-desc"> Номер телефона: </span>
              <span class="acc-item__text-desc">
                <a class="blue-link" href="tel:88007776897">8 (800) 777-68-97</a>
                (доб. 103)
              </span>
            </p>
          </li>
          <li class="acc-item">
            <button class="acc-item__button">
              <span class="acc-item__title">Скайнет Красный Сулин</span>
            </button>
            <p class="acc-item__text">
              Ул. Фурманова, 2А, вход в центральный рынок
              <span class="mt20 acc-item__text-desc"> Режим работы: </span>
              <span class="acc-item__text-desc"> ПН-ВС с 9:00 до 18:00 </span>
              <span class="acc-item__text-desc">
                Без перерывов и выходных
              </span>
              <span class="mt20 acc-item__text-desc"> Номер телефона: </span>
              <span class="acc-item__text-desc">
                <a class="blue-link" href="tel:88007776897">8 (800) 777-68-97</a>
                (доб. 102)
              </span>
            </p>
          </li>
          <li class="acc-item">
            <button class="acc-item__button">
              <span class="acc-item__title">Скайнет Шахты</span>
            </button>
            <p class="acc-item__text">
              ул. Шевченко 123 (123В), павильон 1, (Напротив входа в "Дом быта")
              <span class="mt20 acc-item__text-desc"> Режим работы: </span>
              <span class="acc-item__text-desc"> ПН-ВС с 9:00 до 18:00 </span>
              <span class="acc-item__text-desc">
                Без перерывов и выходных
              </span>
              <span class="mt20 acc-item__text-desc"> Номер телефона: </span>
              <span class="acc-item__text-desc">
                <a class="blue-link" href="tel:88007776897">8 (800) 777-68-97</a>
                (доб. 101)
              </span>
            </p>
          </li>
        </ul>
      </div>

      <div class="acc-map__map-container">
        <div class="map-width" id="map"></div>
      </div>
    </div>
  </div>
</section>


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
<div id="vk_community_messages"></div>
<script type="text/javascript">
  VK.Widgets.CommunityMessages("vk_community_messages", 163352573, {
    tooltipButtonText: "Здравствуйте, чем мы можем Вам помочь?",
  });
</script>

<!-- pop ups -->
<div class="types-trigger__container">
  <button class="types-trigger__close calcapp-popup__close"></button>

  <h3 class="types-trigger__title">
    Заявка на звонок
  </h3>
  <p>Мы позвоним и скажем стимость ремонта Вашего оборудования</p>
  <form class="question-form__form" action="sender.php" method="POST">
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
          <option value="Ростов-на-Дону">Ростов-на-Дону</option>
          <option value="Красный Сулин">Красный Сулин</option>
          <option value="Шахты">Шахты</option>
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