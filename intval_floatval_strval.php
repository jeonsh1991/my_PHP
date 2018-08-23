<?php
$a = 123;

$b = '321';

echo'$a의 유형: '.gettype($a).'<br>';
echo'$b의 유형: '.gettype($b).'<br><br>';

$a = strval($a);
$b = Intval($b);

echo'$a의 유형: '.gettype($a).'<br>';
echo'$b의 유형: '.gettype($b).'<br><br>';

$a = (int)$a;
$b = (string)$b;

echo'$a의 유형: '.gettype($a).'<br>';
echo'$b의 유형: '.gettype($b).'<br><br>';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

