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
        echo '선택 메뉴 : ';
        if (isset($_GET['example'])) {
            echo h($_GET['example'], false);
        }
        echo '<br>선택 메뉴 (선택완료): : ';
        if (isset($_GET['example1'])) {
            echo h($_GET['example1']);
        }
        echo '<br>선택 메뉴 (복수선택 multiple): : ';
        if (isset($_GET['example2'])) {
            foreach ($_GET['example2'] as $value) {
            echo h($value);
            }
        }
        ?>
        <form method="get" action="selectmenu.php">
            <br>선택메뉴
            <select name="example">
                <option value="샘플 1-1">샘플 1-1</option>
                <option value="샘플 1-2">샘플 1-2</option>
            </select>
            <br>선택메뉴
            <select name="example1">
                선택메뉴
                <option value="샘플 2-1">샘플 1</option>
                <option value="샘플 2-2" selected>샘플 2</option>
            </select>
            <br>
            선택메뉴
            <select name="example2[]" multiple>
                선택메뉴
                <option value="샘플 3-1">샘플 1</option>
                <option value="샘플 3-2" selected>샘플 2</option>
                <option value="샘플 3-3" selected>샘플 3</option>
            </select>
            <br><input type="submit">
        </form>
    </body>
</html>
