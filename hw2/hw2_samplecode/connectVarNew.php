<?php
    session_start();
    require_once('class/File.php');
    require_once('class/FileUpload.php');
    require_once('class/User.php');
    // Last Modified Day : 2012.09.10
    //連接資料庫的參數
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "php_prac";

    $pdo =  new PDO('mysql:dbname=' . $db . ';host=' . $host  , $user , $pass );
    $auth = new User();
?>