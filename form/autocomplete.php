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
        require_once 'h.php';
        
        echo '결과<br>';
        echo '텍스트 상자(autocomplete 속성을 지정) : ';
        if (isset($_POST['food'])) {
            echo h($_POST['food']);
        }
        ?>
        <form method="post" action="autocomplete.php">
            <br><input type="text" name="food" autocomplete="on" list="korea">
            <br><input type="submit" value="전송">
            <datalist id="korea">
                <option value="불고기">
                <option value="비빔밥">
                <option value="김치">
            </datalist>
        </form>
    </body>
</html>
