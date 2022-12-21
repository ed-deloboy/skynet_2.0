<?php


// соединение с DB

define("HOST", 'localhost');
define("USER", 'nlstar-biz');
define("PASS", 'Bondarenko_!1994');
define("DB_NAME", 'nlstar-biz_skynet2-0');

$conn = mysqli_connect(HOST, USER, PASS, DB_NAME);


if (!$conn) {
    echo "Error conn3 DB connect";
    echo '<br>';
}