<?php
require_once("h.php");
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
        // put your code here
        echo "쿠키를 확인했습니다.","<br>";
        if(isset($_COOKIE["message"])) {
            $message = $_COOKIE["message"];
            echo "쿠키 값 :", h($message), "<hr>";
            echo '<a href="delete_cookie.php">쿠키를 삭제한다</a>';
        }else {
            echo "쿠키는 없습니다.","<hr>";
            echo '<a href="set_cookie.php">쿠키를 설정하는 페이지로</a>';
        }
        ?>
    </body>
</html>
