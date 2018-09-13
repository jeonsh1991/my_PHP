<?php 
session_start();
$error = [];

if(!empty($_SESSION['name']) && !empty($_SESSION['words'])) {
    $name = $_SESSION['name'];
    $words = $_SESSION['words'];
}else {
    $error[] ="세션 오류입니다.";
}
session_destroy();
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
        <style>
            body {
                opacity: 0;
                animation: ani1 2s ease-in-out 0s infinite;
            }
            @keyframes ani1 {
                0%{
                    opacity: 0;
                }
                50% {
                    opacity: 1;
                }
                100% {
                    opacity: 0;
                }
            }
            </style>
    </head>
    <body>
        <?php
        if(count($error)>0) { ?>
        <span class="error"><?php echo implode('<br>', $error); ?> </span><br>
        <a href="input.html">첫 페이지로 돌아간다</a>
        <?php }else { ?>
        <span>
            다음과 같이 받았습니다. 고맙습니다.</span>
            <hr>
            <span>
                이름 : <?php echo h($name); ?><br>
                좋아하는 단어 : <?php echo h($words); ?> <br>
                <a href="input.html">첫 페이지로 돌아가기</a>
            </span>
        <?php } ?>
            <?php function h($var) {
                if (is_array($var)) {
                    return array_map('h', $var);
                }else {
                    return htmlspecialchars($var, ENT_QUOTES, 'UTF-8');
                }
            }
            ?>
    </body>
</html>
