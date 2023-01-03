<?php


// шапка
include 'views/header/header.php';

?>

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

<!-- hero -->
<section class="hero">
  <h1 class="hidden">Сеть мастерских по ремонту телефонов, планшетов и другой
    техники Apple.</h1>

  <div class="first-window">
    <div class="container">
      <div class="first-window__data">
        <div class="first-window__content">
          <h2 class="first-window__title">Мы ремонтируем смартфоны, ноутбуки, планшеты быстро, качественно и не дорого!</h2>
          <p>Оперативно свяжемся с вами, уточним симптомы поломки и согласуем время и ориентировочную стоимость. Если запчасти будут в наличии, ремонт будет произведён в тот же день.</p>
        </div>
        <form action="sender_bot/index.php" method="POST">
          <input type="hidden" name="requestType" value="repair">
          <h3>Закажите бесплатную консультацию</h3>
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
              <label class="form-label" for="formCitySelect">Выберите Ваш город из списка</label>
              <select name="formCitySelect" id="formCitySelect" class="question-form__city-select">
                <option value="">Ваш город</option>
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

          <button id="submitbtn" class="btn question-form__btn-submit cost-now__btn" type="submit">Отправить мастеру</button>
          <div id="alert_for_form"></div>
        </form>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="heroSlider hero__slider-container">
      <ul class="swiper-wrapper">
        <li class="swiper-slide hero__slide">
          <div class="hero__slide-container hero__slide-three">
            <div class="hero__slide-content">
              <h2 class="hero__title-slider">
                Наш интернет-магазин с большими скидками!
              </h2>
              <p class="hero__slide-desc">
                Регистрируйтесь, становитесь нашим постоянным клиентом и
                получайте большие скидки!
              </p>
              <a href="https://shop.skynet-service.com/" class="btn">Перейти</a>
            </div>
            <img class="lazy hero__slide-width-img" src="https://shop.skynet-service.com/image/cache/webp/placeholder-180x180.webp" alt="Интернет-магазин
              скайнет">
          </div>
        </li>

        <li class="swiper-slide hero__slide">
          <div class="hero__slide-container hero__slide-two">
            <div class="hero__slide-content">
              <h2 class="hero__title-slider">
                Бронирование смартфона на 360&deg;
              </h2>
              <p class="hero__slide-desc">
                Защитите свой смартфон гидрогелевой пленкой со всех сторон за 15
                минут в наших сервисных центрах!
              </p>
              <a href="/gidrogel" class="btn">Перейти</a>
            </div>
            <img class="lazy hero__slide-width-img" src="/img/test-hero-slide.png" alt="Гидрогелевая пленка на
              смартфон">
          </div>
        </li>

      </ul>
      <div class="swiper-pagination hero__slider-pagination"></div>
      <div class="swiper-button-next hero__arrow-next"></div>
      <div class="swiper-button-prev hero__arrow-prev"></div>
    </div>

  </div>
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

<!-- trust -->

<section class="trust">
  <div class="container">
    <h2 class="title-h2">Почему нам доверяют уже более 10 лет?</h2>
    <span class="lineOne"></span>
    <ul class="trust__list">
      <li class="trust__item trust__qval-bg">
        <h3>Качество услуг</h3>
        <p>Работаем внимательно и аккуратно</p>
      </li>
      <li class="trust__item trust__term-bg">
        <h3>Соблюдение сроков</h3>
        <p>Мы соблюдаем сроки но важнее качество выполненной работы</p>
      </li>
      <li class="trust__item trust__proffesional-bg">
        <h3>Профессионализм</h3>
        <p>Сотрудники компании – фанаты своего дела</p>
      </li>
      <li class="trust__item trust__possibilities-bg">
        <h3>Широкие возможности</h3>
        <p>Большое разнообразие видов ремонта</p>
      </li>
    </ul>
  </div>
</section>

<!-- types -->
<section class="types">
  <div class="container">
    <h2 class="title-h2">Мы осуществляем все виды ремонта</h2>
    <span class="lineOne"></span>
    <ul class="types__card-list">
      <li class="types__item">
        <div class="types__item-content-container">
          <img src="img/modylniy-remont.jpg" alt="Модульный ремонт">
          <div class="types__text-wrapper">
            <h3 class="types__item-title">
              Модульный ремонт
            </h3>
            <p class="types__item-desc">
              Замена шлейфов, экранов, матриц, кнопок, разъемов, динамиков, микрофонов, датчиков, корпусов и других элементов на iPhone, iPod, iPad, MacBook, iMac, Mac mini
            </p>

          </div>
        </div>
        <div class="types__item-content-price">
          <span class="types__item-price">от 390 руб.</span>

        </div>
      </li>
      <li class="types__item">
        <div class="types__item-content-container">
          <img src="img/komponent-remont.jpg" alt="Модульный ремонт">
          <div class="types__text-wrapper">
            <h3 class="types__item-title">
              Компонентный ремонт
            </h3>
            <p class="types__item-desc">
              Ремонт системной платы устройства. Замена и восстановление контроллеров питания, дорожек, обвязки микросхем и другого сложного ремонта на плате.
            </p>
          </div>
        </div>
        <div class="types__item-content-price">
          <span class="types__item-price">от 990 руб.</span>

        </div>
      </li>
      <li class="types__item">
        <div class="types__item-content-container">
          <img src="img/prgramm-remont.jpg" alt="Модульный ремонт">
          <div class="types__text-wrapper">
            <h3 class="types__item-title">
              Программный ремонт
            </h3>
            <p class="types__item-desc">
              Перепрошивка устройств, восстановление ПО, работа с данными в системе iOS и MacOS, Android, Windows.
            </p>
          </div>
        </div>
        <div class="types__item-content-price">
          <span class="types__item-price">от 490 руб.</span>

        </div>
      </li>
    </ul>
  </div>



</section>

<!-- cost-now -->
<section class="cost-now">
  <div class="container">
    <div class="cost-now__container">
      <div class="cost-now__data">
        <h2 class="title-h2 cost-now__title">Узнайте стоимость ремонта прямо сейчас</h2>
        <form class="cost-now__form" action="sender_bot/index.php" method="POST">
          <input type="hidden" name="requestType" value="repair">
          <label class="form-label cost-now__lable-form" for="selectModel">Выберите модель оборудования</label>
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
              <label class="form-label cost-now__lable-form" for="formVariantBreaking">Выберите неисправность</label>
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
              <label class="form-label cost-now__lable-form" for="formClientNumber">Введите номер начиная с +7</label>
              <input type="tel" class="question-form__phone-input form-number--number" id="formClientNumber" name="formClientNumber" autocomplete="off" placeholder="+7 ___ ___ __ __">
            </div>
          </div>

          <button id="submitbtn" class="btn question-form__btn-submit cost-now__btn" type="submit">Отправить мастеру</button>
          <div id="alert_for_form"></div>
        </form>
      </div>
      <div class="cost-now__imag-wrap">
        <img src="img/cost-now-img.svg" alt="">
      </div>
    </div>
  </div>
</section>

<!-- work -->
<section class="work">
  <div class="container">
    <h2 class="title-h2">Какие услуги мы предоставляем</h2>
    <span class="lineOne"></span>
    <ul class="work__list">
      <li class="work__item work__zamena-stekla">
        <div class="work__text-wrapper">
          <h3 class="work__title">
            Замена стекла дисплея на смартфоне
          </h3>
          <p class="work__desc">
            Заменим только защитное стекло. сохранив оригинальную матрицу.
          </p>
        </div>
        <div class="work__price-wrapper">
          <span class="work__price">
            от 990 руб.
          </span>
        </div>
      </li>
      <li class="work__item work__zamena-akb">
        <div class="work__text-wrapper">
          <h3 class="work__title">
            Замена несъёмного аккумулятора
          </h3>
          <p class="work__desc">
            Меняем аккумуляторы на смартфонах и планшетах всех моделей.
          </p>
        </div>
        <div class="work__price-wrapper">
          <span class="work__price">
            от 290 руб.
          </span>
        </div>
      </li>
      <li class="work__item work__zamena-modylia">
        <div class="work__text-wrapper">
          <h3 class="work__title">
            Замена модуля дисплея
          </h3>
          <p class="work__desc">
            Производим замену модулей дисплеев на смартфонах и планшетах всех моделей.
          </p>
        </div>
        <div class="work__price-wrapper">
          <span class="work__price">
            от 590 руб.
          </span>
        </div>
      </li>
      <li class="work__item work__popadanie-vody">
        <div class="work__text-wrapper">
          <h3 class="work__title">
            Устранение последствий попадания влаги
          </h3>
          <p class="work__desc">
            Чистка и восстановление повреждённых компонентов на плате.
          </p>
        </div>
        <div class="work__price-wrapper">
          <span class="work__price">
            от 490 руб.
          </span>
        </div>
      </li>
      <li class="work__item work__termo-nout">
        <div class="work__text-wrapper">
          <h3 class="work__title">
            Чистка системы охлаждения ноутбука и ПК
          </h3>
          <p class="work__desc">
            Разберём, почистим систему охлаждения от пыли, заменим термопасту на новую.
          </p>
        </div>
        <div class="work__price-wrapper">
          <span class="work__price">
            от 1190 руб.
          </span>
        </div>
      </li>
      <li class="work__item work__remont-kartridj">
        <div class="work__text-wrapper">
          <h3 class="work__title">
            Заправка картриджей
          </h3>
          <p class="work__desc">
            Заправляем и ремонтируем картриджи всех моделей.
          </p>
        </div>
        <div class="work__price-wrapper">
          <span class="work__price">
            от 249 руб.
          </span>
        </div>
      </li>

    </ul>
  </div>
</section>

<!-- our-prices -->
<section class="our-prices">
  <div class="container">
    <h2 class="our-prices__title title-h2">
      Наши цены на ремонт
    </h2>
    <span class="lineOne"></span>
    <div id="tabs">
      <ul>
        <li><a href="#tabs-1">Смартфонов</a></li>
        <li><a href="#tabs-2">Ноутбуков</a></li>
        <li><a href="#tabs-3">Фотоаппаратов</a></li>
      </ul>
      <div id="tabs-1">
        <ul class="our-prices__list">
          <?php
          $phoneservices = "repair-phone-services.csv";

          $num = 0;
          if (($handle = fopen($phoneservices, "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
              $num++;

              // echo '<hr>';
              // print_r($data);
              $title = $data[0];
              $time = $data[1];
              $price = $data[2];

              echo "<li class=\"our-prices__item\">
                              <span class=\"our-prices__item-inform our-prices__item-inform--title\">
                              $title
                              </span>
                              <span class=\"our-prices__item-inform our-prices__item-inform--time\">
                              $time
                              </span>
                              <span class=\"our-prices__item-inform our-prices__item-inform--price\">
                              $price
                              </span>
                          </li>";
            }
            fclose($handle);
          }
          ?>
        </ul>
      </div>
      <div id="tabs-2">
        <ul class="our-prices__list">
          <?php
          $pcservices = "repair-pc-services.csv";

          $num = 0;
          if (($handle = fopen($pcservices, "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
              $num++;

              // echo '<hr>';
              // print_r($data);
              $title = $data[0];
              $time = $data[1];
              $price = $data[2];

              echo "<li class=\"our-prices__item\">
                              <span class=\"our-prices__item-inform our-prices__item-inform--title\">
                              $title
                              </span>
                              <span class=\"our-prices__item-inform our-prices__item-inform--time\">
                              $time
                              </span>
                              <span class=\"our-prices__item-inform our-prices__item-inform--price\">
                              $price
                              </span>
                          </li>";
            }
            fclose($handle);
          }
          ?>
        </ul>
      </div>
      <div id="tabs-3">
        <ul class="our-prices__list">
          <?php
          $photoservices = "repair-photo-services.csv";

          $num = 0;
          if (($handle = fopen($photoservices, "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
              $num++;

              // echo '<hr>';
              // print_r($data);
              $title = $data[0];
              $time = $data[1];
              $price = $data[2];

              echo "<li class=\"our-prices__item\">
                              <span class=\"our-prices__item-inform our-prices__item-inform--title\">
                              $title
                              </span>
                              <span class=\"our-prices__item-inform our-prices__item-inform--time\">
                              $time
                              </span>
                              <span class=\"our-prices__item-inform our-prices__item-inform--price\">
                              $price
                              </span>
                          </li>";
            }
            fclose($handle);
          }
          ?>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- off-for-iph -->
<section class="offer-calc">
  <div class="container">
    <div class="offer-calc__container">
      <div class="offer-calc__data-wrap">
        <h2 class="title-h2 offer-calc__title">
          Бронирование смартфона гидрогелевой пленкой на 365&deg;
        </h2>
        <p class="offer-calc__desc">
          Гидрогелевая пленка - это новый вид защиты стеклянных частей гаджета, которая служит дольше чем стекло и не
          подвергается мелким царапинам.
        </p>
        <div class="offer-calc__h3-wrap">
          <h3 class="title-h3 offer-calc__title-h3">
            Расчитайте стоимость гидрогелевой пленки и получите скидку до 15%
          </h3>
          <p class="offer-calc__h3-desc">
            Скидка на гидрогелевую пленку действительна в течении 24 часов с момента отправки заявки.
          </p>
        </div>
        <form action="../config/gidro_sender.php" method="POST" class="offer-calc__form">
          <!-- item -->
          <div class="offer-calc__select-container">
            <div class="offer-calc__select-wrapper">
              <label class="offer-calc__lable-form" for="typeTechnicaOfferCalc">Выберите тип гаджета из списка</label>
              <select name="typeTechnicaOfferCalc" id="typeTechnicaOfferCalc" class="offer-calc__select">
                <option value="none">Тип гаджета</option>
                <option value="Смартфон">Смартфон</option>
                <option value="Планшет">Планшет</option>
                <option value="Смарт-Часы">Смарт-Часы</option>
              </select>
            </div>
          </div>
          <!-- item -->
          <div class="offer-calc__select-container">
            <div class="offer-calc__select-wrapper">
              <label class="offer-calc__lable-form" for="typeSkinOfferCalc">Выберите тип пленки из списка</label>
              <select name="typeSkinOfferCalc" id="typeSkinOfferCalc" class="offer-calc__select">
                <option value="Прозрачная">Прозрачная</option>
                <option value="Матовая">Матовая</option>
                <option value="Anti-Blue">Anti-Blue (защита от синего)</option>
                <option value="Тонированная">Тонированная (Только для смартфонов и смарт-часов)</option>
              </select>
            </div>
          </div>
          <p class="offer-calc__rules">
            Стоимость расчитывается с&nbsp;учетом материала
            и&nbsp;установки на&nbsp;одну сторону гаджета.
          </p>

          <div class="offer-calc__price-wrap">
            <p>Цена без скидки: <span id="offerPriceCount">0</span> Р
              <input type="hidden" name="priceSlick" id="offerPriceCountInput">
            </p>
            <p name="priceSlickSell" class="offer-calc__price-sell">Цена co скидкой: <span id="offerPriceCountSell" class="offer-calc__price-count--sell">0</span> Р
              <input type="hidden" name="priceSlickSell" id="offerPriceCountSellInput">
            </p>
          </div>

          <div class="offer-calc__select-container">
            <div class="offer-calc__select-wrapper">
              <label class="offer-calc__lable-form" for="formClientNumber">Введите номер начиная с +7</label>
              <input type="tel" class="offer-calc__phone-input form-number--number" id="formClientNumber" name="formClientNumber" autocomplete="off" placeholder="+7 ___ ___ __ __">
            </div>
          </div>
          <button type="submit" class="btn offer-calc__btn">Заказать со скидкой</button>
          <div id="alert_for_form"></div>
        </form>
      </div>

    </div>
  </div>
</section>

<!-- social -->
<section class="social-block">
  <h2 class="hidden">Напишите нам в социальных сетях</h2>
  <div class="container">
    <div class="social-block__wrapper-content-container">
      <h3 class="social-block__title title-h2">
        У Вас много вопросов но нет времени ждать звонка?
      </h3>
      <!-- <span class="lineOne fixed-container-line"></span> -->
      <p class="social-block__description">
        Проконсультируем прямо сейчас в соцсетях!
      </p>
      <!-- social-icon -->
      <div class="social-block__wrapper">
        <ul class="social-block__social-list">
          <li class="social-block__social-item">
            <a href="https://www.instagram.com/remont_skynet/" class="social-block__social-link social-icon-in-section icon-insta" target="_blanc"></a>
          </li>
          <li class="social-block__social-item">
            <a href="https://t.me/skynet_service_rostov" class="social-block__social-link social-icon-in-section icon-tg" target="_blanc"></a>
          </li>
          <li class="social-block__social-item">
            <a href="https://vk.com/rem_service_skynet" class="social-block__social-link social-icon-in-section icon-vk" target="_blanc"></a>
          </li>
          <li class="social-block__social-item">
            <a href="https://api.whatsapp.com/send/?phone=79381557757&text&app_absent=0" class="social-block__social-link social-icon-in-section icon-whats" target="_blanc"></a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- reviews -->
<section class="review">
  <div class="container">
    <h2 class="title-h2">Отзывы наших клиентов</h2>
    <span class="lineOne"></span>
    <div class="swiper reviews-slider">
      <ul class="swiper-wrapper">

        <li class="swiper-slide review__slide">
          <div class="review__slide-container">
            <div class="review__slide-content">
              <p class="review__slide-desc">
                Очень приятный коллектив, хорошие цены, обслуживание на высшем уровне! Девушка Настя очень внимательная, помогла решить вопросы! Буду обращаться ещё
              </p>
              <span class="review__client-name">Кристина Сергеева</span>
            </div>
          </div>
        </li>

        <li class="swiper-slide review__slide">
          <div class="review__slide-container">
            <div class="review__slide-content">
              <p class="review__slide-desc">
                Качественно и быстро заменили дисплей и аккумулятор , очень доволен 🌞
              </p>
              <span class="review__client-name">Новак Д.</span>
            </div>
          </div>
        </li>

        <li class="swiper-slide review__slide">
          <div class="review__slide-container">
            <div class="review__slide-content">
              <p class="review__slide-desc">
                Благодарю мастеров сервиса Скайнет. Выявили причину перебоев в звуках динамика. Быстро и качественно отремонтировали! После ещё обращалась и буду ещё обращаться! Отдельную благодарность выражаю менеджеру Анастасии за компетентность и вежливость, доброжелательность.
              </p>
              <span class="review__client-name">Оксана</span>
            </div>
          </div>
        </li>
        <li class="swiper-slide review__slide">
          <div class="review__slide-container">
            <div class="review__slide-content">
              <p class="review__slide-desc">
                Хороший магазин, с большим ассортиментом и приемлимыми ценами. Очень добрый и приветливый персонал. Качетсвенно выполнили ремонт и честно. Спасибо ))))
              </p>
              <span class="review__client-name">Елизавета Т.</span>
            </div>
          </div>
        </li>
        <li class="swiper-slide review__slide">
          <div class="review__slide-container">
            <div class="review__slide-content">
              <p class="review__slide-desc">
                В двух сервисах отказались ремонтировать телефон... А здесь справились с задачей за один день, да ещё и за смешные деньги!)))) Всем рекомендую, все запчасти в наличии, что очень ускоряет сроки ремонта)
              </p>
              <span class="review__client-name">Владислав И.</span>
            </div>
          </div>
        </li>
        <li class="swiper-slide review__slide">
          <div class="review__slide-container">
            <div class="review__slide-content">
              <p class="review__slide-desc">
                Хороший магазин вежливый и квалифицированный персонал! Обязательно обращусь ещё раз! Всем советую!
              </p>
              <span class="review__client-name">Сергей СИРОТКИН</span>
            </div>
          </div>
        </li>
        <li class="swiper-slide review__slide">
          <div class="review__slide-container">
            <div class="review__slide-content">
              <p class="review__slide-desc">
                Очень качественно и недорого отремонтировали телефон . Большое спасибо 😊
              </p>
              <span class="review__client-name">Евгений</span>
            </div>
          </div>
        </li>
        <li class="swiper-slide review__slide">
          <div class="review__slide-container">
            <div class="review__slide-content">
              <p class="review__slide-desc">
                Замечательный сервис, делают качественно, быстро и за приятную цену
              </p>
              <span class="review__client-name">Роман Василенко</span>
            </div>
          </div>
        </li>

      </ul>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
    <div class="review__yandex-container">
      <a class="link-yandex" target="_blanc" href="https://yandex.ru/profile/86552716608">отзывы на
        Яндекс</a>
    </div>
  </div>
</section>

<!-- product -->
<section class="product">
  <div class="container">

    <!-- apple watch product -->
    <div class="swiper product-slider product-slider-aw">
      <h2 class="title-h2">Apple Watch в наличии</h2>
      <span class="lineOne"></span>
      <ul class="swiper-wrapper product-slider__wrap">
        <?php
        require 'config/aw-product.php';
        ?>
      </ul>
      <div class="swiper-pagination aw-pagination"></div>
      <div class="swiper-button-next btn-product-aw-next product-slider-btnstyle-next"></div>
      <div class="swiper-button-prev btn-product-aw-prev product-slider-btnstyle-prev"></div>
    </div>

    <!-- iphone product -->
    <div class="swiper product-slider product-slider-iph">
      <h2 class="title-h2">iPhone в наличии</h2>
      <span class="lineOne"></span>

      <ul class="swiper-wrapper product-slider__wrap">
        <?php
        require 'config/iphone-product.php';
        ?>
      </ul>
      <div class="swiper-pagination iph-pagination"></div>
      <div class="swiper-button-next btn-product-iph-next product-slider-btnstyle-next"></div>
      <div class="swiper-button-prev btn-product-iph-prev product-slider-btnstyle-prev"></div>
    </div>


  </div>
</section>
<!-- acc-map -->
<?php 
include 'view_modules/acc_map/index.php';
?>