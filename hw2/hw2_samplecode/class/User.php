<?php 
class User{
    const NOT_LOGIN = 1;

    function __construct(){
        $this->isLogin();
    }

    public function login( $account , $password , $pdo ){
        $query = $pdo->prepare( "SELECT * FROM `user` WHERE `account` = $account" );
        $query->execute();

        if( $query->rowCount() === 1 ){
            $user = $query->fetch();

            if( password_verify( $password , $user['password']  ) ){
                $_SESSION['account'] = $account;
                setcookie( 'hash' , password_hash( $account , PASSWORD_DEFAULT ) , time() + 86400 );
                setcookie( 'account' , $account , time() + 86400  );
                return true;
            }
        }
        return false;
    }

    public function isLogin(){
        if( isset( $_SESSION['account'] ) ){
            return true;
        }
        else if(  isset($_COOKIE['hash'])  && password_verify( $_COOKIE['account'] , $_COOKIE['hash']  ) ){
            $_SESSION['account'] = $_COOKIE['account'];
            return true;
        }
        return false;
    }

    public function checkLoginAndRedirect( $redirectURL , $reverse = 0 ){
        
        if( ( $this->isLogin() && $reverse === 0 ) || ( !$this->isLogin() && $reverse === self::NOT_LOGIN )){
            header("Location: " . $redirectURL );
        }
    }

    public function forget( $redirectURL ){
        unset( $_SESSION['account'] );
        setcookie( 'hash' , password_hash( $account , PASSWORD_DEFAULT ) , time() - 1 );
        setcookie( 'account' , $account , time() - 1 );
        header("Location: " . $redirectURL );
    }
}
