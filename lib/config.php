<?php

/*error_reporting(E_ALL);
ini_set('display_errors', 1);*/
date_default_timezone_set('America/New_York');


if($_SERVER['REMOTE_ADDR'] !== '127.0.0.1'){
    $servername = "localhost";
    $username = "advplus99";
    $password = "Hcp5?m54";
    $dbname = "admin_adv";
} else {
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "admin_adv";
}





?>