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
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Заявки на ремонт</h4>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Назад</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Заявки на ремонт</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="requestTable" class="display" style="min-width: 845px">
                            <thead>
                                <tr>
                                    <th>Статус</th>
                                    <th>Аппарат</th>
                                    <th>Город</th>
                                    <th>Номер</th>
                                    <th>Дата</th>
                                    <th>Комментарий</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = mysqli_query($conn, "SELECT * FROM `requests` order by `time_request` desc");
                                while ($request = mysqli_fetch_assoc($sql)) {
                                    $city = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM `service_centres` where id = $request[city]"));

                                    $dateTime = strtotime($request['time_request']);
                                    $date = date('d.m.Y H:i', $dateTime);
                                    //     <div class="btn-group mb-1 show">
                                    //     <button type="button" class="btn btn-warning">Warning</button>
                                    //     <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-expanded="true">
                                    //     </button>
                                    //     <div class="dropdown-menu show" x-placement="top-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(118px, -193px, 0px);">
                                    //         <a class="dropdown-item" href="#">Action</a>
                                    //         <a class="dropdown-item" href="#">Another action</a>
                                    //         <a class="dropdown-item" href="#">Something else here</a>
                                    //         <div class="dropdown-divider"></div>
                                    //         <a class="dropdown-item" href="#">Separated link</a>
                                    //     </div>
                                    // </div>



                                    if ($request['view'] == 0) {
                                        $view = "<div class=\"basic-dropdown\">
                                        <div class=\"dropdown\">
                                            <button type=\"button\" class=\"btn btn-warning btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
                                                Не прозвонили
                                            </button>
                                            <div style=\"left:100%;\" class=\"dropdown-menu\">
                                                <div class=\"d-flex flex-column align-items-center\">
                                                     <button class=\"btn btn-success py-0 mb-2\">Прозвонили</button>
                                                     <button class=\"btn btn-warning py-0 mb-2\">Не ответили</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>";
                                    } elseif ($request['view'] == 1) {
                                        $view = "<div class=\"basic-dropdown\">
                                        <div class=\"dropdown\">
                                            <button type=\"button\" class=\"btn btn-success btn-sm\">
                                                 Прозвонили
                                            </button>
                                        </div>
                                    </div>";
                                    }

                                ?>
                                    <tr>

                                        <td><?= $view ?></td>
                                        <td><?= $request['apparat_name'] ?></td>
                                        <td><?= $city['title'] ?></td>
                                        <td><?= $request['phone'] ?></td>
                                        <td><?= $date ?></td>
                                        <td>
                                            <form action="">
                                                <input type="text" placeholder="Что ответил?" class="w-75" value="<?= $request['comment'] ?>">
                                                <button class="btn btn-primary p-1 d-inline"><i class="far fa-save"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- <script src="./vendor/datatables/js/jquery.dataTables.min.js"></script> -->
<!-- <script src="../../../asset_office/js/plugins-init/datatables.init.js"></script> -->

<script>
    $('#requestTable').DataTable({
        "order": [
            [0, "desc"]
        ],
        'language': {
            "processing": "Подождите...",
            "search": "Поиск:",
            "lengthMenu": "Показать _MENU_ записей",
            "info": "Записи с _START_ до _END_ из _TOTAL_ записей",
            "infoEmpty": "Записи с 0 до 0 из 0 записей",
            "infoFiltered": "(отфильтровано из _MAX_ записей)",
            "infoPostFix": "",
            "loadingRecords": "Загрузка записей...",
            "zeroRecords": "Записи отсутствуют.",
            "emptyTable": "В таблице отсутствуют данные",
            "paginate": {
                "first": "Первая",
                "previous": "Предыдущая",
                "next": "Следующая",
                "last": "Последняя"
            },
        }
    });
</script>