<?php
require_once("h.php");

if(isset($_COOKIE["visitedCount"])) {
    $visitedCount = $_COOKIE["visitedCount"];
}else {
    $visitedCount=0;
}
$result = setcookie("visitedCount", ++$visitedCount, time()+60*5);
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
            echo "이 페이지의 방문은 ", h($visitedCount), "번째입니다. ", "<hr>";
            echo '<a href="page2.php">페이지를 이동한다</a>', "<br>";
            echo '(<a href="reset_counter.php">초기화한다</a>';
        }else {
        }
        ?>
    </body>
</html>
