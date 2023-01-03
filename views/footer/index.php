<!-- footer -->
<footer class="footer">
  <h2 class="hidden">Подвал сайта</h2>
  <div class="container">
    <div class="footer__container">
      <a class="footer__logo-link" href="#">
        <img class="footer_img-logo" src="/img/lolgo-white.svg" alt="Логотип
          компании Скайнет" />
      </a>
      <div class="footer__nav-wrapper">
        <h3 class="footer__nav-title">Меню</h3>
        <ul class="footer__nav-list">
          <li class="footer__nav-item">
            <a href="/" class="footer__nav-link">Главная</a>
          </li>
          <li class="footer__nav-item">
            <a href="https://shop.skynet-service.com/" class="footer__nav-link">Интернет-магазин</a>
          </li>
          <li class="footer__nav-item">
            <a href="/contacts" class="footer__nav-link">Контакты и адреса</a>
          </li>
          <li class="footer__nav-item">
            <a href="/politics" class="footer__nav-link">Политика конфиденциальности</a>
          </li>
          <li class="footer__nav-item">
            <a href="/orders" class="footer__nav-link">Статус ремонта</a>
          </li>
        </ul>
      </div>
      <div class="footer__nav-wrapper">
        <h3 class="footer__nav-title">Услуги</h3>
        <ul class="footer__nav-list">
          <li class="footer__nav-item">
            <a href="/phone" class="footer__nav-link">Ремонт телефонов</a>
          </li>
          <li class="footer__nav-item">
            <a href="/laptop" class="footer__nav-link">Ремонт ноутбуков</a>
          </li>
          <li class="footer__nav-item">
            <a href="/tablet" class="footer__nav-link">Ремонт планшетов</a>
          </li>
          <li class="footer__nav-item">
            <a href="/photo" class="footer__nav-link">Ремонт фотоаппаратов</a>
          </li>
          <!-- <li class="footer__nav-item"><a href="#" class="footer__nav-link">Работы лазером</a></li> -->
        </ul>
      </div>
      <div class="footer__connect-wrapper">
        <div class="footer__number-wrapper">
          <div class="me-2">
            <a class="header__top-mail-text text-white" href="mailto:divent@skynet-service.com">client@skynet-service.com</a>
          </div>
          <a href="tel:88007776897" class="footer__number-link">8 (800) 777-68-97</a>
          <button class="btn btn--white popup-left-trigger">
            Заказать звонок
          </button>
        </div>
        <div class="footer__social-wrapper">
          <ul class="footer__social-list">
            <li class="footer__social-item">
              <a href="https://www.instagram.com/remont_skynet/" class="footer__social-link social-icon icon-insta" target="_blanc"></a>
            </li>
            <li class="footer__social-item">
              <a href="https://vk.com/rem_service_skynet" class="footer__social-link social-icon icon-vk" target="_blanc"></a>
            </li>
            <li class="footer__social-item">
              <a href="https://t.me/skynet_service_rostov" class="footer__social-link social-icon icon-tg" target="_blanc"></a>
            </li>
            <li class="footer__social-item">
              <a href="https://api.whatsapp.com/send/?phone=79381557757&text&app_absent=0" class="footer__social-link social-icon icon-whats" target="_blanc"></a>
            </li>
          </ul>
        </div>
        <div class="footer__rating-wrapper rating-wrapper">
          <h3 class="footer__nav-title footer-title-ya-rating">
            Рейтинг организации в яндексе
          </h3>
          <div class="rating-yandex">
            <iframe src="https://yandex.ru/sprav/widget/rating-badge/86552716608" width="150" height="50" frameborder="0"></iframe>
          </div>
        </div>
      </div>
    </div>

    <div class="footer__down-container">
      <div class="footer__down-content-wrapper">
        <p>
          Копирование материалов сайта запрещено | &copy; 2010
          <script>
            2010 < new Date().getFullYear() &&
              document.write("-" + new Date().getFullYear());
          </script>
        </p>
        <span>Создание сайта
          <a class="footer__down-ui-code-link" href="https://vk.com/deloboy_live" target="_blanc">UI Code</a></span>
      </div>
    </div>
  </div>
</footer>



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


<!-- Modal праздники -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">График работы</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <h5>Ростов-на-Дону</h5>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">&rsaquo; 31 декабря - с 10:00 до 15:00</li>
            <li class="list-group-item">&rsaquo; 1,2 января - Выходные дни</li>
            <li class="list-group-item">&rsaquo; 3 января - с 10:00 до 18:00</li>
            <li class="list-group-item">&rsaquo; 8 января - В обычном режиме</li>
          </ul>
        </div>
        <div class="mb-3">
          <h5>Шахты</h5>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">&rsaquo; 31 декабря - с 9:00 до 14:00</li>
            <li class="list-group-item">&rsaquo; 1,2,7 января - Выходные дни</li>
            <li class="list-group-item">&rsaquo; 3,4,5,6,8 января - с 10:00 до 15:00</li>
            <li class="list-group-item">&rsaquo; С 9 января - В обычном режиме</li>
          </ul>
        </div>
        <div class="mb-3">
          <h5>Красный сулин</h5>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">&rsaquo; 31 декабря - с 9:00 до 14:00</li>
            <li class="list-group-item">&rsaquo; 1,2,7 января - Выходные дни</li>
            <li class="list-group-item">&rsaquo; 3,4,5,6,8 января - с 10:00 до 15:00</li>
            <li class="list-group-item">&rsaquo; С 9 января - В обычном режиме</li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</div>

<!-- auth Modal -->
<div class="modal fade" id="authModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="authModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="authModalLabel">Авторизуйтесь</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="authForm">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label p-0 fs-6">Номер телефона</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label p-0 fs-6">Пароль</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div>
          <button form="authForm" type="submit" class="btn btn-success" data-bs-dismiss="modal">Войти</button>
        </form>
        <p class="py-3">
          Нет аккаунта? <a class="text-primary" href="/registration">Зарегистрируйтесь</a>
        </p>
      </div>
    </div>
  </div>
</div>

<div class="types-trigger"></div>
<!-- bootstrap v5.1.3 -->
<script src="js/bootstrap/bootstrap.min.js"></script>
<script src="js/bootstrap/bootstrap.bundle.min.js"></script>
<!-- JQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

<script src="https://api-maps.yandex.ru/2.1/?apikey=ваш API-ключ&lang=ru_RU" type="text/javascript"></script>
<script src="js/vendor.js"></script>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="js/main.js"></script>

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