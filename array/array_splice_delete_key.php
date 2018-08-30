<?php
$myArray = ["a" => 10, "b" => 20, "c" => 30, "d" => 40, "e" => 50];

$removed = array_splice( $myArray, 1, 2);
echo '실행 후 : $myArray';
print_r($myArray);
echo '<br>반환 : $removed';
print_r($removed);
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

