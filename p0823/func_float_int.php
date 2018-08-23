<?php

function twice(float $var):int {
    $var *= 2;
    return $var;
}

$num = 10.8;
$result = twice($num);
echo " {$num}의 2배는", $result;

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>