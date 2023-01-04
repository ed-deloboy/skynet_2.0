var formAuth = document.getElementById("authForm");
var errContainer = document.querySelector("[data-err-auth]");
formAuth.addEventListener("submit", (e) => {
  e.preventDefault();
  let formData = $(formAuth).serialize();

  $.ajax({
    type: "post",
    url: "config/modules/auth.php",
    data: formData,
    success: function (res) {
      let resData = JSON.parse(res);
      console.log(resData);
      switch (resData.status) {
        case 200:
          window.location.href = "/office";
          break;

        case 500:
          errContainer.classList.remove("d-none");
          errContainer.innerHTML = `<p class="text-center text-danger m-0">${resData.message}</p>`;
          switch (resData.check) {
            case 1:
              document
                .querySelector(`.inp_check` + resData.check)
                .classList.add("border-danger");
              break;
            case 2:
              document
                .querySelector(`.inp_check1`)
                .classList.remove("border-danger");
              document
                .querySelector(`.inp_check1`)
                .classList.add("border-success");
              document
                .querySelector(`.inp_check` + resData.check)
                .classList.add("border-danger");
              break;
          }
          break;
      }
    },
  });
});
{
  /* <p class="text-center text-danger m-0">Ошибка</p> */
}
