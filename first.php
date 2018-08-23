<?php
$name = 'PHP 프로그래밍';

$Name = '대소문자 구별 변수';

echo '서적명: '.$name.'<br>';
echo "서적명: {$Name}\n<br>";
echo '서적명: {$Name}\n<br>';

$format = '서적명: %s %s<br>';
echo sprintf($format, $name, $Name);

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

