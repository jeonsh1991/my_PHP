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
        require_once ('h.php');
        
        echo '결과<br>';
        echo '패스워드 상자 : ';
        if (isset($_POST['example'])) {
            echo h($_POST['example'], false);
        }
        echo '<br>패스워드 상자 (정규표현식): : ';
        if (isset($_POST['example1'])) {
            echo h($_POST['example1']);
        }
        ?>
        <form method="post" action="passwordbox.php">
        <br>패스워드 상자
        <input type="password" name="example" >
        <br>패스워드 상자 (정규표현식)
        <input type="password" name="example1" pattern="[0-9A-Za-z]{8,}" value="">
        <input type="submit">
        </form>
    </body>
</html>
