<?php
session_start();
require_once '../../../config/db_conn/conn.php';

if (!$_SESSION) {
    echo "  <script>
                document.location.href='/'
            </script>";
    exit;
}
// echo '<pre>';
// print_r($_SESSION);
// echo '</pre>';

$user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM `users` where id='$_SESSION[id]'"));
?>
<div class="container-fluid">
    <div class="card py-3">
        <div class="card-header">
            <div class="mr-auto mb-3">
                <h2 class="text-black font-w600 mb-0">Активные точки продаж</h2>
                <p class="mb-0">Редактируйте информацию для отображения на сайте</p>
            </div>
        </div>
    </div>

    <div class="col-12">
        <div>
            <div>
                <ul class="nav nav-pills mb-4">
                    <li class=" nav-item">
                        <a href="#navpills-1" class="nav-link active" data-toggle="tab" aria-expanded="false">Редактировать</a>
                    </li>
                    <li class="nav-item">
                        <a href="#navpills-2" class="nav-link" data-toggle="tab" aria-expanded="false">Добавить</a>
                    </li>
                    <li class="nav-item">
                        <a href="#navpills-3" class="nav-link" data-toggle="tab" aria-expanded="true">Удалить</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="navpills-1" class="tab-pane active">

                        <?php
                        $sql = mysqli_query($conn, "SELECT * FROM `service_centres`");
                        while ($point = mysqli_fetch_assoc($sql)) {
                        ?>
                            <div class="card">
                                <div class="card-header pb-0">
                                    <h3><?= $point['title'] ?></h3>
                                </div>
                                <div class="card-body">
                                    <div class="basic-form">
                                        <form data-form-point>
                                            <input type="hidden" name="pointEventType" value="edit">
                                            <input type="hidden" name="pointId" value="<?= $point['id'] ?>">
                                            <div class="form-group">
                                                <label for="pointTitle">Название точки</label>
                                                <input type="text" id="pointTitle" name="pointTitle" class="form-control input-default border-primary" value="<?= $point['title'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="pointAddress">Адрес точки</label>
                                                <input type="text" id="pointAddress" name="pointAddress" class="form-control input-default border-primary" value="<?= $point['address'] ?>">
                                            </div>
                                            <div class="d-flex justify-content-between flex-wrap">
                                                <div class="form-group col-12 col-lg-6 px-0">
                                                    <label for="pointPhone">Телефон</label>
                                                    <input type="text" id="pointPhone" name="pointPhone" class="form-control input-default border-primary" value="<?= $point['phone'] ?>">
                                                </div>
                                                <div class="form-group col-12 col-lg-5 px-0">
                                                    <label for="pointAdditional">Добавочный номер (горячей линии)</label>
                                                    <input type="text" id="pointAdditional" name="pointAdditional" class="form-control input-default border-primary" value="<?= $point['additional_number'] ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="pointWeekDays">График работы в будни</label>
                                                <input type="text" id="pointWeekDays" name="pointWeekDays" class="form-control input-default border-primary" value="<?= $point['weekdays'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="pointWeekEnd">График работы в выходные</label>
                                                <input type="text" id="pointWeekEnd" name="pointWeekEnd" class="form-control input-default border-primary" value="<?= $point['weekend'] ?>">
                                            </div>
                                            <button type="submit" class="btn btn-success">Сохранить изменения</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>

                    </div>
                    <div id="navpills-2" class="tab-pane">
                        <div class="row">
                            <div class="col-md-12">2 Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.
                                <p>
                                    <br /> Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div id="navpills-3" class="tab-pane">
                        <div class="row">
                            <div class="col-md-12">3 Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.
                                <p>
                                    <br /> Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<script src="../../../asset_office/vendor/sweetalert2/dist/sweetalert2.min.js"></script>
<!-- <script src="../../../asset_office/js/plugins-init/sweetalert.init.js"></script> -->

<script>
    let forms = document.querySelectorAll('[data-form-point]');

    forms.forEach(element => {
        element.addEventListener('submit', e => {
            e.preventDefault();
            let formData = $(element).serialize();
            $.ajax({
                type: "post",
                url: "views/office/config/adminPointsPage.php",
                data: formData,
                success: function(res) {

                    let resData = JSON.parse(res);
                    // console.log(resData);
                    switch (resData.status) {
                        case 200:
                            swal("Успешно", `${resData.message}`, "success");
                            break;

                        case 500:
                            sweetAlert("Ошибка", `${resData.message}`, "error")
                            break;

                    }

                }
            });
        });
    });
</script>

<?php
// include './views/office/config/adminPointsPage.php';
?>