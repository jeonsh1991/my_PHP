<?php
$data = [23, 16, 8, 42, 15, 4];

sort($data); //오름차순
print_r($data);
rsort($data); //내림차순
print_r($data);
$data1 = ["S" => 23, "M" => 36, "L" => 29];
asort($data1);
print_r($data1);
arsort($data1);
print_r($data1);


for($i=0; $i<5; $i++){
echo "<br>";
shuffle($data);
print_r($data);
}
echo "<br><br>";
$result = array_reverse($data); //배열 거꾸로
print_r($result);
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

