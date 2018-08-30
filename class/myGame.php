<?php 
require_oncE("Soccer.php");
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
        $player1 = new Soccer("messi");
        $player1->who();
        $player1->play();
        
        $player2 = new Soccer("ronaldo");
        echo "{$player2}";
        ?>
    </body>
</html>
