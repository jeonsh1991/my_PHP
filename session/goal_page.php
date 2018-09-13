<?php 
    session_start();
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
        if(isset($_SESSION["coupon"])) {
            $coupon = $_SESSION["coupon"];
            $couponList = ["ABC123", "XYZ999"];
            
            if(in_array($coupon, $couponList)) {
                echo h($coupon), "는 사용할 수 있는 쿠폰 코드입니다.";
            }else {
                echo h($coupon), "는 사용할 수 없는 쿠폰 코드입니다.";
            }
        }else {
            echo "세션 오류입니다.";
        }
        
        function h($var) {
            if (is_array($var)) {
                return array_map('h', $var);
            }else {
                return htmlspecialchars($var, ENT_QUOTES, 'UTF-8');
            }
        }
        ?>
    </body>
</html>
