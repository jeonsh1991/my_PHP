<?php
$nameList = ["이순신", "신사임당", "율곡이이", "장영실"];
$pattern = "/이/";

$result = preg_grep($pattern, $nameList);
echo "해당 ", count($result), "건<br>";
foreach($result as $value) {
    echo $value, "<br>";
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

