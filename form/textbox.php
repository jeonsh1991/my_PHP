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
        require_once ('h.php');
        echo '결과<br>';
        echo '텍스트 상자 (초기 값과 autofucus 속성을 지정) : ';
        if(isset($_POST['example'])){
            echo h($_POST['example']);
        }
        echo '<br>텍스트 상자 (초기 값과 disabled 속성을 지정) : ';
        if(isset($_POST['example2'])){
            echo h($_POST['example2']);
        }
        echo '<br>텍스트 상자 (초기 값과 readonly 속성을 지정) : ';
        if(isset($_POST['example3'])){
            echo h($_POST['example3']);
        }
       /* echo '<br>텍스트 상자 (size속성에 10을 지정) : ';
        if (isset($_POST['example'])) {
            echo h($_POST['example']);
        }*/
        ?>
            <form method="post" action="textbox.php">
                텍스트 상자 (초기 값과 autofucus 속성을 지정) : 
                <input type="text" name="example" placeholder="샘플" autofocus>
                <br>텍스트 상자 (초기 값과 disabled 속성을 지정) :     
                <input type="text" name="example2" placeholder="샘플" disabled>
                <br>텍스트 상자 (초기 값과 readonly 속성을 지정) :     
                <input type="text" name="example3" placeholder="샘플" readonly>
                <br><input type="submit" value="전송">
            </form>
        </div>
    </body>
</html>
