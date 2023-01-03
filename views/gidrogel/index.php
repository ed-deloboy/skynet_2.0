<?php

// шапка
include 'views/header/header.php';

?>
<!-- often request -->
<section class="often-request">
  <div class="container">
    <div class="often-request__slider" style="min-height:5vh; margin-bottom:15px;">
      <ul style="height: 0 !important;" class="often-request__list swiper-wrapper">
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

<!-- gidrogel-info -->
<section class="gidrogel">
  <div class="container">
    <div class="section-banner">
      <div class="section-banner__info-wrapper">
        <h1 class="section-banner__h1">Бронирование смартфона на 360&deg</h1>
        <p class="section-banner__desc">Запишитесь на бронирование смартфона. Новая технология изготовления плёнок позволяет содержать телефон в эстетичной аккуратности и при этом защищать его на 100%</p>
      </div>

      <img class="section-banner__img" src="/img/test-hero-slide.png" alt="На телефон наклеена гидрогелевая плёнка">
    </div>
    <div class="gidrogel__benefit-title">
      <h2 class="title-h2">Что лучше стекло или гидрогелевая плёнка?</h2>
      <span class="lineOne"></span>
      <p class="gidrogel__desc">Чтобы защитить экран от царапин и потертостей, можно наклеить стекло или заказать обтяжку смартфона гидрогелевой пленкой. Отзывы помогут разобраться, что лучше выбрать. Как отмечают многие пользователи, с поиском стекла часто возникают проблемы:
        то невозможно найти подходящее под конкретную модель телефона, то стекло оказывается уже на пару миллиметров, чем дисплей. В случае с пленкой эти проблемы исключены. Она изготавливается под любой девайс: iPhone, Samsung, Xiaomi, Honor,
        также хорошо защищает от повреждений и обладает другими преимуществами, которые стоит рассмотреть подробнее.</p>
    </div>
    <div class="gidrogel__benefit-info">
      <h3 class="gidrogel__benefit-info-title">
        Плюсы гидрогелевой пленки
      </h3>
      <div class="gidrogel__benefit-info-wrapper">
        <img class="lazy gidrogel__benefit-info-img" src="/img/gidrogel-benefit.jpg" alt="Описание преимуществ гидрогелевой плёнки">
        <ul class="gidrogel__benefit-info-list">
          <span class="gidrogel__benefit-info-span">Полимерный материал, из которого изготовлена защитная глянцевая и матовая гидрогелевая пленка, хорошо поглощает и удерживает влагу. Благодаря антибликовым свойствам, даже в солнечный день изображение на дисплее остается четким и ярким. А кроме того, она:
          </span>
          <ol class="gidrogel__benefit-info-item">
            Защищает гаджет со всех сторон и противостоит механическим повреждениям. Даже если Вы случайно поцарапаете поверхность, буквально в течение суток мелкие потертости на поверхности пленки стягиваются сами собой, а от очень глубоких может остаться незначительный
            след.
          </ol>
          <ol class="gidrogel__benefit-info-item">
            Тонкая - всего 0,16 мм (в 2 раза тоньше, чем защитное стекло, толщина которого равна 0,3 мм).
          </ol>
          <ol class="gidrogel__benefit-info-item">
            Долговечная - 1 покрытия гидрогеля хватает на длительный срок (в течение этого периода стекло пришлось бы менять уже 3-5 раз).
          </ol>
          <ol class="gidrogel__benefit-info-item">
            Идеально повторяет форму гаджета и дополняется точными вырезами под камеру, кнопки.
          </ol>
          <ol class="gidrogel__benefit-info-item">
            Не крошится, не образует пузырей и не отстает вместе с чехлом-накладкой.
          </ol>

          <ol class="gidrogel__benefit-info-item">
            Проста в уходе - достаточно периодически протирать поверхность обычными салфетками.
          </ol>
          <ol class="gidrogel__benefit-info-item">
            Недорогая - цена на бронирование телефона пленкой практически такая же, как стоимость поклейки защитного стекла, но если сравнить срок эксплуатации, то получается гораздо дешевле.
          </ol>
          <span>Выбирайте эффективный способ защиты смартфона от повреждений - эластичная гидрогелевая пленка подходит для любого смартфона и максимально эффективна!</span>
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
