<?php
$nameList = ["유시진", "Sam Jones", "강모연"];
function nameCheck($name) {
    global $nameList;
    if(in_array($name, $nameList)) {
        echo $name,'은 멤버입니다.';
    }else {
        echo $name,'은 멤버가 아닙니다.';
    }
}
echo nameCheck("유시진"), "<br>";
echo nameCheck("강"), "<br>";
echo nameCheck("Sam Jones"), "<br>";
echo nameCheck("sam jones"), "<br>";
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

