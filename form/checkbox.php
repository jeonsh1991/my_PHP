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
        <div>
        <?php
        // put your code here
        require_once('h.php');
        
        echo '결과<br>';
        echo '체크박스 : ';
        if (isset($_POST['example-1'])) {
            echo h($_POST['example-1']) . '';
        }
        if (isset($_POST['example-2'])) {
            echo h($_POST['example-2']);
        }
        echo '<br>체크박스(배열) : ';
        if (isset($_POST['example1'])) {
            foreach ($_POST['example1'] as $value){
            echo h($value) . ' ';
            }
        }
        echo '<br>체크박스(배열 checked) : ';
        if (isset($_POST['example2'])) {
            foreach($_POST['example2'] as $value){
            echo h($value). '';
        }
        }
        ?>
        <form method="POST" action="checkbox.php">
            <br>체크박스
            <input type="checkbox" name="example-1" value="데스크탑">데스크탑
            <input type="checkbox" name="example-2" value="노트북">노트북
            <br>체크박스(배열)
            <input type="checkbox" name="example1[]" value="데스크탑">데스크탑
            <input type="checkbox" name="example1[]" value="노트북">노트북
            <br>체크박스(배열checked)
            <input type="checkbox" name="example2[]" value="데스크탑">데스크탑
            <input type="checkbox" name="example2[]" value="노트북" checked>노트북
            <br><input type="submit" value="전송">
        </form>
        </div>
    </body>
</html>