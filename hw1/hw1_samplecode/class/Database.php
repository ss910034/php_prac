<?php 

class Database{
    private $pdo;
    function __construct( $host , $user , $pass , $db ){
        try {
            $this->pdo = new PDO('mysql:dbname=' . $db . ';host=' . $host  , $user , $pass );
        } catch ( PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
            die();
        }
    }

    function query( $string ){
        try {
            return $this->pdo->query( $string );
        } catch ( PDOException $e) {
            echo 'Query failed: ' . $e->getMessage();
            die();
        }
    }

    function quote( $string ){
        try {
            return $this->pdo->quote( $string );
        } catch ( PDOException $e) {
            echo 'Query failed: ' . $e->getMessage();
            die();
        }
    }
}

?>