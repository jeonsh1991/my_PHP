<?php
function pickout($target,$str) {
    $result = mb_stristr($target, $str);
    if($result === FALSE) {
        echo $str,"은 ", $target,"에 포함되지 않습니다.<br>";
    }
    else{
        echo $str,"는 ", $target,"의 ",$result,"에 있습니다.<br>";
    }
}

pickout("서울시마포구합정동", "마포");
pickout("서울시마포구합정동", "부산");
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

