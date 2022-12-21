// console.log('global');


$('#accFrance').accordion({
  active: 0,
  collapsible: true,
  header: ".acc-item__button",
  heightStyle: "content",
  icons: {
    "header": "acc-item__accord",
    "activeHeader": "acc-item__accord acc-item__accord-active"
  }
});


// let containerSwitchInfo
// jquery ajax left pop up form
var forms = $('form');
for (var i = 0; i < forms.length; i++) {
  alertForm(forms[i]);
}
// console.log(forms);
function alertForm(elem, index) {
  $(elem).submit(function (e) {
    e.preventDefault();
    var str = $(this).serialize();
    $.ajax({
      type: $(this).attr("method"),
      url: $(this).attr("action"),
      data: str,
      success: function success(response) {
        console.log(response);
        if (response == 1) {
          $(elem).children("#alert_for_form").html("<div class=\"alert-mass bg-danger\">\n          <p class=\"alert-mass--text\" id=\"textAletMass\">\n            \u041F\u0440\u043E\u0432\u0435\u0440\u044C\u0442\u0435 \u043F\u043E\u043B\u0435 \u0432\u0432\u043E\u0434\u0430 \u043D\u043E\u043C\u0435\u0440\u0430, \u0432\u043E\u0437\u043C\u043E\u0436\u043D\u043E \u0432\u044B \u043F\u0440\u043E\u043F\u0443\u0441\u0442\u0438\u043B\u0438 \u043E\u0434\u043D\u0443 \u0438\u043B\u0438 \u043D\u0435\u0441\u043A\u043E\u043B\u044C\u043A\u043E \u0446\u0438\u0444\u0440\n          </p>\n        </div>");
        } else if (response == 2) {
          $(elem).children("#alert_for_form").html(" <div class=\"alert-mass bg-danger\">\n          <p class=\"alert-mass--text\" id=\"textAletMass\">\n            \u0417\u0430\u044F\u0432\u043A\u0430 \u043D\u0435 \u043E\u0442\u043F\u0440\u0430\u0432\u043B\u0435\u043D\u0430, \u043F\u043E\u043F\u0440\u043E\u0431\u0443\u0439\u0442\u0435 \u043F\u043E\u0437\u0436\u0435\n          </p>\n        </div>");
        } else if (response == 3) {
          $(elem).children("#alert_for_form").html(" <div class=\"alert-mass bg-success\">\n          <p class=\"alert-mass--text\" id=\"textAletMass\">\n            \u0412\u044B\u0448\u0430 \u0437\u0430\u044F\u0432\u043A\u0430 \u043E\u0442\u043F\u0440\u0430\u0432\u043B\u0435\u043D\u0430, \u043C\u044B \u0412\u0430\u043C \u0441\u043A\u043E\u0440\u043E \u043F\u0435\u0440\u0435\u0437\u0432\u043E\u043D\u0438\u043C!\n          </p>\n        </div>");
          $(elem).children("button").attr("disabled", true);
          $(elem).children("button").addClass("disabled-btn");
        }
      }
    });
  });
}


var typesInfoBlock = document.querySelector('.types-trigger'),
  typesBntTrigger = document.querySelectorAll('.popup-left-trigger'),
  typesBntTriggerClose = document.querySelector('.types-trigger__close'),
  typesformContainer = document.querySelector('.types-trigger__container'),
  bodyTag = document.querySelector('body');
typesBntTrigger.forEach(function (elem) {
  elem.addEventListener('click', function () {
    typesInfoBlock.classList.toggle('types-trigger-active');
    typesformContainer.classList.toggle('types-trigger__container-active');
    bodyTag.style.overflow = "hidden";
  });
});
typesBntTriggerClose.addEventListener('click', function () {
  typesInfoBlock.classList.remove('types-trigger-active');
  typesformContainer.classList.remove('types-trigger__container-active');
  bodyTag.style.overflow = "";
});
typesInfoBlock.addEventListener('click', function () {
  typesInfoBlock.classList.remove('types-trigger-active');
  typesformContainer.classList.remove('types-trigger__container-active');
  bodyTag.style.overflow = "";
});


var iphProsucts = document.querySelectorAll('.iph--filter');
var count = 0;
var ansverArr = [];
var iphFilterBtn = document.querySelectorAll('.filter__item');
iphFilterBtn.forEach(function (el) {
  var val = el.innerText;
  el.onclick = function (e) {
    var namePhone = e.srcElement.firstChild.nodeValue;
    filterProduct(iphProsucts, namePhone);
  };
});
function filterProduct(arr, value) {
  arr.forEach(function (element) {
    element.style.display = 'none';
    count++;
    element.dataset.iphid = count;
    var ansver = element.children;
    for (var i = 0; i < ansver.length; i++) {
      var item = ansver[4].innerText;
      ansverArr.push(item);
      var filterItems = function filterItems(newarr, query) {
        return newarr.filter(function (el) {
          return el.toLowerCase().indexOf(query.toLowerCase()) !== -1;
        });
      };
      var superArray = filterItems(ansverArr, value);
      for (var _i = 0; _i < superArray.length; _i++) {
        switch (item) {
          case superArray[_i]:
            element.style.display = 'flex';
            mySwiper.update();
            break;
        }
      }
    }
  });
}


var selectorPhone = document.querySelectorAll("input[type='tel'");
selectorPhone.forEach(function (e) {
  e.value = "+7";
});


var modelSelect = function modelSelect() {
  var elementsModel = document.querySelectorAll('#selectModel');
  elementsModel.forEach(function (elModel) {
    var choices = new Choices(elModel, {
      shouldSort: false,
      itemSelectText: 'Выбрать',
      noResultsText: 'Не найдено',
      searchPlaceholderValue: 'Искать по моделям'
    });
  });
};
modelSelect();
var formVariantBreaking = function formVariantBreaking() {
  var elementsVariant = document.querySelectorAll('#formVariantBreaking');
  elementsVariant.forEach(function (elVariant) {
    var choices = new Choices(elVariant, {
      shouldSort: false,
      itemSelectText: 'Выбрать',
      // addItems: true,
      removeItemButton: true,
      noResultsText: 'Не найдено'
    });
  });
};
formVariantBreaking();
var formCitySelect = function formCitySelect() {
  var elCity = document.querySelectorAll('#formCitySelect');
  elCity.forEach(function (eCity) {
    var choices = new Choices(eCity, {
      shouldSort: false,
      itemSelectText: 'Выбрать',
      noResultsText: 'Не найдено',
      searchPlaceholderValue: 'Искать по моделям'
    });
  });
};
formCitySelect();
try {
  // offer-calc
  var typeTechnicaOfferCalc = function typeTechnicaOfferCalc() {
    var typeTechnica = document.querySelector('#typeTechnicaOfferCalc');
    var choices = new Choices(typeTechnica, {
      shouldSort: false,
      itemSelectText: 'Выбрать',
      noResultsText: 'Не найдено',
      searchPlaceholderValue: 'Поиск...'
    });
  };
  typeTechnicaOfferCalc();
  var typeSkinOfferCalc = function typeSkinOfferCalc() {
    var typeSkin = document.querySelector('#typeSkinOfferCalc');
    var choices = new Choices(typeSkin, {
      shouldSort: false,
      itemSelectText: 'Выбрать',
      noResultsText: 'Не найдено',
      searchPlaceholderValue: 'Поиск...'
    });
  };
  typeSkinOfferCalc();
} catch (_unused) {}


var heroSlider = new Swiper(".heroSlider", {
  slidesPerView: 1.2,
  spaceBetween: 50,
  loop: true,
  pagination: {
    el: '.swiper-pagination',
    type: 'bullets',
    clickable: true,
    dynamicBullets: true
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev'
  },
  autoplay: {
    delay: 5000
  },
  simulateTouch: false,
  breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 1,
      spaceBetween: 5,
      simulateTouch: true
    },
    // when window width is >= 640px
    640: {
      slidesPerView: 1,
      spaceBetween: 15
    },
    992: {
      simulateTouch: false
    },
    1100: {
      slidesPerView: 1.2,
      spaceBetween: 50
    }
  }
});


window.liveskladOptions = {
  // Ключ апи, индивидуально сгенерированный для вас
  api_key: "hr8gdcECSwaefUm6B44D",
  // Название, отображаемое в заголовке виджета. По умолчанию: "Мои заказы"
  title: "Мои заказы",
  // Название, отображаемое в поле ввода текста. По умолчанию: "Номер телефона или заказа"
  placeholder: "Номер телефона / номер заказа",
  // Название, отображаемое в поле проверки пользователя. По умолчанию: "Фамилия"
  name_placeholder: "Фамилия",
  // Текст на кнопке. По умолчанию: "Открыть заказы"
  button_text: "Открыть заказы",
  // Ширина окна. По умолчанию: "300px"
  width: "500px",
  // Высота окна. По умолчанию: "230px"
  height: "220px",
  // Цвет фона кнопки. Если его задать, эффект при наведении РАБОТАТЬ НЕ БУДЕТ!
  color: "#4F76E6",
  // Колонки в таблице заказов. По умолчанию: ["number", "device", "brand", "status", "price"],
  // что соответствует:
  // № Заказа | Тип устр. | Устройство | Статус | Цена
  columns: ["number", "device", "brand", "status", "price"],
  // Скрывать уже выданные заказы? По умолчанию: Скрывать (true)
  hide_given: true,
  // Указанная в виджете валюта
  currency: "руб"
};
(function () {
  var script = document.createElement('script');
  script.type = 'text/javascript';
  script.async = true;
  script.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'my.livesklad.com/static/widget.js';
  document.getElementsByTagName('head')[0].appendChild(script);
})();


document.addEventListener("DOMContentLoaded", function (event) {
  // menu mobile
  var navBtn = document.querySelectorAll('.burger-mobile');
  var navBlock = document.getElementById('navMenuList');
  var navBtnIcon = document.querySelector('.burger-toggle-icon');
  navBtn.forEach(function (e) {
    e.addEventListener('click', function () {
      navBlock.classList.toggle('nav-open');
      e.classList.toggle('burger-active');
      navBtnIcon.classList.toggle('burger-toggle-icon-active');
    });
  });
});


// offer calc

///типы гаджетов
// let smart = document.querySelector('#smart');
// let laptop = document.querySelector('#laptop');
// let tablet = document.querySelector('#tablet');
var manufactg = 100 + 250;
var typeTechnic = 0;
var percent = 14.5;

///поля
var price = document.querySelector('#offerPriceCount');
var priceInput = document.querySelector('#offerPriceCountInput');
var priceSell = document.querySelector('#offerPriceCountSell');
var priceSellInput = document.querySelector('#offerPriceCountSellInput');
var skinCount = 0;
var firstSelect = document.querySelector('#typeTechnicaOfferCalc');
var skinSelect = document.querySelector('#typeSkinOfferCalc');
try {
  //  clear
  var clearTypeTech = function clearTypeTech() {
    typeTechnic = 0;
  }; ///first
  var calcTypeTech = function calcTypeTech(count) {
    typeTechnic = count + manufactg;
    price.textContent = typeTechnic;
    priceSell.textContent = Math.round(typeTechnic - typeTechnic / 100 * percent);
    priceInput.value = price.textContent;
    priceSellInput.value = priceSell.textContent;
  };
  var calcSkin = function calcSkin(count) {
    skinCount = count;
    price.textContent = 0;
    if (typeTechnic < 1) {
      price.textContent = 0;
      priceSell.textContent = 0;
    } else if (typeTechnic > 0) {
      price.textContent = typeTechnic + skinCount;
      priceSell.textContent = Math.round(Number(price.textContent) - Number(price.textContent) / 100 * percent);
      priceInput.value = price.textContent;
      priceSellInput.value = priceSell.textContent;
    }
  };
  firstSelect.addEventListener('change', function (e) {
    var index = e.target.value;
    switch (index) {
      case "none":
        clearTypeTech();
        break;
      case "Смартфон":
        percent = 14.5;
        calcTypeTech(200);
        break;
      case "Планшет":
        percent = 12.5;
        calcTypeTech(400);
        break;
      case "Смарт-Часы":
        percent = 14.5;
        calcTypeTech(200);
        break;
    }
    calcSkin(skinCount);
  });
  skinSelect.addEventListener('change', function (e) {
    var index = e.target.value;
    switch (index) {
      case "Прозрачная":
        if (firstSelect.value == 'Планшет') {
          percent = 12.5;
          calcSkin(0);
          break;
        }
        calcSkin(0);
        break;
      case "Матовая":
        if (firstSelect.value == 'Планшет') {
          percent = 12.5;
          calcSkin(0);
          break;
        }
        calcSkin(50);
        break;
      case "Anti-Blue":
        if (firstSelect.value == 'Планшет') {
          percent = 12.5;
          calcSkin(0);
          break;
        }
        calcSkin(50);
        break;
      case "Тонированная":
        if (firstSelect.value == 'Планшет') {
          calcSkin(-750);
          break;
        }
        calcSkin(250);
        break;
    }
  });
} catch (_unused) {}


var heroSlider = new Swiper(".often-request__slider", {
  slidesPerView: 6,
  spaceBetween: 15,
  freeMode: true,
  navigation: {
    nextEl: ".often-arrow-next",
    prevEl: ".often-arrow-prev"
  },
  breakpoints: {
    320: {
      slidesPerView: 2
    },
    370: {
      slidesPerView: 2.3
    },
    470: {
      slidesPerView: 2.6
    },
    580: {
      slidesPerView: 3.3
    },
    650: {
      slidesPerView: 3.8
    },
    820: {
      slidesPerView: 4.3
    },
    1024: {
      slidesPerView: 6.3
    }
  }
});


$(function () {
  $("#tabs").tabs({
    event: "mouseover"
  });
});


window.setTimeout(function () {
  document.body.classList.add("loaded_hiding");
  document.body.classList.add("loaded");
  document.body.classList.remove("loaded_hiding");
  // alertForClosePoin();
}, 500);

// let close_point_container__closeBTN =
//   document.getElementById("idClosePointBtn");

// const alertForClosePoin = (e) => {
//   setTimeout(function () {
//     let close_point_container = document.getElementById("idClosePoin");
//     close_point_container.classList.add("c-point-container__active");
//     close_point_container__closeBTN.onclick = () => {
//       close_point_container.classList.remove("c-point-container__active");
//     };
//   }, 3000);
// };


try {
  //  aw slider
  var awSlider = new Swiper(".product-slider-aw", {
    slidesPerView: 1.1,
    spaceBetween: 15,
    pagination: {
      el: ".aw-pagination",
      dynamicBullets: true,
      clickable: true
    },
    navigation: {
      nextEl: '.btn-product-aw-next',
      prevEl: '.btn-product-aw-prev'
    },
    breakpoints: {
      640: {
        slidesPerView: 2.1
      },
      768: {
        slidesPerView: 3.2
      },
      1024: {
        slidesPerView: 3.3
      }
    }
  });

  // iphone slider
  var iphoneSlider = new Swiper(".product-slider-iph", {
    slidesPerView: 1.1,
    spaceBetween: 15,
    pagination: {
      el: ".iph-pagination",
      dynamicBullets: true,
      clickable: true
    },
    navigation: {
      nextEl: '.btn-product-iph-next',
      prevEl: '.btn-product-iph-prev'
    },
    breakpoints: {
      640: {
        slidesPerView: 2.1
      },
      768: {
        slidesPerView: 3.2
      },
      1024: {
        slidesPerView: 3.3
      }
    }
  });
} catch (_unused) {}


var swiper = new Swiper(".reviews-slider", {
  slidesPerView: 1,
  loop: true,
  // effect: 'fade',
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev"
  },
  pagination: {
    el: ".swiper-pagination",
    dynamicBullets: true
  },
  autoplay: {
    delay: 3500
  }
});


// top-header-switch
// var inputSwitch = document.querySelector("#switchHTInp").checked;
// // var containerSwitchInfo = document.querySelector(".header__top-tooltip-info-container");
// var labelSwitchHeaderTop = document.querySelector(".header-top__switch");
// var headerTopSwitchTriangle = document.querySelector(".header-switch-triangle");
// labelSwitchHeaderTop.addEventListener("click", function () {
//   // containerSwitchInfo.classList.toggle("header__top-tooltip-info-container--active");
//   headerTopSwitchTriangle.classList.toggle("header-switch-triangle--active");
// });
//# sourceMappingURL=main.js.map
