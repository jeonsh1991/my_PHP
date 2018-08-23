<?php
$a=123;

$b='321';

echo'$a의 유형: '.gettype($a).'<br>';
echo'$b의 유형: '.gettype($b).'<br>';

if (is_int($a)) {
    echo '$a는 정수형입니다<br>';
}else {
    echo '$a는 정수형이 아닙니다<br>';
}
if(is_string($b)) {
    echo '$b는 문자형입니다.';
}else {
    echo '$b는 문자형이 아닙니다.';
}

echo '<pre>';
var_dump($a);
var_dump($b);
echo'</pre>';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

