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
    <div class="mr-auto">
        <h2 class="text-black font-w600 mb-0">Страница в разработке</h2>
        <!-- <p class="mb-0">Редактируйте информацию для отображения на сайте</p> -->
    </div>
</div>