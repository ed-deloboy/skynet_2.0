var btns = document.querySelectorAll(".btns_pages");
var actives_a = document.querySelectorAll("[data-sub-link]");

btns.forEach((element) => {
  element.addEventListener("click", (e) => {
    // console.log(element.dataset.idPage);
    myMain(element.dataset.idPage);
  });
});

// получаем id навигации из локала
parseId = localStorage.getItem("skynetBtnId");

window.onload = () => {
  // root.innerHTML = loader;
  if (
    parseId === null ||
    parseId === [] ||
    parseId === "" ||
    parseId === "home"
  ) {
    // document.querySelector("#home").classList.add("mm-active");
    parseId = "home";
  }

  myMain(parseId);
};

function myMain(p2) {
  // прелоадер

  document.querySelector("#root").innerHTML = `
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
      `;

  // p2 на какую страницу отправляем запрос
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });

  localStorage.setItem("skynetBtnId", p2);

  btns.forEach((element) => {
    element.classList.remove("mm-active");
    // console.log(element);
  });
  actives_a.forEach((element) => {
    element.children[0].classList.remove("sublink-a-style");
    if (element.dataset.idPage === p2) {
      // console.log(element.dataset.idPage);
      element.children[0].classList.add("sublink-a-style");
    }
  });

  var active_btns = document.querySelectorAll(`[data-id-page="${p2}"]`);
  for (let i = 0; i < active_btns.length; i++) {
    active_btns[i].classList.add("mm-active");
  }

  setTimeout(() => {
    loadBlock(p2, "root");
  }, 1000);
}

function loadBlock(p1, p2) {
  // 1 куда запрос
  // 2 куда вставляем
  $.ajax({
    url: "views/office/views/" + p1 + ".php",
    cache: false,
    success: function (html) {
      // console.log(html);
      let getBlock = html.split("<!DOCTYPE html>");
      if (getBlock.length > 1) {
        $("#" + p2).html(
          `<div class="container"><h2>Такой страницы не существует</h2></div>`
        );
      } else {
        $("#" + p2).html(html);
      }
    },
  });
}

function post_button(url, name, data, block) {
  var str = "";
  $.each(data.split("."), function (k, v) {
    str += "&" + v + "=" + $("#" + v).val();
  });
  $.ajax({
    url: "/" + url,
    type: "POST",
    data: name + "" + str,
    cashe: false,
    success: function (html) {
      $("#" + block).html(html);
    },
  });
}

function no_result(url, name, data) {
  var str = "";
  $.each(data.split("."), function (k, v) {
    str += "&" + v + "=" + $("#" + v).val();
  });
  $.ajax({
    url: "/" + url,
    type: "POST",
    data: name + "" + str,
    cashe: false,
    success: function (result) {
      obj = jQuery.parseJSON(result);
    },
  });
}
