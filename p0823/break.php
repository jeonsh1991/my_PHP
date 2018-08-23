<?php
$list = array(20, -32, 50, -5, 40);
$count = count($list);
$sum = 0;
$sum2 = 0;
for($i=0; $i<$count; $i++){
    $value = $list[$i];
    if($value < 0) {
        $sum = "음수 {$value}가 포함되어 있어 {$i}번째에 중단";
        break;
    }else {
        $sum2 += $value;
    }
}
echo "합계 : $sum2<br> $sum ";
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

