<?php 
    require_once('connectVarNew.php');
 
    $auth->checkLoginAndRedirect( "/heros.php" );

    if( isset( $_POST['submit']) ){
        $account = $pdo->quote( $_POST['account'] );
        $password = $pdo->quote( $_POST['password'] );
        if( $auth->login( $account , $password , $pdo ) )
            $auth->checkLoginAndRedirect( "/heros.php" );
        else
            echo '<script>alert( "帳號或密碼錯誤" );</script>';
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>League Of Legend - Member system</title>
</head>
<body>
    <a href="register.php">Register</a>
    <h1> Login </h1>
    <form method="post" action="#">
        <ul>
            <p>account</p>
            <input placeholder="account" type="text" name="account">
            <p>password</p>
            <input placeholder="password" type="password" name="password" >
            <p></p>
            <input type="submit" name="submit">
        </ul>
    </form>
</body>