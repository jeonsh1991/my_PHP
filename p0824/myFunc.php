<?php
function myFunc() {
    //모든인수
    $allargs = func_get_args();
    //인수 값의 합계
    $total = array_sum($allargs);
    //인수의 개수
    $numArgs = func_num_args();
    $average = $total/$numArgs;
    //
    $lastValue = func_get_arg($numArgs-1);
    
    
    echo "합계 : ", $total, "<br>";
    echo "평균 : ", $average,"<br>";
    echo "마지막 점수 :" , $lastValue;
}

myFunc(43,67,55,75);
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

