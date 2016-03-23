<?php 
    require_once('connectVarNew.php');    
    $auth->checkLoginAndRedirect( '/heros.php' );
    $auth->forget( "/heros.php");

    session_unset('account');