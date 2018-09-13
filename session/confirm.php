<?php 
    session_start();
?>
<?php 
    if(isset($_POST["name"])) {
        $_SESSION['name'] = $_POST['name'];
    }
    if (isset($_POST['words'])) {
        $_SESSION['words'] = $_POST['words'];
    }
    
    $error = [];
    if(empty($_SESSION['name'])) {
        $error[] = "이름을 입력해주세요.";
    }else {
        $name = trim($_SESSION['name']);
    }
    if(empty($_SESSION['words'])) {
        $error[] = "좋아하는 단어을 입력해주세요.";
    }else {
        $words = trim($_SESSION['words']);
    }
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
        <form>
        <?php
        if(count($error)>0) { ?>
        <span class="error"><?php echo implode('<br>', $error); ?></span><br>
        <span>
            <input type="button" value="돌아가기" onclick="location.href='input.html'"> 
            <input type="button" value="naver" onclick="location.href='http://naver.com'"> 
            <input type="button" value="daum" onclick="window.open('http://www.daum.net')"> 
        </span>
        ?>
        <?php } else { ?>
        <span>
            이름 : <?php echo h($name); ?> <br>
            좋아하는 단어 : <?php echo h($words); ?> <br>
            <input type="button" value="돌아가기" onclick="location.href='input.html'">
            <input type="button" value="송신한다" onclick="location.href='thankyou.php'">
        </span>
        <?php } ?>
        <?php
        function h($var) {
            if(is_array($var)) {
                return array_map('h', $var);
            }else {
                return htmlspecialchars($var, ENT_QUOTES, 'UTF-8');
            }
        }?>
        </form>
    </body>
</html>
