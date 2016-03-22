<?php
    require_once('connectVarNew.php');
    if( isset($_POST['submit']) && isset( $_POST['type']) ){
        $name = $pdo->quote($_POST['name']);
        $nick = $pdo->quote($_POST['nick']);
        $area =  $pdo->quote($_POST['area']);
        $type = $pdo->quote($_POST['type']);
        $picture_link = $pdo->quote( $_POST['picture_link']);
        $description = $pdo->quote( $_POST['description'] );
        $query_string = "INSERT INTO `profile` VALUES( '' , $name , $nick , $picture_link , $description , $area , $type )";

        $pdo->query( $query_string );
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Heros</title>
</head>
<body>
    <h1> Add a new Hero !</h1>
    <form method="post" accept="<?= $_SERVER['php_self'];?>">
        <ol>
            <li>Hero's name</li>
            <input name="name" type="text" required="true">
            <li>Hero's nickname</li>
            <input name="nick" type="text" required="true">
            <li>Hero's area</li>
            <input name="area" type="text" required="true">
            <li>Hero's type</li>
            <select name="type">
                <option value="apcarry">法師</option>
                <option value="adcarry">射手</option>
                <option value="tank">坦克</option>
                <option value="assassin">刺客</option>
                <option value="support">輔助</option>
                <option value="fighter">鬥士</option>
            </select>
            <li>Hero's picture link</li>
            <input name="picture_link" type="text" required="true">
            <li>Hero's description</li>
            <textarea name="description" required="true" ></textarea>
        </ol>

        <input name="submit" type="submit"></input>
        
    </form>
</body>
</html>