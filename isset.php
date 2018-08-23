<?php
$a = 'ABC';
$b = null;
$c['a'] =123;

if(isset($a)) {
    echo '$a는 설정되어 있습니다.<br>';
}else {
    echo '$a는 설정되어 있지 않습니다.<br>';
}
if(isset($b)) {
    echo '$b는 설정되어 있습니다.<br>';
}else {
    echo '$b는 설정되어 있지 않습니다.<br>';
}
if(isset($c['a'])) {
    echo "{$c['a']}는 설정되어 있습니다.<br>";
}else {
    echo '$c[\'a\']는 설정되어 있지 않습니다.<br>';
}
if(isset($c['b'])) {
    echo '$c[\'b\']는 설정되어 있습니다.<br>';
}else {
    echo '$c[\'b\']는 설정되어 있지 않습니다.<br>';
}
if(isset($d)) {
    echo '$d는 설정되어 있습니다.<br>';
}else {
    echo '$d는 설정되어 있지 않습니다.<br>';
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

