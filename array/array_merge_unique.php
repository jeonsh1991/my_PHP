<?php
$a = ["green", "red", "blue"];
$b = ["blue", "pink", "yellow"];
$c = ["pink", "white"];

$all = array_merge($a, $b, $c);
$unique = array_unique($all);
print_r($all);
print_r($unique);
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

