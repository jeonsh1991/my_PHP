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
        require_once ('h.php');
        
        echo '결과<br>';
        echo '라디오 버튼 : ';
        if (isset($_POST['example'])) {
            echo h($_POST['example']);
        }
        echo '<br>라디오 버튼(checked속성) : ';
        if (isset($_POST['example1'])) {
            echo h($_POST['example1']);
        }
        ?>
        <form method="post" action="radiobutton.php">
            <br>라디오 버튼
            <input type="radio" name="example" value="남자 1">남자
            <input type="radio" name="example" value="여자 1">여자
            <br>라디오 버튼(checked)
            <input type="radio" name="example1" value="남자 1">남자
            <input type="radio" name="example1" value="여자 1" checked>여자
            <br><input type="submit" value="전송">
        </form>
    </body>
</html>
