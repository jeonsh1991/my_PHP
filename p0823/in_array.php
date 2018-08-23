<?php
$numArray = array();

while(count($numArray)<5) {
    $num = mt_rand(1,30);
    if(!in_array($num, $numArray)) { // in_array(값,어레이리스트이름) 어레이안에 들어있는지 확인.
        array_push($numArray,$num);
        //array_push(어레이이름, 넣을값)
    }
}
print_r($numArray);
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

