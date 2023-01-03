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

<!-- orders-info -->
<section class="orders">
  <div class="container">
    <h1 hidden>Проверить статус ремонта Скайнет</h1>
    <h2 class="title-h2">Проверить статус ремонта</h1>
      <!-- <span class="lineOne"></span> -->
      <div class="orders__block-wrapper">
        <div class="orders__image-block">
          <img src="../img/orders.jpg" alt="Проверить статус ремонта" class="orders__image">
        </div>
        <div class="orders__form-block d-flex justify-between">
          <div id="livesklad-widget"></div>
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

<!-- acc-map -->
<?php 
include 'view_modules/acc_map/index.php';
?>