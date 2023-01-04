<?php
require_once '../../../config/db_conn/conn.php';
// echo json_encode($_POST);
if ($_POST['pointEventType'] == 'edit') {
    $pointId = htmlspecialchars(trim($_POST['pointId']));
    $title = htmlspecialchars(trim($_POST['pointTitle']));
    $phone = htmlspecialchars(trim($_POST['pointPhone']));
    $additional = htmlspecialchars(trim($_POST['pointAdditional']));
    $address = htmlspecialchars(trim($_POST['pointAddress']));
    $pointWeekDays = htmlspecialchars(trim($_POST['pointWeekDays']));
    $pointWeekEnd = htmlspecialchars(trim($_POST['pointWeekEnd']));

    if ($pointId == '') {
        $ansver = [
            'status' => 500,
            'message' => 'Не указан id точки'
        ];
        echo json_encode($ansver);
        exit;
    }

    if ($title == '') {
        $ansver = [
            'status' => 500,
            'message' => 'Укажите название точки'
        ];
        echo json_encode($ansver);
        exit;
    }

    if ($phone == '') {
        $ansver = [
            'status' => 500,
            'message' => 'Укажите номер телефона'
        ];
        echo json_encode($ansver);
        exit;
    }

    if ($address == '') {
        $ansver = [
            'status' => 500,
            'message' => 'Укажите адрес точки'
        ];
        echo json_encode($ansver);
        exit;
    }

    if ($pointWeekDays == '') {
        $ansver = [
            'status' => 500,
            'message' => 'Укажите график в будние дни'
        ];
        echo json_encode($ansver);
        exit;
    }

    if ($pointWeekEnd == '') {
        $ansver = [
            'status' => 500,
            'message' => 'Укажите график в выходные дни'
        ];
        echo json_encode($ansver);
        exit;
    }

    mysqli_query($conn, "UPDATE `service_centres` SET `title`='$title',`address`='$address',`phone`='$phone',`additional_number`='$additional',`weekdays`='$pointWeekDays',`weekend`='$pointWeekEnd' WHERE id='$pointId'");

    if (!mysqli_error($conn)) {
        $ansver = [
            'status' => 200,
            'message' => 'Изменено'
        ];
        echo json_encode($ansver);
        exit;
    } else {
        $ansver = [
            'status' => 500,
            'message' => 'Ошибка при сохранении, обратитесь к администратору'
        ];
        echo json_encode($ansver);
        exit;
    }
}
