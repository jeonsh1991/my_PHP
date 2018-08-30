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
        $valuelist = [5, -3, 12, 6, 9];
        $sum = 0;
        
        foreach($valuelist as $value){
            if($value>0) { //양수만 더한다.
                $sum += $value;
            }
        }
        echo "양의 값 합계는 {$sum}입니다.";
        ?>
    </body>
</html>
