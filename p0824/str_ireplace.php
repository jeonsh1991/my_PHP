<?php
$search = array("p", "e");
$subject = "a piece of the apple pie";
$result = str_ireplace( $search, "?", $subject, $count );
echo "바꾸기 전 : {$subject}", "<br>";
echo "바꾼 후 : {$result} <br>";
echo "개수 : ",$count,"<br>";


$search = ["김과장", "35세"];
$replace = ["A", "x세"];

$subject = "당신은 김과장입니다. 김과장은(는) 35세 남성입니다.";
$result = str_replace( $search, $replace, $subject);
echo "바꾸기 전 : ", $subject,"<br>";
echo "바꾼 후 :", $result;


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

