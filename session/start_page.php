<?php 

session_start();

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
        $_SESSION["coupon"] = "ABC123";
        ?>
        <a href="goal_page.php">다음페이지로</a>
    </body>
</html>
