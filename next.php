<?php
if (!isset($_SESSION)) {
    session_start();
}
require 'login_check.php';
echo 'no';
