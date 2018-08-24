<?php
function hello ($who) {
    echo "{$who}씨, 안녕하세요";
}

function bye($who) {
    echo "{$who}씨, 잘 가요!";
}


$msg = "bye"; 
if(function_exists($msg)) {
    $msg("승현");
}


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

