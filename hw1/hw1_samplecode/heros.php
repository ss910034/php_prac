<?php 
    require_once('connectVarNew.php');
    $ad_query = "SELECT * FROM `profile` WHERE `type` = 'adcarry'";
    $ap_query = "SELECT * FROM `profile` WHERE `type` = 'apcarry'";
    $tank_query = "SELECT * FROM `profile` WHERE `type` = 'tank'";
    $support_query = "SELECT * FROM `profile` WHERE `type` = 'support'";
    $fighter_query = "SELECT * FROM `profile` WHERE `type` = 'fighter'";
    $assassin_query = "SELECT * FROM `profile` WHERE `type` = 'assassin'";
?>
<!DOCTYPE html>
<html>
<head>
    <title>League Of Legend - Heros</title>
    <style type="text/css">
        table , tr , td , th{
            border: 1px solid;
        }

        td{
            min-width: 100px;
            max-width: 500px;
            text-align: center;
        }

        td:first-child{
            min-width: initial;
        }

    </style>
</head>
<body>
    <section>
        <table>
            
            <h1>AD CARRY</h1>

            <thead>
                <th>picture</th>
                <th>name</th>
                <th>nickname</th>
                <th>area</th>
                <th>type</th>
            </thead>
            <tbody>
                <?php foreach( $pdo->query( $ad_query ) as $key => $row ){  ?>

                    <tr>
                        <td><img src="<?=$row['picture_link'];?>"></td>
                        <td><?= $row['name']?></td>
                        <td><?= $row['nick']?></td>
                        <td><?= $row['area']?></td>
                        <td><?= $row['type']?></td>
                    </tr>
                    <tr>
                        <td colspan="5"><?= mb_substr( $row['description'] , 0 , 100 ) . "......"?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>  
    </section>
        <section>
        <table>
            
            <h1>AP CARRY</h1>

            <thead>
                <th>picture</th>
                <th>name</th>
                <th>nickname</th>
                <th>area</th>
                <th>type</th>
            </thead>
            <tbody>
                <?php foreach( $pdo->query( $ap_query ) as $key => $row ){  ?>

                    <tr>
                        <td><img src="<?=$row['picture_link'];?>"></td>
                        <td><?= $row['name']?></td>
                        <td><?= $row['nick']?></td>
                        <td><?= $row['area']?></td>
                        <td><?= $row['type']?></td>
                    </tr>
                    <tr>
                        <td colspan="5"><?= mb_substr( $row['description'] , 0 , 100 ) . "......"?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>  
    </section>
        <section>
        <table>
            
            <h1>TANK</h1>

            <thead>
                <th>picture</th>
                <th>name</th>
                <th>nickname</th>
                <th>area</th>
                <th>type</th>
            </thead>
            <tbody>
                <?php foreach( $pdo->query( $tank_query ) as $key => $row ){  ?>

                    <tr>
                        <td><img src="<?=$row['picture_link'];?>"></td>
                        <td><?= $row['name']?></td>
                        <td><?= $row['nick']?></td>
                        <td><?= $row['area']?></td>
                        <td><?= $row['type']?></td>
                    </tr>
                    <tr>
                        <td colspan="5"><?= mb_substr( $row['description'] , 0 , 100 ) . "......"?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>  
    </section>
        <section>
        <table>
            
            <h1>SUPPORT</h1>

            <thead>
                <th>picture</th>
                <th>name</th>
                <th>nickname</th>
                <th>area</th>
                <th>type</th>
            </thead>
            <tbody>
                <?php foreach( $pdo->query( $support_query ) as $key => $row ){  ?>

                    <tr>
                        <td><img src="<?=$row['picture_link'];?>"></td>
                        <td><?= $row['name']?></td>
                        <td><?= $row['nick']?></td>
                        <td><?= $row['area']?></td>
                        <td><?= $row['type']?></td>
                    </tr>
                    <tr>
                        <td colspan="5"><?= mb_substr( $row['description'] , 0 , 100 ) . "......"?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>  
    </section>
        <section>
        <table>
            
            <h1>ASSASSIN</h1>

            <thead>
                <th>picture</th>
                <th>name</th>
                <th>nickname</th>
                <th>area</th>
                <th>type</th>
            </thead>
            <tbody>
                <?php foreach( $pdo->query( $assassin_query ) as $key => $row ){  ?>

                    <tr>
                        <td><img src="<?=$row['picture_link'];?>"></td>
                        <td><?= $row['name']?></td>
                        <td><?= $row['nick']?></td>
                        <td><?= $row['area']?></td>
                        <td><?= $row['type']?></td>
                    </tr>
                    <tr>
                        <td colspan="5"><?= mb_substr( $row['description'] , 0 , 100 ) . "......"?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>  
    </section>
        <section>
        <table>
            
            <h1>FIGHTER</h1>

            <thead>
                <th>picture</th>
                <th>name</th>
                <th>nickname</th>
                <th>area</th>
                <th>type</th>
            </thead>
            <tbody>
                <?php foreach( $pdo->query( $fighter_query ) as $key => $row ){  ?>

                    <tr>
                        <td><img src="<?=$row['picture_link'];?>"></td>
                        <td><?= $row['name']?></td>
                        <td><?= $row['nick']?></td>
                        <td><?= $row['area']?></td>
                        <td><?= $row['type']?></td>
                    </tr>
                    <tr>
                        <td colspan="5"><?= mb_substr( $row['description'] , 0 , 100 ) . "......"?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>  
    </section>
</body>
</html>