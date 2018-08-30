<?php
$myArray = ["a", "b", "c", "d", "e"];
$replace = ["X", "Y", "Z"];
$removed = array_splice($myArray, 1, 3, $replace);
echo '실행 후 : $mYArray', "<br>";
print_r($myArray);
echo '<br>반환 :  $removed';
print_r($removed);
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

