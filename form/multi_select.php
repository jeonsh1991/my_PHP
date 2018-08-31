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
        //require_once 'h.php';
        if(isset($_POST['sample1'])) {
            for($i = 0; $i < count($_POST['sample1']); $i++) {
                echo '선택 상자의 값은 : ', $_POST['sample1'][$i],'입니다<br>';
            }
        }
        if(isset($_POST['sample2'])) {
            for($i = 0; $i < count($_POST['sample2']); $i++) {
                echo '체크 상자의 값은 : ', $_POST['sample2'][$i],'입니다<br>';
            }
        }
        
        ?>
        <form method="post" action="multi_select.php">
            <select name="sample1[]" size="5" multiple>
                <option value="샘플 3">샘플 3</option>
                <option value="샘플 4">샘플 4</option>
                <option value="샘플 5">샘플 5</option>
            </select>
            <br>
            체크박스
            <br><input type="checkbox" name="sample2[]" value="부분 1">부분 1
            <input type="checkbox" name="sample2[]" value="부분 2">부분 2
            <input type="checkbox" name="sample2[]" value="부분 3">부분 3
            <br>
            <input type="submit" value="전송">
        </form>
    </body>
</html>
