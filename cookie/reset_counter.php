<?php 
$result1 = setcookie('visitedLog[counter]', "", time()-3600);
$result2 = setcookie('visitedLog[time]', "", time()-3600);
$result = ($result1 && $result2);
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
        if($result) {
            echo '방문 로그의 쿠키를 파기했습니다.', '<hr>';
            echo '<a href="page1.php">Page1로 돌아간다</a>';
        }else {
            echo '<span class="error">쿠키 파기에 오류가 발생했습니다.</span>';
        }
        ?>
    </body>
</html>
