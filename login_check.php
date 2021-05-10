<?php
if (!isset($_SESSION)) {
    session_start();
}
if (true) {
    // if (!isset($_SESSION['customer'])) {
    // $_SESSION['remember'] = '';
    header('Location: ./end.php');
    // header('Location: http://'
    // . $_SERVER['SERVER_NAME']
    // . dirname($_SERVER['SCRIPT_NAME'])
    // . '/end.php');
    exit;
}
