<?php
$pattern = "/광.+왕/u";
$subject = <<< "names"
광해
광개토대왕
세종대왕
동명성왕
names;
$result = preg_match( $pattern, $subject, $matches);
if($result == false) {
    echo "오류";
}else if($result == 0) {
    echo " 일치한 값이 없습니다.";
}
else {
    echo "[",$pattern[0],"]이 발견되었습니다.";
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
