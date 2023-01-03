<?php

session_start();

require_once "../../config/db_conn/conn.php";
require_once "../../config/function/function.php";

$email = htmlspecialchars(mb_strtolower(trim($_POST['email'])));
$phone = htmlspecialchars(mb_strtolower(trim($_POST['phone'])));
$pass1 = htmlspecialchars(trim($_POST['pass1']));
$pass2 = htmlspecialchars(trim($_POST['pass2']));

if ($email == '' or $phone == '' or $pass1 == '' or $pass2 == '') {
    // все поля должны быть заполнены
    $ansver = [
        'status' => 500,
        'message' => 'Одно из обязательных полей не заполнено'
    ];
    echo json_encode($ansver);
    exit;
} else {
    // проверка mail code
    $check_mail = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `users` WHERE email='$email'"));

    if ($check_mail > 0) {
        $ansver = [
            'status' => 500,
            'message' => 'Аккаунт с таким email уже зарегистрирован'
        ];
        echo json_encode($ansver);
        exit;
    }
    // echo 'перед втрорым';

    $check_phone = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `users` WHERE phone='$phone'"));

    if ($check_phone > 0) {
        $ansver = [
            'status' => 500,
            'message' => 'Аккаунт с таким телефоном уже зарегистрирован'
        ];
        echo json_encode($ansver);
        exit;
    }

    if (strlen($pass1) < 6) {
        // пароль короткий
        $ansver = [
            'status' => 500,
            'message' => 'Пароль должен быть не менее 6 символов'
        ];
        echo json_encode($ansver);
        exit;
    } else {
        if ($pass1 != $pass2) {
            // разные пароли
            $ansver = [
                'status' => 500,
                'message' => 'Разные пароли, удалите и введите пароль заново'
            ];
            echo json_encode($ansver);
            exit;
        } else {
            $pass_hash = wp_hash_password($pass1);

            $regTime = date('Y-m-d H:i:s', time());

            mysqli_query($conn, "INSERT INTO `users`(`id`, `phone`, `email`, `password`, `register_time`) VALUES (null,'$phone','$email','$pass_hash','$regTime')");

            $data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM `users` WHERE phone='$phone' and email='$email'"));

            $_SESSION = $data;
            $ansver = [
                'status' => 200,
                'message' => 'Успешная регистрация'
            ];
            echo json_encode($ansver);
        }
    }
}
