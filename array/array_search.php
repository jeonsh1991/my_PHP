<?php
$nameList = ['m01' => '홍길동', 'm02'=>'이몽룡', 'w01'=>'콩쥐', 'w02'=>'팥쥐'];
$ageList = ['m01'=>34, 'm02'=>32, 'w01'=>28, 'w02'=>25];

function getAge($name) {
    global $nameList;
    global $ageList;
    
    $key = array_search($name, $nameList); // 배열안의 $name밸류값을 가진 key를 가져온다. 없으면 false
    if ($key !== false) {
        $age = $ageList[$key]; //ageList배열에 $key키의 밸류를 가져온다.
        echo "{$name}씨는 {$age}세입니다.";
    }else {
        echo "[{$name}]는 멤버가 아닙니다.";
    }
}
echo getAge("콩쥐"), "<br>";
echo getAge("홍길동"), "<br>";
echo getAge("가나다"), "<br>";
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

