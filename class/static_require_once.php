<?php 
require_once("class_staff.php");
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
        Staff::deposit(100);
        Staff::deposit(150);
        
        echo Staff::$piggyBank,"원이 되었습니다.";
        
        $hana = new Staff("하나", 21);
        $hana -> latePenalty();
        echo "<br>",Staff::$piggyBank, "원이 되었습니다.";
        ?>
    </body>
</html>
