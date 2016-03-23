<?php 
    require_once('connectVarNew.php');
    
    $auth->checkLoginAndRedirect( "heros.php" );

    if( isset( $_POST['submit']) ){
        $account = $pdo->quote( $_POST['account'] );
        $password = $pdo->quote( $_POST['password'] );
        $password_confirm = $pdo->quote( $_POST['password_confirm'] );

        $query = $pdo->prepare("SELECT `account` FROM `user` WHERE `account` = $account ");
        $query->execute();

        if( $password_confirm !== $password ){
            echo '<script>alert( "密碼驗證錯誤" );</script>';
        }
        else if( $query->rowCount() ){
            echo '<script>alert( "此帳號已經有人註冊" );</script>';
        }
        else{

            $password = $pdo->quote( password_hash( $password , PASSWORD_DEFAULT ) );
            echo $password;
            $pdo->query("INSERT INTO `user` VALUES( '' , $account , $password )");
        }

    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>League Of Legend - Member system</title>
</head>
<body>
    <a href="login.php">Login</a>
    <h1> Register </h1>
    <form method="post" action="#">
        <ul>
            <p>account</p>
            <input placeholder="account" type="text" name="account">
            <p>password</p>
            <input placeholder="password" type="password" name="password" >
            <p>password confirm</p>
            <input placeholder="password_confirm" type="password" name="password_confirm">
            <p></p>
            <input type="submit" name="submit">
        </ul>
    </form>
</body>