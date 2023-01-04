<!DOCTYPE html>

<?php
session_start();
include 'navigation.php';
require_once 'config/db_conn/conn.php';
include $head;
// тело
include $loader_lending;
include $contentBody;
include $footerBody;

?>