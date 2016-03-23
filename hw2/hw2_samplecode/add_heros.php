<?php
    require_once('connectVarNew.php');
    $auth->checkLoginAndRedirect( "login.php" , User::NOT_LOGIN );

    if( isset($_POST['submit']) && isset( $_POST['type']) ){
        /* handle file */

        $upload = new File( $_FILES['files'] );
        try {
            $picture_link = FileUploader::upload( $upload , getcwd(). "/assets/image/" . $upload->getHashName() );
        } catch (Exception $e) {
            echo '<script>alert("' . $e->getMessage() . '")</script>';
            die();
        }
        
        /* save to database */
        $name = $pdo->quote($_POST['name']);
        $nick = $pdo->quote($_POST['nick']);
        $area =  $pdo->quote($_POST['area']);
        $type = $pdo->quote($_POST['type']);
        $picture_link = $pdo->quote( $picture_link );
        $description = $pdo->quote( $_POST['description'] );
        $query_string = "INSERT INTO `profile` VALUES( '' , $name , $nick , $picture_link , $description , $area , $type )";

        $pdo->query( $query_string );
        echo '<script>alert( "新增成功" );</script>';
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Heros</title>
    
</head>
<body>
    <a href="heros.php">back</a>
    <h1> Add a new Hero !</h1>
    <form method="post" action="#" enctype="multipart/form-data">
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
            <input name="files" type="file" required="true">
            <li>Hero's description</li>
            <textarea name="description" required="true" ></textarea>
        </ol>

        <input name="submit" type="submit"></input>
        
    </form>
</body>
</html>