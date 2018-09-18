<?php
require_once("h.php");

if(isset($_COOKIE["visitedLog"])) {
    $logdata = $_COOKIE["visitedLog"];
    $counter = $logdata["counter"];
    $time = $logdata["time"];
    date_default_timezone_set("Asia/Seoul");
    $lasttme = date("Y년n월j일 A h시i분", $time);
}else {
    $counter = 0;
    $lasttme = "이번이 첫 방문";
}
$result1 = setcookie('visitedLog[counter]', ++$counter, time()+60*60*24);
$result2 = setcookie('visitedLog[time]', time(), time()+60*60*24);
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
        // put your code here
        if($result) {
            echo "이 페이지의 방문은 ", h($counter), "번째입니다.", "<br>";
            echo "이전 방문 : ", h($lasttme), "<hr>";
            echo '<a href="page2.php">페이지를 이동한다</a>', "<br>";
            echo '(<a href="reset_counter.php">초기화한다</a>)';
        }else {
            echo '<span class="error"> 쿠키를 사용할 수 없습니다. </span>';
        }
        ?>
    </body>
</html>
