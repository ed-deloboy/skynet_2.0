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
    <div class="col card py-3">
        <div class="mr-auto mb-3">
            <h2 class="text-black font-w600 mb-0">Главная</h2>
            <p class="mb-0">Данные вашего аккаунта <?php echo $user['telegram_id']; ?></p>
        </div>
        <?php
        // подтверждение телеграм
        if ($user['telegram_id'] == '' or $user['telegram_id'] == null) {
        ?>
            <div class="d-flex alert alert-primary rounded p-3 align-items-center mb-4">
                <span class="btn fs-22 py-1 btn-primary px-4 mr-3"><i class="fab fa-telegram-plane text-white"></i></span>
                <h6 class="mb-0">Подпишитесь на оповещенияв в телеграм о поступлении товара и выполненном ремонте</h6>
                <a href="#" target="_blank" class="ml-auto text-primary font-w500">Подписаться <i class="ti-angle-right ml-1 d-none d-xl-inline-block"></i></a>
            </div>
        <?php
        }
        ?>

    </div>
</div>