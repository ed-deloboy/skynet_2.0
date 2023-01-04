<?php

// шапка
include 'views/header/header.php';

?>

<div class="container">
    <div class="mx-auto col-12 col-lg-6 py-5">
        <h2>Зарегистрируйтесь в Скайнет</h2>
        <hr>
        <form id="regForm" class="mb-3">
            <div class="mb-3">
                <label for="regPhone" class="form-label p-0 fs-6">*Номер телефона</label>
                <input type="tel" name="phone" class="form-control" id="regPhone" placeholder="+7 (___) ___-____" aria-describedby="regPhoneHelp">
                <div id="emailHelp" class="form-text">По нему мы активируем скидки постоянным клиентам</div>
            </div>
            <div class="mb-3">
                <label for="regEmail" class="form-label p-0 fs-6">*Email</label>
                <input type="email" placeholder="example@example.ru" name="email" class="form-control" id="regEmail" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="regPass" class="form-label p-0 fs-6">*Пароль</label>
                <input type="password" placeholder="******" name="pass1" class="form-control" id="regPass">
            </div>
            <div class="mb-3">
                <label for="regPass2" class="form-label p-0 fs-6">*Повторите пароль</label>
                <input type="password" placeholder="******" name="pass2" class="form-control" id="regPass2">
            </div>
            <button type="submit" class="btn btn-primary w-100">Регистрация</button>
        </form>
        <div>
            <p>Есть аккаунт? <a type="button" data-bs-toggle="modal" data-bs-target="#authModal" class="text-primary text-decoration-underline">Авторизуйтесь</a></p>
        </div>
        <div data-error-reg class="border border-danger rounded p-3 d-none">

        </div>
    </div>
</div>

<!-- acc-map -->
<?php
include 'view_modules/acc_map/index.php';
?>
<script>
    var phone_input = document.getElementById("regPhone");
    var im = new Inputmask("99-9999999");
    im.mask(phone_input);

    Inputmask({
        "mask": "+7 (999) 999-9999"
    }).mask(phone_input);
</script>
<script>
    var form_reg = document.querySelector('#regForm');

    form_reg.addEventListener('submit', e => {
        e.preventDefault();
        let formData = $(form_reg).serialize();

        $.ajax({
            type: "post",
            url: "config/modules/reg.php",
            data: formData,
            success: function(res) {
                // console.log('Ответ сервера');
                // console.log(res);

                let resData = JSON.parse(res);
                // console.log(resData);
                switch (resData.status) {
                    case 200:
                        window.location.href = '/office'
                        break;

                    case 500:
                        document.querySelector('[data-error-reg]').innerHTML = `<p class="m-0 text-center text-danger">${resData.message}</p>`;
                        document.querySelector('[data-error-reg]').classList.remove('d-none');
                        break;
                }
            }
        });
    });
</script>