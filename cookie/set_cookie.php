<?php
$message = "헬로";

$result = setcookie("message", $message);
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
        if($result) {
            echo "쿠키를 저장했습니다.", "<hr>";
            echo '<a href="check_cookie.php">쿠키를 확인하는 페이지로</a>';
        }else {
            echo '<span class="error">쿠키 저장에 오류가 발생했습니다. </span>, <br>';
        }
        ?>
    </body>
</html>
