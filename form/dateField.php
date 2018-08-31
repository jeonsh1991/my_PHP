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
        require_once 'h.php';
        
        echo '결과<br>';
        echo '날짜는? : ';
        if (isset($_POST['date'])) {
            echo h($_POST['date']);
        }
        ?>
        <form method="post" action="dateField.php">
            <br><input type="date" name="date">
            <br><input type="submit" value="전송">
        </form>
    </body>
</html>
