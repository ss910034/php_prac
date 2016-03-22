<?php
require_once('class/Database.php');
    // Last Modified Day : 2012.09.10
    //連接資料庫的參數
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "php_prac";

    $pdo = new Database( $host , $user , $pass , $db );
?>