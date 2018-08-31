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
        echo '텍스트 영역1 <cols=50, rows=3> : ';
        if (isset($_POST['example'])) {
            echo nl2br(h($_POST['example']), false);
        }
        echo '<br>텍스트 영역2 <cols=50, rows=3 maxlength=30> : ';
        if (isset($_POST['example1'])) {
            echo nl2br(h($_POST['example1']), false);
        }
        ?>
        
        <form method="post" action="textArea.php">
            텍스트 영역1 (cols="50" rows="3")
            <textarea name="example" cols="50" rows="3">샘플1</textarea>
            <br>텍스트 영역2 (cols="50" rows="3" maxlength="30")
            <textarea name="example1" cols="50" rows="3" maxlength="30">샘플2</textarea>
            <br><input type="submit" value="전송">
        </form>
    </body>
</html>
