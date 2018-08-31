<?php
require_once("MyGame.php");
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        $myPlayer = new MyGame(100);
        for ($i=0; $i<10; $i++) {
            $myPlayer->play();
            if(! $myPlayer->isAlive()){
                break;
            }
        }
        echo "게임 종료<br>";
        ?>
    </body>
</html>
